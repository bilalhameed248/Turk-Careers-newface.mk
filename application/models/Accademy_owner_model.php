<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accademy_owner_model extends CI_model 
{
	function register($data,$dir)
	{
		$randomString=generate_random_string(6);

		$data=array(
		//'user_id'=>$data['id'];
        'acc_owner_name' => $data['owner_name'],
        'acc_email' => $data['owner_email'],
        'phone_number' => $data['phone_number'],
        'acc_pass'=>$randomString,
        'cv_path'  =>$dir
		);

		$isinsert=$this->db->insert('accademy_owners', $data);
		$insert_id = $this->db->insert_id();

		$random_a_String=generate_random_string(5);
        $random_a_String=$random_a_String.$insert_id;
        $random_a_String=$random_a_String.generate_random_string(5);

		$data3['activation_code']=$random_a_String;
        $this->db->where('id', $insert_id);
		$this->db->update('accademy_owners', $data3);

        $activation_link="https://www.newface.mk/Accademy_owner/activate_academy_owner/".$random_a_String;

		send_pass_email($randomString, $data['acc_email'], $activation_link);

		if($isinsert)
		{
			return true;
		}	
	}
	function is_email_reg($email)
	{
		$query = $this->db->get_where('accademy_owners', array('acc_email' => $email));
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
	function accademy_owner_login($data)
	{
		$email=$data['email'];
		$password=$data['password'];
		$query = $this->db->get_where('accademy_owners ', array('acc_email' => $email,'acc_pass' =>$password, 'status' => '1'));
		$count=$query->num_rows();
		if($count>0)
		{
			$info=$query->row();
			$acc_owner_id=$info->id;
			$acc_owner_name=$info->acc_owner_name;
			$acc_email=$info->acc_email;
			$userdata = array(
	        'acc_owner_id' =>$acc_owner_id,
	        'acc_owner_name'     => $acc_owner_name,
	        'acc_email'     => $acc_email,
	        'acc_logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			return true;
		}
		else
		{
			return false;
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('token');
		return true;
	}
	function add_new_academy($data,$dir)
	{
		$data=array(
		//'user_id'=>$data['id'];
        'academy_name' => $data['academy_name'],
        'academy_desc' => $data['academy_description'],
        'academy_address' => $data['academy_address'],
        'academy_website_url' => $data['academy_website_url'],
        'academy_owner_id'=>$_SESSION['acc_owner_id'],
        'academy_logo' => $dir
		);

		$isinsert=$this->db->insert('academies', $data);
		if($isinsert)
		{
			return true;
		}
	}
	function get_specific_academies($id) // here $id means academy owner id.
	{
		$this->db->select('*');
		$this->db->from('academies');
		$this->db->where('academies.academy_owner_id',$id);
		$this->db->join('accademy_owners', 'accademy_owners.id = academies.academy_owner_id');
		$query = $this->db->get()->result_array();
		return $query;
	}
	function get_all_academies_data($count=FALSE,$title='')
	{
		$this->db->select('*,academies.id as acc_id');
		$this->db->from('academies');
		if($title!='' && $count!=FALSE)
		{
			$this->db->like('academy_name',$title);
		}
		$this->db->join('accademy_owners', 'accademy_owners.id = academies.academy_owner_id');
        $query = $this->db->get();
		if($count)
        {
            return $query->num_rows();
        }
		else
        {
            return $query->result_array();
        }


	}
	function update_academy($data,$id)   //employer profile
	{
		
		$this->db->where('id', $id);
		$done=$this->db->update('academies', $data);
		return $done;
	}
	function update_profile($data,$id)
	{
		$this->db->where('id', $id);
		$done=$this->db->update('accademy_owners', $data);
		return $done;
	}
	function get_by_activation_code_ao($activation_code)
    {
        $query = $this->db->get_where('accademy_owners', array('activation_code' => $activation_code));
		return $query->row();
    }
}