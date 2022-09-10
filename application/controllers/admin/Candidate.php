<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {
	function __construct() {
        parent::__construct();
        
        $this->load->model('user');
    }
	
	public function index()   //to view all candidates
	{
		$data['candidates']=$this->user->get();

		$this->load->view('admin/candidates/all',$data);
	}
	public function makeinactive($id)
	{
		
		$data=array('status'=>0);

		$this->user->update_profile($data,$id);
		redirect(base_url().'admin/candidate');
	}
	public function makeactive($id)
	{
		$data=array('status'=>1);
		
		$this->user->update_profile($data,$id);
		redirect(base_url().'admin/candidate');
	}
 }
