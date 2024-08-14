<?php

defined('BASEPATH') or exit('No direct script access allowed');
class CTR_Report extends CI_Controller
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
		$this->load->model('M_Signature', 'M_Signature');
		$this->load->model('M_Report', 'M_Report');
		$this->load->model('M_Transactions', 'M_Transactions');
		$this->load->model('M_Merk', 'M_Merk');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('string');
		$this->load->library('pagination');
		$this->load->helper('auth_helper');
		checkSessionUser();
		// userRightAdmin();
	}

	function rupiah($angka)
	{

		$hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
		return $hasil_rupiah;
	}

	public function report_assets()
	{
		// $dari = $this->session->userdata('tgl_dari');
		// $sampai = $this->session->userdata('tgl_sampai');
		// $bulanini = date('m');
		// $tahunini = date('Y');
		// $todari = $tahunini . '-' . $bulanini . '-' . '01';
		// $tosmapai = $tahunini . '-' . $bulanini . '-' . '30';
		// // var_dump($dari);
		// // var_dump($sampai);
		// if (!empty($dari) && !empty($sampai)) {
		// 	$dataLaporan = $this->M_Report->get_report_this_month($dari, $sampai);
		// 	$kirim['datalaporan'] = $dataLaporan;
		// } else {
		// 	$dataLaporan = $this->M_Report->get_report_this_month($todari, $tosmapai);
		// 	$kirim['datalaporan'] = $dataLaporan;
		// }

		$dataLaporan = $this->M_Report->get_report_AllHistory();
		$kirim['datalaporan'] = $dataLaporan;





		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportAsset', $kirim);
	}

	public function report_transaction()
	{

		// $dataSisaTahun = $this->M_Report->get_total_sisa_asset_tahun();
		// $dataSisaGlobal = $this->M_Report->get_total_sisa_asset_global();
		// $dataJenis = $this->M_Report->get_total_jenis_barang_tahun();
		// $dataPengiriman = $this->M_Report->get_pengiriman_barang_tahun();
		// $dataPenerimaan = $this->M_Report->get_penerimaan_barang_tahun();
		// $dataSisaitemTahun = $this->M_Report->get_sisa_barang_tahun();

		// $kirim['sisa_item_Tahun'] = $dataSisaitemTahun[0]->sisaTahun;
		// $kirim['sisa_asset_tahun'] = $this->rupiah($dataSisaTahun[0]->total);
		// $kirim['sisa_asset'] = $this->rupiah($dataSisaGlobal[0]->total);
		// $kirim['jenis_asset'] = $dataJenis[0]->jenis;
		// $kirim['pengiriman_asset'] = $dataPengiriman[0]->pengiriman;
		// $kirim['dataPenerimaan'] = $dataPenerimaan[0]->penerimaan;
		$dep = $this->session->userdata('dept_id');
		// var_dump($dep);
		$listBagian = $this->M_Report->get_list_Bagian();
		$listItem = $this->M_Report->get_report_itemTrans_eachMonth($dep);
		// var_dump($listItem);

		// echo $listBagian[0]->id_department;
		$dari = $this->session->userdata('direktorat_tgl_dari');
		$sampai = $this->session->userdata('direktorat_tgl_sampai');
		$bulanini = date('m');
		$tahunini = date('Y');
		$todari = $tahunini . '-' . $bulanini . '-' . '01';
		$tosmapai = $tahunini . '-' . $bulanini . '-' . '30';
		// var_dump($dari);
		// var_dump($sampai);
		// if (!empty($dari) && !empty($sampai)) {
		// 	$dataLaporan = $this->M_Report->get_report_Direktorat_Periode($dari, $sampai);
		// 	$kirim['datalaporan'] = $dataLaporan;
		// } else {
		// 	$dataLaporan = $this->M_Report->get_report_Direktorat_Periode($todari, $tosmapai);
		// 	$kirim['datalaporan'] = $dataLaporan;
		// }
		$kirim['listBagian'] = $listBagian;
		$kirim['dataItem'] = $listItem;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportTransaksi', $kirim);
	}

	function tanggal_indo($tanggal, $cetak_hari = false)
	{
		// $hari = array(
		// 	1 =>    'Senin',
		// 	'Selasa',
		// 	'Rabu',
		// 	'Kamis',
		// 	'Jumat',
		// 	'Sabtu',
		// 	'Minggu'
		// );

		$bulan = array(
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			// return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}

	public function gen_transactionBast_bc($th_id)
	{
		// $live_mpdf = new \Mpdf\Mpdf();
		$live_mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
		$getDataHeader = $this->M_Transactions->get_dataProduct_forBAST($th_id);


		// new \Mpdf\Mpdf();
		// $mpdf = 
		// $mpdf->WriteHTML('<h1>Hello world!</h1>');
		// $mpdf->Output();
		// $live_mpdf = new \Mpdf\Mpdf();
		// $all_html = $this->load->view('html_to_pdf', [], true);
		// $live_mpdf->WriteHTML($all_html);
		// $live_mpdf->Output(); // simple run and opens in browser
		//$live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name

		$kopSurat = base_url('assets/surat/kop_surat_imi.png');
		$ttd_empty = base_url('assets/surat/icon_ttd.png');
		$tanggal = date("Y-m-d");
		$cetakTanggal = $this->tanggal_indo($tanggal);
		$nomor_surat = $getDataHeader[0]->no_surat;
		$tanggal_surat = $this->tanggal_indo($getDataHeader[0]->tgl_surat);
		// date("d-m-Y", strtotime($this->tanggal_indo($tanggal)));

		$nomorSys = "IMI.1.PL.03.02." . $getDataHeader[0]->th_id;
		$html = "
        <!DOCTYPE html>
        <html lang='en'>

        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>BAST ATK Imigrasi</title>    
			<style>
				.p {
					font-family: Arial;
				}
			</style>
        </head>

        <body>            
            <table style='width: 100%;'>
                <tr>
                    <td width=1%>
                        <img src='$kopSurat' width='100%'>
                    </td>    
                </tr>
            </table>	
			
			<p style='font-family: Arial; text-align:right; font-size:10pt;'> Jakarta, $cetakTanggal</p>
			<p style='font-family: Arial; text-align:center; font-size:12pt; font-weight: bold;'>BERITA ACARA SERAH TERIMA BMN <br> <span style='text-align:center; font-size:12pt; font-weight: normal;'> Nomor : $nomorSys </span> </p>
			 	
		
			<p style='font-size:10pt; font-family: Arial; text-align: justify;'>
			&emsp; &emsp; &emsp; Bersama ini dengan hormat dikirimkan barang sesuai dengan Surat Permintaan dengan 
			Nomor $nomor_surat tanggal $tanggal_surat. Setelah barang diterima agar saudara meng-klik tombol Terima pada aplikasi dan mencetak tanda terima barang, serta mencatatkan dalam Aplikasi Persediaan sebagai barang.
			</p>";

		// $html .= "    
		// 	<table style='width:100%; font-family: Arial;'>
		// 		<tr>
		// 			<th>Nama</th>
		// 			<th>Nip</th>
		//             <th>Jaba</th>
		//         </tr>  
		//         <tr>
		// 			<td>A</td>
		// 			<td>B</td>
		//             <td>C</td>
		//         </tr>                
		// 	</table>
		// 	";
		$html .= "    
		    <table border='1' cellpadding='10' cellspacing='0' width='100%'>       
			<thead> 
		        <tr style='background-color:lightgrey;'>
		            <th style='font-size:8pt; font-family: Arial; text-align: center;'>No.</th>
		            <th style='font-size:8pt; font-family: Arial;'>Nama Barang</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Permintaan</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Disetujui</th>
		            <th style='font-size:8pt; font-family: Arial;'>Harga Satuan</th>
		            <th style='font-size:8pt; font-family: Arial;'>Total Harga</th>
		        </tr>				
			</thead>
			<tbody>
		        ";

		$no = 0;
		$totalJumlah = 0;
		foreach ($getDataHeader as $row) {
			$totalHarga = $row->approval * $row->prices;
			$RpHarga = "Rp " . number_format($row->prices, 2, ',', '.');
			$RpTotalHarga = "Rp " . number_format($totalHarga, 2, ',', '.');
			$no++;
			$html .= '
				
		            <tr>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $no . '</td>   
		                <td style="font-size:8pt; font-family: Arial;">' . $row->name . '</td>                       
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->quantity . ' ' . $row->name_satuan . '</td>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->approval . ' ' . $row->name_satuan . '</td>
		                <td style="font-size:8pt; font-family: Arial; text-align:right;">' . $RpHarga  . ' </td>
		                <td style="font-size:8pt; font-family: Arial; text-align:right;">' . $RpTotalHarga .  '</td>                        		                
		            </tr>                
		            ';
			$totalJumlah = $totalJumlah + $totalHarga;
		}

		$RptotalJumlah = "Rp " . number_format($totalJumlah, 2, ',', '.');
		$Signatures = $this->M_Signature->get_Signature_byThId($th_id);
		$dataUser = $this->M_Signature->get_Signature_byThId($th_id);
		$Signatures_pimp = $this->M_Signature->get_dataKTU_byTHId($th_id);
		$ttd_user = $ttd_empty;
		$ttd_courier = $ttd_empty;
		if (!empty($Signatures[0]->signature_user)) {
			$ttd_user = $Signatures[0]->signature_user;
		}

		if (!empty($Signatures[0]->signature_courier)) {
			$ttd_courier = $Signatures[0]->signature_courier;
		}

		$spasi = "";
		$rowData = count($getDataHeader);
		if ($rowData > 7) {
			$spasi = "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
		}
		$html .= '
					</tbody>
					<tfoot>
						<tr>
							<th style="font-size:8pt; font-family: Arial; text-align: center;" colspan="5">Total</th>
							<th style="font-size:8pt; font-family: Arial; text-align:center;">' . $RptotalJumlah . '</th>
						</tr>
					</tfoot>								
				</table>
				
				<p style="font-size:10pt; font-family: Arial; text-align: justify;">
				&emsp; &emsp; &emsp; Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan akan dilakukan perbaikan sebagaimana mestinya.					
				<p>

				' . $spasi . '				
				<table style="width:100%; font-family: Arial;">
                <tr>
					<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Penerima Barang,</p></th>
					<th font-weight: normal; style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th font-weight: normal; style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Pemberi Barang, </p></th>
                </tr> 
				<tr>
					<th style="width:50% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">Kepala Tata Usaha pada <br> Direktorat Kerja Sama Keimigrasian</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">Plt. Kepala Bagian Umum </p></th>
                </tr>  				              
				<tr>				
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 25%" src="' . $ttd_user . '"></td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_empty . '"></td>					                    
                </tr>  		
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>Shalahuddin Al Ayubi</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>Yuni Santi Nurani<p></th>
                </tr>		              
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">NIP. 198408112002121001</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">NIP. 198408112002121001</p></th>
                </tr>
				</table>		
				<br/>	
						
		</body>
		</html>
				';


		$live_mpdf->WriteHTML($html);
		$live_mpdf->Output();

		// <table style="width:100%; font-family: Arial;">
		//         <tr>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Yang Mengambil Barang,</p></th>					
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		//         </tr> 				
		// 		<tr>				
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_courier . '"><p>' . $Signatures[0]->nama_courier . '</p></td>									                    
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		//         </tr>  				              				
		// 		</table>
		// Signatures_pimp[0]->signature_pimp
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_user . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
	}

	public function gen_transactionBastBackup($th_id)
	{
		// $live_mpdf = new \Mpdf\Mpdf();
		$live_mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
		$getDataHeader = $this->M_Transactions->get_dataProduct_forBAST($th_id);


		// new \Mpdf\Mpdf();
		// $mpdf = 
		// $mpdf->WriteHTML('<h1>Hello world!</h1>');
		// $mpdf->Output();
		// $live_mpdf = new \Mpdf\Mpdf();
		// $all_html = $this->load->view('html_to_pdf', [], true);
		// $live_mpdf->WriteHTML($all_html);
		// $live_mpdf->Output(); // simple run and opens in browser
		//$live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name

		$kopSurat = base_url('assets/surat/kop_surat_imi.png');
		$ttd_empty = base_url('assets/surat/sign_a.png');
		$tanggal = date("Y-m-d");
		$cetakTanggal = $this->tanggal_indo($tanggal);
		$nomor_surat = $getDataHeader[0]->no_surat;
		$tanggal_surat = $this->tanggal_indo($getDataHeader[0]->tgl_surat);
		// date("d-m-Y", strtotime($this->tanggal_indo($tanggal)));

		$nomorSys = "IMI.1.PL.03.02." . $getDataHeader[0]->th_id;
		$html = "
        <!DOCTYPE html>
        <html lang='en'>

        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>BAST ATK Imigrasi</title>    
			<style>
				.p {
					font-family: Arial;
				}
			</style>
        </head>

        <body>            
            <table style='width: 100%;'>
                <tr>
                    <td width=1%>
                        <img src='$kopSurat' width='100%'>
                    </td>    
                </tr>
            </table>	
			
			<p style='font-family: Arial; text-align:right; font-size:10pt;'> Jakarta, $cetakTanggal</p>
			<p style='font-family: Arial; text-align:center; font-size:12pt; font-weight: bold;'>BERITA ACARA SERAH TERIMA BMN <br> <span style='text-align:center; font-size:12pt; font-weight: normal;'> Nomor : $nomorSys </span> </p>
			 	
		
			<p style='font-size:10pt; font-family: Arial; text-align: justify;'>
			&emsp; &emsp; &emsp; Bersama ini dengan hormat dikirimkan barang sesuai dengan Surat Permintaan dengan 
			Nomor $nomor_surat tanggal $tanggal_surat. Setelah barang diterima agar saudara meng-klik tombol Terima pada aplikasi dan mencetak tanda terima barang, serta mencatatkan dalam Aplikasi Persediaan sebagai barang.
			</p>";

		// $html .= "    
		// 	<table style='width:100%; font-family: Arial;'>
		// 		<tr>
		// 			<th>Nama</th>
		// 			<th>Nip</th>
		//             <th>Jaba</th>
		//         </tr>  
		//         <tr>
		// 			<td>A</td>
		// 			<td>B</td>
		//             <td>C</td>
		//         </tr>                
		// 	</table>
		// 	";
		$html .= "    
		    <table border='1' cellpadding='10' cellspacing='0' width='100%'>       
			<thead> 
		        <tr style='background-color:lightgrey;'>
		            <th style='font-size:8pt; font-family: Arial; text-align: center;'>No.</th>
		            <th style='font-size:8pt; font-family: Arial;'>Nama Barang</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Permintaan</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Disetujui</th>
		            <th style='font-size:8pt; font-family: Arial;'>Harga Satuan</th>
		            <th style='font-size:8pt; font-family: Arial;'>Total Harga</th>
		        </tr>				
			</thead>
			<tbody>
		        ";

		$no = 0;
		$totalJumlah = 0;
		foreach ($getDataHeader as $row) {
			$totalHarga = $row->approval * $row->prices;
			$RpHarga = "Rp " . number_format($row->prices, 2, ',', '.');
			$RpTotalHarga = "Rp " . number_format($totalHarga, 2, ',', '.');
			$no++;
			$html .= '
				
		            <tr>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $no . '</td>   
		                <td style="font-size:8pt; font-family: Arial;">' . $row->name . '</td>                       
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->quantity . ' ' . $row->name_satuan . '</td>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->approval . ' ' . $row->name_satuan . '</td>
		                <td style="font-size:8pt; font-family: Arial; text-align:right;">' . $RpHarga  . ' </td>
		                <td style="font-size:8pt; font-family: Arial; text-align:right;">' . $RpTotalHarga .  '</td>                        		                
		            </tr>                
		            ';
			$totalJumlah = $totalJumlah + $totalHarga;
		}

		$RptotalJumlah = "Rp " . number_format($totalJumlah, 2, ',', '.');
		$Signatures = $this->M_Signature->get_Signature_byThId($th_id);
		$dataUser = $this->M_Signature->get_Signature_byThId($th_id);
		$Signatures_pimp = $this->M_Signature->get_dataKTU_byTHId($th_id);
		$ttd_user = $ttd_empty;
		$ttd_courier = $ttd_empty;

		$dataPenerima = $this->M_Signature->get_data_KTU_User($th_id);
		if (!empty($Signatures[0]->signature_user)) {
			$ttd_user = $Signatures[0]->signature_user;
		}

		if (!empty($Signatures[0]->signature_courier)) {
			$ttd_courier = $Signatures[0]->signature_courier;
		}

		$spasi = "";
		$rowData = count($getDataHeader);
		if ($rowData > 7) {
			$spasi = "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
		}
		$html .= '
					</tbody>
					<tfoot>
						<tr>
							<th style="font-size:8pt; font-family: Arial; text-align: center;" colspan="5">Total</th>
							<th style="font-size:8pt; font-family: Arial; text-align:center;">' . $RptotalJumlah . '</th>
						</tr>
					</tfoot>								
				</table>
				
				<p style="font-size:10pt; font-family: Arial; text-align: justify;">
				&emsp; &emsp; &emsp; Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan akan dilakukan perbaikan sebagaimana mestinya.					
				<p>

				' . $spasi . '				
				<table style="width:100%; font-family: Arial;">
                <tr>
					<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Penerima Barang,</p></th>
					<th font-weight: normal; style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th font-weight: normal; style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Pemberi Barang, </p></th>
                </tr> 
				  				              
				<tr>				
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 25%" src="' . $ttd_user . '"></td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_empty . '"></td>					                    
                </tr>  		
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>' . $dataPenerima[0]->name . '</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>Yuni Santi Nurani<p></th>
                </tr>		              
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">NIP. 198408112002121001</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">NIP. ' . $dataPenerima[0]->nip . '</p></th>
                </tr>
				</table>		
				<br/>	
						
		</body>
		</html>
				';


		$live_mpdf->WriteHTML($html);
		$live_mpdf->Output();

		// <table style="width:100%; font-family: Arial;">
		//         <tr>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Yang Mengambil Barang,</p></th>					
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		//         </tr> 				
		// 		<tr>				
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_courier . '"><p>' . $Signatures[0]->nama_courier . '</p></td>									                    
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		//         </tr>  				              				
		// 		</table>
		// Signatures_pimp[0]->signature_pimp
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_user . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
	}

	public function gen_transactionBast($th_id)
	{
		// $live_mpdf = new \Mpdf\Mpdf();
		$live_mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
		$getDataHeader = $this->M_Transactions->get_dataProduct_forBAST($th_id);


		// new \Mpdf\Mpdf();
		// $mpdf = 
		// $mpdf->WriteHTML('<h1>Hello world!</h1>');
		// $mpdf->Output();
		// $live_mpdf = new \Mpdf\Mpdf();
		// $all_html = $this->load->view('html_to_pdf', [], true);
		// $live_mpdf->WriteHTML($all_html);
		// $live_mpdf->Output(); // simple run and opens in browser
		//$live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name

		$kopSurat = base_url('assets/surat/kop_surat_imi.png');
		$ttd_empty = base_url('assets/surat/sign_a.png');
		$tanggal = date("Y-m-d");
		$cetakTanggal = $this->tanggal_indo($tanggal);
		$nomor_surat = $getDataHeader[0]->no_surat;
		$tanggal_surat = $this->tanggal_indo($getDataHeader[0]->tgl_surat);
		// date("d-m-Y", strtotime($this->tanggal_indo($tanggal)));

		$nomorSys = "IMI.1.PL.03.02." . $getDataHeader[0]->th_id;
		$html = "
        <!DOCTYPE html>
        <html lang='en'>

        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>BAST ATK Imigrasi</title>    
			<style>
				.p {
					font-family: Arial;
				}
			</style>
        </head>

        <body>            
            <table style='width: 100%;'>
                <tr>
                    <td width=1%>
                        <img src='$kopSurat' width='100%'>
                    </td>    
                </tr>
            </table>	
			
			<p style='font-family: Arial; text-align:right; font-size:10pt;'> Jakarta, $cetakTanggal</p>
			<p style='font-family: Arial; text-align:center; font-size:12pt; font-weight: bold;'>BERITA ACARA SERAH TERIMA BMN <br> <span style='text-align:center; font-size:12pt; font-weight: normal;'> Nomor : $nomorSys </span> </p>
			 	
		
			<p style='font-size:10pt; font-family: Arial; text-align: justify;'>
			&emsp; &emsp; &emsp; Bersama ini dengan hormat dikirimkan barang sesuai dengan Surat Permintaan dengan 
			Nomor $nomor_surat tanggal $tanggal_surat. Setelah barang diterima agar saudara meng-klik tombol Terima pada aplikasi dan mencetak tanda terima barang, serta mencatatkan dalam Aplikasi Persediaan sebagai barang.
			</p>";

		// $html .= "    
		// 	<table style='width:100%; font-family: Arial;'>
		// 		<tr>
		// 			<th>Nama</th>
		// 			<th>Nip</th>
		//             <th>Jaba</th>
		//         </tr>  
		//         <tr>
		// 			<td>A</td>
		// 			<td>B</td>
		//             <td>C</td>
		//         </tr>                
		// 	</table>
		// 	";
		$html .= "    
		    <table border='1' cellpadding='10' cellspacing='0' width='100%'>       
			<thead> 
		        <tr style='background-color:lightgrey;'>
		            <th style='font-size:8pt; font-family: Arial; text-align: center;'>No.</th>
		            <th style='font-size:8pt; font-family: Arial;'>Nama Barang</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Permintaan</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Disetujui</th>
		        </tr>				
			</thead>
			<tbody>
		        ";

		$no = 0;
		$totalJumlah = 0;
		foreach ($getDataHeader as $row) {
			$totalHarga = $row->approval * $row->prices;
			$RpHarga = "Rp " . number_format($row->prices, 2, ',', '.');
			$RpTotalHarga = "Rp " . number_format($totalHarga, 2, ',', '.');
			$no++;
			$html .= '
				
		            <tr>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $no . '</td>   
		                <td style="font-size:8pt; font-family: Arial;">' . $row->name . '</td>                       
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->quantity . ' ' . $row->name_satuan . '</td>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->approval . ' ' . $row->name_satuan . '</td>
		                                   		                
		            </tr>                
		            ';
			$totalJumlah = $totalJumlah + $totalHarga;
		}

		$RptotalJumlah = "Rp " . number_format($totalJumlah, 2, ',', '.');
		$Signatures = $this->M_Signature->get_Signature_byThId($th_id);
		$dataUser = $this->M_Signature->get_Signature_byThId($th_id);
		$Signatures_pimp = $this->M_Signature->get_dataKTU_byTHId($th_id);
		$ttd_user = $ttd_empty;
		$ttd_courier = $ttd_empty;

		$dataPenerima = $this->M_Signature->get_data_KTU_User($th_id);
		if (!empty($Signatures[0]->signature_user)) {
			$ttd_user = $Signatures[0]->signature_user;
		}

		if (!empty($Signatures[0]->signature_courier)) {
			$ttd_courier = $Signatures[0]->signature_courier;
		}

		$spasi = "";
		$rowData = count($getDataHeader);
		if ($rowData == 10) {
			$spasi = "<br/><br/><br/><br/><br/>";
		} elseif ($rowData >= 10 && $rowData <= 18) {
			$spasi = "<br/>";
		} elseif ($rowData >= 18) {
			$spasi = "<br/>";
		}


		$html .= '
					</tbody>
					<tfoot>
						
					</tfoot>								
				</table>
				' . $spasi . '	
				
				<p style="font-size:10pt; font-family: Arial; text-align: justify;">
				&emsp; &emsp; &emsp; Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan akan dilakukan perbaikan sebagaimana mestinya.					
				<p>

							
				<table style="width:100%; font-family: Arial;">
                <tr>
					<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Penerima Barang,</p></th>
					<th font-weight: normal; style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th font-weight: normal; style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Pemberi Barang, </p></th>
                </tr> 
				  				              
				<tr>				
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 25%" src="' . $ttd_user . '"></td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_empty . '"></td>					                    
                </tr>  		
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>' . $dataPenerima[0]->name . '</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>Yuni Santi Nurani<p></th>
                </tr>		              
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">NIP. 198408112002121001</p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;">NIP. ' . $dataPenerima[0]->nip . '</p></th>
                </tr>
				</table>		
				<br/>	
						
		</body>
		</html>
				';


		$live_mpdf->WriteHTML($html);
		$live_mpdf->Output();

		// <table style="width:100%; font-family: Arial;">
		//         <tr>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Yang Mengambil Barang,</p></th>					
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		//         </tr> 				
		// 		<tr>				
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_courier . '"><p>' . $Signatures[0]->nama_courier . '</p></td>									                    
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		//         </tr>  				              				
		// 		</table>
		// Signatures_pimp[0]->signature_pimp
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_user . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
	}

	public function gen_transactionBastKurir($th_id)
	{
		// $live_mpdf = new \Mpdf\Mpdf();
		$live_mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
		$getDataHeader = $this->M_Transactions->get_dataProduct_forBAST($th_id);


		// new \Mpdf\Mpdf();
		// $mpdf = 
		// $mpdf->WriteHTML('<h1>Hello world!</h1>');
		// $mpdf->Output();
		// $live_mpdf = new \Mpdf\Mpdf();
		// $all_html = $this->load->view('html_to_pdf', [], true);
		// $live_mpdf->WriteHTML($all_html);
		// $live_mpdf->Output(); // simple run and opens in browser
		//$live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name

		$kopSurat = base_url('assets/surat/kop_surat_imi.png');
		$ttd_empty = base_url('assets/surat/icon_ttd.png');

		// $tanggal = date("Y-m-d");
		$dataTanggal = $this->M_Transactions->get_tanggalKeluarBarangByKurir($th_id);
		$tanggal = $dataTanggal[0]->created_date;
		$cetakTanggal = $this->tanggal_indo($tanggal);
		$nomor_surat = $getDataHeader[0]->no_surat;
		$tanggal_surat = $this->tanggal_indo($getDataHeader[0]->tgl_surat);
		// date("d-m-Y", strtotime($this->tanggal_indo($tanggal)));

		$nomorSys = "IMI.1.PL.03.02." . $getDataHeader[0]->th_id;
		$html = "
        <!DOCTYPE html>
        <html lang='en'>

        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>BAST ATK Imigrasi</title>    
			<style>
				.p {
					font-family: Arial;
				}
			</style>
        </head>

        <body>            
            <table style='width: 100%;'>
                <tr>
                    <td width=1%>
                        <img src='$kopSurat' width='100%'>
                    </td>    
                </tr>
            </table>	
			
			<p style='font-family: Arial; text-align:right; font-size:10pt;'> Jakarta, $cetakTanggal</p>
			<p style='font-family: Arial; text-align:center; font-size:12pt; font-weight: bold;'>BERITA ACARA SERAH TERIMA BMN <br> <span style='text-align:center; font-size:12pt; font-weight: normal;'> Nomor : $nomorSys </span> </p>
			 	
		
			<p style='font-size:10pt; font-family: Arial; text-align: justify;'>
			&emsp; &emsp; &emsp; Bersama ini dengan hormat dikirimkan barang sesuai dengan Surat Permintaan dengan 
			Nomor $nomor_surat tanggal $tanggal_surat. Setelah barang diterima agar saudara meng-klik tombol Terima pada aplikasi dan mencetak tanda terima barang, serta mencatatkan dalam Aplikasi Persediaan sebagai barang.
			</p>";

		// $html .= "    
		// 	<table style='width:100%; font-family: Arial;'>
		// 		<tr>
		// 			<th>Nama</th>
		// 			<th>Nip</th>
		//             <th>Jaba</th>
		//         </tr>  
		//         <tr>
		// 			<td>A</td>
		// 			<td>B</td>
		//             <td>C</td>
		//         </tr>                
		// 	</table>
		// 	";
		$html .= "    
		    <table border='1' cellpadding='10' cellspacing='0' width='100%'>       
			<thead> 
		        <tr style='background-color:lightgrey;'>
		            <th style='font-size:8pt; font-family: Arial; text-align: center;'>No.</th>
		            <th style='font-size:8pt; font-family: Arial;'>Nama Barang</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Permintaan</th>                    
		            <th style='font-size:8pt; font-family: Arial;'>Disetujui</th>
		        </tr>				
			</thead>
			<tbody>
		        ";

		$no = 0;
		$totalJumlah = 0;
		foreach ($getDataHeader as $row) {
			$totalHarga = $row->approval * $row->prices;
			$RpHarga = "Rp " . number_format($row->prices, 2, ',', '.');
			$RpTotalHarga = "Rp " . number_format($totalHarga, 2, ',', '.');
			$no++;
			$html .= '
				
		            <tr>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $no . '</td>   
		                <td style="font-size:8pt; font-family: Arial;">' . $row->name . '</td>                       
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->quantity . ' ' . $row->name_satuan . '</td>
		                <td style="font-size:8pt; font-family: Arial; text-align:center;">' . $row->approval . ' ' . $row->name_satuan . '</td>                   		                
		            </tr>                
		            ';
			$totalJumlah = $totalJumlah + $totalHarga;
		}

		$RptotalJumlah = "Rp " . number_format($totalJumlah, 2, ',', '.');
		$Signatures = $this->M_Signature->get_Signature_byThId($th_id);
		$Signatures_pimp = $this->M_Signature->get_SignaturePimp_byId();
		$ttd_user = $ttd_empty;
		$ttd_courier = $ttd_empty;
		$nama_courier = '';
		if (!empty($Signatures[0]->signature_user)) {
			$ttd_user = $Signatures[0]->signature_user;
		}

		if (!empty($Signatures[0]->signature_courier)) {
			$ttd_courier = $Signatures[0]->signature_courier;
			$nama_courier = $Signatures[0]->nama_courier;
		}

		$spasi = "";
		$rowData = count($getDataHeader);
		if ($rowData > 7) {
			$spasi = "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
		}
		$html .= '
					</tbody>
					<tfoot>
						
					</tfoot>								
				</table>
				
				<p style="font-size:10pt; font-family: Arial; text-align: justify;">
				&emsp; &emsp; &emsp; Demikian Berita Acara ini dibuat untuk dapat dipergunakan sebagaimana mestinya, dan apabila dikemudian hari terdapat kekeliruan akan dilakukan perbaikan sebagaimana mestinya.					
				<p>

				' . $spasi . '				
				<table style="width:100%; font-family: Arial;">
                <tr>
					<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;"></p></th>
					<th font-weight: normal; style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th font-weight: normal; style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Pengambil Barang, </p></th>
                </tr> 				
				<tr>				
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"> </td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"> </td>
					<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 25%" src="' . $ttd_courier . '"></td>					                    
                </tr>  		
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"><p>' . $nama_courier . '<p></th>
                </tr>		              
				<tr>
					<th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"></p></th>
					<th style="width:20% font-size:10pt; font-family: Arial; text-align: center;">  </th>
                    <th style="width:30% font-size:10pt; font-family: Arial; text-align: center; vertical-align:text-top;"><p style="font-weight: normal;"></p></th>
                </tr>
				</table>		
				<br/>	
						
		</body>
		</html>
				';


		$live_mpdf->WriteHTML($html);
		$live_mpdf->Output('yourFileName.pdf', 'I');

		// <table style="width:100%; font-family: Arial;">
		//         <tr>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"><p style="font-weight: normal;">Yang Mengambil Barang,</p></th>					
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		// 			<th font-weight: normal; style="width:50% font-size:10pt; font-family: Arial; text-align: center;"></th>
		//         </tr> 				
		// 		<tr>				
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img style="width: 12%" src="' . $ttd_courier . '"><p>' . $Signatures[0]->nama_courier . '</p></td>									                    
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		// 			<td style="width:30% font-size:10pt; font-family: Arial; text-align: center;">  </td>
		//         </tr>  				              				
		// 		</table>
		// Signatures_pimp[0]->signature_pimp
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_user . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
		// <td style="width:30% font-size:10pt; font-family: Arial; text-align: center;"><img src="' . $Signatures[0]->signature_courier . '"></td>
	}

	public function laporan_stok()
	{
		// $login = $this->session->userdata('user_id');

		$data = $this->M_Transactions->get_ReportallStok();

		$data['listItem'] = $data;


		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportAllStok', $data);
	}

	public function laporan_userTrans()
	{
		// $login = $this->session->userdata('user_id');

		$data = $this->M_Transactions->get_ReportallTrans();

		$data['listItem'] = $data;


		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportUserTrans', $data);
	}

	public function laporan_BarangTransaksi()
	{
		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportUserEachItem');
	}

	public function laporan_BarangTransaksiDetail($id)
	{
		$data['idBarang'] = $id;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportUserEachItemDetail', $data);
	}

	public function report_penghapusan()
	{
		// $login = $this->session->userdata('user_id');

		$data = $this->M_Transactions->get_ReportallPenghapusan();

		$data['listItem'] = $data;


		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/report/V_ReportHapusStock', $data);
	}
}
