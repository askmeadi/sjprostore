<?php

class admin_log_model extends CI_Model {
	public function get_product_log($offset, $page) {
		$query = $this->db->get('produk_log', $offset, $page); // Select the table products
		return $query->result_array(); // Return the results in a array.
	}

	public function get_order_log($offset, $page){
		$query = $this->db->get('order_log', $offset, $page); // Select the table products
		return $query->result_array(); // Return the results in a array.
	}

	public function remove_produk_log(){
		$cekbox = $_POST['cekbox'];
	
		if ($cekbox) {
			foreach ($cekbox as $value) {
				$query = $this->db->query("DELETE FROM produk_log WHERE id_produk_log = '$value'");
			}
		} else {

		}
		return $cekbox;
	}

	public function remove_order_log(){
		$cekbox = $_POST['cekbox'];
	
		if ($cekbox) {
			foreach ($cekbox as $value) {
				$query = $this->db->query("DELETE FROM order_log WHERE no_order_log = '$value'");
			}
		} else {

		}
		return $cekbox;
	}
}

?>