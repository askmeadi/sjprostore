<?php

class Finish extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}

	public function index() {
		$page = 'finish_pay';
		$data['title'] = ucfirst($page);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer_payment', $data);
	}

	public function done(){
		$this->cart->destroy();
		redirect(base_url());
	}

	public function fail() {
		$page = 'unfinish_pay';
		$data['title'] = ucfirst($page);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer_payment', $data);
	}

}

?>