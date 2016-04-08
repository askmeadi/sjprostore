<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

require_once('Veritrans.php');
Veritrans_Config::$serverKey = "VT-server-7lUatHivRlZrYN2OwaezmnTG";

class Shop_cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("pagination");
		$this->load->library("cart");
		$this->load->model('cart_model');
		$this->load->model('order_model');
		$this->load->model('account_model');
		$this->load->helper('url');
	}

	public function index(){
		$page = 'detail';
		$data['title'] = ucfirst($page);

		$this->cart_model->test($id);
		$data['produk'] = $this->cart_model->test($id);

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/templates/navigation', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer', $data);
	}

	public function addtocart() {
		 if($this->cart_model->validate_add_cart_item() == TRUE){
         
        // Check if user has javascript enabled
        if($this->input->post('ajax') != '1'){
            // redirect('produk/item/', 'refresh'); // If javascript is not enabled, reload the page with new data
        }else{
            echo 'true'; // If javascript is enabled, return true, so the cart gets updated
        }
    }
	}

	public function coba($id){

		$produk = $this->cart_model->find($id);
	
		if ($_POST['action'] == 'CHECKOUT') {
			
			$data = array(
               'id'      => $this->input->post('product_id'),
               'qty'     => 1,
               'price'   => $produk->harga_produk,
               'name'    => $produk->nama_produk,
               'image' 	 => $produk->gambar
            );
		
		$this->cart->insert($data);
		// print_r($data);die();
		$data['image'] = $produk->gambar;
		$user = $this->session->userdata('username');
		$data['person'] = $this->account_model->load_userdata($user);

		if($data['person'] == TRUE){

		// ambil data kabupaten tempat tinggal
		$kab = $this->db->query('SELECT id_kabupaten FROM pelanggan, user WHERE pelanggan.id_user = user.id_user');
		$res_kab = $kab->result();
		$ekpsedisi = $res_kab[0]->id_kabupaten;
		
		$ongkir = $this->db->query('SELECT reguler FROM ongkirjne WHERE id_kabupaten ="'.$ekpsedisi.'"');
		$res_ongkir = $ongkir->result();

		$this->order_model->process($data);

		$billing = $this->db->query('SELECT nama, alamat, email, telepon, nama_provinsi FROM pelanggan, user, provinsi WHERE pelanggan.id_user = user.id_user AND pelanggan.id_provinsi = provinsi.id_provinsi');
		$res_billing = $billing->result();

		$transaction_details = array(
      	'order_id' => rand(),
      	'gross_amount' => $produk->harga_produk + $res_ongkir[0]->reguler
  		);

  	// Opsional
	$item_details = array(
	    'id' => $this->input->post('product_id'),
	    'price' => $produk->harga_produk + $res_ongkir[0]->reguler,
	    'quantity' => 1,
	    'name' => $produk->nama_produk
    );

    // Optional
	$shipping_address = array(
	    'address'       => $res_billing[0]->alamat,
	    'city'          => $res_billing[0]->nama_provinsi,
	    'country_code'  => 'IDN'
	    );

    // Optional
	$customer_details = array(
	    'first_name'    => $res_billing[0]->nama,
	    'last_name'     => "",
	    'email'         => $res_billing[0]->email,
	    'phone'         => $res_billing[0]->telepon,
	    'shipping_address' => $shipping_address
	    );

    $transaction = array(
    'payment_type' => 'vtweb',
    'vtweb' => array(
        'credit_card_3d_secure' => true,
        ),
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details
    );

	try {
	  // Redirect to Veritrans VTWeb page
	  header('Location: ' . Veritrans_VtWeb::getRedirectionUrl($transaction));
	}
	catch (Exception $e) {
	  echo $e->getMessage();
	  if(strpos ($e->getMessage(), "Access denied due to unauthorized")){
	      echo "<code>";
	      echo "<h4>Please set real server key from sandbox</h4>";
	      echo "In file: " . __FILE__;
	      echo "<br>";
	      echo "<br>";
	      echo htmlspecialchars('Veritrans_Config::$serverKey = \'VT-server-7lUatHivRlZrYN2OwaezmnTG\';');
	      die();
	}

	}

		} else {
			redirect('produk/payment/');
		}

		} else {
			$data = array(
               'id'      => $this->input->post('product_id'),
               'qty'     => 1,
               'price'   => $produk->harga_produk,
               'name'    => $produk->nama_produk,
               'image' 	 => $produk->gambar,
               'status'  => $produk->status_produk
            );
		// print_r($data);die();
		$this->cart->insert($data);
		$data['image'] = $produk->gambar;
		$data['status'] = $produk->status_produk;
		redirect('produk/item/', 'location');
		}

	}

	public function clear_cart(){
		$this->cart->destroy();
		redirect('produk/item/');
	}

}

