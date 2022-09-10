<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_model {

	
	function checklogin($data)
	{
		//print_r($data);
		$email=$data['email'];
		$password=$data['password'];
		$query = $this->db->get_where('users', array('email' => $email,'password' =>$password, 'status' => '1'));
		$count=$query->num_rows();
		if($count>0)
		{
			$info=$query->result();
			$fname=$info[0]->fname;
			$lname=$info[0]->lname;
			$user_id=$info[0]->id;
			$userdata = array(
        'user_id' =>$user_id,
        'email'     => $email,
        'fname'     => $fname,
        'lname'     => $lname,
        'logged_in' => TRUE
		);
		$this->session->set_userdata($userdata);
		return true;
		}
		else
		{
			return false;
		}
	}
	function employer_login($data)
	{

		$email=$data['email'];
		$password=$data['password'];
		$query = $this->db->get_where('job_owners', array('owner_email' => $email,'password' =>$password, 'status' => '1'));
		$count=$query->num_rows();
		if($count>0)
		{
			$info=$query->row();
			$owner_name=$info->owner_name;
			
			$owner_id=$info->id;
			$userdata = array(
	        'owner_id' =>$owner_id,
	        'owner_email'     => $email,
	        'owner_name'     => $owner_name,
	        
	        'owner_logged_in' => TRUE
			);
			$array_items = array('user_id', 'email','fname','lname','logged_in');

			$this->session->unset_userdata($array_items);
			$this->session->set_userdata($userdata);
			return true;
		}
		else
		{
			return false;
		}
	}
	function social_login($data)
	{
		$email=$data['email'];
		$password=$data['password'];
		$query = $this->db->get_where('users', array('email' => $email));
		
		$count=$query->num_rows();
		if($count>0)
		{
			$info=$query->result();
			$fname=$info[0]->fname;
			$lname=$info[0]->lname;
			$user_id=$info[0]->id;
			$userdata = array(
	        'user_id' =>$user_id,
	        'email'     => $email,
	        'fname'     => $fname,
	        'lname'     => $lname,
	        'logged_in' => TRUE
		);

		$this->session->set_userdata($userdata);
		// print_r($_SESSION);
		// exit();
		return true;

			
		}
		else
		{
			return false;
		}
		
	}
	function logout()
	{
		//$this->session->unset_userdata('');
		$this->session->sess_destroy();
		$this->session->unset_userdata('token');
		return true;

	}
	function register($data,$dir)
	{
		
        $this->db->trans_begin();

        $randomString=generate_random_string(6);

        $data=array(
            //'user_id'=>$data['id'];
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
			'website' => $data['website'],
			'job_search_status'=>$data['job_search_status'],
			'job_search_type'=>$data['job_search_type'],
            'password'=>$randomString,
            'phone_number' => $data['phone'],
			'linkedin_profile' => $data['linked_profile'],
			'job_role_id' => $data['role'],
			
            'cv_path'  =>$dir
        );

        $this->db->insert('users', $data);
        $insert_id = $this->db->insert_id();
        $data2=array(
            'user_id'=>$insert_id,
            'role_id'=>1
        );
        $this->db->insert('newsfeed_users', $data2);

        $random_a_String=generate_random_string(5);
        $random_a_String=$random_a_String.$insert_id;
        $random_a_String=$random_a_String.generate_random_string(5);

		$data3['activation_code']=$random_a_String;
        $this->db->where('id', $insert_id);
		$this->db->update('users', $data3);

        $activation_link="https://www.newface.mk/home/activate_candidate/".$random_a_String;

        send_pass_email($data['password'] ,$data['email'], $activation_link);
        if( $this->db->trans_status() === FALSE )
        {
            $this->db->trans_complete();
            return( 0 );
        }
        else
        {
            $this->db->trans_complete();
            return( $insert_id );
        }
	}
	function getkills($count=FALSE,$id)
	{
		$query = $this->db->get_where('users', array('id' => $id,'skills!='=>NULL));
		if($count==TRUE)
		{
			return $query->num_rows();
		}
	}
	function social_register($data)
	{
		$name=explode(" ",$data['name']);
		$fname=$name[0];
		$lname=$name[1];
		$data=array(
        'fname' => $fname,
        'lname' => $lname,
        'email' => $data['email'],
		);

		$isinsert=$this->db->insert('users', $data);
		return $isinsert;
	}
	function is_email_reg($email)
	{
		$query = $this->db->get_where('users', array('email' => $email));
		$count=$query->num_rows();
		if($count>0)
		{
			return true;	
		}
		else
		{
			return false;
		}
	}
	function get($id='',$count=FALSE,$type=1) //get candidates. $count=true means we need total num of users
	{
		
        if ($type==1) {
            $this->db->select('*,users.id as user_id,users.status as cand_status,activities.activity_desc');
            $this->db->from('users');
			if($id!='')
			{
				$this->db->where('users.id',$id);
			}
			$this->db->join('subscription', 'subscription.id = users.subscription_id');
			$this->db->join('activities', 'activities.user_id = users.id AND activities.role_id=1' );
        }
		elseif($type=2)
		{
			$this->db->select('*,job_owners.id as user_id');
            $this->db->from('job_owners');
			if($id!='')
			{
				$this->db->where('job_owners.id',$id);
			}
			$this->db->join('subscription', 'subscription.id = job_owners.subscription_id');
			$this->db->join('activities', 'activities.user_id = job_owners.id AND activities.role_id=2' );
		}
			
		
		
		
		$query = $this->db->get();
		if($id!='')
		{

			return $query->row();
		}
		elseif($count)
        {
            return $query->num_rows();
        }
		else
        {
            return $query->result();
        }
		
	}
	
	function getowner($id)
	{
		$query = $this->db->get_where('job_owners', array('id' => $id));
		return $query->row();

	}
	function degrees_detail($id)
	{
		$query = $this->db->get_where('degrees', array('user_id' => $id));
		$row=$query->result();
		if($row)
		{
			return $row[0];
		}
		else
		{
			$row=array("title"=>"","institute"=>"","percentage"=>"");
			$object = (object)$row;
			return $object;
		}
		
	}
	function user_institutes($id,$count=TRUE)
	{
		$query = $this->db->get_where('user_institutes', array('user_id' => $id));
		if($count==TRUE)
		{
			return $query->num_rows();
		}
		else
		{
			return $query->result();
		}
		
	}
	function update_profile($data,$id)
	{
		
		$this->db->where('id', $id);
		$done=$this->db->update('users', $data);
		return $done;
	}
	function add_follower($data,$id,$loggedin_type)
	{
		
		$this->db->where('id', $id);
		if($loggedin_type==1){
			$followers = $this->db->get('users')->first_row()->followers;
		}
		elseif($loggedin_type==2){
			$followers = $this->db->get('job_owners')->first_row()->followers;
		}
		if($followers==NULL){
			$info=$data;
		}
		else{
			$info=$followers.'/'.$data;
		}
		
		
		//echo $info;
		
		
		$data2=array(
			'followers'=>$info
		);
		$this->db->where('id', $id);
		if($loggedin_type==1){
			$this->db->update('users', $data2);
		}elseif($loggedin_type){
			$this->db->update('job_owners', $data2);
		}
		
		
	}
	function isfollowing($user_id,$to_id=NULL,$user_type,$logged_in_type) 
	{
		
		$this->db->where('id', $user_id); //logged in id
		if($logged_in_type==1){
			
			$followers = $this->db->get('users')->first_row()->followers; //logged in followers
			
		}
		elseif($logged_in_type==2){
			$followers = $this->db->get('job_owners')->first_row()->followers;
			
		}
		$array=explode('/',$followers);
		if($to_id==NULL){
			return $array;
		}
		$find=$user_type.','.$to_id;
		
		if(in_array($find, $array)){
			
			return TRUE;
		}
		else{
			
			return FALSE;
		}
		
	}
	function update_by_email($data,$email)
    {
        $this->db->where('email', $email);
        $done=$this->db->update('users', $data);
        return $done;
    }
    function get_by_activation_code($activation_code)
    {
        $query = $this->db->get_where('users', array('activation_code' => $activation_code));
		return $query->row();
    }
    function get_by_activation_code_jo($activation_code)
    {
        $query = $this->db->get_where('job_owners', array('activation_code' => $activation_code));
		return $query->row();
    }
	function update_institutes($data,$id)
	{
		$this->db->where('id', $data['id']);
		return $this->db->update('user_institutes', $data);
	}
	public function social_register_facebook($userData)
	{
		$data=array(
        'fname' => $userData['fname'],
        'lname' => $userData['lname'],
        'email' => $userData['email'],
        'password'=>$userData['password']
		);
		$isinsert=$this->db->insert('users', $data);
		return $isinsert;
    }

	function add_institutes($data,$id)
	{
		$info=array(
			'institute_name'=>$data['institute_name'],
			'from_date'=>$data['from_date'],
			'to_date'=>$data['to_date'],
			'user_id'=>$id

		);
		return $this->db->insert('user_institutes',$info);
	}
	function insertemployer($data,$dir)
	{
        $this->db->trans_begin();
        $password = generate_random_string(6);
        $data = array(
            'owner_name' => $data['owner_name'],
            'company_name' => $data['company_name'],
            'company_logo' => $dir,
            'owner_email' => $data['owner_email'],
            'company_desc' => $data['company_desc'],
            'phone_number' => $data['phone_number'],
            'company_phone_no' => $data['company_phone_no'],
            'company_address' => $data['company_address'],
            'password' => $password
        );
        $this->db->insert('job_owners', $data);
        $insert_id = $this->db->insert_id();
        $data2=array(
            'user_id'=>$insert_id,
            'role_id'=>2
        );
        $this->db->insert('newsfeed_users', $data2);

        $random_a_String=generate_random_string(5);
        $random_a_String=$random_a_String.$insert_id;
        $random_a_String=$random_a_String.generate_random_string(5);

		$data3['activation_code']=$random_a_String;
        $this->db->where('id', $insert_id);
		$this->db->update('job_owners', $data3);

        $activation_link="https://www.newface.mk/jobs/activate_employee/".$random_a_String;

        send_pass_email($password, $data['owner_email'], $activation_link);
        if( $this->db->trans_status() === FALSE )
        {
            //$this->db->trans_rollback();
            $this->db->trans_complete();
            return( 0 );

        }
        else
        {
            //$this->db->trans_commit();
            $this->db->trans_complete();
            return $insert_id;

        }


	}
	function is_email_reg_employee($email)
	{
		$query = $this->db->get_where('job_owners', array('owner_email' => $email));
		$count=$query->num_rows();
		if($count>0)
		{
			return true;	
		}
		else
		{
			return false;
		}
	}
	function insert_from_cv($data)
	{
		 if($this->db->insert('users', $data))
		 {
		 	$insert_id = $this->db->insert_id();
			 return $insert_id;
		 }
		 else
		 {
		 	return 0;
		 }
		 
	}
	function addinstitutes($data,$user_id)
	{
		foreach($data as $d)
		{
			echo '<br>'.$d->name.'<br>';
			$user_dates=explode("-",$d->dates);
			$info=array(
				'institute_name' =>$d->name,
				'from_date' =>$user_dates[0],
				'to_date' =>$user_dates[1],
				'user_id' =>$user_id
			);
			$this->db->insert('user_institutes', $info);
		}
		return true;
		
	}
	function admin_chklogin($email,$pass)
    {
        $query = $this->db->get_where('admin', array('email' => $email,'password'=>$pass));
        $user=$query->row();
        $rows=$query->num_rows();

        if($rows>0)
        {
            $sessdata = array(
                'admin_name'  => $user->name,
                'admin_email'     => $user->email,
                'admin_logged_in' => TRUE
            );

            $this->session->set_userdata($sessdata);
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    function subscribe_now($data)
    {
        $this->db->insert('user_subscription', $data);
    }
	function search_people($name='')
	{
		$this->db->like("CONCAT(fname,' ',lname)",$name);
		//$this->db->or_like('lname',$name);
		$this->db->or_like('email',$name);
		$this->db->limit(3, 0);
		$query=$this->db->get('users')->result();
		return $query;
	}
	function search_owners($name='')
	{
		$this->db->like("owner_name",$name);
		//$this->db->or_like('lname',$name);
		$this->db->or_like('owner_email',$name);
		$this->db->limit(3, 0);
		$query=$this->db->get('job_owners')->result();
		return $query;
	}
}
