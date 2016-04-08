<?php

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('account_model');
		$this->load->model('produk_model');
		$this->load->library('email');
		// $this->load->helper('text');
	}

	public function index($page = 'home') {
		$this->session->set_flashdata('error', 'username/password salah');

		$data['title'] = ucfirst($page);

		$data['produk'] = $this->produk_model->random_products();

		$data['rekomendasi'] = $this->produk_model->recommend_products();
		$data['top'] = $this->produk_model->top_products();
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function signup() {
		$this->account_model->simpan();

		redirect('produk/itemcollection/','refresh');
	}

	public function signin() {
		$query = $this->account_model->validate();

		if ($query) {
			$data = array(
				'username' => $this->input->post('nama'),
				'is_user_logged_in' => true
				);

			$this->session->set_userdata($data);
			$this->session->set_userdata('id_group', $query->id_group);

			switch ($query->id_group) {
				case 1 : //member
					redirect('produk/item/');
					break;
				case 2 : //superadmin
					redirect(base_url('admin/akun/'));
					break;
				case 3 : //admin
					redirect(base_url('admin/akun/'));
					break;
				default:
					break;
			}
		
		} else {
			$this->session->set_flashdata('error', 'username/password salah');
			redirect('user/account/');
		}
		 
		// echo "tes";

	}

	public function signout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function send_email() {
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'adisatria1993@gmail.com',
			'smtp_pass' => 'menggala1993',
			'mailtype'  => 'html', 
    		'charset' => 'iso-8859-1',
      		'wordwrap' => TRUE
			);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('adisatria1993@gmail.com', 'Admin');
		$this->email->to('lingkartechno@gmail.com');
		$this->email->subject('Konfirmasi Pembelian');
		$this->email->message('Dear , tes');

		if($this->email->send()){
			echo "berhasil coy!!!";
		} else {
			show_error($this->email->print_debugger());
		}
	}	

}

?>