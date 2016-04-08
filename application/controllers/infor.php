<?php

class Info extends CI_Controller {

	public function term($page = 'term') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function orderstep($page = 'orderstep') {
		// breadcrumb start
		$breadcrumb = array(
			"Beranda" => "index",
			"Panduan Sjpro.co.id" => "",
		);
		$data['breadcrumb'] = $breadcrumb;
		// breadcrumb end

		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function about($page = 'about') {
		$data['title'] = ucfirst($page);
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

}

?>