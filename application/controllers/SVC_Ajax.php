<?php
defined('BASEPATH') or exit('No direct script access allowed');
// require_once(APPPATH . 'libraries\PHPExcel-1.8\Classes\PHPExcel.php');
// $objReader = PHPExcel_IOFactory::createReader('Excel2007');

class SVC_Ajax extends CI_Controller
{
    // https://auroraepc.com/contact-aurora
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
        $this->load->model('M_Report', 'M_Report');
        $this->load->model('M_Signature', 'M_Signature');
        $this->load->model('M_Satuan', 'M_Satuan');
        $this->load->model('M_Transactions', 'M_Transactions');
        $this->load->model('M_Merk', 'M_Merk');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('file');
        $this->load->helper('auth_helper');
        $this->load->helper('string');
        $this->load->library('pagination');
    }

    // $this->db->select('p.products_id');
    //     $this->db->select('p.prices,');
    //     $this->db->select('img.`images` AS gambar');
    //     $this->db->select('p.`name` AS nama_barang');
    //     $this->db->select('pm.`name_merk` AS merk');
    //     $this->db->select('pc.`name_category` AS category');
    //     $this->db->select("CONCAT('p.qty', ' ', ps.name_satuan) AS stok");


    function Data_JsonProdukBarang()
    {
        $list = $this->M_Products->get_produkBarang();
        $data = array();
        foreach ($list as $item) {
            $row = array();
            $row['products_id'] = $item->products_id;
            $row['prices'] = $item->prices;
            $row['gambar'] = $item->gambar;
            $row['nama_barang'] = $item->nama_barang;
            $row['merk'] = $item->merk;
            $row['category'] = $item->category;
            $row['stok'] = $item->qty;
            $row['satuan'] = $item->name_satuan;
            $data[] = $row;
            $row['btn_master_edit'] = "master-barang-edit";
            $row['btn_master_histori'] = "history-stock";
        }
        $result = array(
            'draw' => @$_POST['draw'],
            'recordsTotal' => $this->M_Products->countAllProdukBarang(),
            'recordsFiltered' => $this->M_Products->countFilterProdukBarang(),
            'data' => $data
        );

        echo json_encode($result);
    }

    // Ajax Master Barang
    public function ajax_listMasterBarang()
    {
        header('Content-Type: application/json');
        $list = $this->Data_mahasiswa_model->get_datatables();
        $data = array();
        $no = $this->input->post('start');
        //looping data mahasiswa
        foreach ($list as $Data_mahasiswa) {
            $no++;
            $row = array();
            //row pertama akan kita gunakan untuk btn edit dan delete
            $row[] =  '<a class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
            <a class="btn btn-danger btn-sm "><i class="fa fa-trash"></i> </a>';
            $row[] = $Data_mahasiswa->Nama;
            $row[] = $Data_mahasiswa->Alamat;
            $row[] = $Data_mahasiswa->Email;
            $data[] = $row;
        }
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->Data_mahasiswa_model->count_all(),
            "recordsFiltered" => $this->Data_mahasiswa_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        $this->output->set_output(json_encode($output));
    }




    function setShowItem()
    {
        $rowLimit = $this->input->post('showItem');

        $this->session->set_userdata('showItem', $rowLimit);

        $status = "200";
        echo json_encode($status);
    }

    function upQtyCart()
    {
        $qty = $this->input->post('qty');
        $idi = $this->input->post('idi');
        $prod_id = $this->input->post('prod');

        $data = array(
            'quantity' => $qty,
            'modified_date' => date("Y-m-d")
        );

        $status = $this->M_Transactions->update_cart($idi, $data);

        if ($status == false) {
            $aray = array(
                'error' => true,
                'pesan' => "data not affected"
            );
        } else {
            $aray = array(
                'success' => true,
                'pesan' => "data affected"
            );
        }
        echo json_encode($aray);
    }



    function upAdmQtyAproval()
    {
        $qty = $this->input->post('qty');
        $th_id = $this->input->post('idi');
        $prod_id = $this->input->post('prod');
        $cariId = $this->M_Transactions->get_transDetailbyProdnThid($th_id, $prod_id);
        $detail_id = $cariId[0]->td_id;

        $data = array(
            'approval' => $qty,
            'modified_date' => date("Y-m-d")
        );

        $s1 = $this->M_Transactions->update_adminAproval($detail_id, $data);

        if ($s1 == false) {
            $array = array(
                'error' => true,
                'pesan' => "data not affected = " . $s1,
            );
        } else {
            $array = array(
                'success' => true,
                'pesan' => "data affected = " . $s1,

            );
        }


        echo json_encode($array);
    }

    function upLockTransaksi()
    {
        $th_id = $this->input->post('th_id');
        $isDone = $this->input->post('is_done');
        $infos = false;

        $isNotApproved = $this->M_Transactions->get_isApprovedDone($th_id);
        if (empty($isNotApproved)) {
            $dataHD = $this->M_Transactions->get_data_forUpdateHistory($th_id);


            foreach ($dataHD as $x) {
                // get data to know how much lot of item on 1 products_id to split in history_stock, like 10 item split in to due different value base on stock
                $splitData = $this->M_Transactions->get_hitoryId_byProdsId($x->products_id);
                $nilai_sisa = 0;
                foreach ($splitData as $key) {
                    // if ($key->sisa == 0) {
                    //     // ""
                    // } elseif (($key->sisa > 0)) {
                    //     $xs = $key->sisa - $x->approval;
                    //     if ($xs < 0) {
                    //         $nilai_sisa = abs($xs);
                    //     } else {
                    //         $nilai_sisa = 0;
                    //     }
                    // } elseif (($key->sisa > 0)) {
                    // }



                    if ($key->sisa == 0) {
                        $nilai_sisa = 0;
                    } elseif (($key->sisa > 0)) {
                        if ($nilai_sisa == 0) {
                            $xs = $key->sisa - $x->approval;
                            if ($xs < 0) {
                                $nilai_sisa = abs($xs);
                                $dataDetailSplitItem = array(
                                    'id' => 0
                                );
                            } else {
                                $nilai_sisa = 0;
                            }
                        } elseif (($nilai_sisa != 0)) {
                            $xs = $key->sisa - $nilai_sisa;
                        }
                    }




                    // elseif (($key->sisa > 0)) {
                    //     $xs = $key->sisa - $x->approval;
                    //     if ($xs < 0) {
                    //         $nilai_sisa = abs($xs);
                    //     } else {
                    //         $nilai_sisa = 0;
                    //     }
                    // } elseif (($key->sisa > 0)) {
                    // }
                }

                $nol = '';
                if ($x->approval == 0) {
                    $nol = 1;
                }
                $infos =  $this->upHistoryStockData($x->approval, $x->products_id, $nol);
            }

            if ($infos == 200) {
                $dataS = array(
                    'is_done' => $isDone,
                    'status' => 2
                );

                $status = $this->M_Transactions->update_transaksiHeader($th_id, $dataS);

                if ($status == false) {
                    $array = array(
                        'error' => true,
                        'pesan' => "Error to Update Save Lock Transactions"
                    );
                } else {
                    $array = array(
                        'success' => true,
                        'pesan' => "Data Berhasil Disimpan"

                    );
                }
            } elseif ($infos == 400) {
                $array = array(
                    'error' => true,
                    'pesan' => "Error To Update History Stock",
                    'data' => $infos

                );
            }
        } else {
            $array = array(
                'errorqty' => true,
                'pesan' => "Error There's one or more that doesnt approvet yet",
                'data' => $isNotApproved

            );
        }
        echo json_encode($array);
    }

    function upHistoryStockData($qty, $prod_id, $isNol)
    {
        //Update History Stock Pengurangan dan Sisa
        $dataH = $this->M_Products->get_stokHistory_byProdId($prod_id);

        $i = 0;
        $dt = $qty;
        $sanded = 0;
        $upId = 0;
        $listId = array();
        foreach ($dataH as $data) {
            $cekMinus = $data->total - ($dt + $data->terkirim);

            if ($cekMinus < 0) { //cek minus
                $dt = abs($cekMinus);
                $dataA = array(
                    'id' => $i,
                    'total' => $data->total,
                );
                array_push($listId, $dataA);
            } elseif ($cekMinus >= 0) {
                $dt = $cekMinus;
                $upId = $i;
                $sanded =  $data->total - $dt;
                break;
            }
            $i++;
        }

        $dataUpdate = array(
            'sisa' => $dt,
            'terkirim' => $sanded,
            'modified_date' => date("Y-m-d")
        );


        // $data = array(
        //     'id' => $upId,
        //     'dt' => $dt,
        //     'terkirim' => $sanded,
        //     'listId' => $listId,
        // );

        if (!empty($listId)) {
            foreach ($listId as $key) {
                $dataUpdateKosong = array(
                    'sisa' => 0,
                    'terkirim' => $key['total'],
                    'modified_date' => date("Y-m-d")
                );

                $this->M_Products->update_stockSisa_byProd($dataH[$key['id']]->history_prod_id, $dataUpdateKosong);
            }
        }


        $s3 = $this->M_Products->update_stockSisa_byProd($dataH[$upId]->history_prod_id, $dataUpdate);

        //Update pengurangan stok pada tbl produk

        $dataHeader = $this->M_Transactions->get_transHeaderbyProdid($prod_id);
        $getNowPrices = $this->M_Transactions->get_nowPrices_by_Stock($prod_id);

        $dataProduct = array(
            'prices' => $getNowPrices[0]->prices,
            'qty' => $dataHeader[0]->qty - $qty
        );

        $s1 = $this->M_Products->update_prods_byid($prod_id, $dataProduct);

        // return $s3;
        // $array = array();

        if ($s1 == false && $isNol = 0) {
            return 400;
            // $array = array(
            //     'error' => true,
            //     'pesan' => "data not affected s1" . $s1,
            //     'pesan' => "data not affected s2" . $s2,
            //     'pesan' => "data not affected s3" . $s3
            // );

            // return $array;
        } else {
            return 200;
            // $array = array(
            //     'success' => true,
            //     'pesan' => "data affected = " . $s3
            // );

            // return $array;
        }
        // echo json_encode($array);
    }

    function upAdmReasonAproval()
    {
        $alasan = $this->input->post('alasan');
        $th_id = $this->input->post('idi');
        $prod_id = $this->input->post('prod');

        $cariId = $this->M_Transactions->get_transDetailbyProdnThid($th_id, $prod_id);
        $detail_id = $cariId[0]->td_id;
        $data = array(
            'reply_desc' => $alasan,
            'modified_date' => date("Y-m-d")
        );

        $status = $this->M_Transactions->update_adminAproval($detail_id, $data);
        if ($status == false) {
            $aray = array(
                'error' => true,
                'pesan' => "data not affected" . $detail_id
            );
        } else {
            $aray = array(
                'success' => true,
                'pesan' => "data affected" . $detail_id

            );
        }
        echo json_encode($aray);
    }


    function upReasonCart()
    {
        $reson = $this->input->post('reason');
        $idi = $this->input->post('idi');
        $data = array(
            'reason_id' => $reson,
            'modified_date' => date("Y-m-d")
        );
        $status = $this->M_Transactions->update_cart($idi, $data);

        echo json_encode($status);
    }

    function upKeteranganCart()
    {
        $desc = $this->input->post('desc');
        $idi = $this->input->post('idi');

        $reson = "";
        if ($desc == "Hilang") {
            $reson = 1;
        } elseif ($desc == "Rusak") {
            $reson = 2;
        } elseif ($desc == "Stok") {
            $reson = 3;
        } elseif ($desc == "Habis") {
            $reson = 4;
        }

        $data = array(
            'reason_id' => $reson,
            'keterangan' => $desc,
            'modified_date' => date("Y-m-d")
        );

        $status = $this->M_Transactions->update_cart($idi, $data);
        echo json_encode($status);
    }

    function getSummaryCart()
    {
        $login = $this->session->userdata('login_id');

        $datacart = $this->M_Transactions->get_cart_user($login);

        echo json_encode($datacart);
    }

    function getItemSearch()
    {
        $search_text = $this->input->post('search');

        // if ($this->session->userdata('login_id') !== $search_text) {

        // }
        $this->session->set_userdata('cariItem', $search_text);

        echo json_encode($this->input->post('cariItem'));

        $this->session->unset_userdata('cariItem');
        $this->session->unset_userdata('cariSesi');
    }


    function removeSearch()
    {
        $a = $this->session->userdata('cariSesi');
        if (isset($a)) {
            $this->session->unset_userdata('cariSesi');
        }

        echo json_encode(true);
        // $this->session->unset_userdata('cariSesi');
        // echo json_encode(true);
    }

    function submit_courier_signature()
    {
        $th_id = $this->input->post('th_id');
        $sign = $this->input->post('data');
        $namaCourier = $this->input->post('namaCourier');


        $files_path = './files/tmp_upload_signature/';
        if (!file_exists($files_path)) {
            mkdir($files_path, 0777, true);
        }

        // $config['upload_path'] = $files_path;
        // $config['allowed_types'] = 'jpeg|gif|jpg|png';
        // $config['max_size'] = 10000;
        // $config['overwrite'] = false;

        // $this->load->library('upload', $config);
        $is_success = false;
        if (!empty($sign)) {
            // $folderPath = "upload/";
            $getNetwork = $this->M_Auth->get_network();
            $getpath = $getNetwork[0]->server_path . "files/tmp_upload_signature/";

            $image_parts = explode(";base64,", $_POST['data']);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $getpath . $th_id . '.' . $image_type;
            file_put_contents($file, $image_base64);

            $image_base64 = base64_encode(file_get_contents($file));
            $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

            // $target_file = base64_decode($image_parts[1]);

            // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // $image_base64 = base64_encode(file_get_contents($target_file));
            // $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;


            $dataInput = array(
                'th_id' => $th_id,
                'signature_courier' => $image,
                'nama_courier' => $namaCourier,
                'created_date' => date("Y-m-d")
            );

            $getDataisThere = $this->M_Signature->get_Signature_byThId($th_id);
            if (!empty($getDataisThere)) {
                $s1 =  $this->M_Signature->User_updateSignature($getDataisThere[0]->sig_id, $dataInput);
            } else {
                $s1 =  $this->M_Signature->Submit_Signature($dataInput);
            }

            $updateStatus = array(
                'status' => 3,
                'modified_date' => date("Y-m-d")
            );

            $this->M_Transactions->update_transaksiHeader($th_id, $updateStatus);

            if (!empty($s1)) {
                $array = array(
                    'success' => true,
                    'pesan' => "Data Berhasil Disimpan"

                );
                // $url = base_url("proses_Csignature/") . $th_id;
                // redirect($url);

                // $is_success = true;
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "data not affected"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "signature empty"
            );
        }

        echo json_encode($array);
        // if ($is_success) {
        //     $url = base_url("proses_Csignature/") . $th_id;
        //     redirect($url);
        // } else {
        //     echo json_encode($array);
        // }
    }

    function submit_user_signature()
    {
        $th_id = $this->input->post('th_id');
        $sign = $this->input->post('data');

        $files_path = './files/tmp_upload_signature/';
        if (!file_exists($files_path)) {
            mkdir($files_path, 0777, true);
        }

        if (!empty($sign)) {
            $getNetwork = $this->M_Auth->get_network();
            $getpath = $getNetwork[0]->server_path . "files/tmp_upload_signature/";

            $image_parts = explode(";base64,", $_POST['data']);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $getpath . $th_id . '.' . $image_type;
            file_put_contents($file, $image_base64);

            $image_base64 = base64_encode(file_get_contents($file));
            $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

            // $target_file = base64_decode($image_parts[1]);

            // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // $image_base64 = base64_encode(file_get_contents($target_file));
            // $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;


            $dataUpdate = array(
                'signature_user' => $image,
                'created_date' => date("Y-m-d")
            );

            $getId = $this->M_Signature->get_Signature_byThId($th_id);

            $updateStatus = array(
                'status' => 4,
                'modified_date' => date("Y-m-d")
            );

            $s1 = $this->M_Transactions->update_transaksiHeader($th_id, $updateStatus);

            $s2 = $this->M_Signature->User_updateSignature($getId[0]->sig_id, $dataUpdate);

            $getTD = $this->M_Transactions->get_transactionDetail_byTh_id($th_id);

            foreach ($getTD as $data) {
                $getPriceItem = $this->M_Transactions->get_lockhistoryStock_byProdId($data->products_id);

                $updateStatusDetail = array(
                    'prices_now' => $getPriceItem[0]->prices,
                    'modified_date' => date("Y-m-d")
                );

                $s3 = $this->M_Transactions->update_TDetail($data->td_id, $updateStatusDetail);
            }

            if ($s1 == true && $s2 == true && $s3) {
                $array = array(
                    'success' => true,
                    'pesan' => "Data Berhasil Disimpan"

                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "data not affected cek s1 to s3"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "signature empty"
            );
        }

        echo json_encode($array);
    }

    function submit_user_signature2()
    {
        $th_id = $this->input->post('th_id');
        $sign = $this->input->post('data');

        $files_path = './files/tmp_upload_signature/';
        if (!file_exists($files_path)) {
            mkdir($files_path, 0777, true);
        }

        if (!empty($sign)) {
            $getNetwork = $this->M_Auth->get_network();
            $getpath = $getNetwork[0]->server_path . "files/tmp_upload_signature/";

            $image_parts = explode(";base64,", $_POST['data']);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $getpath . $th_id . '.' . $image_type;
            file_put_contents($file, $image_base64);

            $image_base64 = base64_encode(file_get_contents($file));
            $imageFileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

            // $target_file = base64_decode($image_parts[1]);

            // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // $image_base64 = base64_encode(file_get_contents($target_file));
            // $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;


            $dataUpdate = array(
                'signature_user' => $image,
                'created_date' => date("Y-m-d")
            );

            $getId = $this->M_Signature->get_Signature_byThId($th_id);

            $updateStatus = array(
                'status' => 4,
                'modified_date' => date("Y-m-d")
            );

            $s1 = $this->M_Transactions->update_transaksiHeader($th_id, $updateStatus);

            $s2 = $this->M_Signature->User_updateSignature($getId[0]->sig_id, $dataUpdate);

            $getTD = $this->M_Transactions->get_transactionDetail_byTh_id($th_id);

            foreach ($getTD as $data) {
                $getPriceItem = $this->M_Transactions->get_lockhistoryStock_byProdId($data->products_id);

                $updateStatusDetail = array(
                    'prices_now' => $getPriceItem[0]->prices,
                    'modified_date' => date("Y-m-d")
                );

                $s3 = $this->M_Transactions->update_TDetail($data->td_id, $updateStatusDetail);
            }

            if ($s1 == true && $s2 == true && $s3) {
                $array = array(
                    'success' => true,
                    'pesan' => "Data Berhasil Disimpan"

                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "data not affected cek s1 to s3"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "signature empty"
            );
        }

        echo json_encode($array);
    }


    function cari_laporan_bulanan()
    {

        $tgl_dari = $this->input->post('tgl_laporan_dari');
        $tgl_sampai = $this->input->post('tgl_laporan_sampai');

        $this->session->set_userdata('tgl_dari', $tgl_dari);
        $this->session->set_userdata('tgl_sampai', $tgl_sampai);

        redirect('laporan-assets');
    }

    function cari_laporan_KTU()
    {

        $tgl_dari = $this->input->post('tgl_laporan_dari');
        $tgl_sampai = $this->input->post('tgl_laporan_sampai');

        $this->session->set_userdata('direktorat_tgl_dari', $tgl_dari);
        $this->session->set_userdata('direktorat_tgl_sampai', $tgl_sampai);

        redirect('laporan-transaksi');
    }

    function cari_laporan_deptId()
    {

        $dept_id = $this->input->post('dept_id');

        $this->session->set_userdata('dept_id', $dept_id);


        // var_dump($dept_id);
        redirect('laporan-transaksi');
    }

    function cari_dataItems()
    {
        $namaBarang = $this->input->post('namaBarang');
        $dataPencarian = $this->M_Report->get_idBarang($namaBarang);


        echo json_encode($dataPencarian);
    }

    function cari_dataItemDetail()
    {
        $idBarang = $this->input->post('idBarang');
        $dataPencarian = $this->M_Report->get_cariBarangDetail($idBarang);


        echo json_encode($dataPencarian);
    }



    function up_kategory_status()
    {
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('id_cat', 'id_cat', 'required');

        $status = $this->input->post('status');
        $id = $this->input->post('id_cat');

        if ($this->form_validation->run() != false) {
            $dataUpdates = array(
                'is_shown' => $status,
                'modified_date' => date("Y-m-d")
            );

            $update = $this->M_Category->update_category($id, $dataUpdates);

            if ($update == 200) {
                $array = array(
                    'success' => true,
                    'pesan' => "Update Success"
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Update Failed"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "No data Send"
            );
        }

        echo json_encode($array);
    }

    function up_merk()
    {
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('merkId', 'merk', 'required');

        $merkId = $this->input->post('merkId');
        $merk = $this->input->post('merk');

        if ($this->form_validation->run() != false) {
            $dataUpdates = array(
                'name_merk' => $merk,
                'modified_date' => date("Y-m-d")
            );

            $update = $this->M_Merk->update_merk($merkId, $dataUpdates);

            if ($update == 200) {
                $array = array(
                    'success' => true,
                    'pesan' => "Update Success"
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Update Failed"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "No data Send"
            );
        }

        echo json_encode($array);
    }

    function up_categori()
    {
        $this->form_validation->set_rules('catId', 'catId', 'required');
        $this->form_validation->set_rules('namaCat', 'namaCat', 'required');

        $catId = $this->input->post('catId');
        $catName = $this->input->post('namaCat');

        if ($this->form_validation->run() != false) {
            $dataUpdates = array(
                'name_category' => $catName,
                'modified_date' => date("Y-m-d")
            );

            $update = $this->M_Category->update_category($catId, $dataUpdates);

            if ($update == 200) {
                $array = array(
                    'success' => true,
                    'pesan' => "Update Success"
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Update Failed"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "No data Send",
                'catName' => $catName,
                'catId' => $catId,
            );
        }

        echo json_encode($array);
    }

    function up_satuan()
    {
        $this->form_validation->set_rules('satId', 'satId', 'required');
        $this->form_validation->set_rules('namaSat', 'namaSat', 'required');

        $satId = $this->input->post('satId');
        $namaSat = $this->input->post('namaSat');

        if ($this->form_validation->run() != false) {
            $dataUpdates = array(
                'name_satuan' => $namaSat,
                'modified_date' => date("Y-m-d")
            );

            $update = $this->M_Satuan->update_satuan($satId, $dataUpdates);

            if ($update == 200) {
                $array = array(
                    'success' => true,
                    'pesan' => "Update Success"
                );
            } else {
                $array = array(
                    'error' => true,
                    'pesan' => "Update Failed"
                );
            }
        } else {
            $array = array(
                'error' => true,
                'pesan' => "No data Send",
            );
        }

        echo json_encode($array);
    }

    function disableItem()
    {
        $prodid = $this->input->post('prodIdHapus');

        $dataProduct = array(
            'is_active' => '0'
        );

        $updates = $this->M_Products->update_prods_byid($prodid, $dataProduct);

        if ($updates) {
            $array = array(
                'success' => true,
                'pesan' => "Product Berhasil Dihapus",
            );
        } else {
            $array = array(
                'error' => true,
                'pesan' => "Product Gagal Dihapus",
            );
        }

        echo json_encode($array);
    }
}
