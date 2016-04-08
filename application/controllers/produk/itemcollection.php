<?php

class Itemcollection extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('cart_model');
		$this->load->model('produk_model');

	}

	public function index($page = 'home') {
		$data['title'] = ucfirst($page);

		$data['produk'] = $this->produk_model->random_products();
		$data['rekomendasi'] = $this->produk_model->recommend_products();
		$data['top'] = $this->produk_model->top_products();
		
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer_home', $data);
	}

	public function getKamera($kategori){
		$page = 'shop';
		$data['title'] = ucfirst($page);

		$jml = $this->produk_model->retrieve_kamera($kategori);

		$config['base_url'] = base_url() . "produk/itemcollection/getKamera/".$kategori;
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = 9;
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		// memanggil method di model
		$data['produk'] = $this->produk_model->retrieve_kamera($kategori, $config['per_page'], $this->uri->segment(5));

		$data['brand'] = $this->produk_model->count_brand();

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	

}

?>