<?php

class Item extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('cart_model');
		$this->load->model('produk_model');
	}

	public function index($offset = 0) {
		$page = 'shop';
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

		// memanggil method di model
		$data['produk'] = $this->cart_model->retrieve_products($config['per_page'], $this->uri->segment(4));

		$data['brand'] = $this->produk_model->count_brand();

		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function detail($id) {
		$page = 'detail';
		$data['title'] = ucfirst($page);

		$this->cart_model->test($id);
		$data['produk'] = $this->cart_model->test($id);

		// print_r($data['produk']);die();

		$this->load->view('user/templates/header', $data);
		// $this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function filter_produk(){
		$bcheck = $this->input->post('bcheck');
		print_r($bcheck);die();
		if(!empty($bcheck)) {		
			if(strstr($bcheck,',')) {
				$data1 = explode(',',$bcheck);
				$barray = array();
				foreach($data1 as $c) {
					$barray[] = "t1.Brand = $c";
				}
				$WHERE[] = '('.implode(' OR ',$barray).')';
			} else {
				$WHERE[] = '(t1.Brand = '.$bcheck.')';
			}
		}
	}

}

?>