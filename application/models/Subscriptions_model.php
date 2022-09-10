<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriptions_model extends CI_model
{
    function get($id='')
    {
        if($id!='')
        {
            $this->db->where('id',$id);
        }

        $query=$this->db->get('subscription');
        if($id!='')
        {
            return $query->row();
        }
        return $query->result();
    }
    function update_pricing($data,$id)   //employer profile
    {

        $this->db->where('id', $id);
        $done=$this->db->update('subscription', $data);
        return $done;
    }
}

