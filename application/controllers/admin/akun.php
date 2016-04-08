<?php

class Akun extends CI_Controller {

	public function __construct() {
		parent::__construct();


		$this->load->library("pagination");
		$this->load->model('account_model');
		$this->load->model('admin/admin_account_model');
		$this->load->model('admin/admin_produk_model');
		$this->load->model('admin/admin_order_model');

		$profil = $this->session->userdata('id_group');
		if ($profil != '3' && $profil !='2' ) {
			// print_r($profil);die();
			$this->session->set_flashdata('error', 'Maaf, silahkan login terlebih dahulu');
			redirect(base_url());
		}

	}

	public function login_sukses($page = 'dashboard') {
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function index($page = 'dashboard') {

		// memanggil method di model
		$data['produk'] = $this->admin_produk_model->count_product();

		// memanggil method di model
		$data['member'] = $this->admin_produk_model->count_member();

		// memanggil method di model
		$data['order'] = $this->admin_produk_model->count_order();

		$data['top'] = $this->admin_produk_model->get_top_product();

		// memanggil method di model
		$data['last_order'] = $this->admin_order_model->retrieve_last_order();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);

	}

	public function admin($page = 'admin') {

		$data['admin'] = $this->admin_account_model->retrieve_admin();

		$data['title'] = ucfirst($page);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function pelanggan($offset = 0){
		$page = 'pelanggan';
		$num_rows = $this->db->count_all("pelanggan");

		$config['base_url'] = base_url() . "admin/akun/pelanggan/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data['pelanggan'] = $this->admin_account_model->retrieve_pelanggan($config['per_page'], $this->uri->segment(4));

		$data['title'] = ucfirst($page);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// tambah data admin
	public function create_admin() {

		// memanggil fungsi di model
		$data = $this->admin_account_model->insert_admin();

		// menampilkan alert jika data berhasil/gagal dibuat
		if ($data == TRUE) {
			$this->session->set_flashdata('success', '<strong>yeah..</strong> data berhasil ditambahkan');
		} else {
			$this->session->set_flashdata('error', '<strong>Oopsss..</strong> data gagal ditambahkan');
		}

		// redirect ke controller
		redirect('admin/akun/admin');
	}

	// multiple delete admin
	public function delete_admin($id_user){

		// memanggil fungsi di model
		$this->admin_account_model->remove_checked();

		// menampilkan alert jika data berhasil/gagal dihapus
		if ($this->admin_account_model->remove_checked($id_user) == TRUE) {
			$this->session->set_flashdata('success', '<strong>yeah..</strong> data berhasil dihapus');
		} else {
			$this->session->set_flashdata('error', '<strong>Oopsss..</strong> data gagal dihapus');
		}

		// redirect ke controller 
		redirect('admin/akun/admin');
	}

	public function delete($id){
		$result = $this->admin_account_model->remove($id);

		// menampilkan alert jika data berhasil/gagal dihapus
		if ($result == TRUE) {
			$this->session->set_flashdata('success', '<strong>yeah..</strong> data berhasil dihapus');
		} else {
			$this->session->set_flashdata('error', '<strong>Oopsss..</strong> data gagal dihapus');
		}

		// redirect ke controller 
		redirect('admin/akun/admin');
	}
}

