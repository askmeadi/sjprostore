<?php

class Order_model extends CI_Model {

	public function process($data){
		
        $faktur = array(
			'date' => date('Y-m-d H:i:s'),
			'due_date' => date('Y-m-d H:i:s', mktime(date('H'), date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
			);
		$this->db->insert('faktur', $faktur);
		$id_faktur = $this->db->insert_id();

        $id_plggan = $this->db->query("SELECT max(id_pelanggan) FROM pelanggan");
		foreach ($id_plggan->result_array() as $id) {
            $id_pelanggan = $id['max(id_pelanggan)'];
        }

        foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_faktur' => $id_faktur,
                'order_key' => random_string('alnum', 7),
				'id_produk' => $item['id'],
                'id_pelanggan' =>$id_pelanggan,
				'nama_produk' => $item['name'],
				'jumlah_produk' => $item['qty'],
				'harga' => $item['price'],
                'status' => 'unpaid'
				);

            // print_r($data);die();
        
			$this->db->insert('order', $data);
		}

        $user = $this->session->userdata('username');

        if ($this->session->userdata('username')) {
            $query = $this->db->query('SELECT email FROM pelanggan,user WHERE pelanggan.id_user = user.id_user AND user.username = "'.$user.'"');
            foreach ($query->result_array() as $value) {
                $email_member = $value['email'];
            }
            // print_r($email_pelanggan);die();

            //send email start
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'infosjprostore@gmail.com',
                'smtp_pass' => 'superarief',
                'mailtype'  => 'html', 
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
                );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from('infosjprostore@gmail.com', 'Admin');
            $this->email->to($email_member);
            $this->email->subject('Konfirmasi Pembelian');
            $this->email->message('Dear, pelanggan sjprostore.com. Nomer order key anda adalah ('.$data['order_key'].')');

            $this->email->send();
            //end
        } else {
            $email_pelanggan = $this->input->post('email');
            //send email start
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'infosjprostore@gmail.com',
                'smtp_pass' => 'superarief',
                'mailtype'  => 'html', 
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
                );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from('infosjprostore@gmail.com', 'Admin');
            $this->email->to($email_pelanggan);
            $this->email->subject('Konfirmasi Pembelian');
            $this->email->message('Dear, pelanggan sjprostore.com. Nomer order key anda adalah ('.$data['order_key'].')');

            $this->email->send();
            //end
        }
	}

	public function get_provinsi(){
		$result = array();
        $this->db->select('*');
        $this->db->from('provinsi');
        $this->db->order_by('nama_provinsi','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Propinsi-';
            $result[$row->id_provinsi]= $row->nama_provinsi;
        }
 
        return $result;
	}

	public function get_kabupaten(){
		$provinsi_id = $this->input->post('provinsi_id');
        $result = array();
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->where('id_provinsi',$provinsi_id);
        $this->db->order_by('nama_kabupaten','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kota / Kabupaten-';
            $result[$row->id_kabupaten]= $row->nama_kabupaten;
        }
 
        return $result;
	}

	public function get_kecamatan(){
		$kabupaten_id = $this->input->post('kota_id');
        $result = array();
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('id_kabupaten',$kabupaten_id);
        $this->db->order_by('nama_kecamatan','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kecamatan-';
            $result[$row->id_kecamatan]= $row->nama_kecamatan;
        }
 
        return $result;
	}

    public function get_kelurahan(){
        $kecamatan_id = $this->input->post('kecamatan_id');
        $result = array();
        $this->db->select('*');
        $this->db->from('kelurahan');
        $this->db->where('id_kecamatan',$kecamatan_id);
        $this->db->order_by('nama_kelurahan','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result[0]= '-Pilih Kelurahan-';
            $result[$row->id_kelurahan]= $row->nama_kelurahan;
        }
 
        return $result;
    }


}
