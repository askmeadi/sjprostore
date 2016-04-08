<?php

class Penjualan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	
		$this->load->helper('date');
		$this->load->library("pagination");
		$this->load->model('cart_model');
		$this->load->model('admin/admin_order_model');

		$profil = $this->session->userdata('id_group');
		if ($profil != '3' && $profil !='2' ) {
			// print_r($profil);die();
			$this->session->set_flashdata('error', 'Maaf, silahkan login terlebih dahulu');
			redirect('produk/itemcollection/');
		}
	}

	public function index($offset = 0) {
		$page = 'penjualan';
		$data['title'] = ucfirst($page);

		// pagination start
		$num_rows = $this->db->count_all("faktur");

		$config['base_url'] = base_url() . "admin/penjualan/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		// memanggil method di model
		$data['full_order'] = $this->admin_order_model->get_all_order($config['per_page'], $this->uri->segment(4));

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function detail($id){
		$page = 'penjualan_detail';
		$data['title'] = ucfirst($page);

		$data['detail'] = $this->admin_order_model->get_detail($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function delete($no_order){
		$data = $this->admin_order_model->remove_checked($no_order);
		
		if ($data) {
			$this->session->set_flashdata('success', 'Data berhasi dihapus');
		} else {
			$this->session->set_flashdata('error', 'Data tidak berhasil dihapus');
		}
		redirect('admin/penjualan/');
	}

}