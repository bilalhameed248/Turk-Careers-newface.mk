<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function test1()
	{
		$clientID         = '0f9fa385275aa50d539d';
        $clientSecret     = '4a919d6e1a2556cd6f2e9bbf2e63cc482a04b70b';
        $redirectURL     = 'https://www.newface.mk/Social_login/github_login';
           $param1=array(
            'client_id' => $clientID,
            'client_secret' => $clientSecret,
            'redirect_uri' => $redirectURL
        );
        $this->load->library('Github',$param1);
        $loginURL = $this->Github->getAuthorizeURL($_SESSION['state']);
	}
	
}
