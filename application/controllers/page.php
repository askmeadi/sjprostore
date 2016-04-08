<?php

class Page extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function testimoni($page = 'testimonials') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function faq($page = 'faq') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function contact($page = 'contact') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

}

?>