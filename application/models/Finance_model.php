<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance_model extends CI_model
{
    function get_cand_finance()
    {
        // $query = $this->db->get_where('finance', array('deleted_at' => NULL,'role_id' =>1));
        $this->db->select('*');
        $this->db->from('finance');
        $this->db->join('users', 'finance.user_id = users.id');
        $query = $this->db->get();
        return $query->result();
    }
    function get_job_owners_finance()
    {
        $this->db->select('*');
        $this->db->from('finance');
        $this->db->join('job_owners', 'finance.user_id = job_owners.id');
        $query = $this->db->get();
        return $query->result();
    }
    function get_accademy_owner_finance()
    {
        $this->db->select('*');
        $this->db->from('finance');
        $this->db->join('accademy_owners', 'finance.user_id = accademy_owners.id');
        $query = $this->db->get();
        return $query->result();
    }
    function get_cand_Data_Between_Dates($start_date, $end_date)
    {
    	$this->db->select('*');
        $this->db->from('finance');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        $this->db->join('users', 'finance.user_id = users.id');
        $query = $this->db->get();
        return $query->result();
    }
    function get_Jo_Data_Between_Dates($start_date, $end_date)
    {
    	$this->db->select('*');
        $this->db->from('finance');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        $this->db->join('job_owners', 'finance.user_id = job_owners.id');
        $query = $this->db->get();
        return $query->result();
    }
    function get_Ao_Data_Between_Dates($start_date, $end_date)
    {
    	$this->db->select('*');
        $this->db->from('finance');
        $this->db->where('date >=', $start_date);
        $this->db->where('date <=', $end_date);
        $this->db->join('accademy_owners', 'finance.user_id = accademy_owners.id');
        $query = $this->db->get();
        return $query->result();
    }
}