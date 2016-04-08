<?php

class Admin_account_model extends CI_Model {

	var $tabel_admin = 'user';

	public function login($username, $password) {
		$sql = 'SELECT * FROM admin where username="' . $username . '" AND password="' . $password . '";';
		$hasil = $this->db->query($sql);
		if ($hasil->num_rows() == 1) {
			$data = array('username' => $username, 'login' => TRUE);
			$this->session->set_userdata('akun', $data);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function validasi() {
		// grab user input
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Prep the query
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		// Run the query
		$query = $this->db->get('admin');
		// Let's check if there are any results
		if ($query->num_rows == 1) {
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
				'userid' => $row->userid,
				'username' => $row->username,
				'validated' => true,
			);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}

	public function retrieve_pelanggan($offset, $page) {
		$query = $this->db->get('pelanggan', $offset, $page); // Select the table products
		return $query->result_array(); // Return the results in a array.
	}

	// buat akun admin/tambah data
	public function insert_admin(){
		$data_admin = array(
			'username' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'id_group' => '3'
		);

		$this->db->insert($this->tabel_admin, $data_admin);
		return TRUE;
	}

	// ambil data admin
	public function retrieve_admin(){
		$this->db->select('*')->from('user');
		$this->db->where('id_group = 3');
		$query = $this->db->get(); // Select the table admin
		return $query->result_array(); // Return the results in a array.
	}

	// multiple delete data admin
	public function remove_checked() {
		$cekbox = $_POST['cekbox'];
		if ($cekbox) {
			foreach ($cekbox as $value) {
				$query = $this->db->query("DELETE FROM user WHERE id_user = '$value'");

			}
		} else {

		}
		return $cekbox;
	}

	public function remove($id){
		$query = $this->db->query("DELETE FROM USER WHERE id_user='$id'");
		return TRUE;
	}
}

?>