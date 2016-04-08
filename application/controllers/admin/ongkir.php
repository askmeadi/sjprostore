<?php

class Ongkir extends CI_Controller {

	public function __construct() {
		parent::__construct();
	
		$this->load->helper('date');
		$this->load->library("pagination");
		$this->load->model('admin/admin_ongkir_model');

		$profil = $this->session->userdata('id_group');
		if ($profil != '3' && $profil !='2' ) {
			// print_r($profil);die();
			$this->session->set_flashdata('error', 'Maaf, silahkan login terlebih dahulu');
			redirect('produk/itemcollection/');
		}
	}

	public function index($offset = 0) {
		$page = 'ongkir';
		$data['title'] = ucfirst($page);

		// pagination start
		$num_rows = $this->db->count_all("ongkirjne");

		$config['base_url'] = base_url() . "admin/ongkir/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		// memanggil method di model
		$data['ongkir'] = $this->admin_ongkir_model->retrieve_ongkir($config['per_page'], $this->uri->segment(4));

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function edit_ongkir(){
		$id = $this->input->post('idongkir');
		$value = $this->input->post('biaya');

		$data = array(
				'reguler' => $value
				);

		// meload method di model
		$result = $this->admin_ongkir_model->update_ongkir($id, $data);

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
		}else {
			$this->session->set_flashdata('error', 'Update data gagal dilakukan');
		}
		redirect('admin/ongkir/');
	}

	public function update($id){
		$data = array(
				'city_code'  => $this->input->post('kode'),
				'kota_kabupaten'  => $this->input->post('daerah'),
				'reguler'	=> $this->input->post('biaya'),
				'etd_reguler' => $this->input->post('estimasi')
			);
		// print_r($data);die();
		$result = $this->admin_ongkir_model->update_data($id, $data);
		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
		}else {
			$this->session->set_flashdata('error', 'Update data gagal dilakukan');
		}
		redirect('admin/ongkir/','refresh');
	}

	public function delete(){
		$tes = $this->input->post('cekbox');
		// $data = $this->admin_produk_model->remove_checked($id_produk);
		$data = $this->admin_ongkir_model->remove_checked($tes);
		if ($data == TRUE) {
			$this->session->set_flashdata('success', 'Data berhasi dihapus');
		} else {
			$this->session->set_flashdata('error', 'Data tidak berhasil dihapus');
		}
		redirect('admin/ongkir/');
	}

	public function edit_ekspedisi($id){
		$page = 'edit_ongkir';
		$data['title'] = ucfirst($page);

		$data['ongkir'] = $this->admin_ongkir_model->get_ongkir($id);

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function hapus($id){
		$this->db->where('id_ongkir_jne', $id);
		$data = $this->db->delete('ongkirjne');
	}

}