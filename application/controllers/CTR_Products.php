<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CTR_Products extends CI_Controller
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
		$this->load->model('M_Reason', 'M_Reason');
		$this->load->model('M_Category', 'M_Category');
		$this->load->model('M_Merk', 'M_Merk');
		$this->load->model('M_Satuan', 'M_Satuan');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('string');
		$this->load->library('pagination');
		$this->load->helper('auth_helper');
		checkSessionUser();
		// userRightAdmin();
	}

	public function singleItemDetail($id)
	{
		$dataProducts = $this->M_Products->get_single_products_byId($id);

		// $slider = $this->M_Products->get_single_productsSliderImg_byId($id);

		// Sidebar
		$getCategory = $this->M_Category->get_allCategory();
		$getMerk = $this->M_Merk->get_allMerk();


		$data['dataProducts'] = $dataProducts;
		// $data['slider'] = $slider;
		$sidebar['category'] = $getCategory;
		$sidebar['merk'] = $getMerk;

		// var_dump($data);
		// var_dump($dataProducts);
		$this->load->view('user/template/1_header');
		$this->load->view('user/template/2_navbar');
		// $this->load->view('user/template/3_sidebar', $sidebar);
		$this->load->view('user/products/v_products', $data);
	}

	public function produk_admin()
	{
		userRightAdmin();
		$firstDate = date("Y-m");
		$firstDate .= "-01";
		$lastDate = date("Y-m");
		$lastDate .= "-31";

		$dataProduk = $this->M_Products->get_allProd_byId();
		// $dataProduk2 = $this->M_Products->get_allProdServerSide_byId();

		$data['dataProduk'] = $dataProduk;

		$kategori = $this->M_Category->get_allCategory();
		$merk = $this->M_Merk->get_allMerk();
		$satuan = $this->M_Satuan->get_allSatuan();

		$data['kategori'] = $kategori;
		$data['merk'] = $merk;
		$data['satuan'] = $satuan;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/barang/V_Barang', $data);
	}

	public function master_produk_admin()
	{
		$firstDate = date("Y-m");
		$firstDate .= "-01";
		$lastDate = date("Y-m");
		$lastDate .= "-31";


		$dataProduk = $this->M_Products->get_allProd_byId();

		$data['dataProduk'] = $dataProduk;

		$kategori = $this->M_Category->get_allCategory();
		$merk = $this->M_Merk->get_allMerk();
		$satuan = $this->M_Satuan->get_allSatuan();

		$data['kategori'] = $kategori;
		$data['merk'] = $merk;
		$data['satuan'] = $satuan;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/barang/V_MasterBarang', $data);
	}

	public function master_produk_adminEdit($id)
	{

		$getProduct = $this->M_Products->get_prod_byId($id);

		$kategori = $this->M_Category->get_allCategory();
		$merk = $this->M_Merk->get_allMerk();
		$satuan = $this->M_Satuan->get_allSatuan();

		$data['kategori'] = $kategori;
		$data['merk'] = $merk;
		$data['satuan'] = $satuan;
		$data['product'] = $getProduct;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/barang/V_MasterBarangEdit', $data);
	}

	public function histori_stok_update_admin($id)
	{
		$dataHistoryItem = $this->M_Transactions->get_datahitoryId_byProdsId($id);
		$urlNodin = $this->M_Auth->get_network();

		$data['set_net'] = $urlNodin[0]->link;
		$data['dataProduk'] = $dataHistoryItem;


		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/barang/V_HistoriStok', $data);
	}

	public function master_histori_stok_update_admin()
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
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/barang/V_MasterHistoriStok');
	}

	public function master_histori_peritem_admin($s1)
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
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/barang/V_MasterHistoriperItem');
	}

	function viewInvoices($id)
	{
		$pdf_base64 = $this->M_Products->get_base46InvoiceVendor($id);
		//Get File content from txt file

		header('Content-Type: application/pdf');
		echo (base64_decode($pdf_base64[0]->lampiran));

		// // $pdf_base64_handler = fopen($pdf_base64, 'r');
		// // $pdf_content = fread($pdf_base64_handler, filesize($pdf_base64));
		// // fclose($pdf_base64_handler);
		// //Decode pdf content
		// $pdf_decoded = base64_decode($pdf_base64);
		// //Write data back to pdf file
		// $pdf = fopen('test.pdf', 'w');
		// fwrite($pdf, $pdf_decoded);
		// //close output file
		// fclose($pdf);
		// echo 'Done';


		// echo 'Done';
	}
}
