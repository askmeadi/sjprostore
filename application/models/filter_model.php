<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 *
 */
class Filter_model extends CI_model {
	public function __construct() {
		parent::__construct();
	}

	public function getDataMahal($key) {
		$this->db->select("*");
		$this->db->from("produk");
		$this->db->order_by("harga_produk", "desc");
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getDataMurah($key) {
		$this->db->select("*");
		$this->db->from("produk");
		$this->db->order_by("harga_produk", "asc");
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getDataAlfabet($key) {
		$this->db->select("*");
		$this->db->from("produk");
		$this->db->order_by("nama_produk", "asc");
		$data = $this->db->get();
		return $data->result_array();
	}

}
?>