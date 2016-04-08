<?php

class log extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$profil = $this->session->userdata('id_group');
		if ($profil != '3' && $profil !='2' ) {
			// print_r($profil);die();
			$this->session->set_flashdata('error', 'Maaf, silahkan login terlebih dahulu');
			redirect('produk/itemcollection/');
		}

		$this->load->library("pagination");
		$this->load->model('admin/admin_log_model');
	}

	public function index($offset = 0) {
		$page = 'produk_log';
		$data['title'] = ucfirst($page);

		// pagination start

		$num_rows = $this->db->count_all("produk_log");

		$config['base_url'] = base_url() . "admin/log/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		// memanggil method di model
		$data['produk_log'] = $this->admin_log_model->get_product_log($config['per_page'], $this->uri->segment(4));

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);

	}

	public function penjualan_log($offset = 0){
		$page = 'penjualan_log';
		$data['title'] = ucfirst($page);

		// pagination start

		$num_rows = $this->db->count_all("order_log");

		$config['base_url'] = base_url() . "admin/log/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		// memanggil method di model
		$data['order_log'] = $this->admin_log_model->get_order_log($config['per_page'], $this->uri->segment(4));

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function delete_produk($id){
		$data = $this->admin_log_model->remove_produk_log($id);
		
		if ($data) {
			$this->session->set_flashdata('success', 'Data berhasi dihapus');
		} else {
			$this->session->set_flashdata('error', 'Data tidak berhasil dihapus');
		}
		redirect('admin/log/');
	}

	public function delete_order($id){
		$data = $this->admin_log_model->remove_order_log($id);
		
		if ($data) {
			$this->session->set_flashdata('success', 'Data berhasi dihapus');
		} else {
			$this->session->set_flashdata('error', 'Data tidak berhasil dihapus');
		}
		redirect('admin/log/penjualan_log');
	}

	
}

?>