<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Account_model extends CI_Model {

	var $tabel_pelanggan = 'pelanggan';

	public function simpan() {
		$data_baru = array(
			'username' => $this->input->post('nama'),
			'password' =>  md5($this->input->post('password')),
			'id_group' => '1'
		);

		$this->db->insert($this->tabel_pelanggan, $data_baru);
	}

	public function checkout_simpan() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'id_provinsi' => $this->input->post('provinsi_id'),
			'id_kabupaten' => $this->input->post('kota_id'),
			'id_kecamatan' => $this->input->post('kecamatan_id'),
			'id_kelurahan' => $this->input->post('kelurahan_id'),
			'telepon' => $this->input->post('phoneNumber')
		);
		print_r($data);die();

		$this->db->insert($this->tabel_pelanggan, $data);
	}

	function validate() {
		$this->db->where('username', $this->input->post('nama'));
		$this->db->where('password', md5($this->input->post('password')));

		$query = $this->db->get('user');

		if ($query->num_rows == 1) {
			return $query->row();
		} else {
			return array();
		}
	}

	function simpan_email(){
		$data = array(
				'email' => $this->input->post('email_subscribe') 
					);
		$this->db->insert('pelanggan', $data);
	}

	public function load_userdata($user){
		$query = $this->db->query('SELECT * FROM pelanggan, user WHERE pelanggan.id_user = user.id_user AND user.username = "'.$user.'"');
		return $query->result_array();
	}

	public function get_userdata($user){
		$query = $this->db->query('SELECT * FROM pelanggan,user,provinsi,kabupaten,kecamatan,kelurahan WHERE pelanggan.id_user = user.id_user AND pelanggan.id_provinsi = provinsi.id_provinsi AND pelanggan.id_kabupaten = kabupaten.id_kabupaten AND pelanggan.id_kecamatan = kecamatan.id_kecamatan AND pelanggan.id_kelurahan = kelurahan.id_kelurahan AND user.username = "'.$user.'"');
		return $query->result_array();
	}

	public function edit_data($id, $data_pelanggan){
		$this->db->where('id_pelanggan', $id)
				 ->update('pelanggan', $data_pelanggan);
		return TRUE;
	}

}

?>