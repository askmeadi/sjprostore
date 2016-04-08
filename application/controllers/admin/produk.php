<?php

class Produk extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library("pagination");
		
		$this->load->helper('form');
		$this->load->model('cart_model');
		$this->load->model('admin/admin_produk_model');
		$this->load->model('admin/admin_order_model');

		$profil = $this->session->userdata('id_group');
		if ($profil != '3' && $profil !='2' ) {
			// print_r($profil);die();
			$this->session->set_flashdata('error', 'Maaf, silahkan login terlebih dahulu');
			redirect('produk/itemcollection/');
		}

	}

	public function index($offset = 0) {
		$page = 'produk';
		$data['title'] = ucfirst($page);

		// pagination start

		$num_rows = $this->db->count_all("produk");

		$config['base_url'] = base_url() . "admin/produk/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		// memanggil method di model
		$data['produk'] = $this->cart_model->retrieve_products($config['per_page'], $this->uri->segment(4));

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);

	}

	public function delete() {
		$tes = $this->input->post('cekbox');
		// $data = $this->admin_produk_model->remove_checked($id_produk);
		$data = $this->admin_produk_model->remove_checked($tes);
		if ($data == TRUE) {
			$this->session->set_flashdata('success', 'Data berhasi dihapus');
		} else {
			$this->session->set_flashdata('error', 'Data tidak berhasil dihapus');
		}
		redirect('admin/produk/');
	}

	public function edit() {
		$id = $this->input->post('idfaktur');
		$value = $this->input->post('status');

		$data = array(
				'status' => $value
				);

		// meload method di model
		$result = $this->admin_order_model->update_status($id, $data);

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
		}else {
			$this->session->set_flashdata('error', 'Update data gagal dilakukan');
		}
		redirect('admin/penjualan');
	}

	// public function edit_statusprod() {
	// 	$id = $this->input->post('idproduk');
	// 	$value = $this->input->post('status_produk');

	// 	$data = array(
	// 			'status_produk' => $value
	// 			);

	// 	// meload method di model
	// 	$result = $this->admin_order_model->update_statusprod($id, $data);

	// 	if ($result == TRUE) {
	// 		$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
	// 	}else {
	// 		$this->session->set_flashdata('error', 'Update data gagal dilakukan');
	// 	}
	// 	redirect('admin/produk');
	// }

	public function update($id, $kategori){
		$path = $this->input->post('path');
		if (isset($_FILES['userfile']['name']) && !empty($_FILES['userfile']['name'])) {
			if (unlink('asset/user/img/produk/'.$path)) {

			$config['upload_path'] = './asset/user/img/produk/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '300'; //MB
			$config['max_width'] = '2000'; //PIXELS
			$config['max_height'] = '2000'; //PIXELS

			$this->load->library('upload', $config);

				if (!$this->upload->do_upload()) {
					echo "error";
				} else {
					$data = $this->upload->data();
					$pic = array(
							'file_name' => $data['file_name']
						);
				}

			if ($kategori != 'sjp1') {

				$data_produk = array(
				'id_kategori' => $this->input->post('kategori'),
				'nama_produk' => $this->input->post('nama_produk'),
				'gambar' => $pic['file_name'],
				'harga_produk' => $this->input->post('harga_produk'),
				'stok' => $this->input->post('stok_produk'),
				
				'made_produk' => $this->input->post('made_produk'),
				'garansi_produk' => $this->input->post('garansi_produk'),
				'jenis_garansi' => $this->input->post('jenis_garansi'),
				'deskripsi_produk' => $this->input->post('deskripsi_produk'),
				'id_brand' => $this->input->post('brand')
				);

				$result = $this->admin_produk_model->update($id, $data_produk);

			} else {

				$data_produk = array(
				'id_kategori' => $this->input->post('kategori'),
				'nama_produk' => $this->input->post('nama_produk'),
				'gambar' => $pic['file_name'],
				'harga_produk' => $this->input->post('harga_produk'),
				'stok' => $this->input->post('stok_produk'),
				
				'made_produk' => $this->input->post('made_produk'),
				'garansi_produk' => $this->input->post('garansi_produk'),
				'jenis_garansi' => $this->input->post('jenis_garansi'),
				'deskripsi_produk' => $this->input->post('deskripsi_produk'),
				'id_brand' => $this->input->post('brand'),
				);

				$data_fitur = array(
				'photo_format' => $this->input->post('photo_format'),
				'video_format' => $this->input->post('video_format'),
				'ports' => $this->input->post('ports'),
				'storage' => $this->input->post('storage'),
				'baterai' => $this->input->post('baterai')
				);

				// print_r($data_produk);die();

				$result = $this->admin_produk_model->update($id, $data_produk, $data_fitur);

			}

			}
		}
		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
		}else {
			$this->session->set_flashdata('error', 'Update data gagal dilakukan');
		}
		redirect('admin/produk/','refresh');
	}

	public function create() {
		// load uploading file library
		$config['upload_path'] = './asset/user/img/produk/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']	= '300'; //MB
		$config['max_width'] = '2000'; //PIXELS
		$config['max_height'] = '2000'; //PIXELS

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()) {
			$this->session->set_flashdata('error', '<strong>Oopsss..</strong> data gagal ditambahkan');
			redirect('admin/produk');
		} else {
			// File berhasil diupload -> eksekusi query insert
			$gambar = $this->upload->data();

				if ($this->input->post('kategori') != 'sjp1') {
					$data_produk = array(
					'kode_produk' => $this->input->post('kode_produk'),
					'id_kategori' => $this->input->post('kategori'),
					'nama_produk' => $this->input->post('nama_produk'),
					'gambar' => $gambar['file_name'],
					'stok' => $this->input->post('stok_produk'),
					'harga_produk' => $this->input->post('harga_produk'),
					
					'made_produk' => $this->input->post('made_produk'),
					'garansi_produk' => $this->input->post('garansi_produk'),
					'jenis_garansi' => $this->input->post('jenis_garansi'),
					'deskripsi_produk' => $this->input->post('deskripsi_produk'),
					'id_brand' => $this->input->post('brand')
					);

					$result = $this->admin_produk_model->create_produk($data_produk);

				} else {
					$data_produk = array(
					'kode_produk' => $this->input->post('kode_produk'),
					'id_kategori' => $this->input->post('kategori'),
					'nama_produk' => $this->input->post('nama_produk'),
					'gambar' => $gambar['file_name'],
					'stok' => $this->input->post('stok_produk'),
					'harga_produk' => $this->input->post('harga_produk'),
				
					'made_produk' => $this->input->post('made_produk'),
					'garansi_produk' => $this->input->post('garansi_produk'),
					'jenis_garansi' => $this->input->post('jenis_garansi'),
					'deskripsi_produk' => $this->input->post('deskripsi_produk'),
					'id_brand' => $this->input->post('brand'),
					);
					$data_fitur = array(
					'photo_format' => $this->input->post('photo_format'),
					'video_format' => $this->input->post('video_format'),
					'ports' => $this->input->post('ports'),
					'storage' => $this->input->post('storage'),
					'baterai' => $this->input->post('baterai')
					);

					// print_r($data_fitur);die();

					$result = $this->admin_produk_model->create_produk($data_produk, $data_fitur);
				}

			if ($result =  TRUE) {
			$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
			}else {
				$this->session->set_flashdata('error', 'Update data gagal dilakukan');
			}

			// print_r($data_produk);die();
			redirect('admin/produk');
		}
	}

	public function hapus($id, $path, $kategori){
		// meload method di model

		if($kategori != 'sjp1'){
			$this->db->where('id_produk', $id);
			$data = $this->db->delete('produk');
			unlink(FCPATH.'asset/user/img/produk/'.$path);
		}else{
			// select id_fitur
			$id_fitur = $this->admin_produk_model->get_idfitur($id);
			$id_fitur = $id_fitur[0]['id_fitur'];
			
			// delete process
			$data = $this->admin_produk_model->delete($id, $id_fitur);
			unlink(FCPATH.'asset/user/img/produk/'.$path);
		}

		// menampilkan alert jika data berhasil/gagal dihapus
		if ($data) {
			$this->session->set_flashdata('success', '<strong>YEAH..</strong>Hapus data berhasil dilakukan');
		} else {
			$this->session->set_flashdata('error', '<strong>OOPSSS..</strong>Hapus data gagal dilakukan');
		}

		// // meredirect ke controller
		redirect('admin/produk/');
	}

	public function tambah_produk($page = 'add_produk'){
		$data['brand'] = $this->cart_model->get_brand();

		$data['kategori'] = $this->cart_model->get_kategori();

		$data['title'] = ucfirst($page);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

	public function edit_produk($id){
		$page = 'edit_produk';
		$data['title'] = ucfirst($page);

		$data['produk'] = $this->cart_model->get_produk($id);

		$data['brand'] = $this->cart_model->get_brand();

		$data['kategori'] = $this->cart_model->get_kategori();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/pages/' . $page, $data);
		$this->load->view('admin/templates/footer', $data);
	}

}

