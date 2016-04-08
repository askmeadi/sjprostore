<?php

class Data extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('account_model');
		$this->load->library('email');
		$this->load->model('order_model');
		$this->load->helper('form');
	}

	public function index($page = 'userdata') {

		$this->order_model->get_provinsi();
		$data['option_provinsi'] = $this->order_model->get_provinsi();

		// print_r("Masuk");
		$user = $this->session->userdata('username');

		// $data['person'] = $this->account_model->load_userdata($user);
		$data['person'] = $this->account_model->get_userdata($user);
		// foreach ($data as $key) {
		// 	print_r($key);
		// }
		// die();

		if($data['person'] == TRUE){
			// print_r("masuk userinfo");
			
			$data['title'] = ucfirst($page);
			$this->load->view('user/templates/header', $data);

			$this->load->view('user/pages/userinform' , $data);
			$this->load->view('user/templates/footer_payment', $data);
		}else {
			// print_r("masuk userdata");
			
			$this->order_model->get_provinsi();
			$data['option_provinsi'] = $this->order_model->get_provinsi();

			$data['title'] = ucfirst($page);
			$this->load->view('user/templates/header', $data);

			$this->load->view('user/pages/' . $page, $data);
			$this->load->view('user/templates/footer_payment', $data);
		}

	}

	public function edit(){
		$id = $this->input->post('userid');
		$data_pelanggan = array (
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			// 'provinsi' => $this->input->post('provinsi'),
			// 'kabupaten' => $this->input->post('kota'),
			// 'kecamatan' => $this->input->post('kecamatan'),
			// 'kelurahan' => $this->input->post('kelurahan'),
			'telepon' => $this->input->post('phoneNumber')
			);

		// print_r($data_pelanggan);die();
		$result = $this->account_model->edit_data($id, $data_pelanggan);

		if ($result == TRUE) {
			$this->session->set_flashdata('success', 'Update data berhasil dilakukan');
		} else {
			$this->session->set_flashdata('error', 'Update data gagal dilakukan');
		}

		redirect('user/data/');
	}

	public function ajax_subscribe() {
    if ($this->input->is_ajax_request()){
        $result = $this->subscribe();
        echo json_encode($result);
        exit;
    	}
	}

	public function subscribe(){

		$success = true;
   
	    if($success && !$this->input->get('email-subscribe')){
	        $message =  "No email address provided";
	        $success = false;
	    }
	    if ($success){
	        $this->load->library('mcapi', array(
	            'apikey' => $this->config->item('mcapi_apikey')
	        ));
	        if ($this->mcapi->listSubscribe($this->config->item('mcapi_list_id'), $this->input->get('email-subscribe')) === true){
	            //  It worked!
	            $message = 'Almost done! Cek email dan klik subscribe';
	        } else {
	            $success = false;
	            //  An error ocurred, return error message
	            $message =  'Error: ' . $this->mcapi->errorMessage;
	        }
	    }
	    return array('message' => $message, 'success' => $success);
		}


}

?>