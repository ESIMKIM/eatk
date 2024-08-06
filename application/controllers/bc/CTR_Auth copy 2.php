<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CTR_Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('zip');
		$this->load->library('encryption');
		$this->load->model('M_Auth', 'MLogin');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('file');
		$this->load->helper('string');
	}

	public function index()
	{
		// $this->load->view('template/1_header');
		$this->load->view('user/auth/V_Logins');
	}

	public function logins()
	{
		echo "ss";
	}

	public function gen_token()
	{
		$token = bin2hex(random_bytes(16));

		return $token;
	}

	public function gen_expireDate()
	{
		date_default_timezone_set('Asia/Jakarta');
		$Date = date('Y-m-d H:i:s');
		$newDate = date('Y-m-d H:i:s', strtotime(' + 5 hours'));

		return $newDate;
	}


	public function login()
	{
		// $token = bin2hex(random_bytes(16));
		date_default_timezone_set('Asia/Jakarta');
		$username = $this->input->post('nip');
		$password = $this->input->post('password');
		$users = $this->MLogin->get_auth($username);

		if (!empty($username) && !empty($password)) {
			if (!empty($users)) {
				foreach ($users as $data) {
					if (password_verify($password, $data->sandi)) {
						//User
						$xpDate = 0;
						$s = $data->exp_date;
						$dt = new DateTime($s);

						$datex = $dt->format('Y-m-d');
						$timex = $dt->format('H:i:s');

						//Now
						$daten = date('Y-m-d', time());
						$timen = date('H:i:s', time());



						if ($datex == $daten) {
							if ($timex > $timen) {
								$xpDate = 1;
							} else {
								$xpDate = 2;
							}
						} else {
							$xpDate = 2;
						}

						$array = array(
							'error'   => true,
							'pesan' =>   $xpDate,
						);

						if (!empty($data->token_login) && $xpDate == 1) {
							// $foto = 'http://localhost/arsip_admin/gambar/user/' . $data->user_foto;
							$this->session->set_userdata('is_on', TRUE);
							$this->session->set_userdata('nama', $data->name);
							$this->session->set_userdata('showItem', 16);
							$this->session->set_userdata('user_id', $data->user_id);
							$this->session->set_userdata('login_id', $data->login_id);
							$this->session->set_userdata('role_id', $data->role_id);
							$this->session->set_userdata('nip', $data->nip);
							// 	// $this->session->set_userdata('foto', $foto);
							// 	$array = array(
							// 		'success'   => true,
							// 	);
							// 	redirect('dahsboard');
							// 	$exp = $this->gen_expireDate();

							$token = $this->gen_token();

							// 	date_default_timezone_set("asia/jakarta");
							$minutes_to_add = 60;

							$dx = date('Y-m-d H:i:s', time());
							$time = new DateTime($dx);
							$time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

							$exp = $time->format('Y-m-d H:i:s');

							$update = array(
								'token_login'   => $token,
								'exp_date' =>   $exp,
								'last_date' =>   $dx,
							);

							$this->MLogin->update_data_login($data->login_id, $update);

							$array = array(
								'success'   => true,
								'pesan' =>   "Sesi Telah Habis",
							);

							$this->session->sess_expiration = '3600'; // expires in 30 minutes
						} else {
							$array = array(
								'error'   => true,
								'pesan' =>   "Sesi Telah Habisx",
							);
						}
					} else {
						// date_default_timezone_set("asia/jakarta");
						// $now = date('H:i:s', time());
						// $xpDate = 0;

						// $datetime = $data->exp_date;
						// $timex = strtotime($datetime);
						// $now = date('H:i:s', time());

						// if ($data->exp_date > $now) {
						// 	$xpDate = 1;
						// }
						// var_dump($xpDate);
						$array = array(
							'error'   => true,
							'pesan' => "error"
						);
					}
				}
			} else {
				$array = array(
					'error'   => true,
					'pesan' => "Nip atau Sandi Salah1"
				);
			}
		} else {
			$array = array(
				'error'   => true,
				'pesan' => "Nip atau Sandi Salah2"
			);
		}

		// $array = array(
		// 	'success'   => true,
		// 	'nip' =>  $users,
		// 	// 'password' => "Password Kosong",
		// );

		echo json_encode($array);
	}
}
