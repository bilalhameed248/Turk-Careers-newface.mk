<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
function __construct() {
        parent::__construct();
        $this->load->library('PdfParser');
        $this->load->library('docx');
        $this->load->model('user');
        $this->load->model('Accademy_owner_model');
        $this->load->model('jobs_offered');
        $this->load->model('Settings_model');
    }
	
	public function list()
	{
    if(!$this->session->has_userdata('logged_in')&&!$this->session->has_userdata('owner_logged_in'))
    {
      redirect(base_url());
      exit();
    }
    else
    {
        if(isset($_SESSION['logged_in'])) //candidate
        {
            $uid=$_SESSION['user_id'];
            $activity="Searched for jobs";
            $this->Settings_model->add_activity($roleid=1,$uid,$activity);
        }
        elseif(isset($_SESSION['owner_logged_in']))
        {
            $activity="viewed his own posted jobs";
            $uid=$_SESSION['owner_id'];
           // $this->Settings_model->add_activity($roleid=2,$uid,$activity);
        }


      if(isset($_POST['submit']))
      {
        $search=$this->input->post('job');
      }
    
    if(isset($_SESSION['user_id']))
    {
      $user_id=$this->session->userdata('user_id');
      $data['user']=$this->user->get($user_id);
      $data['user_data']=$this->user->get($user_id);
      $skills=$data['user_data']->skills;
      $data['jobs']=$this->jobs_offered->get($skills); //fetching jobs of interests
    }
    elseif(isset($_SESSION['owner_id']))
    {
      $user_id=$this->session->userdata('owner_id');
      $data['user']=$this->user->getowner($user_id);
      $data['user_data']=$this->user->getowner($user_id);
    }
    $data['academies']=$this->Accademy_owner_model->get_all_academies_data();
    // print_r($data['academies']);
    $this->load->view('listings',$data);
    }
		
	}

  public function my_company_profile($id='')
  {
    $owner_id=$_SESSION['owner_id'];
    $data['owner_details']=$this->jobs_offered->getJobOwnerData($owner_id);
    $data['user']=$this->user->getowner($owner_id);
    $this->load->view('company_profile',$data);
  }
  public function update_company_profile()
  {
      if(!isset($_SESSION['owner_logged_in']))
      {
        redirect(base_url());
      }
      $data['owner_name']=$this->input->post('fname');
      $data['owner_email']=$this->input->post('email');
      $data['company_name']=$this->input->post('company_name');
      $data['company_phone_no']=$this->input->post('company_phone_no');
      $data['phone_number']=$this->input->post('phone_number');
      $data['company_website_url']=$this->input->post('company_website_url');
      $data['company_address']=$this->input->post('company_address');
      $data['company_desc']=$this->input->post('company_desc');
      $data['industry']=$this->input->post('industry');
      $data['company_size']=$this->input->post('company_size');
      $data['company_type']=$this->input->post('company_type');
      $user_id=$_SESSION['owner_id'];
      $this->jobs_offered->update_profile($data, $user_id);
      redirect(base_url().'jobs/my_company_profile');
  }
  public function updatedpowner()
  {
      $user_id=$_SESSION['owner_id'];
      $file=$_FILES['dpimage'];
      $dir=Upload_image($file['name'],$file['tmp_name'],'userdps');
      $info=array(
        'profile_pic' =>$dir
      );
      $this->jobs_offered->update_profile($info,$user_id);
      redirect(base_url().'jobs/my_company_profile');
    
  }
  function filter_jobs()
  {
      $loc=$this->input->post('loc');
      $title=$this->input->post('title');
      $salary=$this->input->post('salary');
      $alljobs=$this->jobs_offered->getjobs($title,$salary);
      $result='';
        foreach($alljobs as $job)
        {
          $result.='<div class="central-meta item">    
            <div class="user-post job">
              <div class="friend-info">
                <figure>
                  <img src="'.base_url().$job->profile_pic.'" alt="">
                </figure>
                <div class="friend-name">
                  <div class="more">
                  </div>
                  <ins><a href="" title="">'.$job->owner_name.'</a> shared Job</ins>
                  
                  <span style="margin-right: -36px;"><i class="fa fa-clock-o"></i>' ." ".date("M jS, Y", strtotime($job->posted_on)).'</span>
                </div>
                <ol class="pit-rate">
                  <li class="rated"><i class="fa fa-star"></i></li>
                  <li class="rated"><i class="fa fa-star"></i></li>
                  <li class="rated"><i class="fa fa-star"></i></li>
                  <li class="rated"><i class="fa fa-star"></i></li>
                  <li class=""><i class="fa fa-star"></i></li>
                </ol>
                <div class="post-meta">
                  <h6><a href="'.base_url().'jobs/detail/'.$job->jid.'" title="">'.$job->title.'</a></h6>
                  <div class="loc-cate">
                    <ul class="cate">';
                      $skills=$job->skills;
                      $skills=explode(',',$skills);
                      foreach($skills as $skill){
                      
                      $result.='<li><a href="#" title="">'.$skill.'</a></li>';
                      }
                    $result.='</ul>
                  </div>
                  <div class="description">
                    <p>'.
                       substr($job->description,100).'
                    </p>
                  </div>
                  <div class="rate-n-apply">
                    <div class="job-price">
                      <span>Offered Salary :</span>
                      <ins>'.$job->salary_offered_min.'-'.$job->salary_offered_max.'</ins>
                    </div>
                    <a style="color: red; font-size: large;" href="'.base_url().'/jobs/detail/'.$job->jid.'" title="" class="main-btn" data-ripple="">Apply Now</a>
                  </div>
   
                </div>
          
              </div>
            </div>
          </div>';     
       } 
      print_r($result);
  }
  function filter_jobs_owner()
  {
     $loc=$this->input->post('loc');
      $title=$this->input->post('title');
      $salary=$this->input->post('salary');
      $alljobs=$this->jobs_offered->getjobs($title,$salary,'',TRUE); //true means user is job owner
      $result='';
        foreach($alljobs as $job)
                {
                  $result.='<div class="central-meta item">    
                    <div class="user-post job">
                      <div class="friend-info">
                        <figure>
                          <img src="'.base_url().$job->profile_pic.'" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag-o"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins>You shared Job</ins>
                          <span style="position: relative; left: 30px;"><i class="fa fa-clock-o"></i>' ." ".date("M jS, Y", strtotime($job->posted_on)).'</span>
                        </div>
                        <ol class="pit-rate">
                          <li class="rated"><i class="fa fa-star"></i></li>
                          <li class="rated"><i class="fa fa-star"></i></li>
                          <li class="rated"><i class="fa fa-star"></i></li>
                          <li class="rated"><i class="fa fa-star"></i></li>
                          <li class=""><i class="fa fa-star"></i></li>
                        </ol>
                        <div class="post-meta">
                          <h6><a href="#" title="">'.$job->title.'</a></h6>
                          <div class="loc-cate">
                            <ul class="cate">';
                              $skills=$job->skills;
                              $skills=explode(',',$skills);
                              foreach($skills as $skill){
                              
                              $result.='<li><a href="#" title="">'.$skill.'</a></li>';
                              }
                            $result.='</ul>
                            <!-- <ul class="loc">
                              <li>Php Developer</li>
                              <li><span>$4k+</span> Spent</li>
                              <li><i class="fa fa-map-marker"></i> London</li>
                            </ul> -->
                          </div>
                          <div class="description">
                            <p>'.$job->description.'

                                 
                            </p>
                          </div>
                          <div class="skills">
                            <p>Skills Req:'.$job->skills.'

                                 
                            </p>
                          </div>
                          <div class="applied_on">
                            <p style="color: #656a85;">Posted on:' ." ".date("M jS, Y", strtotime($job->posted_on)).'

                                 
                            </p>
                          </div>
                          <div class="rate-n-apply">
                            <div class="job-price">
                              <span>Offered Salary :</span>
                              <ins>'.$job->salary_offered_min.'-'.$job->salary_offered_max.'</ins>
                            </div>
                            <a href="'.base_url().'/jobs/applicants_detail/'.$job->jid.'" title="" class="main-btn" data-ripple="" style="background:blue;">See stats</a>
                          </div>
           
                        </div>
                  
                      </div>
                    </div>
                  </div>';
               }
               
      print_r($result);
  }
  function applicants_detail($job_id) //list of all applicants of a particular job
  {
    $data['apps']=$this->jobs_offered->view_applicants($job_id);
    $user_id=$this->session->userdata('owner_id');
    $data['user']=$this->user->getowner($user_id);
  	$this->load->view('applicants',$data);
  }
