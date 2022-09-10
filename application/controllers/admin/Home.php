<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('accademy_owner_model');
        $this->load->model('jobs_offered');

    }
	
	public function index()
	{
        if(!$this->session->has_userdata('admin_logged_in'))
        {
            redirect(base_url().'admin/home/login');
        }
        $data['num_cand']=$this->user->get('',TRUE);//True means we need count
        $data['num_employers']=$this->jobs_offered->getJobOwnerData('',TRUE);//True means we need count
        $data['num_academies']=$this->accademy_owner_model->get_all_academies_data(TRUE);//True means we need count
        $data['num_jobs']=$this->jobs_offered->getjobs($title='',$salary=NULL,$city="",$isowner=FALSE,$count=TRUE);//True means we need count

		$this->load->view('admin/index',$data);
	}
	public function login()
    {
        if(isset($_POST['submit']))
        {
            $email=$this->input->post('email');
            $pass=$this->input->post('password');
            $login=$this->user->admin_chklogin($email,$pass);
            if($login)
            {
                redirect(base_url().'admin/home');
            }
            else
            {
                $this->session->set_flashdata('message', 'Incorrect User Name Or Password');
                redirect(base_url().'admin/home/login');
            }
        }
        $this->load->view('admin/login');
    }
    public function logout()
    {
        $logout=$this->user->logout();
        if($logout)
        {
            redirect(base_url().'home');
        }
    }
}
