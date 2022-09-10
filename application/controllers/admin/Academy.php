<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academy extends CI_Controller {
	function __construct() {
        parent::__construct();
        
        $this->load->model('accademy_owner_model');
    }
	
	public function index()   //to view all candidates
	{
		$data['academies']=$this->accademy_owner_model->get_all_academies_data();
		
		$this->load->view('admin/academies/all',$data);
	}
	public function makeinactive($id)
	{
		
		$data=array('status'=>0);
		
		$this->accademy_owner_model->update_academy($data,$id);
		redirect(base_url().'admin/academy');
	}
	public function makeactive($id)
	{
		$data=array('status'=>1);
		
		$this->accademy_owner_model->update_academy($data,$id);
		redirect(base_url().'admin/academy');
	}
 }
