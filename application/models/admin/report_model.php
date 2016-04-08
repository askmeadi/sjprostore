<?php
class Report_model extends CI_Model {
	//put your code here
	function __construct() {
		parent::__construct();
	}

	function select_data() {
		$this->db->select('*');
        $this->db->from('produk a'); 
        $this->db->join('kategori b', 'b.id_kategori=a.id_kategori', 'inner');
        $this->db->join('brand c', 'c.id_brand=a.id_brand', 'inner');
        $query = $this->db->get();
        return $query->result();
	}

	public function get_order(){
		$this->db->select('*');
        $this->db->from('db_sjpro.order a'); 
        $this->db->join('faktur b', 'b.id_faktur=a.id_faktur', 'inner');
        $this->db->join('pelanggan c', 'c.id_pelanggan=a.id_pelanggan', 'inner');
        $query = $this->db->get();
		// $query = $this->db->query("SELECT * FROM db_sjpro.order, faktur WHERE faktur.id_faktur = db_sjpro.order.id_faktur");
		return $query->result();
	}

	public function get_user(){
		$query = $this->db->get('pelanggan');
		return $query->result();
	}
}