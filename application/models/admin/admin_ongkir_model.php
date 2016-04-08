<?php

class Admin_ongkir_model extends CI_Model {

	function retrieve_ongkir($offset, $page) {
		$query = $this->db->get('ongkirjne', $offset, $page); // Select the table products
		// print_r($query);die();
		return $query->result_array(); // Return the results in a array.
	}

	public function get_ongkir($id){
		$this->db->where('id_ongkir_jne',$id);
		$query = $this->db->get('ongkirjne');

		return $query->row();
	}

	public function update_ongkir($id, $data){
		$this->db->where('id_ongkir_jne',$id);
		$this->db->update('ongkirjne', $data);

		return TRUE;
	}

	public function remove_checked(){
		$cekbox = $_POST['cekbox'];
	
		if ($cekbox) {
			foreach ($cekbox as $value) {
				$query = $this->db->query("DELETE FROM ongkirjne WHERE id_ongkir_jne = '$value'");
			}
		} else {

		}
		return $cekbox;
	}

	public function update_data($id, $data){
		$this->db->where('id_ongkir_jne', $id)
			     ->update('produk', $data);
		return TRUE;
	}

}

?>