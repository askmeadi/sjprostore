<?php

class Admin_produk_model extends CI_Model {

	public function remove_checked($tes) {

		if(is_array($tes) && sizeof($tes) > 0){
		    $temp_ids = array();
		    $delete_ids = array();
		   
		    $errors = array();
		    $this->db->where_in('id_produk',$tes);
		    $query = $this->db->get('produk');
		    $this->db->where_in('id_produk',$tes);
		    $this->db->select('id_kategori');
		    $kategori = $this->db->get('produk');
		    $data['idk'] = $kategori->result();

		    foreach($data['idk'] as $row)
		      {
		        $kat = $row->id_kategori;
		      }

		    if ($kat != 'sjp1') {

		   	if($query->num_rows()>0)
		    {
		      foreach($query->result() as $row)
		      {
		        $temp_ids[$row->id_produk] = $row->gambar;
		      }
		    }
		    foreach($temp_ids as $id=>$file)
		    {
		      $path = 'asset/user/img/produk/'.$file;
		      if(unlink($path))
		      {
		        $delete_ids[] = $id;
		      }
		      else
		      {
		        $errors[] = 'Couldn\'t delete file '.$file;
		      }
		    }
		    $this->db->where_in('id_produk',$delete_ids);
		    $this->db->delete('produk');

		    } else {

		   	$this->db->get('fitur_produk');
		   	$this->db->get('fitur');

		    if($query->num_rows()>0)
		    {
		      foreach($query->result() as $row)
		      {
		        $temp_ids[$row->id_produk] = $row->gambar;
		      }
		    }
		    foreach($temp_ids as $id=>$file)
		    {
		      $path = 'asset/user/img/produk/'.$file;
		      if(unlink($path))
		      {
		        $delete_ids[] = $id;
		      }
		      else
		      {
		        $errors[] = 'Couldn\'t delete file '.$file;
		      }
		    }
		    $this->db->where_in('id_produk',$delete_ids);
		    $this->db->select('id_fitur');
		    $idf = $this->db->get('fitur_produk');
		    $id_kat = $idf->result();
		    $hasil = $id_kat[0]->id_fitur;

		    $this->db->where_in('id_produk',$delete_ids);
		    $this->db->delete('fitur_produk');
		    $this->db->where_in('id_produk',$delete_ids);
		    $this->db->delete('produk');
		    
		    // $idf = "SELECT id_fitur FROM fitur_produk WHERE id_produk='$delete_ids'";
		    // $hasil = $this->db->query($idf);
		    // $data = $hasil->result();
		    // print_r($hasil);die();
		    $this->db->where_in('id_fitur',$hasil);
		    $this->db->delete('fitur');

		    }

		    if(sizeof($errors)>0)
		    {
		      return $errors;
		    }
		    return true;
		  }
	}

	public function remove_produk(){
		$id = $this->input->post('id_produk');
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}

	public function find($id){

		// query mencari record berdasarkan id
		$hasil = $this->db->where('id_produk', $id)
						  ->limit(1)
						  ->get('produk');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return array();
		}
	}

	public function create_produk($data_produk, $data_fitur) {
		if ($data_produk['id_kategori'] != 'sjp1') {
			$this->db->insert('produk', $data_produk);
		} else {
			// query insert into 
			$this->db->trans_start();
			$this->db->insert('produk', $data_produk);
			$id_produk = $this->db->insert_id();
			$this->db->insert('fitur', $data_fitur);
			$id_fitur = $this->db->insert_id();

			$data = array(
				'id_fitur' => $id_fitur,
				'id_produk' => $id_produk
				);

			$this->db->insert('fitur_produk', $data);
			$this->db->trans_complete();
		}
		
		return TRUE;
	}

	public function create_fitur($data_fitur){

		// query insert into 
		$this->db->insert('fitur', $data_fitur);
	}

	public function update($id, $data_produk, $data_fitur){
		if ($data_produk['id_kategori'] != 'sjp1') {
			// query update
			$this->db->where('id_produk', $id)
			     ->update('produk', $data_produk);
		} else {
			// query insert into 
			$query = "SELECT id_fitur FROM fitur_produk WHERE id_produk='$id'";
			$id_fitur = $this->db->query($query);
			$idfitur = $id_fitur->result();
			
			$this->db->trans_start();
			$this->db->where('id_fitur', $idfitur[0]->id_fitur)
			     ->update('fitur', $data_fitur);

			$this->db->where('id_produk', $id)
			     ->update('produk', $data_produk);
			$this->db->trans_complete();
		}

		return TRUE;
	}

	public function delete($id, $id_fitur){
		
		$this->db->trans_start();
			$this->db->query("DELETE FROM fitur_produk WHERE id_produk='$id'");
			$this->db->query("DELETE FROM fitur WHERE id_fitur='$id_fitur'");
			$this->db->query("DELETE FROM produk WHERE id_produk='$id'");
		$this->db->trans_complete();

		return TRUE;
	}

	public function count_product() {
		$this->db->select('*')->from('produk');
		$q = $this->db->get();
		return $q->num_rows();
	}

	public function count_member() {
		$this->db->select('*')->from('pelanggan');
		$q = $this->db->get();
		return $q->num_rows();
	}

	public function count_order(){
		$this->db->select('*')->from('order');
		$q = $this->db->get();
		return $q->num_rows();
	}

	public function get_top_product(){
		$query = $this->db->query('SELECT nama_produk FROM db_sjpro.order GROUP BY nama_produk ORDER BY COUNT(*) DESC LIMIT 1');
		return $query->result_array();
		// 
	}

	public function get_idfitur($id){
		$query = "SELECT id_fitur FROM fitur_produk WHERE id_produk='$id'";
		$id_fitur = $this->db->query($query);
		return $id_fitur->result_array();
	}

}

