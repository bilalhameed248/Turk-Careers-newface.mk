<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('Subscriptions_model');
    }

    public function pricing($type)   //to view all candidates
    {
        $data['pricings']=$this->Subscriptions_model->get();
        if($type=='cand'){

            $this->load->view('admin/settings/pricing_cand',$data);
        }
        elseif($type=='emp'){

            $this->load->view('admin/settings/pricing_emp',$data);
        }

    }
    public function update_pricing($id,$type='')
    {
        if(isset($_POST['submit']))
        {
            $data=$_POST;
            unset($data['submit']);
            $this->Subscriptions_model->update_pricing($data,$id);
            if($type=='cand'){
                redirect(base_url().'admin/settings/pricing/cand');
            }
            elseif ($type=='emp'){
                redirect(base_url().'admin/settings/pricing/emp');
            }

        }
        else{
            $data['pricing']=$this->Subscriptions_model->get($id);
            if($type=='cand') {
                $this->load->view('admin/settings/pricing_edit_cand', $data);
            }
            elseif ($type=='emp'){
                $this->load->view('admin/settings/pricing_edit_emp', $data);
            }
        }

    }
    public function makeinactive($id)
    {

        $data=array('status'=>0);

        $this->Subscriptions_model->update_pricing($data,$id);
        redirect(base_url().'admin/settings/pricing');
    }
    public function makeactive($id)
    {
        $data=array('status'=>1);

        $this->Subscriptions_model->update_pricing($data,$id);
        redirect(base_url().'admin/settings/pricing');
    }
}
