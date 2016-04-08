<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

require_once('Veritrans.php');
Veritrans_Config::$serverKey = "VT-server-7lUatHivRlZrYN2OwaezmnTG";

class Payment extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('order_model');
		$this->load->model('cart_model');
		$this->load->model('account_model');
		$this->load->helper('form');
		$this->load->library("pagination");
	}

	public function index($page = 'payment_step_second') {
		$data['title'] = ucfirst($page);
		
		$num_rows = $this->db->count_all("produk");

		$config['base_url'] = base_url() . "produk/item/index/";
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 9;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['produk'] = $this->cart_model->retrieve_products($config['per_page'], $this->uri->segment(4));
		$data['option_provinsi'] = $this->order_model->get_provinsi();

		$this->load->view('user/templates/header', $data);
		$this->load->view('user/pages/' . $page, $data);
		$this->load->view('user/templates/footer_payment', $data);
	}

	public function checkout_data(){
	
	foreach ($this->cart->contents() as $item)
	{
		$data = array(
         'id'      => $item['id'],
         'qty'     => $item['qty'],
         'price'   => $item['price'],
         'name'    => $item['name'],
         // 'order_key' => $item['order_key'],
         'image' 	 => $item['image']
      );

	// print_r($data);die();

	$data_order = $this->cart->insert($data);
	$this->account_model->checkout_simpan();
	$this->order_model->process($data_order);

	// ambil data biaya ongkir berdasarkan kabupaten
	$kab = $this->input->post('kota_id');
	$ongkir = $this->db->query('SELECT reguler FROM ongkirjne WHERE id_kabupaten ="'.$kab.'"');
	$res_ongkir = $ongkir->result();

	$pro = $this->input->post('provinsi_id');
	// ambil data kota
	$billing = $this->db->query('SELECT nama_provinsi FROM provinsi WHERE id_provinsi ="'.$pro.'"');
	$res_billing = $billing->result();


	$transaction_details = array(
      	'order_id' => rand(),
      	'gross_amount' => $item['price'] + $res_ongkir[0]->reguler
  	);

  	// Opsional
	$item_details = array(
	    'id' => $item['id'],
	    'price' => $item['price'] + $res_ongkir[0]->reguler,
	    'quantity' => $item['qty'],
	    'name' => $item['name']
    );

     // Optional
	$shipping_address = array(
	    'address'       => $this->input->post('alamat'),
	    'city'          => $res_billing[0]->nama_provinsi,
	    'country_code'  => 'IDN'
	    );

    // Optional
	$customer_details = array(
	    'first_name'    => $this->input->post('nama'),
	    'last_name'     => "",
	    'email'         => $this->input->post('email'),
	    'phone'         => $this->input->post('phoneNumber'),
	    'shipping_address' => $shipping_address
	    );

    }

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
	}


	function select_kota(){
		if('IS_AJAX') {
        $data['option_kota'] = $this->order_model->get_kabupaten();		
		$this->load->view('user/pages/chain/kota',$data);
        }
	}

	function select_kec(){
        $data['option_kecamatan'] = $this->order_model->get_kecamatan();	
		$this->load->view('user/pages/chain/kecamatan',$data);
	}

	function select_kel(){
        $data['option_kelurahan'] = $this->order_model->get_kelurahan();	
		$this->load->view('user/pages/chain/kelurahan',$data);
	}

	function select_ongkir(){
        $data['ongkir'] = $this->order_model->get_ongkir();	
		$this->load->view('user/pages/chain/ekspedisi',$data);
	}

}

?>