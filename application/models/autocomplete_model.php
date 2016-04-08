<?php

class Autocomplete_model extends CI_Model {

	public function get($q) {
		$this->db->select('nama_produk');
		$this->db->like('nama_produk', $q);
		$query = $this->db->get('produk');
		if ($query->num_rows > 0) {
			foreach ($query->result_array() as $row) {
				$row_set[] = htmlentities(stripslashes($row['nama_produk'])); //build an array
			}
			echo json_encode($row_set); //format the array into json data
		}
	}

}

?>