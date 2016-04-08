<?php

class Admin_order_model extends CI_Model {

	public function retrieve_last_order(){
		$query = $this->db->query('SELECT * FROM db_sjpro.order, faktur WHERE faktur.id_faktur = db_sjpro.order.id_faktur LIMIT 5');
		return $query->result_array();
	}

	public function get_all_order($offset, $page){
		// print_r($page);die();
	    $this->db->where('faktur.id_faktur = db_sjpro.order.id_faktur');
	    $query = $this->db->get('order, faktur', $offset, $page);
	    // print_r($query);die();
		return $query->result_array();
		// $query = $this->db->query("SELECT * FROM db_sjpro.order, faktur WHERE faktur.id_faktur = db_sjpro.order.id_faktur", $offset, $page);
		// print_r($query);die();
		// return $query->result_array();
	}

	public function update_status($id, $data){
		$this->db->where('no_order',$id);
		$this->db->update('order', $data);

		return TRUE;
	}

	public function update_statusprod($id, $data){
		$this->db->where('id_produk',$id);
		$this->db->update('produk', $data);

		return TRUE;
	}

	public function get_detail($id){
		$query = $this->db->query("SELECT * FROM db_sjpro.order, produk, faktur, pelanggan, provinsi, kabupaten, kecamatan, kelurahan WHERE
		 db_sjpro.order.id_produk = produk.id_produk AND faktur.id_faktur = db_sjpro.order.id_faktur AND 
		 db_sjpro.order.id_pelanggan = pelanggan.id_pelanggan AND pelanggan.id_provinsi = provinsi.id_provinsi AND 
		 pelanggan.id_kabupaten = kabupaten.id_kabupaten AND pelanggan.id_kecamatan = kecamatan.id_kecamatan AND 
		 pelanggan.id_kelurahan = kelurahan.id_kelurahan AND no_order = '$id'");
		return $query->result_array();
	}

	public function remove_checked(){
		$cekbox = $_POST['cekbox'];
	
		if ($cekbox) {
			foreach ($cekbox as $value) {
				$query = $this->db->query("DELETE FROM db_sjpro.order WHERE no_order = '$value'");
			}
		} else {

		}
		return $cekbox;
	}

}

?>