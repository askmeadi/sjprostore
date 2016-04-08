<?php

class Cart_model extends CI_Model {
	
	function retrieve_products($offset, $page) {
		$query = $this->db->get('produk', $offset, $page); // Select the table products
		// print_r($query);die();
		return $query->result_array(); // Return the results in a array.
	}

	public function test($id) {

		$get_kat = $this->db->query('SELECT id_produk, id_kategori FROM produk WHERE id_produk = '.$id);
		$hasil = $get_kat->result();  

		if ($hasil[0]->id_kategori != 'sjp1') {
			
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->where('id_produk = "' . $id . '"');
			$query = $this->db->get();

		} else {

			$this->db->select('p.*, f.*');
			$this->db->from('produk p, fitur f, fitur_produk e');
			$this->db->where('p.id_produk = e.id_produk');
			$this->db->where('f.id_fitur = e.id_fitur');
			$this->db->where('p.id_produk = "' . $id . '"');
			$query = $this->db->get();

		}
		
		return $query->result_array();
	}

	public function find($id) {
		$hasil = $this->db->where('id_produk', $id)->limit(1)->get('produk');
		if ($hasil->num_rows() > 0) {
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function get_produk($id){
		 $this->db->select('*');
            $this->db->from('produk a'); 
            $this->db->join('kategori b', 'b.id_kategori=a.id_kategori', 'inner');
            $this->db->join('brand c', 'c.id_brand=a.id_brand', 'inner');
            $this->db->join('fitur_produk d', 'd.id_produk=a.id_produk', 'inner');
            $this->db->join('fitur e', 'e.id_fitur=d.id_fitur', 'inner');
            $this->db->where('a.id_produk',$id);
            $query = $this->db->get(); 
          
            if($query->num_rows() != 0)
            {
                return $query->row();
            }
            else
            {
                return array();
            }
	}

	public function get_brand(){
		$brand = $this->db->get('brand');
		return $brand->result();
	}

	public function get_kategori(){
		$kategori = $this->db->get('kategori');
		return $kategori->result();
	}

}

?>