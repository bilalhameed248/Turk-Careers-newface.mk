<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('google_login_model');
         $this->load->model('user');
        $this->load->model('Settings_model');
        require_once APPPATH.'third_party/src/Google_Client.php';
    	require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

    	$this->load->library('facebook');
        $clientID         = '0f9fa385275aa50d539d';
        $clientSecret     = '4a919d6e1a2556cd6f2e9bbf2e63cc482a04b70b';
        $redirectURL     = 'https://www.newface.mk/Social_login/github_login';
        $param1=array(
            'client_id' => $clientID,
            'client_secret' => $clientSecret,
            'redirect_uri' => $redirectURL
        );
        $this->load->library('github',$param1);
        

        // $gitClient = new Github_OAuth_Client();
        
    }
 	public function login()
	{
	
		$clientId = '893460354023-8k7vonskdruuh15e6fhj7neelcdpfe84.apps.googleusercontent.com'; //Google client ID
		$clientSecret = '8n_ehkDD3-XGBOROZy7NVZsz'; //Google client secret
		$redirectURL = 'https://www.newface.mk/Social_login/login';
		
		//https://curl.haxx.se/docs/caextract.html

		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		if(isset($_GET['code']))
		{

			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			//header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{

			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
             // print_r($userProfile);
             // die;
            
			echo "<pre>";
			
			$data['email'] =$userProfile['email'];
	        $data['name'] =$userProfile['name'];
	        $data['password'] = '';
	        $data['address'] = '';
	        $data['phone_number'] = '';

        $isreg=$this->user->is_email_reg($data['email']); //isemail already registered..... 1 tell to return back id of that email
        if($isreg)
        {

        	$login=$this->user->social_login($data);
        	if($login)
        	{
        		redirect(base_url().'feed');
        	}
        	//exit();
        }
        else
        {
        	$reg=$this->user->social_register($data);
        	if($reg)
        	{

        		$login=$this->user->social_login($data);
	        	if($login)
	        	{
                    $activity="user logged in using Gmail";
                    $this->Settings_model->add_activity($roleid=1,$_SESSION['user_id'],$activity);
	        		redirect(base_url().'feed');
	        	}
        	}
        }
        
        $iid=$this->Social_model->add_gmail_user($data);
        
        $this->red($iid);
        
			die;
        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}
    public function fblogin()
    {
        $userData = array();
        if($this->facebook->is_authenticated())
        {
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture'); 
            if(!isset($fbUser['email']))
            {
                $this->session->set_flashdata('message_detail', 'Your Facebook account has not email associated with it');
                redirect(base_url().'home/login');
                exit();
            }
            
            $userData['fname']    = !empty($fbUser['first_name'])?$fbUser['first_name']:''; 
            $userData['lname']    = !empty($fbUser['last_name'])?$fbUser['last_name']:''; 
            $userData['email']        = !empty($fbUser['email'])?$fbUser['email']:''; 
            $userData['password'] = '';
            $isreg=$this->user->is_email_reg($userData['email']);
            if($isreg)
            {
                $login=$this->user->social_login($userData);
                if($login)
                {
                    redirect(base_url().'/feed');
                }
            }
            else
            {
                $reg=$this->user->social_register_facebook($userData);
                if($reg)
                {
                    $login=$this->user->social_login($userData);
                    if($login)
                    {
                        redirect(base_url().'/feed');
                    }
                    else
                    {
                        redirect(base_url());
                    }
                }
            }
        }
        else
        {
            $data['authURL'] =  $this->facebook->login_url();
        }
        redirect ($data['authURL']);
    }
    public function linkedin_login()
    {
        // 
    }
    function github_red()
    {
        $gitUser = $this->github->apiRequest($_SESSION['access_token']);
        print_r($gitUser);
        exit();
    }
    public function github_login()
    {
        if(isset($accessToken))
        {
            // Get the user profile info from Github
            $gitUser = $this->github->apiRequest($accessToken);
           
            if(!empty($gitUser))
            {
                // User profile data
                $gitUserData = array();
                $gitUserData['oauth_provider'] = 'github';
                $gitUserData['oauth_uid'] = !empty($gitUser->id)?$gitUser->id:'';
                $gitUserData['name'] = !empty($gitUser->name)?$gitUser->name:'';
                $gitUserData['username'] = !empty($gitUser->login)?$gitUser->login:'';
                $gitUserData['email'] = !empty($gitUser->email)?$gitUser->email:'';
                $gitUserData['location'] = !empty($gitUser->location)?$gitUser->location:'';
                $gitUserData['picture'] = !empty($gitUser->avatar_url)?$gitUser->avatar_url:'';
                $gitUserData['link'] = !empty($gitUser->html_url)?$gitUser->html_url:'';
                
                // Insert or update user data to the database
                $userData = $user->checkUser($gitUserData);
                
                // Put user data into the session
                // $_SESSION['userData'] = $userData;
                
                // Render Github profile data
                // $output  = '<h2>Github Profile Details</h2>';
                // $output .= '<img src="'.$userData['picture'].'" />';
                // $output .= '<p>ID: '.$userData['oauth_uid'].'</p>';
                // $output .= '<p>Name: '.$userData['name'].'</p>';
                // $output .= '<p>Login Username: '.$userData['username'].'</p>';
                // $output .= '<p>Email: '.$userData['email'].'</p>';
                // $output .= '<p>Location: '.$userData['location'].'</p>';
                // $output .= '<p>Profile Link :  <a href="'.$userData['link'].'" target="_blank">Click to visit GitHub page</a></p>';
                // $output .= '<p>Logout from <a href="logout.php">GitHub</a></p>'; 
            }
            else
            {
                // print_r("Else OK");
                // die();
                $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
            }
            
        }
        else if(isset($_GET['code']))
        {
            
            // Verify the state matches the stored state
            if(!$_GET['state'] || $_SESSION['state'] != $_GET['state'])
            {
                header("Location: ".$_SERVER['PHP_SELF']);
            }
            
            // Exchange the auth code for a token
            $accessToken = $this->github->getAccessToken($_GET['state'], $_GET['code']);

            $_SESSION['access_token'] = $accessToken;
            
            header('Location: ./github_red');
        }
        else
        {
            
            $_SESSION['state'] = hash('sha256', microtime(TRUE) . rand() . $_SERVER['REMOTE_ADDR']);
            
            // Remove access token from the session
           // unset($_SESSION['access_token']);
            // Get the URL to authorize
            $loginURL = $this->github->getAuthorizeURL($_SESSION['state']);

           redirect ($loginURL);
            // Render Github login button
            // $output = '<a href="'.htmlspecialchars($loginURL).'"><img src="images/github-login.png"></a>';
        }
        // print_r("Github login");
        // die();  
    }
}
?>