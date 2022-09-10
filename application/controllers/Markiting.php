<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Markiting extends CI_Controller 
{
	function __construct() {
        parent::__construct();
		$this->load->model('Markiting_model');
        $_SESSION['message'] = '';
    }

    public function markiting_signup()
	{
		if(!isset($_POST['submit']))
		{
			$this->load->view('markiting_signup');
		}
		else
		{
			$data=$this->input->post();
			$email=$data['markiter_email'];
			$isreg=$this->Markiting_model->is_email_reg($email);
			if(!$isreg)
			{
				$this->Markiting_model->register($data);
				$this->session->set_flashdata('message_title', 'Password & Activation Link');
				$this->session->set_flashdata('message_detail', 'Password and Activation Link has been sent to your email');
				redirect(base_url().'markiting/markiting_signup');
			}
			else
			{
				$this->session->set_flashdata('message_title', 'Aready Registered');
				$this->session->set_flashdata('error_message_detail', 'Email Aready Registered');
				$this->load->view('markiting_signup');
			}
		}
		
	}
	public function markiting_signin()
	{
		if(!isset($_POST['submit']))
		{
			$this->load->view('markiting_signin');
		}
		else
		{
			$islogedin=$this->Markiting_model->checklogin($_POST);
			if($islogedin)
			{
				print_r("Where To redirect After Login.");
			}
			else
			{
				$this->session->set_flashdata('message_title', 'Invalid Credintial');
				$this->session->set_flashdata('error_message_detail', 'Invalid Username Or Password, OR Account Unactivated');
				redirect(base_url().'markiting/markiting_signin');
			}
		}
		
	}
	public function activate_markiter($activation_code)
	{
		$user=$this->Markiting_model->get_by_activation_code($activation_code);
		$info=array(
			'status' =>1
		);
		$this->Markiting_model->update_profile($info,$user->markiter_id);
		$this->session->set_flashdata('message_title', 'Account Activated');
		$this->session->set_flashdata('message_detail', 'Account Activated Successfully');
		redirect(base_url().'markiting/markiting_signin');
	}
}
?>