<?php

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('admin/admin_account_model');
	}

	public function index($msg = NULL) {
		$data['msg'] = $msg;
		$this->load->view('admin/pages/login', $data);
	}

	public function process() {
		// Load the model
		$this->load->model('admin/admin_account_model');
		// Validate the user can login
		$result = $this->admin_account_model->validasi();
		// Now we verify the result
		if (!$result) {
			$msg = "Username/Password yang anda masukkan salah";
			$this->index($msg);
		} else {
			// If user did validate,
			// Send them to members area
			redirect('admin/akun/login_sukses');
		}
	}

}

?>