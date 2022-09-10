<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_model
{
    function add_activity($roleid,$userid,$activity)
    {
        $data=array('activity_desc'=>$activity,'role_id'=>$roleid,'user_id'=>$userid);
        $count=$this->db->get_where('activities',array('role_id'=>$roleid,'user_id'=>$userid))->num_rows();
        if($count>0)
        {
            $this->db->where('role_id', $roleid);
            $this->db->where('user_id', $userid);
            $query=$this->db->update('activities', $data);
        }
        else
        {
            $query=$this->db->insert('activities', $data);
        }
        return $query;

    }
     function payment($data)
    {
        return $this->db->insert('finance',$data);
    }
    function getroles(){
        $query = $this->db->get_where('job_roles', array('deleted_at' => NULL));
        return $query->result(); 
    }

}