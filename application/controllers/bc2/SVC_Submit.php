<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once(APPPATH . 'libraries\PHPExcel-1.8\Classes\PHPExcel.php');
// $objReader = PHPExcel_IOFactory::createReader('Excel2007');

class SVC_Submit extends CI_Controller
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
        $this->load->model('M_Notif', 'M_Notif');
        $this->load->model('M_Satuan', 'M_Satuan');
        $this->load->model('M_Merk', 'M_Merk');
        $this->load->model('M_Reason', 'M_Reason');
        $this->load->model('M_Transactions', 'M_Transactions');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('file');
        $this->load->helper('string');
        $this->load->library('pagination');
    }

    function submit_to_cart()
    {
        $this->form_validation->set_rules('qty', 'qty', 'required');
        $this->form_validation->set_rules('prod_id', 'prod_id', 'required');

        $qty = $this->input->post('qty');
        $prod_id = $this->input->post('prod_id');
        $login_user = $this->session->userdata('login_id');
        // $asu = '';
        $is_av = 0;
        $is_habis = true;
        $dataItem = $this->M_Products->get_prod_byId($prod_id);

        foreach ($dataItem as $data) {
            $indexed[$data->is_approval] = 'data_termasuk_approval';
            if ($data->qty < 1) {
                $is_habis = true;
            } else {
                $is_habis = false;
            }
            // echo json_encode($indexed);
        }

        if (isset($indexed['1'])) {
            $is_av = 1;
        }

        if ($is_habis) {
            $array = array(
                'error' => true,
                'pesan' => "error barang habis",
                'ket' => $is_habis
            );
        } else {
            if ($this->form_validation->run() != false) {
                $data = array(
                    'login_id' => $login_user,
                    'products_id' => $prod_id,
                    'reason_id' => 4,
                    'is_approval' => $is_av,
                    'quantity' => $qty,
                    'created_date' => date("Y-m-d")
                );

                $search = $this->M_Transactions->find_item_onCart($login_user, $prod_id);

                if (!empty($search)) {
                    $totalqty = $search[0]['quantity'] + $qty;

                    $data = array(
                        'quantity' => $totalqty,
                        'modified_date' => date("Y-m-d")
                    );

                    $this->M_Transactions->User_updateCart($search[0]['cart_id'], $data);
                } else {
                    $this->M_Transactions->User_add_toCart($data);
                }

                $array = array(
                    'success' => true,
                    'pesan' => "sukses menambahkan data",
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "error pada validasi data"
                );
            }
        }

        echo json_encode($array);
    }

    function delete_item_cart()
    {
        $id = $this->input->post('kode');

        $status = $this->M_Transactions->delete_itemCart($id);

        if ($status == true) {
            $array = array(
                'success' => true,
                'pesan' => "berhasil delete"
            );
        } else {
            $array = array(
                'error' => true,
                'pesanError' => "error pada validasi data " . $id
            );
        }


        echo json_encode($array);
    }

    function getRandomString($length = 8)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }

    // Submit Transaction 
    function submit_allcart()
    {
        $this->form_validation->set_rules('nosurat', 'nosurat', 'required');
        $this->form_validation->set_rules('tglsurat', 'tglsurat', 'required');

        $no_surat = $this->input->post('nosurat');
        $dataSurat = $this->M_Transactions->get_find_noSurat($no_surat);
        $validasiSurat = '';
        if (!empty($dataSurat)) {
            $validasiSurat = $dataSurat[0]->no_surat;
        } else {
            $validasiSurat = 'kosong';
        }
        $errorFiles = "";
        $array = array();


        if ($this->form_validation->run() != false) {

            if ($validasiSurat == $no_surat) {
                $array = array(
                    'error' => true,
                    'pesan' => "Nomor Surat Telah diInput"
                );
            } else {
                $date_now = date("dmY");
                $inv_string = "INV/";
                $nodin_string = "Ndn-" . $this->session->userdata('login_id');
                $lastNumb = $this->M_Transactions->get_lastnumberofHeader();
                $network = $this->M_Auth->get_network();
                $nums = "";
                if (!empty($lastNumb[0]->th_id)) {
                    $nums = $lastNumb[0]->th_id + 1;
                } else {
                    $nums = 1;
                }

                $inv = $inv_string . $date_now . "/" . $this->getRandomString(5) . "/" . $nums;
                $nodinUser = $nodin_string . "-" . $this->getRandomString(6);

                // $no_surat = $this->input->post('nosurat');
                $tgl_surat = $this->input->post('tglsurat');
                $total_item = $this->M_Transactions->get_totalItemofCart($this->session->userdata('login_id'));
                $total_jenis_item = $this->M_Transactions->get_totalJenisofCart($this->session->userdata('login_id'));

                $config['upload_path']          = './files/lampiran_users';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['file_name']            = $nodinUser;
                $config['max_size']             = 10000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $isNodinUploaded = false;

                $dataCart = $this->M_Transactions->get_cart_user($this->session->userdata('login_id'));
                $verf = $this->M_Transactions->get_cart_byUserId($this->session->userdata('login_id'));
                $is_verify = '0';
                $is_importantItem = '0';
                foreach ($verf as $datas) {
                    if ($datas->is_approval == 1) {
                        $is_importantItem = 1;
                    }
                }
                // if (empty($_FILES['nodin_lampiran']['name']) && $is_importantItem == 1) {
                //     $is_verify = '1';
                // } else {
                //     $is_verify = '0';
                // }

                if ($is_importantItem == 1) {
                    if (!empty($_FILES['nodin_lampiran']['name'])) {
                        $fileExt = pathinfo($_FILES["nodin_lampiran"]["name"], PATHINFO_EXTENSION);
                        $urlNodin = 'files/lampiran_users/' . $nodinUser .  '.' . $fileExt;

                        if ($this->upload->do_upload('nodin_lampiran')) {
                            $logFiles = array('error' => $this->upload->display_errors());
                            $array = array(
                                'successFile' => true,
                                'pesanFiles' => "File Successfuly Uploaded",
                                'file_status' => $logFiles
                            );

                            $dataHeader = array(
                                'user_id' => $this->session->userdata('user_id'),
                                'no_invc' => $inv,
                                'total_quantity' => $total_item[0]->hasil,
                                'total_jenis' => $total_jenis_item[0]->hasil,
                                'no_surat'   => $no_surat,
                                'tgl_surat' => $tgl_surat,
                                'url_nodin' => $urlNodin,
                                'is_approval' => $is_importantItem,
                                'status' => 1,
                                'is_done' => 0,
                                'created_date' => date("Y-m-d")
                            );

                            $hId = $this->M_Transactions->Submit_transactionHeader($dataHeader);


                            foreach ($dataCart as $datas) {
                                $desc = $this->M_Reason->get_reason_byId($datas["reason_id"]);
                                $dataDetail = array(
                                    'th_id' => $hId,
                                    'products_id' => $datas["products_id"],
                                    'quantity' => $datas["quantity"],
                                    'reason_id' => $datas["reason_id"],
                                    'reason_desc'   => $desc[0]->title,
                                    'created_date' => date("Y-m-d")
                                );

                                $this->M_Transactions->Submit_transactionDetail($dataDetail);
                            }

                            $this->M_Transactions->delete_itemCartAfterSubmit($this->session->userdata('login_id'));

                            $array = array(
                                'success' => true,
                                'pesan' => "Transaction Success",
                                'file_status' => $logFiles
                            );
                        } else {
                            $logFiles = array('upload_data' => $this->upload->data());

                            $array = array(
                                'errorFile' => true,
                                'pesanFile' => "File Can't Uploaded",
                                'file_status' => $logFiles
                            );
                        }
                    } else {
                        $array = array(
                            'errorFile' => true,
                            'pesanFlagItem' => "need files"
                        );
                    }
                } else {
                    if (!empty($_FILES['nodin_lampiran']['name'])) {
                        $fileExt = pathinfo($_FILES["nodin_lampiran"]["name"], PATHINFO_EXTENSION);
                        $urlNodin = 'files/lampiran_users/' . $nodinUser .  '.' . $fileExt;

                        if ($this->upload->do_upload('nodin_lampiran')) {
                            $logFiles = array('error' => $this->upload->display_errors());
                            $array = array(
                                'successFile' => true,
                                'pesanFiles' => "File Successfuly Uploaded",
                                'file_status' => $logFiles
                            );
                        }
                    }

                    $dataHeader = array(
                        'user_id' => $this->session->userdata('user_id'),
                        'no_invc' => $inv,
                        'total_quantity' => $total_item[0]->hasil,
                        'total_jenis' => $total_jenis_item[0]->hasil,
                        'no_surat'   => $no_surat,
                        'tgl_surat' => $tgl_surat,
                        // 'url_nodin' => $urlNodin,
                        'is_approval' => $is_importantItem,
                        'status' => 1,
                        'created_date' => date("Y-m-d")
                    );

                    $hId = $this->M_Transactions->Submit_transactionHeader($dataHeader);


                    foreach ($dataCart as $datas) {
                        $desc = $this->M_Reason->get_reason_byId($datas["reason_id"]);
                        $dataDetail = array(
                            'th_id' => $hId,
                            'products_id' => $datas["products_id"],
                            'quantity' => $datas["quantity"],
                            'reason_id' => $datas["reason_id"],
                            'reason_desc'   => $desc[0]->title,
                            'created_date' => date("Y-m-d")
                        );

                        $this->M_Transactions->Submit_transactionDetail($dataDetail);
                    }

                    $this->M_Transactions->delete_itemCartAfterSubmit($this->session->userdata('login_id'));

                    $array = array(
                        'success' => true,
                        'pesan' => "Transaction Success",
                        'file_status' => 'transaction is without files'
                    );
                }
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "Check Kembali Nomor Surat serta Tanggal Surat"
            );
        }
        echo json_encode($array);
    }

    function submit_permintaanUser()
    {
        $this->form_validation->set_rules('setujui', 'Jumlah Barang', 'required');
        $errorFiles = "";
        $array = array();

        if ($this->form_validation->run() != false) {

            $date_now = date("dmY");
            $jumlah = $this->input->post('setujui');
            $alasan = $this->input->post('alasanAdmin');

            $data = array(
                'status' => 2,
                'modified_date' => date("Y-m-d"),
                'status' => 1,
                'created_date' => date("Y-m-d")
            );

            if ($this->upload->do_upload('nodin_lampiran')) {
                $logFiles = array('error' => $this->upload->display_errors());
                $array = array(
                    'successFile' => true,
                    'pesan' => "File Successfuly Uploaded",
                    'file_status' => $logFiles
                );
                $isNodinUploaded = true;
            } else {
                $logFiles = array('upload_data' => $this->upload->data());

                $array = array(
                    'errorFile' => true,
                    'pesan' => "File Can't Uploaded",
                    'file_status' => $logFiles
                );
                $isNodinUploaded = false;
            }

            if ($isNodinUploaded) {
                $dataHeader = array(
                    // 'user_id' => $this->session->userdata('user_id'),
                    // 'no_invc' => $inv,
                    // 'total_quantity' => $total_item[0]->hasil,
                    // 'total_jenis' => $total_jenis_item[0]->hasil,
                    // 'no_surat'   => $no_surat,
                    // 'tgl_surat' => $tgl_surat,
                    // 'url_nodin' => $urlNodin,
                    'status' => 1,
                    'created_date' => date("Y-m-d")
                );

                $hId = $this->M_Transactions->Submit_transactionHeader($dataHeader);
                $dataCart = $this->M_Transactions->get_cart_user($this->session->userdata('login_id'));

                foreach ($dataCart as $datas) {
                    $dataDetail = array(
                        'th_id' => $hId,
                        'products_id' => $datas["products_id"],
                        'quantity' => $datas["quantity"],
                        'reason_id' => $datas["reason_id"],
                        'reason_desc'   => $datas["keterangan"],
                        'created_date' => date("Y-m-d")
                    );

                    $this->M_Transactions->Submit_transactionDetail($dataDetail);
                }

                $this->M_Transactions->delete_itemCartAfterSubmit($this->session->userdata('login_id'));

                $array = array(
                    'success' => true,
                    'pesan' => "Transaction Success",
                    'file_status' => $logFiles
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Input File Gagal"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "Check All Input Form"
            );
        }
        echo json_encode($array);
    }

    // Submit Products
    function submit_newProduct()
    {

        $this->form_validation->set_rules('namaBarang', 'namaBarang', 'required');
        // $this->form_validation->set_rules('jumlahBarang', 'jumlahBarang', 'required');
        // $this->form_validation->set_rules('hargaBarang', 'hargaBarang', 'required');
        $this->form_validation->set_rules('kategoriBarang', 'kategoriBarang', 'required');
        $this->form_validation->set_rules('merkBarang', 'merkBarang', 'required');
        $this->form_validation->set_rules('persetujuan', 'persetujuan', 'required');
        $this->form_validation->set_rules('satuanBarang', 'satuanBarang', 'required');


        $namaBarang = $this->input->post('namaBarang');
        // $jumlahBarang = $this->input->post('jumlahBarang');
        // $hargaBarang = $this->input->post('hargaBarang');
        $kategoriBarang = $this->input->post('kategoriBarang');
        $merkBarang = $this->input->post('merkBarang');
        $persetujuan = $this->input->post('persetujuan');
        $satuanBarang = $this->input->post('satuanBarang');
        $array = array();

        if ($this->form_validation->run() != false) {
            $cariDataDouble = $this->M_Products->cek_sameInput($namaBarang);
            if (!empty($cariDataDouble)) {
                $array = array(
                    'error' => true,
                    'pesanError' => "Barang sudah disimpan",
                );
            } else {
                $files_path = './files/tmp_upload/';
                if (!file_exists($files_path)) {
                    mkdir($files_path, 0777, true);
                }

                $config['upload_path'] = $files_path;
                $config['allowed_types'] = 'jpeg|gif|jpg|png';
                $config['max_size'] = 500;
                $config['overwrite'] = false;

                $this->load->library('upload', $config);


                if (!empty($_FILES["thumbnails"]["name"])) {
                    $ext = strtolower(pathinfo($_FILES['thumbnails']['name'], PATHINFO_EXTENSION));
                    $_FILES['thumbnails']['name'] = "fileTemp." . $ext;

                    if (!$this->upload->do_upload('thumbnails')) {
                        $array = array(
                            'error' => true,
                            'error_info' => $this->upload->display_errors(),
                        );

                        echo json_encode($array);
                    } else {
                        $name = $_FILES['thumbnails']['name'];
                        $target_file = $files_path . basename($_FILES["thumbnails"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        $image_base64 = base64_encode(file_get_contents($target_file));
                        $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

                        $dataProduct = array(
                            'name' => $namaBarang,
                            'descs' => null,
                            'prices' => 0,
                            'category_id'   => $kategoriBarang,
                            'satuan_id' =>  $satuanBarang,
                            'merk_id' =>  $merkBarang,
                            'qty' => 0,
                            'is_active' => 1,
                            'is_approval' => $persetujuan,
                            'created_date' => date("Y-m-d")
                        );

                        $products_id = $this->M_Products->insert_products($dataProduct);

                        $dataProductImage = array(
                            'products_id' => $products_id,
                            'images' => $image,
                            'is_thumbnails' => 1,
                            'is_slider'   => 0,
                            'is_visible' => 1,
                            'created_date' => date("Y-m-d")
                        );

                        $productsImages_id = $this->M_Products->insert_products_images($dataProductImage);

                        $array = array(
                            'success' => true,
                            'pesan' => "Perangkat Berhasil Ditambah",
                        );

                        // echo json_encode($array);

                        unlink($target_file);
                    }
                } else {
                    $array = array(
                        'error' => true,
                        'errorImage' => true,
                        'pesanError' => "Images is not supported, please save you'r image on paint and save as png than try again or Not File Found",
                    );
                }
            }
        } else {
            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }

    function update_newProduct()
    {

        $this->form_validation->set_rules('namaBarang', 'namaBarang', 'required');
        // $this->form_validation->set_rules('jumlahBarang', 'jumlahBarang', 'required');
        // $this->form_validation->set_rules('hargaBarang', 'hargaBarang', 'required');
        $this->form_validation->set_rules('kategoriBarang', 'kategoriBarang', 'required');
        $this->form_validation->set_rules('merkBarang', 'merkBarang', 'required');
        $this->form_validation->set_rules('persetujuan', 'persetujuan', 'required');
        $this->form_validation->set_rules('satuanBarang', 'satuanBarang', 'required');



        $prods_id = $this->input->post('prods_id');
        $namaBarang = $this->input->post('namaBarang');
        // $jumlahBarang = $this->input->post('jumlahBarang');
        // $hargaBarang = $this->input->post('hargaBarang');
        $kategoriBarang = $this->input->post('kategoriBarang');
        $merkBarang = $this->input->post('merkBarang');
        $persetujuan = $this->input->post('persetujuan');
        $satuanBarang = $this->input->post('satuanBarang');
        $array = array();

        if ($this->form_validation->run() != false) {

            $files_path = './files/tmp_upload/';
            if (!file_exists($files_path)) {
                mkdir($files_path, 0777, true);
            }

            $config['upload_path'] = $files_path;
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size'] = 500;
            $config['overwrite'] = false;

            $this->load->library('upload', $config);


            if (!empty($_FILES["thumbnails"]["name"])) {
                $ext = strtolower(pathinfo($_FILES['thumbnails']['name'], PATHINFO_EXTENSION));
                $_FILES['thumbnails']['name'] = "fileTemp." . $ext;

                if (!$this->upload->do_upload('thumbnails')) {
                    $array = array(
                        'error' => true,
                        'error_info' => $this->upload->display_errors(),
                    );

                    echo json_encode($array);
                } else {
                    $name = $_FILES['thumbnails']['name'];
                    $target_file = $files_path . basename($_FILES["thumbnails"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    $image_base64 = base64_encode(file_get_contents($target_file));
                    $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

                    $dataProduct = array(
                        'name' => $namaBarang,
                        'category_id'   => $kategoriBarang,
                        'satuan_id' =>  $satuanBarang,
                        'merk_id' =>  $merkBarang,
                        'is_approval' => $persetujuan,
                        'modified_date' => date("Y-m-d")
                    );

                    $updateProducts = $this->M_Products->update_prods_byid($prods_id, $dataProduct);
                    $getImgId = $this->M_Products->get_productImg_byProdID($prods_id);

                    if ($updateProducts) {

                        $dataProductImage = array(
                            'products_id' => $prods_id,
                            'images' => $image,
                            'modified_date' => date("Y-m-d")
                        );

                        $updateProductsImages = $this->M_Products->update_products_images($dataProductImage, $getImgId[0]->img_id);

                        unlink($target_file);

                        if ($updateProductsImages) {
                            $array = array(
                                'success' => true,
                                'pesan' => "Product Berhasil Ditambah",
                            );
                        } else {
                            $array = array(
                                'error' => true,
                                'errorImage' => true,
                                'pesanError' => "Update Data Gambar Gagal Info Dev",
                            );
                        }
                    } else {
                        $array = array(
                            'error' => true,
                            'pesanError' => "Update Data Form Gagal Info Dev",
                        );
                    }
                    // echo json_encode($array);
                }
            } else {

                // $name = $_FILES['thumbnails']['name'];
                // $target_file = $files_path . basename($_FILES["thumbnails"]["name"]);
                // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // $image_base64 = base64_encode(file_get_contents($target_file));
                // $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

                $dataProduct = array(
                    'name' => $namaBarang,
                    'category_id'   => $kategoriBarang,
                    'satuan_id' =>  $satuanBarang,
                    'merk_id' =>  $merkBarang,
                    'is_approval' => $persetujuan,
                    'modified_date' => date("Y-m-d")
                );

                $updateProducts = $this->M_Products->update_prods_byid($prods_id, $dataProduct);
                $array = array(
                    'success' => true,
                    'pesan' => "Product Berhasil Ditambah tanpa Gambar",
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }


    function submit_stockProduct()
    {

        $this->form_validation->set_rules('no_po', 'no_po', 'required');
        $this->form_validation->set_rules('tgl_surat', 'tgl_surat', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        // $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('prodId', 'prodId', 'required');



        $no_po = $this->input->post('no_po');
        $tgl_surat = $this->input->post('tgl_surat');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');
        $prodId = $this->input->post('prodId');
        $array = array();

        if ($this->form_validation->run() != false) {

            $files_path = './files/tmp_upload/';
            if (!file_exists($files_path)) {
                mkdir($files_path, 0777, true);
            }

            $config['upload_path'] = $files_path;
            $config['allowed_types'] = 'jpeg|gif|jpg|png|pdf|';
            $config['max_size'] = 500;
            $config['overwrite'] = false;

            $this->load->library('upload', $config);


            if (!empty($_FILES["thumbnails_invoice"]["name"])) {
                $ext = strtolower(pathinfo($_FILES['thumbnails_invoice']['name'], PATHINFO_EXTENSION));
                $_FILES['thumbnails_invoice']['name'] = "fileTemp." . $ext;

                if (!$this->upload->do_upload('thumbnails_invoice')) {
                    $array = array(
                        'error' => true,
                        'error_info' => $this->upload->display_errors(),
                    );

                    echo json_encode($array);
                } else {
                    $name = $_FILES['thumbnails_invoice']['name'];
                    $target_file = $files_path . basename($_FILES["thumbnails_invoice"]["name"]);
                    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    $image_base64 = base64_encode(file_get_contents($target_file));
                    // $image = 'data:pdf/' . $imageFileType . ';base64,' . $image_base64;

                    $dataProduct = array(
                        'products_id' => $prodId,
                        'no_po' => $no_po,
                        'date_po'   => $tgl_surat,
                        'prices' =>  $harga,
                        'total' =>  $jumlah,
                        'sisa' =>  $jumlah,
                        'terkirim' =>  0,
                        'lampiran' =>  $image_base64,
                        'desc' => $keterangan,
                        'created_date' => date("Y-m-d")
                    );

                    $s1 = $this->M_Transactions->Submit_transactionHistoryStock($dataProduct);


                    if (!empty($s1)) {
                        $dProd = $this->M_Products->get_prod_byId($prodId);
                        $totalTambah = $dProd[0]->qty + $jumlah;

                        $getnow = $this->M_Transactions->get_nowPrices_by_Stock($prodId);

                        if (empty($getnow)) {
                            $getnow = $this->M_Transactions->get_datahitoryId_byProdsId($prodId);
                        }

                        $dataStock = array(
                            'qty' => $totalTambah,
                            'prices' => $getnow[0]->prices,
                        );

                        $this->M_Products->update_prods_byid($prodId, $dataStock);
                        $array = array(
                            'success' => true,
                            'pesan' => "Stock Berhasil Ditambah",
                        );
                    } else {
                        $array = array(
                            'error' => true,
                            'pesan' => "Stock Gagal Ditambah",
                        );
                    }
                    unlink($target_file);
                }
            } else {
                $array = array(
                    'error' => true,
                    'errorImage' => true,
                    'pesanError' => "Images is not supported, please save you'r image on paint and save as png than try again or Not File Found",
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }

    function Submit_set_category()
    {
        $this->form_validation->set_rules('namaKategori', 'namaKategori', 'required');
        // $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() != false) {
            $namaKategori = $this->input->post('namaKategori');
            $keterangan = $this->input->post('keterangan');

            $data = array(
                'name_category' => $namaKategori,
                'desc' => $keterangan,
                'is_shown' => 0,
                'created_date' => date("Y-m-d")
            );

            $cat_id = $this->M_Category->insert_category($data);

            if (!empty($cat_id)) {
                $array = array(
                    'success' => true,
                    'pesan' => "Tambah Data Berhasil",
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Tambah Data Gagal",
                );
            }
        } else {

            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }

    function Submit_set_merk()
    {
        $this->form_validation->set_rules('merkBarang', 'merkBarang', 'required');

        if ($this->form_validation->run() != false) {
            $namaMerk = $this->input->post('merkBarang');

            $data = array(
                'name_merk' => $namaMerk,
                'created_date' => date("Y-m-d")
            );

            $cat_id = $this->M_Merk->insert_merk($data);

            if (!empty($cat_id)) {
                $array = array(
                    'success' => true,
                    'pesan' => "Tambah Data Berhasil",
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Tambah Data Gagal",
                );
            }
        } else {

            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }

    function Submit_set_satuan()
    {
        $this->form_validation->set_rules('satuanBarang', 'satuanBarang', 'required');

        if ($this->form_validation->run() != false) {
            $satuanBarang = $this->input->post('satuanBarang');

            $data = array(
                'name_satuan' => $satuanBarang,
                'created_date' => date("Y-m-d")
            );

            $sat_id = $this->M_Satuan->insert_satuan($data);

            if (!empty($sat_id)) {
                $array = array(
                    'success' => true,
                    'pesan' => "Tambah Data Berhasil",
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Tambah Data Gagal",
                );
            }
        } else {

            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }

    function Submit_set_users()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('dept', 'dept', 'required');
        $this->form_validation->set_rules('role', 'role', 'required');


        if ($this->form_validation->run() != false) {
            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $dept_id = $this->input->post('dept');
            $role_id = $this->input->post('role');
            $psd = password_hash('12345678', PASSWORD_DEFAULT);

            $dataUser = array(
                'name' => $nama,
                'nip' => $nip,
                'dept_id' => $dept_id,
                'created_date' => date("Y-m-d")
            );

            $user_id = $this->M_Auth->insert_data_user($dataUser);

            $dataLogin = array(
                'user_id' => $user_id,
                'username' => $nip,
                'sandi' => $psd,
                'role_id' => $role_id,
                'template_id' => $role_id,
                // 'created_date' => date("Y-m-d")
            );

            $login_id = $this->M_Auth->insert_data_login($dataLogin);

            if (!empty($user_id) && !empty($login_id)) {
                $array = array(
                    'success' => true,
                    'pesan' => "Tambah Data Berhasil",
                );
            } else {
                $this->M_Auth->delete_user($user_id);
                $this->M_Auth->delete_login($login_id);
                $array = array(
                    'error' => true,
                    'pesan' => "Tambah Data Gagal",
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesanError' => "Periksa kembali form isian anda",
            );
        }

        echo json_encode($array);
    }


    function Submit_set_notif()
    {
        // $this->form_validation->set_rules('versi', 'versi', 'required');
        // $this->form_validation->set_rules('fs', 'fs', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        $config['upload_path']          = './files/notif';
        $config['allowed_types']        = 'mp4';
        $config['file_name']            = "versi_" . $this->input->post('versi');
        $config['max_size']             = 150000;

        $this->load->library('upload', $config);

        $versi = $this->input->post('versi');
        $keterangan = $this->input->post('keterangan');
        // $video = $this->input->post('fs');

        // if (!$this->upload->do_upload('fs')) # form input field attribute
        // {
        //     # Upload Failed
        //     $logFiles = $this->upload->display_errors();


        //     $array = array(
        //         'file_status' => $logFiles
        //     );
        // }

        // if ($this->upload->do_upload('fs')) {
        //     $logFiles = array('error' => $this->upload->display_errors());
        //     $array = array(
        //         'successFile' => true,
        //         'pesanFiles' => "File Successfuly Uploaded",
        //         'file_status' => $logFiles
        //     );
        // } else {
        //     $array = array(
        //         'successFile' => true,
        //         'pesanFiles' => "File Successfuly Uploaded",
        //         // 'file_status' => $logFiles
        //     );
        // }

        // $array = array(
        //     'error' => true,
        //     'pesan1' => $versi,
        //     'pesan2' => $keterangan,
        //     'pesan3' => $video,
        // );

        if ($this->form_validation->run() != false) {


            $fileExt = pathinfo($_FILES["fs"]["name"], PATHINFO_EXTENSION);
            $url_files = 'files/notif/' . 'versi_' . $versi . $fileExt;

            if (!$this->upload->do_upload('fs')) {
                $logFiles = array('error' => $this->upload->display_errors());

                $array = array(
                    'error' => true,
                    'pesan' => "Tambah Data Gagal files" . $this->upload->display_errors(),
                );
            } else {
                $logFiles = array('error' => $this->upload->display_errors());

                $array = array(
                    'successFile' => true,
                    'pesanFiles' => "File Successfuly Uploaded",
                    'file_status' => $logFiles
                );

                $dataNotif = array(
                    'versi_update' => $versi,
                    'desc_update' => $keterangan,
                    'url_video' => $url_files,
                    'is_active' => '1',
                    'off_date' => Date('y:m:d', strtotime('+3 days')),
                    'created_date' => date("Y-m-d")
                );

                $notif = $this->M_Notif->insert_notif($dataNotif);


                if (!empty($notif)) {
                    $array = array(
                        'success' => true,
                        'pesan' => "Tambah Data Berhasil",
                    );
                } else {
                    $array = array(
                        'error' => true,
                        'pesan' => "Tambah Data Gagal",
                    );
                }
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "Tambah Data Gagal validasi",
            );
        }

        echo json_encode($array);
    }



    function Submit_set_notifxx()
    {
        $this->form_validation->set_rules('versi', 'versi', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        $config['upload_path']          = './files/notif';
        $config['allowed_types']        = 'mp4';
        $config['file_name']            = $this->input->post('versi');
        $config['max_size']             = 150000;

        $this->load->library('upload', $config);

        $versi = $this->input->post('versi');
        $keterangan = $this->input->post('keterangan');
        // $video = $this->input->post('fs');

        // if (!$this->upload->do_upload('fs')) # form input field attribute
        // {
        //     # Upload Failed
        //     $logFiles = $this->upload->display_errors();


        //     $array = array(
        //         'file_status' => $logFiles
        //     );
        // }

        // if ($this->upload->do_upload('fs')) {
        //     $logFiles = array('error' => $this->upload->display_errors());
        //     $array = array(
        //         'successFile' => true,
        //         'pesanFiles' => "File Successfuly Uploaded",
        //         'file_status' => $logFiles
        //     );
        // } else {
        //     $array = array(
        //         'successFile' => true,
        //         'pesanFiles' => "File Successfuly Uploaded",
        //         // 'file_status' => $logFiles
        //     );
        // }

        // $array = array(
        //     'error' => true,
        //     'pesan1' => $versi,
        //     'pesan2' => $keterangan,
        //     'pesan3' => $video,
        // );


        if ($this->form_validation->run() != false) {

            $fileExt = pathinfo($_FILES["fs"]["name"], PATHINFO_EXTENSION);
            $url_files = 'files/notif/' . $versi  . $fileExt;

            if (!$this->upload->do_upload('fs')) {
                $logFiles = array('error' => $this->upload->display_errors());

                $array = array(
                    'error' => true,
                    'pesan' => "Tambah Data Gagal files" . $this->upload->display_errors(),
                );
            } else {
                $logFiles = array('error' => $this->upload->display_errors());

                $array = array(
                    'successFile' => true,
                    'pesanFiles' => "File Successfuly Uploaded",
                    'file_status' => $logFiles
                );

                $dataNotif = array(
                    'versi_update' => $versi,
                    'desc_update' => $keterangan,
                    'url_video' => $url_files,
                    'off_date' => Date('y:m:d', strtotime('+3 days')),
                    'created_date' => date("Y-m-d")
                );

                $notif = $this->M_Notif->insert_notif($dataNotif);


                if (!empty($notif)) {
                    $array = array(
                        'success' => true,
                        'pesan' => "Tambah Data Berhasil",
                    );
                } else {
                    $array = array(
                        'error' => true,
                        'pesan' => "Tambah Data Gagal",
                    );
                }
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "Tambah Data Gagal validasi"
            );
        }

        echo json_encode($array);
    }
}
