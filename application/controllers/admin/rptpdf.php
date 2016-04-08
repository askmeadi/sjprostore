<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Rptpdf extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		// $this->load->library('fpdf');
		$this->load->model('admin/report_model');
		
	}

	public function index($page = 'pdf-produk') {
		$res['data'] = $this->report_model->select_data();
		// print_r($res);die();
        $this->load->view('admin/pages/' . $page, $res);
	}

	public function order($page = 'pdf-order') {
		$res['data'] = $this->report_model->get_order();
	
        $this->load->view('admin/pages/' . $page, $res);
	}

	public function pelanggan($page = 'pdf-pelanggan'){
		$res['data'] = $this->report_model->get_user();
	
        $this->load->view('admin/pages/' . $page, $res);
	}
}

?>