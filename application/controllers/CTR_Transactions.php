<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CTR_Transactions extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('zip');
		$this->load->library('encryption');
		$this->load->model('M_Auth', 'M_Auth');
		$this->load->model('M_Products', 'M_Products');
		$this->load->model('M_Transactions', 'M_Transactions');
		$this->load->model('M_Signature', 'M_Signature');
		$this->load->model('M_Dashboard', 'M_Dashboard');
		$this->load->model('M_Reason', 'M_Reason');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('string');
		$this->load->library('pagination');
		$this->load->helper('auth_helper');
		checkSessionUser();
		// userRightAdmin();
	}

	function isMobileDevice()
	{
		return preg_match(
			"/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
			$_SERVER["HTTP_USER_AGENT"]
		);
	}


	public function cart()
	{
		userRightAdmin();
		$login = $this->session->userdata('login_id');

		$datacart = $this->M_Transactions->get_cart_user($login);
		$getApproval = $this->M_Transactions->get_cartApproval($login);
		$listreason = $this->M_Reason->get_reason();
		$count = $this->M_Transactions->get_cart_userCount($login);

		$data['cart'] = $datacart;
		$data['app'] = $getApproval;
		$data['reason'] = $listreason;
		$data['count'] = $count[0]['allcount'];
		// var_dump($count[0]['allcount']);
		$belumTerimaBarang = $this->M_Dashboard->get_belumTerimaBarang($this->session->userdata('user_id'));
		$data['ttd_belum'] = $belumTerimaBarang;
		// var_dump($belumTerimaBarang);

		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/transaction/v_mcart', $data);
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/transaction/v_cart', $data);
		}
	}


	public function transactionsHistory($check = null)
	{
		userRightAdmin();
		$login = $this->session->userdata('user_id');

		$cart_active = $this->M_Transactions->get_transactionUserActive($login);
		$cart_nonactive = $this->M_Transactions->get_transactionUsernonActive($login);

		$data['cart_active'] = $cart_active;
		$data['cart_nonactive'] = $cart_nonactive;

		if (!empty($check)) {
			$data['submit'] = true;
		}

		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/transaction/v_mhistoriTransaksi', $data);
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/transaction/v_historiTransaksi', $data);
		}
	}

	public function transactionsHistoryDetail($id)
	{
		// $login = $this->session->userdata('user_id');

		$cart_list = $this->M_Transactions->get_prodsByTransHeader($id);
		$getpdf = $this->M_Signature->get_Signature_byThId($id);

		$data['cart_list'] = $cart_list;
		$data['ttd'] = $getpdf;
		$data['lampiran'] = $cart_list[0]->url_nodin;

		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/transaction/v_mhistoriTransaksidetail', $data);
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/transaction/v_historiTransaksidetail', $data);
		}
	}

	public function transaksi_admin()
	{
		userRightAdmin();
		$cartlist = $this->M_Transactions->get_newOrder();
		$cartpastlist = $this->M_Transactions->get_pastOrderThisMonth();
		$urlNodin = $this->M_Auth->get_network();

		$data['set_net'] = $urlNodin[0]->link;
		$data['cartlist'] = $cartlist;
		$data['cartpastlist'] = $cartpastlist;


		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_Transaction', $data);
	}

	public function master_transaksi_admin()
	{
		$urlNodin = $this->M_Auth->get_network();

		$data = $this->M_Transactions->get_processedOrder();

		$kirim['data'] = $data;
		$kirim['set_net'] = $urlNodin[0]->link;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_MasterTransaction', $kirim);
	}

	public function proses_transaksi_admin($id = null)
	{

		if ($id == null) {
		} else {
			// $datax = $this->M_Transactions->get_transaction_bythId($id);
			$datax = $this->M_Transactions->get_totalItem_before_dirID($id);
			$data['item'] = $datax;
		}

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_TransactionProcessed', $data);
	}

	public function proses_Mastertransaksi_admin($id = null)
	{

		if ($id == null) {
		} else {
			$datax = $this->M_Transactions->get_transaction_bythId($id);
			$data['item'] = $datax;
		}

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_TransactionProcessedMaster', $data);
	}
	public function detail_permintaan_admin($id)
	{
		$firstDate = date("Y-m");
		$firstDate .= "-01";
		$lastDate = date("Y-m");
		$lastDate .= "-31";
		$totalStatistik = 0;
		$totalDevices = 0;

		// $dataTransaction = $this->MDash->get_transacthisMonth($firstDate, $lastDate);
		// $dataDevices = $this->MDash->get_allItems();

		// foreach ($dataTransaction as $val) {
		// 	$totalStatistik = $totalStatistik + $val->total_distribusi;
		// }

		// foreach ($dataDevices as $val) {
		// 	$totalDevices = $totalDevices + $val->total_devices;
		// }

		// $send['data'] = $dataTransaction;
		// $send['data1'] = $dataDevices;
		$send['totStatis'] = $totalStatistik;
		$send['totDevices'] = $totalDevices;

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_DetailPermintaan');
	}

	public function edit_transaksi($id)
	{
		$firstDate = date("Y-m");
		$firstDate .= "-01";
		$lastDate = date("Y-m");
		$lastDate .= "-31";
		$totalStatistik = 0;
		$totalDevices = 0;

		// $dataTransaction = $this->MDash->get_transacthisMonth($firstDate, $lastDate);
		// $dataDevices = $this->MDash->get_allItems();

		// foreach ($dataTransaction as $val) {
		// 	$totalStatistik = $totalStatistik + $val->total_distribusi;
		// }

		// foreach ($dataDevices as $val) {
		// 	$totalDevices = $totalDevices + $val->total_devices;
		// }

		// $send['data'] = $dataTransaction;
		// $send['data1'] = $dataDevices;
		$send['totStatis'] = $totalStatistik;
		$send['totDevices'] = $totalDevices;

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_EditDetailPermintaan');
	}

	public function proses_signature_courier_admin($id = null)
	{
		if ($id == null) {
		} else {
			$datax = $this->M_Transactions->get_transaction_bythId($id);

			$data['item'] = $datax;
		}

		$dataSig = $this->M_Signature->get_Signature_byThId($id);
		$data['dataSig'] = $dataSig;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/transaction/V_TransactionCourier', $data);
	}

	public function terimaBarang($id)
	{
		// $login = $this->session->userdata('user_id');

		$cart_list = $this->M_Transactions->get_prodsByTransHeader($id);

		$data['cart_list'] = $cart_list;


		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/transaction/v_mterimaBarang', $data);
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/transaction/v_terimaBarang', $data);
		}
	}
}
