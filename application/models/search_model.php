<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/**
 *
 */
class Search_model extends CI_model {

	public function __construct() {
		parent::__construct();
	}

	public function getData($keyword) {
		$this->db->like('nama_produk', $keyword);
		$query = $this->db->get('produk');
		return $query->result();
	}

	public function getOrder($orderkey){
		$this->db->where('order_key', $orderkey);
		
		$this->db->from('order');
		$this->db->join('faktur', 'order.id_faktur = faktur.id_faktur');

		$query = $this->db->get();
		return $query->result();
	}

	public function getBrand() {
		$cekbox = $_POST['bcheck'];
		// $jenis = $this->input->post('jenis');
		// print_r($jenis);
		// die();
		// $query = $this->db->get_where('produk', array('id_brand' => $cekbox));
		
		$query = $this->db->query("SELECT * FROM produk WHERE id_brand IN ($cekbox)");
		return $query->result(); // Return the results in a array.
	}

	//coba
	public  function  getAll($offset, $page){
		// $cekbox = $_POST['bcheck'];
		$query = $this->db->get('produk', $offset, $page);
		return $query->result();
	}
}

?>