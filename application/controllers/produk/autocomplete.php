<?php

class Autocomplete extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('autocomplete_model');
	}

	public function GetDataProduk() {
		$this->load->model('autocomplete_model');
		if (isset($_GET['term'])) {
			$q = strtolower($_GET['term']);
			$this->autocomplete_model->get($q);
		}
	}

}

?>