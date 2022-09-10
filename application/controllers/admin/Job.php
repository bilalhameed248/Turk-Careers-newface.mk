<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {
	function __construct() {
        parent::__construct();
        
        $this->load->model('jobs_offered');
        //$this->load->model('Settings_model');
    }
	
	public function index()   //to view all candidates
	{
		$data['jobs']=$this->jobs_offered->getjobs();
		
		$this->load->view('admin/jobs/all',$data);
	}
	public function makeinactive($id)
	{
		
		$data=array('status'=>0);
		
		$this->jobs_offered->update_job($data,$id);
		redirect(base_url().'admin/job');
	}
	public function makeactive($id)
	{
		$data=array('status'=>1);
		
		$this->jobs_offered->update_job($data,$id);
		redirect(base_url().'admin/job');
	}
 }
