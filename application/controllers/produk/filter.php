<?php

class Filter extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("pagination");
		$this->load->helper('url');
		$this->load->model('search_model');
		$this->load->model('cart_model');
	}

	public function cari($page = 'product') {
		$data['title'] = ucfirst($page);
		$keyword = $this->input->post('keyword');

		$data['results'] = $this->search_model->getData($keyword);
		// print_r($data);die();
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function track_order($page = 'orderstatus'){
		$data['title'] = ucfirst($page);
		$orderkey = $this->input->post('orderkey');

		$data['results'] = $this->search_model->getOrder($orderkey);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer_payment', $data);
	}

	public function filter_produk() {

		// $num_rows = $this->db->count_all("produk");

		// $config['base_url'] = base_url() . "produk/item/index/";
		// $config['total_rows'] = $num_rows;
		// $config['per_page'] = 9;
		// $config['uri_segment'] = 4;
		// $this->pagination->initialize($config);

		// $data['pagination'] = $this->pagination->create_links();

		// // memanggil method di model
		// $data['produk'] = $this->cart_model->retrieve_products($config['per_page'], $this->uri->segment(4));

		$produk = $this->search_model->getBrand();
		// print_r($produk);die();
		if ($produk) {
		$html = $this->buildProdHTML($produk);
        echo $html;
		} else {
			echo '<div class="alert alert-danger"><center> Data tidak ditemukan </center></div>';
		}
	}

	public function buildProdHTML($produk) {
        $html = $this->load->view("user/templates/product", array("produk" => $produk), TRUE);
        return $html;
    }

    //coba
    public  function  uncheck(){

    	$num_rows = $this->db->count_all("produk");

		$config['base_url'] = base_url() . "produk/item/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 9;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

    	$produk = $this->search_model->getAll($config['per_page'], $this->uri->segment(4));

    	if ($produk) {
		$html = $this->buildProdHTML($produk);
        echo $html;
		} else {
			
		}
    }

}
?>