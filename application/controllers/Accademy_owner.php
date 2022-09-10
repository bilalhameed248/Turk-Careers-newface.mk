<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accademy_owner extends CI_Controller 
{
  	function __construct() 
  	{
        parent::__construct();
        $this->load->model('Accademy_owner_model');
    }
    public function index()
    {
      	if(!$_SESSION['acc_owner_id'])
      	{
      		redirect(base_url());
      	}
        $id=$_SESSION['acc_owner_id'];
        $data['academies']=$this->Accademy_owner_model->get_specific_academies($id);
      	$this->load->view('academy_owner_home', $data);
  	}
  	public function insert_academy()
  	{

    		$org_name=$_FILES['academy_logo']['name'];
    		$tmp_name=$_FILES['academy_logo']['tmp_name'];
    		$folder="Acadmies/Logo";
    		$dir=Upload_image($org_name,$tmp_name,$folder);
    		$data = $this->input->post();
    		$check=$this->Accademy_owner_model->add_new_academy($data,$dir);
      	if($check)
      	{
      			redirect(base_url().'accademy_owner/index');
      	}
    }
    public function get_all_academies()
    {
        if(!$_SESSION['acc_owner_id'])
        {
            redirect(base_url());
        }
        $data['academies']=$this->Accademy_owner_model->get_all_academies_data();
        $this->load->view('academy_owner_home', $data);
    }
    public function activate_academy_owner($activation_code)
    {
      $user=$this->Accademy_owner_model->get_by_activation_code_ao($activation_code);
      $info=array(
        'status' =>1
      );
      $this->Accademy_owner_model->update_profile($info,$user->id);
      $this->session->set_flashdata('message_title', 'Account Activated');
      $this->session->set_flashdata('message_detail', 'Account Activated Successfully');
      redirect(base_url().'home/acc_owner_login');
    }
}
?>