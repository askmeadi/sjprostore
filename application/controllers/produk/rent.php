<?php

class Rent extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('cart_model');
		$this->load->model('produk_model');
	}

	public function index(){
		$page = 'rent';
		$data['title'] = ucfirst($page);

		// pagination start
		$jml = $this->db->get('produk');
		$num_rows = $this->db->count_all("produk");

		$config['base_url'] = base_url() . "produk/item/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 9;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['produk'] = $this->cart_model->retrieve_products($config['per_page'], $this->uri->segment(4));

		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function location(){
		$page = 'location';
		$data['title'] = ucfirst($page);

		// pagination start
		$jml = $this->db->get('produk');
		$num_rows = $this->db->count_all("produk");

		$config['base_url'] = base_url() . "produk/item/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 9;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['produk'] = $this->cart_model->retrieve_products($config['per_page'], $this->uri->segment(4));

		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

}

?>