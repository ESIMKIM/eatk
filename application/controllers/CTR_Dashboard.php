<?php
// require_once __DIR__ . '/vendor/autoload.php';
defined('BASEPATH') or exit('No direct script access allowed');
class CTR_Dashboard extends CI_Controller
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
		$this->load->model('M_Category', 'M_Category');
		$this->load->model('M_Merk', 'M_Merk');
		$this->load->model('M_Transactions', 'M_Trans');
		$this->load->model('M_Dashboard', 'M_Dashboard');
		$this->load->model('M_Report', 'M_Report');
		$this->load->model('M_Notif', 'M_Notif');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('auth_helper');
		$this->load->helper('string');
		$this->load->library('pagination');
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

	public function loadRecord($rowno)
	{
		if (empty($rowno)) {
			$rowno = 0;
		}

		$search_text = $this->session->userdata('cariSesi');

		if ($this->input->post('cari') != NULL) {
			$this->session->set_userdata('cariSesi', $this->input->post('cari'));
			$search_text = $this->session->userdata('cariSesi');
		}

		// Row per page
		$rowperpage = $this->session->userdata('showItem');

		if ($this->isMobileDevice()) {
			$rowperpage = 15;
		} else {
			$rowperpage = $this->session->userdata('showItem');
		}


		// Row position
		if ($rowno != 0) {
			$rowno = ($rowno - 1) * $rowperpage;
		}

		// var_dump($this->session->userdata('cariSesi'));
		// All records count
		$allcount = $this->M_Products->get_all_ProductsCount($search_text);
		// Get  records
		$users_record = $this->M_Products->get_all_Products($rowno, $rowperpage, $search_text);
		// Sidebar
		$getCategory = $this->M_Category->get_allCategoryShown();
		$getMerk = $this->M_Merk->get_allMerk();

		$config['full_tag_open'] = '<ul class="pagination pagination-md">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		// $config['first_link']       = '<<';
		// $config['last_link']        = '>>';
		// $config['next_link']        = '>';
		// $config['prev_link']        = '<';
		// $config['full_tag_open'] = '<ul class="pagination pagination-md text-center" style="margin-right: 5%;">';
		// $config['full_tag_close'] = '</ul>';
		// $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		// $config['num_tag_close']    = '</span></li>';
		// $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		// $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		// $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		// $config['prev_tagl_close']  = '</span>Next</li>';
		// $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		// $config['first_tagl_close'] = '</span></li>';
		// $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		// $config['last_tagl_close']  = '</span></li>';

		// $this->pagination->initialize($config);
		// $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		// $data["links"] = $this->pagination->create_links();
		// $data['projects'] = $this->project->get_projects($config["per_page"], $page);
		// $this->load->view('projects', $data);

		// Pagination Configuration
		$config['base_url'] = base_url() . 'dashboard/';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$belumTerimaBarang = $this->M_Dashboard->get_belumTerimaBarang($this->session->userdata('user_id'));

		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;
		$sidebar['category'] = $getCategory;
		$sidebar['merk'] = $getMerk;
		$data['ttd_belum'] = $belumTerimaBarang;

		$lastUpdate = $this->M_Notif->get_last_update();
		$data['notif_last'] = $lastUpdate;

		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/template/3_msidebar', $sidebar);
			$this->load->view('user/dashboard/v_mdashboard', $data);
			// $this->session->unset_userdata('cariItem');
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/template/3_sidebar', $sidebar);
			$this->load->view('user/dashboard/v_dashboard', $data);
			// $this->session->unset_userdata('cariItem');
		}

		// $this->load->view('user/template/1_header');
		// $this->load->view('user/template/2_navbar');
		// $this->load->view('user/template/3_sidebar', $sidebar);
		// $this->load->view('user/dashboard/v_dashboard', $data);
		// $this->session->unset_userdata('cariItem');
	}

	public function loadbyMerk($id = 0, $rowno = 0)
	{
		$merk_id = $id;
		$search_text = "";

		if ($this->input->post('cari') != NULL) {
			$search_text = $this->input->post('cari');
			$merk_id = $this->session->userdata('merk_id');
		} else {
			$search_text = "";
			$this->session->set_userdata('merk_id', $id);
		}


		// Row per page
		$rowperpage = $this->session->userdata('showItem');

		// Row position
		if ($rowno != 0) {
			$rowno = ($rowno - 1) * $rowperpage;
		}

		// All records count
		$allcount = $this->M_Products->get_all_ProductsCountbyMerk($search_text, $merk_id);
		// Get  records
		$users_record = $this->M_Products->get_all_ProductsbyMerk($rowno, $rowperpage, $search_text, $merk_id);

		$getCategory = $this->M_Category->get_allCategory();
		$getMerk = $this->M_Merk->get_allMerk();

		$config['full_tag_open'] = '<ul class="pagination pagination-md">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		// Pagination Configuration
		$config['base_url'] = base_url() . 'dashboard/';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		// Initialize
		$this->pagination->initialize($config);


		$data['pagination'] = $this->pagination->create_links();

		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;
		$sidebar['category'] = $getCategory;
		$sidebar['merk'] = $getMerk;
		// var_dump($merk_id);
		// var_dump($users_record);

		$this->load->view('user/template/1_header');
		$this->load->view('user/template/2_navbar');
		$this->load->view('user/template/3_sidebar', $sidebar);
		$this->load->view('user/dashboard/v_byMerk', $data);
	}

	public function loadbyCategorySets($id)
	{
		$this->session->set_userdata('cat_id', $id);

		// var_dump($this->session->userdata('cat_id'));
		redirect('kategori');
	}

	public function loadbyCategory($rowno)
	{

		if (empty($rowno)) {
			$rowno = 0;
		}

		$search_text = $this->session->userdata('cariSesi');

		if ($this->input->post('cari') != NULL) {
			$this->session->set_userdata('cariSesi', $this->input->post('cari'));
			$search_text = $this->session->userdata('cariSesi');
		}

		// Row per page
		$rowperpage = $this->session->userdata('showItem');

		// Row position
		if ($rowno != 0) {
			$rowno = ($rowno - 1) * $rowperpage;
		}
		// var_dump($this->session->userdata('cariSesi'));
		// All records count
		$allcount = $this->M_Products->get_all_ProductsCountbyCategory($search_text, $this->session->userdata('cat_id'));
		// Get  records
		$users_record = $this->M_Products->get_all_ProductsbyCategory($rowno, $rowperpage, $search_text, $this->session->userdata('cat_id'));

		$getCategory = $this->M_Category->get_allCategory();
		$getMerk = $this->M_Merk->get_allMerk();

		$config['full_tag_open'] = '<ul class="pagination pagination-md">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] = '</span></li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';

		// Pagination Configuration
		$config['base_url'] = base_url() . 'kategori/';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;
		$sidebar['category'] = $getCategory;
		$sidebar['merk'] = $getMerk;



		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/template/3_msidebar', $sidebar);
			$this->load->view('user/dashboard/v_bymCategory', $data);
			// $this->session->unset_userdata('cariItem');
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/template/3_sidebar', $sidebar);
			$this->load->view('user/dashboard/v_byCategory', $data);
			// $this->session->unset_userdata('cariItem');
		}
	}

	function rupiah($angka)
	{

		$hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
		return $hasil_rupiah;
	}

	public function dashboard_admin()
	{
		$gS1_stokAwal = $this->M_Dashboard->get_gS1_stokAwal();
		$gS1_kirim = $this->M_Dashboard->get_gS1_kirim();
		$gS1_tambahStok = $this->M_Dashboard->get_gS1_tambahStok();
		$gS1_stokAkhir = $this->M_Dashboard->get_gS1_stokAkhir();

		$gS2_stokAwal = $this->M_Dashboard->get_gS1_stokAwal();
		$gS2_kirim = $this->M_Dashboard->get_gS2_kirim();
		$gS2_tambahStok = $this->M_Dashboard->get_gS2_tambahStok();
		$gS2_stokAkhir = $this->M_Dashboard->get_gS2_stokAkhir();

		$kirim['gS1_stokAwal'] = $gS1_stokAwal[0]->stok_awal_year;
		$kirim['gS1_kirim'] = $gS1_kirim[0]->s1_kirim;
		$kirim['gS1_tambahStok'] = $gS1_tambahStok[0]->add_stok_year;
		$kirim['gS1_stokAkhir'] = $gS1_stokAkhir[0]->stok_akhir;
		$kirim['gS2_stokAwal'] = $gS2_stokAwal[0]->stok_awal_year;
		$kirim['gS2_kirim'] = $gS2_kirim[0]->s1_kirim;
		$kirim['gS2_tambahStok'] = $gS2_tambahStok[0]->add_stok_year;;
		$kirim['gS2_stokAkhir'] = $gS2_stokAkhir[0]->stok_akhir;

		$listDep = $this->M_Dashboard->get_listDep2();
		// var_dump($listDep);
		$kirim['listDep'] = $listDep;


		// var_dump($kirim);
		$dataSisaTahun = $this->M_Report->get_total_sisa_asset_tahun();
		$dataSisaGlobal = $this->M_Report->get_total_sisa_asset_global();
		$dataJenis = $this->M_Report->get_total_jenis_barang_tahun();
		$dataPengiriman = $this->M_Report->get_pengiriman_barang_tahun();
		$dataPenerimaan = $this->M_Report->get_penerimaan_barang_tahun();
		$dataSisaitemTahun = $this->M_Report->get_sisa_barang_tahun();

		$kirim['sisa_item_Tahun'] = $dataSisaitemTahun[0]->sisaTahun;
		$kirim['sisa_asset_tahun'] = $this->rupiah($dataSisaTahun[0]->total);
		$kirim['sisa_asset'] = $this->rupiah($dataSisaGlobal[0]->total);
		$kirim['jenis_asset'] = $dataJenis[0]->jenis;
		$kirim['pengiriman_asset'] = $dataPengiriman[0]->pengiriman;
		$kirim['dataPenerimaanAsset'] = $dataPenerimaan[0]->penerimaan;

		$dari = $this->session->userdata('direktorat_tgl_dari');
		$sampai = $this->session->userdata('direktorat_tgl_sampai');
		$bulanini = date('m');
		$tahunini = date('Y');
		$todari = $tahunini . '-' . $bulanini . '-' . '01';
		$tosmapai = $tahunini . '-' . $bulanini . '-' . '30';
		// var_dump($dari);
		// var_dump($sampai);
		if (!empty($dari) && !empty($sampai)) {
			$dataLaporan = $this->M_Report->get_report_Direktorat_Periode($dari, $sampai);
			$kirim['datalaporan'] = $dataLaporan;
		} else {
			$dataLaporan = $this->M_Report->get_report_Direktorat_Periode($todari, $tosmapai);
			$kirim['datalaporan'] = $dataLaporan;
		}

		userRightAdmin();

		$limit = 5;
		$dataPengiriman = $this->M_Dashboard->get_dataPengirimanItem($limit);
		$dataPenerimaan = $this->M_Dashboard->get_dataPenerimaanItem($limit);
		$dataStockReal = $this->M_Dashboard->get_dataStockReal($limit);
		$dataPerbagian = $this->M_Dashboard->get_dataPengirimanbyBagian($limit);

		$totalPengiriman = $this->M_Dashboard->get_dataPengirimanItemTotal($limit);
		$totalPenerimaan = $this->M_Dashboard->get_dataPenerimaanItemTotal($limit);
		$totalStockReal = $this->M_Dashboard->get_dataStockRealTotal($limit);
		$totalPerbagian = $this->M_Dashboard->get_dataPengirimanbyBagianTotal($limit);


		$kirim['dataPengiriman'] = $dataPengiriman;
		$kirim['dataPenerimaan'] = $dataPenerimaan;
		$kirim['dataStockReal'] = $dataStockReal;
		$kirim['dataPerbagian'] = $dataPerbagian;
		$kirim['totalPengiriman'] = $totalPengiriman;
		$kirim['totalPenerimaan'] = $totalPenerimaan;
		$kirim['totalStockReal'] = $totalStockReal;
		$kirim['totalPerbagian'] = $totalPerbagian;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/dashboard/V_Dashboard', $kirim);
	}

	public function dataDashPengirimanAdmin()
	{

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/dashboard/V_DataPengiriman');
	}
	public function dataDashPenambahanAdmin()
	{

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/dashboard/V_DataPenambahan');
	}
	public function dataDashStokAdmin()
	{

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/dashboard/V_DataStockReal');
	}
	public function dataDashAlokasiAdmin()
	{

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/dashboard/V_DataAlokasi');
	}
	public function dataDashAlokasiDetailAdmin()
	{

		$sideActive = "Dashboard";
		$data['sideActive'] = $sideActive;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar',	$data);
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/dashboard/V_DataAlokasiDetail');
	}

	public function test()
	{
		$this->load->view('admin/auth/tes');
	}

	public function printPDF()
	{
		$data = $this->M_Trans->get_listTrans_eachUser(1);
		$mpdf = new \Mpdf\Mpdf();
		// $data = $this->load->view('hasilPrint', [], TRUE);
		// $mpdf->WriteHTML($data);
		// $mpdf->Output();
		$urlImg = base_url('assets/img/HeaderSurat.png');
		$ttd = $data[0]->signature_courier;


		$html = "
            <!DOCTYPE html>
            <html lang='en'>

            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Admin HRMS Imigrasi</title>
                <!-- Theme style -->
                <link href=sadsa rel='stylesheet'>

				<style>
				.tablex {					
					width: 100%;
				}
				</style>
            </head>

            <body>     
			<img src='$urlImg' width='120%' >   
			<br><br>			
                <table>
                    <tr>
                        <td>Nomor Transaksi</td>
                        <td> : </td>
                        <td>INV/20230502-KD/1</td>
                    </tr>
                    <tr>
                        <td>Nomor Surat</td>
                        <td> : </td>
                        <td>IMI.123-1P-244</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td> : </td>
                        <td>05/02/2023</td>                    
                    </tr>
				</table>
				<br>
                <hr class='line-title'>
                <br>

				<p>Ringkasan Permintaan Barang</p>
                <table border='1' cellpadding='10' cellspacing='0'>        
				<thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>                    
                        <th>Permintaan</th>
						<th>Persetujuan</th>
                        <th>Harga</th>
						<th>Total Harga</th>                    
                    </tr>
				</thead>
				<tbody>
					<tr style='text-align:center;'>                                    
                        <td>1</td>
                        <td>RAUTAN PENSIL KECIL</td>
						<td>10 Pcs</td>
                        <td>10 Pcs</td>
						<td>RP 10000</td>
						<td>RP 100000</td>
					</tr>
					<tr style='text-align:center;'>                                    
                        <td>2</td>
                        <td>Kertas A4</td>
						<td>2 Rim</td>
                        <td>2 Rim</td>
						<td>RP 10000</td>
						<td>RP 100000</td>
					</tr>
					<tr style='text-align:center;'>                                    
                        <td>3</td>
                        <td>Kertas F4</td>
						<td>2 Rim</td>
                        <td>2 Rim</td>
						<td>RP 10000</td>
						<td>RP 100000</td>
					</tr>
					<tr style='text-align:center;'>                                    
                        <td>4</td>
                        <td>Pulpen</td>
						<td>8 Pcs</td>
                        <td>10 Pcs</td>
						<td>RP 10000</td>
						<td>RP 100000</td>
					</tr>
				</tbody>				
				</table>
				<br><br><br><br>
				<table class='tablex'>        
				<thead>
                    <tr>
                        <th style='width:50%'></th>
                        <th></th>                                                           
                    </tr>
				</thead>
				<tbody>
					<tr>                                    
                        <td><br><br> </td>
                        <td style='text-align:center;position:relative'><img src='$ttd' style='width:100px;'> </td>					
					</tr>	
					<tr>                                    
						<td> </td>
                        <td style='text-align:center;'> Budi Exlair <br> 19938427839423</td>					
					</tr>			
				</tbody>				
				</table>
                    </body>
                    </html>
                    ";

		$htmlx = "
            <!DOCTYPE html>
            <html lang='en'>

            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Admin HRMS Imigrasi</title>
                <!-- Theme style -->
                <link href=sadsa rel='stylesheet'>

            </head>

            <body>     
			<img src='$urlImg' width='120%' >   
			<br><br>
			<h4 style='text-align:center'>BERITA ACARA SERAH TERIMA BMN <br> Nomor : IMI.1-PB.02.08-602</h4><br>   
			<p> &emsp;&emsp;&emsp; Pada hari ini Rabu tanggal Lima bulan Juli tahun Dua Ribu Dua Puluh Tiga, yang bertanda tangan di bawah ini :</p>      
                <table>
                    <tr>
                        <td style='padding-right: 140px;'>Nama</td>
                        <td style='padding-right: 20px;'> : </td>
                        <td>Alucard</td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td> : </td>
                        <td>19237927210</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td> : </td>
                        <td>Jabatan Exloploer</td>                    
                    </tr>
					<tr>
						<td>Alamat</td>
						<td> : </td>
						<td>Jalan H.R. Rasuna Said Blok X-6 Kav. 8, Kuningan, Jakarta Selatan</td>                    
					</tr>
				</table>
				<p>Untuk selanjutnya disebut PIHAK PERTAMA</p>
					<br>
					<table>
                    <tr>
                        <td style='padding-right: 140px;'>Nama</td>
                        <td style='padding-right: 20px;'> : </td>
                        <td>Alucard</td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td> : </td>
                        <td>19237927210</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td> : </td>
                        <td>Jabatan Exloploer</td>                    
                    </tr>
					<tr>
						<td>Alamat</td>
						<td> : </td>
						<td>Jalan H.R. Rasuna Said Blok X-6 Kav. 8, Kuningan, Jakarta Selatan</td>                    
					</tr>
				</table>
				<p>Untuk selanjutnya disebut PIHAK KEDUA</p>
				
                <hr class='line-title'>
                <br>

                <table border='1' cellpadding='22' cellspacing='0'>        
				<thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>                    
                        <th>Permintaan</th>
                        <th>Persetujuan</th>
                        <th>Keterangan</th>                        
                    </tr>
				</thead>
				<tbody>
					<tr style='text-align:center;'>                                    
                        <td>1</td>
                        <td>RAUTAN PENSIL KECIL</td>
                        <td>10</td>
						<td>10</td>
						<td>10</td>
					</tr>
				</tbody>
				</table>
                    </body>
                    </html>
                    ";

		// $this->load->view('admin/htmm');
		$mpdf->setFooter('{PAGENO}');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
}
