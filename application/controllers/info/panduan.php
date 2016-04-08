<?php

class Panduan extends CI_Controller {

	public function index($page = 'orderstep') {
		// breadcrumb start

		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function term($page = 'term') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function about($page = 'about') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

}

?>