function detail($job_id)
{
  $id=$_SESSION['user_id'];
  $data['success']=False;
  if(isset($_POST['submit']))
  {
      $org_name=$_FILES['cv']['name'];
      $tmp_name=$_FILES['cv']['tmp_name'];
      $folder="portfolios";
      $dir=Upload_image($org_name,$tmp_name,$folder);
      $data['success']=$this->jobs_offered->insertapp($id,$job_id,$this->input->post('desc'),$dir);
  }
 
    $data['isapplied']=$this->jobs_offered->checkapp($id,$job_id);
    $data['no_of_jobs']=$this->jobs_offered->applied_jobs($id);

    $data['user']=$this->user->get($id);
    
    $data['job']=$this->jobs_offered->detail($job_id);

    //Fetching Job Owner Details
    $owner_id=$data['job']->owner_id;
    $data['job_owner']=$this->jobs_offered->getJobOwnerData($owner_id);

    //Fetching Related Jobs
    $user_id=$this->session->userdata('user_id');
    $title=$data['job']->title;
    $data['related_jobs']=$this->jobs_offered->get_related_jobs($title);

    //Return Data to view

    $activity="visited details of particular job";

    $this->Settings_model->add_activity($roleid=1,$_SESSION['user_id'],$activity);
    $this->load->view('Job_detail',$data);
}
  public function insertjob()
  {
     if(!$this->session->has_userdata('logged_in')&&!$this->session->has_userdata('owner_logged_in'))
    {

      redirect(base_url());
      exit();
    }

      $activity="Posted a Job";
      $this->Settings_model->add_activity($roleid=2,$_SESSION['owner_id'],$activity);
     $this->jobs_offered->insertjob($_POST);
     redirect(base_url().'jobs/list');
      //exit();
  }
	

  public function view_template()
  {
    $this->load->view('widgets');
  }
	public function activate_employee($activation_code)
  {
    $user=$this->user->get_by_activation_code_jo($activation_code);
    $info=array(
      'status' =>1
    );
    $this->jobs_offered->update_profile($info,$user->id);
    $this->session->set_flashdata('message_title', 'Account Activated');
    $this->session->set_flashdata('message_detail', 'Account Activated Successfully');
    redirect(base_url().'home/esignin');
  }
}
