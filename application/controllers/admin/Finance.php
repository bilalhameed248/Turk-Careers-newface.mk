<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('finance_model');
    }

    function index()
    {
        $data['payments']=$this->finance_model->get_cand_finance();
        $this->load->view('admin/finance/all_cand',$data);
    }
    function job_owner()
    {
    	$data['payments']=$this->finance_model->get_job_owners_finance();
        $this->load->view('admin/finance/job_owner',$data);
    }
    function accademy_owner()
    {
    	$data['payments']=$this->finance_model->get_accademy_owner_finance();
        $this->load->view('admin/finance/accademy_owner',$data);
    }
    function searchCandByDate()
    {
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');
        $data['payments']=$this->finance_model->get_cand_Data_Between_Dates($start_date, $end_date);
    	$this->load->view('admin/finance/all_cand',$data);
    }
    function searchJoByDate()
    {
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');
        $data['payments']=$this->finance_model->get_Jo_Data_Between_Dates($start_date, $end_date);
    	$this->load->view('admin/finance/job_owner',$data);
    }
    function searchAoByDate()
    {
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');
        $data['payments']=$this->finance_model->get_Ao_Data_Between_Dates($start_date, $end_date);
    	$this->load->view('admin/finance/accademy_owner',$data);
    }
}
