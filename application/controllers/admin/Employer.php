<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends CI_Controller {
	function __construct() {
        parent::__construct();
        
        $this->load->model('jobs_offered');
    }
	
	public function index()   //to view all candidates
	{
        if(!$this->session->has_userdata('admin_logged_in'))
        {
            redirect(base_url().'admin/home/login');
            exit();
        }
		$data['owners']=$this->jobs_offered->getJobOwnerData();
		$this->load->view('admin/employers/all',$data);
	}
	public function makeinactive($id)
	{
		
		$data=array('status'=>0);
		
		$this->jobs_offered->update_profile($data,$id);
		redirect(base_url().'admin/employer');
	}
	public function makeactive($id)
	{
		$data=array('status'=>1);
		
		$this->jobs_offered->update_profile($data,$id);
		redirect(base_url().'admin/employer');
	}
 }
