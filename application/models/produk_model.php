<?php

class Produk_model extends CI_Model {

	public function retrieve_products($offset, $page) {
		$query = $this->db->query('SELECT * FROM produk, kategori WHERE produk.id_produk = kategori.id_kategori', $offset, $page); 
		return $query->result_array(); 
	}

	public function random_products() {
		$query = $this->db->query('SELECT * FROM produk ORDER BY RAND() LIMIT 0,4');
		return $query->result_array();
	}

	public function recommend_products(){
		$query = $this->db->query('SELECT * FROM produk, kategori WHERE produk.id_kategori=kategori.id_kategori AND nama_kategori="kamera"');
		return $query;
	}

	public function top_products(){
		$query = $this->db->query('SELECT * FROM db_sjpro.order o, produk p WHERE p.id_produk = o.id_produk GROUP BY o.id_produk ORDER BY COUNT(*) DESC LIMIT 5');
		return $query;
	}

	public function retrieve_kamera($kategori, $offset=null, $number=null){
		if (!isset($offset) && !isset($number)){

			$query = $this->db->query('SELECT * FROM produk, brand WHERE brand.id_brand = produk.id_brand AND brand.brand="'.$kategori.'"');
			return $query;

		}elseif (!isset($number) || $number=='') {
			$query = $this->db->query('SELECT * FROM produk, brand WHERE brand.id_brand = produk.id_brand AND brand.brand="'.$kategori.'" limit 0,'.$offset); 
		}else {
			$query = $this->db->query('SELECT * FROM produk, brand WHERE brand.id_brand = produk.id_brand AND brand.brand="'.$kategori.'" limit '.$number.','.$offset); 
		}
		return $query->result_array();
	}

	public function count_brand(){
		$query = $this->db->get('brand');
		return $query->result_array();
	}

	


}

?>