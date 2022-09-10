<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Markiting_model extends CI_model 
{
	function is_email_reg($email)
	{
		$query = $this->db->get_where('markiting_user', array('email' => $email));
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
	function register($data)
	{
        $this->db->trans_begin();
        $randomString=generate_random_string(6);
        $data=array(
            //'user_id'=>$data['id'];
            'fulll_name' => $data['markiter_name'],
            'email' => $data['markiter_email'],
            'password'=>$randomString,
            'phone_number' => $data['phone_number'],
			'address' => $data['markiter_address']
        );

        $this->db->insert('markiting_user', $data);
        $insert_id = $this->db->insert_id();
        $data2=array(
            'user_id'=>$insert_id,
            'role_id'=>4
        );
        $this->db->insert('newsfeed_users', $data2);

        $random_a_String=generate_random_string(5);
        $random_a_String=$random_a_String.$insert_id;
        $random_a_String=$random_a_String.generate_random_string(5);

		$data3['activation_code']=$random_a_String;
        $this->db->where('markiter_id', $insert_id);
		$this->db->update('markiting_user', $data3);

        $activation_link="https://www.newface.mk/markiting/activate_markiter/".$random_a_String;

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
	function checklogin($data)
	{
		//print_r($data);
		$email=$data['email'];
		$password=$data['password'];
		$query = $this->db->get_where('markiting_user', array('email' => $email,'password' =>$password, 'status' => '1'));
		$count=$query->num_rows();
		if($count>0)
		{
			$info=$query->result();
			$full_name=$info[0]->fulll_name;
			$user_id=$info[0]->markiter_id;
			$markiter_data = array(
		        'user_id' =>$user_id,
		        'email'     => $email,
		        'full_name'     => $full_name,
		        'logged_in' => TRUE
				);
			$this->session->set_userdata($markiter_data);
			return true;
		}
		else
		{
			return false;
		}
	}
	function get_by_activation_code($activation_code)
    {
        $query = $this->db->get_where('markiting_user', array('activation_code' => $activation_code));
		return $query->row();
    }
    function update_profile($data,$id)
	{
		$this->db->where('markiter_id', $id);
		$done=$this->db->update('markiting_user', $data);
		return $done;
	}
}
?>