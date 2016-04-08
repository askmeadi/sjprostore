<?php

class Notification extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}

	public function index($page = 'notif') {
		$data['title'] = ucfirst($page);

		$this->load->view('user/pages/' . $page, $data);
	}

	

}

?>