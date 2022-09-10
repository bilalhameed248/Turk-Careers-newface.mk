<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	function __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->load->model('Accademy_owner_model');
        $this->load->model('jobs_offered');
		$this->load->model('Subscriptions_model');
		$this->load->model('Settings_model');

        $_SESSION['message'] = '';
    }
	
	public function index()
	{
		if(isset($_SESSION['logged_in'])||isset($_SESSION['owner_logged_in']))
		{
			redirect(base_url().'feed');
		}
		$this->load->view('index');
	}

	public function step_one_signup()
	{
		$this->load->view('step_one_signup');
	}
	public function step_two_signup()
	{
		$this->load->view('step_two_signup');
	}
	public function step_three_signup()
	{
		$options=$this->input->post('options');
		if($options=="candidate")
		{
			$this->load->view('select_signup');
		}
		else if($options=="employer")
		{
			$this->load->view('esignup');
		}
		else
		{
			$this->load->view('esignup');
		}
	}
	public function login()
	{
		if(isset($_POST['submit']))
		{

			$array_items = array('owner_email', 'owner_id','owner_name','owner_logged_in');

			$this->session->unset_userdata($array_items);
			$islogedin=$this->user->checklogin($_POST);
			if($islogedin)
			{
				redirect(base_url().'feed');
			}
			else
			{
				$this->session->set_flashdata('message_title', 'Invalid Credintial');
				$this->session->set_flashdata('error_message_detail', 'Invalid Username Or Password, OR Account Unactivated');
				redirect(base_url().'home/login');
			}
		}
		else
		{
			$this->load->view('signin');
		}
	}
	public function forgetpass()
    {
        if(!isset($_POST['submit'])){
            $this->load->view('forgetpass');
        } else{
            $email=$this->input->post('email');
            $isreg=$this->user->is_email_reg($email);
            if(!$isreg)
            {
                $this->session->set_flashdata('message_detail', 'This email is not registered');
                redirect(base_url().'home/forgetpass');

            } else{
            $newpass=generate_random_string(6);
            $data=array('password'=>$newpass);
            $this->user->update_by_email($data,$email);
            $send=send_pass_email($newpass,$email);
            if($send){
                $this->session->set_flashdata('message_detail', 'New password has been sent to your mail');
                redirect(base_url().'home/login');
                 }
            }
        }
    }
    
	function filter_acc()
  	{
      $title=$this->input->post('title');
      
	  $count=$this->Accademy_owner_model->get_all_academies_data($count=TRUE,$title);
	  
	  if($count!=0)
	  {
		$allaccs=$this->Accademy_owner_model->get_all_academies_data($count=false,$title);
		$result='';
        foreach($allaccs as $acc)
        {
          $result.='<div class="col-sm-6 col-lg-3">
		  <div class="companies-item wow fadeInUp" data-wow-delay=".3s">
		  <img src="'.base_url().$acc["academy_logo"].'" alt="Companies">
		  <h3>
		  <a href="'.$acc["academy_website_url"].'">'.$acc["academy_name"].'</a>
		  </h3>
		  <p>
		  <i class="icofont-location-pin"></i>
		  Quadra, Street, Canada
		  </p>
		  <a class="companies-btn" href="create-account.html">Hiring</a>
		  </div>
		</div>';
       }
	  }
      else{
		  $result='<div class="alert alert-info">There is no matching Academy</div>';
	  }

      print_r($result);
  }
	public function accsignup()
	{
		if(!isset($_POST['submit']))
		{
			$this->load->view('accsignup');
		}
		else
		{
			$data=$this->input->post();
			$email=$data['owner_email'];
			$isreg=$this->Accademy_owner_model->is_email_reg($email);
			if(!$isreg)
			{
				$this->Accademy_owner_model->register($data,$dir);
				$this->session->set_flashdata('message_title', 'Password & Activation Link');
				$this->session->set_flashdata('message_detail', 'Password and Activation Link has been sent to your email');
				redirect(base_url().'home/acc_owner_login');
			}
			else
			{
				$this->session->set_flashdata('message_title', 'Aready Registered');
				$this->session->set_flashdata('error_message_detail', 'Email Aready Registered');
				$this->load->view('accsignup');
			}
		}
	}
	public function list_academies()
	{
		if(!$this->session->has_userdata('logged_in')&&!$this->session->has_userdata('owner_logged_in'))
	    {
	      $this->load->view('signin');
	      exit();
	    }
	    if(isset($_SESSION['logged_in']))
	    {
	    	$user_id=$this->session->userdata('user_id');
	    	$data['user_data']=$this->user->get($user_id);
	        $data['user']=$this->user->get($user_id);
	        $skills=$data['user_data']->skills;
	        $data['jobs']=$this->jobs_offered->get($skills);  
	    }
	    else if(isset($_SESSION['owner_logged_in']))
	    {
	    	$user_id=$this->session->userdata('owner_id');
	    	$data['user_data']=$this->user->getowner($user_id);
	        $data['user']=$this->user->getowner($user_id);
	    }
	    $this->load->view('acclistings',$data);
	}
	public function acc_owner_login()
	{
		if(isset($_POST['submit']))
		{
			$islogedin=$this->Accademy_owner_model->accademy_owner_login($_POST);
			if($islogedin)
			{
				redirect(base_url().'accademy_owner/index');
			}
			else
			{
				$this->session->set_flashdata('message_title', 'Invalid Credintial');
				$this->session->set_flashdata('error_message_detail', 'Invalid Username Or Password, OR Account Unactivated');
				redirect(base_url().'home/acc_owner_login');
			}
		}
		else
		{
			$this->load->view('accsignin');
		}
	}
	public function acc_owner_logout()
	{
		$logout=$this->user->logout();
		if($logout)
		{
			redirect(base_url());
		}
		
	}
	
	function subscription()
	{
        if(!$this->session->has_userdata('logged_in')&&!$this->session->has_userdata('owner_logged_in'))
        {
            $this->load->view('signin');
            exit();
        }
		
		if(isset($_SESSION['logged_in']))
		{
			$roleid=1;
			$userr_id=$_SESSION['user_id'];
			$data['user']=$this->user->get($userr_id);
		}
		elseif(isset($_SESSION['owner_logged_in']))
		{
			$roleid=2;
			$userr_id=$_SESSION['owner_id'];
			$data['user']=$this->user->getowner($userr_id);
		}
        $activity="Viewed Subscription page";
        $this->Settings_model->add_activity($roleid=$roleid,$userr_id,$activity);
		$data['subscriptions']=$this->Subscriptions_model->get();
		$this->load->view('subscription',$data);
	}
	function callback()
    {
        $data['amount']=$_SESSION['halk_amount'];
        $data['currencyVal']=$_SESSION['halk_currency_code'];
        $data['date']=date('Y-m-d');
        if(isset($_SESSION['logged_in']))
		{
			$data['role_id']=1;
			$user_id=$_SESSION['user_id'];
		}
		elseif(isset($_SESSION['owner_logged_in']))
		{
			$data['role_id']=2;
			$user_id=$_SESSION['owner_id'];
		}
		$this->Settings_model->payment($data);
		$data1['subscription_id']=$_SESSION['subscription_id'];
		if(isset($_SESSION['logged_in']))
		{
			$this->user->update_profile($data1, $user_id);
		}
		elseif(isset($_SESSION['owner_logged_in']))
		{
			$this->jobs_offered->update_profile($data1, $user_id);
		}

        unset($_SESSION['halk_amount']);
    	unset($_SESSION['halk_currency_code']);
    	unset($_SESSION['subscription_id']);
    	redirect(base_url().'home/subscription');
    }
    function failurl()
    {
    	unset($_SESSION['halk_amount']);
    	unset($_SESSION['halk_currency_code']);
    	unset($_SESSION['subscription_id']);
    	redirect(base_url().'home/subscription');
    }
    function unsubscribe_profile()
    {
    	$data['subscription_id']=1;
		if(isset($_SESSION['logged_in']))
		{
			$user_id=$_SESSION['user_id'];
			$this->user->update_profile($data, $user_id);
		}
		elseif(isset($_SESSION['owner_logged_in']))
		{
			$user_id=$_SESSION['owner_id'];
			$this->jobs_offered->update_profile($data, $user_id);
		}
		redirect(base_url().'home/subscription');
    }
	function testpayment()
    {
        $this->load->view('test_bankapi');
    }
	public function esignin()
	{
		if(isset($_POST['submit']))
		{
			$islogedin=$this->user->employer_login($_POST);
			if($islogedin)
			{
				redirect(base_url().'jobs/list');
			}
			else
			{
				$this->session->set_flashdata('message_title', 'Invalid Credintial');
				$this->session->set_flashdata('error_message_detail', 'Invalid Username Or Password, OR Account Unactivated');
				redirect(base_url().'home/esignin');
			}
		}
		else
		{
			$this->load->view('esignin');
		}
	}
	public function esignup()
	{
		if(isset($_POST['submit']))
		{
			$data=$this->input->post();
			$email=$data['owner_email'];
			$isreg=$this->user->is_email_reg_employee($email);
			if($isreg)
			{
				$this->session->set_flashdata('message_title', 'Already Registered');
				$this->session->set_flashdata('error_message_detail', 'Email Already Registered...');
				redirect(base_url().'home/esignup');
			}
			$org_name=$_FILES['company_logo']['name'];
			$tmp_name=$_FILES['company_logo']['tmp_name'];
			$folder="companies_logo";
			$dir=Upload_image($org_name,$tmp_name,$folder);
			$lastid=$this->user->insertemployer($this->input->post(),$dir);
            $activity="Just registered himeself";
            $this->Settings_model->add_activity($roleid=2,$lastid,$activity);
            $this->session->set_flashdata('message_title', 'Password & Activation Link');
			$this->session->set_flashdata('message_detail', 'Password and Activation Link has been sent to your email');
			redirect(base_url().'home/esignin');
		}
		else
		{
			$this->load->view('esignup');
		}
	}
	public function signup()
	{
		if(isset($_POST['submit']))
		{
			
			$data=$this->input->post();
			
			$email=$data['email'];
			$isreg=$this->user->is_email_reg($email); //isemail already registered.... '1' tells to get id of that email
			if(!$isreg)
			{
				
				$org_name=$_FILES['resume']['name'];
				$tmp_name=$_FILES['resume']['tmp_name'];
				$folder="portfolios";
				$dir=Upload_image($org_name,$tmp_name,$folder);
				$userid=$this->user->register($data,$dir);
                $activity="Just registered himself";
                $this->Settings_model->add_activity($roleid=1,$userid,$activity);
                $this->session->set_flashdata('message_title', 'Password & Activation Link');
				$this->session->set_flashdata('message_detail', 'Password and Activation Link has been sent to your email');
				redirect(base_url().'home/login');
			}
			else
			{
				
				$this->session->set_flashdata('message_title', 'Already Registered');
				$this->session->set_flashdata('message_detail', 'Email Already Registered...');
				$this->load->view('signup');
			}
			
		}
		else
		{
			$_SESSION['message'] = '';
			$data['roles']=$this->Settings_model->getroles();
			$this->load->view('signup',$data);
		}
		
	}
	public function activate_candidate($activation_code)
	{
		$user=$this->user->get_by_activation_code($activation_code);
		$info=array(
			'status' =>1
		);
		$this->user->update_profile($info,$user->id);
		$this->session->set_flashdata('message_title', 'Account Activated');
		$this->session->set_flashdata('message_detail', 'Account Activated Successfully');
		redirect(base_url().'home/login');
	}
	public function logout()
	{
		$logout=$this->user->logout();
		if($logout)
		{
			redirect(base_url());
		}
	}
	public function dash()
	{
		if($this->session->has_userdata('logged_in'))
		{
			$this->load->view('admin/index');
		}
		else
		{
			redirect(base_url().'home/login');
		}
		
	}
	public function profile($id='')
	{
		if($this->session->has_userdata('logged_in'))
		{
			if(!isset($_POST['submit']))
			{
				$id=$_SESSION['user_id'];
				//echo $id;
				$data['user']=$this->user->get($id);
				$data['institutes']=$this->user->user_institutes($id,FALSE);// false means No count
				$data['num_institutes']=$this->user->user_institutes($id,TRUE);// True means  count
				$rec=$this->user->getkills(TRUE,$id);//True means count
				if($rec>0)
				{
					$data['skill_exist']=TRUE;
				}
				else
				{
					$data['skill_exist']=FALSE;
				}
				$this->load->view('setting',$data);
			}
			else
			{
				//echo "hhhh";
				$id=$_SESSION['user_id'];
				$profile=$this->input->post();
				//print_r($profile);
				$data=array(
					'fname' =>$profile['fname'],
					'lname' =>$profile['lname'],
					'email' =>$profile['email'],
					'phone_number' =>$profile['phone_number'],
					'skills' =>$profile['skills'],
					'about' =>$profile['about']
				);
				if($data['skills']=='')
				{
					$data['skills']=NULL;
				}
				$this->user->update_profile($data,$id);
				$i=0;
				//print_r($profile['institute_name']);
				foreach($profile['institute_name'] as $ins)
				{
					$inst=array(
						'id'=>$profile['inpid'][$i],
						'institute_name'=>$ins,
						'from_date' =>$profile['institute_fromdate'][$i],
						'to_date' =>$profile['institute_enddate'][$i]
					);

					if($inst['id']==0)
					{
						echo "data insert <br>";
						$this->user->add_institutes($inst,$id);
					}
					else
					{
						echo "data update <br>";
						$update=$this->user->update_institutes($inst,$id); // will update institute on basis of name and userid
					}
					$i++;
				}
				//exit();
                $activity="Updated profile";
                $this->Settings_model->add_activity($roleid=1,$_SESSION['user_id'],$activity);
				redirect(base_url().'home/profile');
			}
		}
		else
		{
			redirect(base_url().'home/login');
		}
		
	}
	public function updatedp()
	{
        $activity="Updated profile picture";
        $this->Settings_model->add_activity($roleid=1,$_SESSION['user_id'],$activity);
		$id=$_SESSION['user_id'];
		$file=$_FILES['dpimage'];
		$dir=Upload_image($file['name'],$file['tmp_name'],'userdps');
		$info=array(
			'profile_pic' =>$dir
		);
		$this->user->update_profile($info,$id);
		redirect(base_url().'home/profile');
		
	}
	public function upload_profile()
	{
		$data=$_POST;
		$array = array(
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'email' => $_POST['email'],
        'phone_number' => $_POST['phone_number'],
        'skills' => $_POST['skills'],
        'experience' => $_POST['experience'],
        'companies_name' => $_POST['companies_name']
        
		);
		$this->db->where('id',$_SESSION['user_id']);
		$this->db->update('users', $array);
		$query = $this->db->get_where('degrees', array('user_id' => $_SESSION['user_id']));
		$count=$query->num_rows();
		if($count>0)
		{
			$array = array(
	        'title' => $_POST['degrees'],
	        'institute' => $_POST['institute'],
	        'percentage' => $_POST['percentage']

			);

			$this->db->where('user_id',$_SESSION['user_id']);
        	if($this->db->update('degrees', $array))
        	{
        		echo 1;
        	}
		}
		else
		{
			$array = array(
		        'title' => $_POST['degrees'],
		        'institute' => $_POST['institute'],
		        'percentage' => $_POST['percentage']

				);

			if($this->db->insert('degrees', $array))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
	}
	public function main()
	{
		$this->load->view('timeline/timeline.php');
	}
	public function cvupload()
	{
		
		$orgname=$_FILES['cvfile']['name'];
		$tmp_name=$_FILES['cvfile']['tmp_name'];
		$folder='portfolios';
		$dir=Upload_image($orgname,$tmp_name,$folder); //function for file upload
		$data=cvparse($dir);

		$data=json_decode($data);
		if($data->message=="You have exceeded your daily/monthly API rate limit. Please review and upgrade your subscription plan at https://promptapi.com/subscriptions to continue.")
		{
			$this->session->set_flashdata('message_detail', 'API key for resume parser limit exceeded contact your developer and purchase new Subscription plan');
			redirect(base_url().'home/login');
			exit();
		}
		
		
		$name=explode(" ",$data->name);
		$fname=$name[0];
		$lname=$name[1];
		$email=$data->email;
		if($fname==''&&$email=='')
		{
			$this->session->set_flashdata('message_detail', 'Unknown data <ul><li>Either its not a real CV</li><li>Or format not supported</li><li>Or language may be other than English</li>');
			redirect(base_url().'home/login');
			exit();
		}
		$phone=$data->phone;
		$isreg=$this->user->is_email_reg($email);
		if($isreg)
		{
			$this->session->set_flashdata('message_title', 'Already Registered');
			$this->session->set_flashdata('message_detail', 'Email Already Registered...!');
			redirect(base_url().'home/login');
			
		}

		$cv_path=$dir;
		$skills=$data->skills;
		$skills=implode(",",$skills);
		$education=$data->education;
		$experience=$data->experience;
		$pass=generate_random_string(6);
		$info=array(

			'fname' =>$fname,
			'lname' =>$lname,
			'email' =>$email,
			'phone_number'=>$phone,
			'skills' =>$skills,
			'password'=>$pass,
			'cv_path' =>$cv_path
		);
		
		$insert_id=$this->user->insert_from_cv($info);
		if($insert_id!=0)
		{
			$this->user->addinstitutes($education,$insert_id);
			$sent=send_pass_email($pass,$email);
			if($sent)
			{
				$this->session->set_flashdata('message_title', 'Password Sent');
				$this->session->set_flashdata('message_detail', 'password has been sent to your mail');
				redirect(base_url().'home/login');
			}
			//echo "inserted";
		}
	}
	public function view_all_academies()
	{
		$this->load->view('view_all_academies_home.php');
	}
	public function payment()
	{
		$this->load->view('payment');
	}
	public function subscribe_now()
	{
		$data['subscription_email']=$_POST['email'];
		$data['created_at']=date('Y-m-d H:i:s');
		$data['deleted_at']=date('Y-m-d H:i:s');
		$this->user->subscribe_now($data);
		$this->session->set_flashdata('message_detail', 'Subscribe To newface.mk Successfully');
		redirect(base_url());
	}
	public function companies()
	{
		$this->load->view('companies.php');
	}
	public function candidates()
	{
		$this->load->view('candidate.php');
	}
	public function terms_and_conditions()
	{
		$this->load->view('terms_and_conditions.php');
	}
	public function faq()
	{
		$this->load->view('faq.php');
	}
	public function about_us()
	{
		$this->load->view('aboutus.php');
	}
	public function pricing()
	{
		$this->load->view('pricing.php');
	}
	public function ok()
	{
		print_r($_POST);
		exit();
	}
}
