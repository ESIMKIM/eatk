<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CTR_Settings extends CI_Controller
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
		$this->load->model('M_Satuan', 'M_Satuan');
		$this->load->model('M_Notif', 'M_Notif');
		$this->load->model('M_Merk', 'M_Merk');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('string');
		$this->load->library('pagination');
		$this->load->helper('auth_helper');
		checkSessionUser();
	}

	function isMobileDevice()
	{
		return preg_match(
			"/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
			$_SERVER["HTTP_USER_AGENT"]
		);
	}


	public function singleItemDetail($id)
	{
		$dataProducts = $this->M_Products->get_single_products_byId($id);

		$slider = $this->M_Products->get_single_productsSliderImg_byId($id);

		// Sidebar
		$getCategory = $this->M_Category->get_allCategory();
		$getMerk = $this->M_Merk->get_allMerk();


		$data['dataProducts'] = $dataProducts;
		$data['slider'] = $slider;
		$sidebar['category'] = $getCategory;
		$sidebar['merk'] = $getMerk;
		// var_dump($dataProducts);
		$this->load->view('user/template/1_header');
		$this->load->view('user/template/2_navbar');
		// $this->load->view('user/template/3_sidebar', $sidebar);
		$this->load->view('user/products/v_products', $data);
	}

	public function set_category()
	{
		$data = $this->M_Category->get_all_category();
		$kirim['dataList'] = $data;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/settings/V_MasterKategori', $kirim);
	}

	public function set_merk()
	{
		$data = $this->M_Merk->get_allMerkObj();
		$kirim['dataList'] = $data;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/settings/V_MasterMerk', $kirim);
	}

	public function set_satuan()
	{
		$data = $this->M_Satuan->get_allSatuanObj();
		$kirim['dataList'] = $data;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/settings/V_MasterSatuan', $kirim);
	}

	public function set_user()
	{
		$getRole = $this->M_Auth->get_role();
		$getDept = $this->M_Auth->get_department();
		$getData = $this->M_Auth->get_dataMasterUser();


		$kirim['role'] = $getRole;
		$kirim['dept'] = $getDept;
		$kirim['dataList'] = $getData;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/settings/V_MasterUsers', $kirim);
	}

	public function profiles_users()
	{
		userRightAdmin();
		$login_id = $this->session->userdata('login_id');
		$profile = $this->M_Auth->get_user_information($login_id);

		$data['data'] = $profile;

		if ($this->isMobileDevice()) {
			$this->load->view('user/template/1_mheader');
			$this->load->view('user/template/2_mnavbar');
			$this->load->view('user/profiles/v_mprofiles', $data);
			// $this->session->unset_userdata('cariItem');
		} else {
			$this->load->view('user/template/1_header');
			$this->load->view('user/template/2_navbar');
			$this->load->view('user/profiles/v_profiles', $data);
			// $this->session->unset_userdata('cariItem');
		}
	}

	public function set_notif()
	{
		$data = $this->M_Notif->get_allNotif();
		$kirim['dataList'] = $data;

		$this->load->view('admin/template/1_header');
		$this->load->view('admin/template/2_sidebar');
		$this->load->view('admin/template/3_navbar');
		$this->load->view('admin/settings/V_MasterNotif', $kirim);
	}




	function get_download_suratPernyataan()
	{
		$file = base_url() . "files/files_unduhan/draft_surat.docx";

		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($file));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;
	}
}
