<?php

class Oauth_Login extends CI_Controller {

public $user = "";

public function __construct() {
parent::__construct();
$this->load->helper('url');
$this->load->library('facebook');
// Load facebook library and pass associative array which contains appId and secret key
}

public function login(){

// Get user's login information
$user = $this->facebook->getUser();

if ($user){
	try{
		$data['user_profile'] = $this->facebook->api('/me');
	}catch (FacebookApiException $e){
		$user = null;
	}
}else{
	$this->facebook->destroySession();
}

if ($user) {
	$data['logout_url'] = site_url('welcome/logout');
}else{
	$data['login_url'] = $this->facebook->getLoginUrl(array(
			'redirect_uri' => site_url('welcome/login'),
			'scope' => array("email")
		));
}
$this->load->view('tes', $data);
}


// Logout from facebook
public function logout() {
// Destroy session
$this->facebook->destroySession();
// Redirect to baseurl
redirect('welcome/login');
}

}
?>