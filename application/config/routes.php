<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */

// -----------------VIEWS---------------------- //

$route['default_controller'] = 'CTR_Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
$route['auth'] = 'CTR_Auth';


// ---------------- Users ---------------------- //
// ---------------- Users ---------------------- //


//                Dashboard                      //
// $route['dashboard'] = 'CTR_Dashboard/lolo/';
$route['dashboard'] = 'CTR_Dashboard/loadRecord/';
$route['dashboard/(:num)'] = 'CTR_Dashboard/loadRecord/$1';
// sort by Merk
$route['merk'] = 'CTR_Dashboard/loadbyMerk/';
$route['merk/(:num)/(:num)'] = 'CTR_Dashboard/loadbyMerk/$1/$s1';
// sort by category

$route['kategori'] = 'CTR_Dashboard/loadbyCategory/';
$route['kategori/(:num)'] = 'CTR_Dashboard/loadbyCategory/$1';
$route['kategoriSet/(:num)'] = 'CTR_Dashboard/loadbyCategorySets/$1';
$route['kategori/(:num)/(:num)'] = 'CTR_Dashboard/loadbyCategory/$1/$s1';
//singleitem
$route['products_detail'] = 'CTR_Products/singleItemDetail/';
$route['products_detail/(:num)'] = 'CTR_Products/singleItemDetail/$1';

//                CART                             //
$route['cart'] = 'CTR_Transactions/cart/';
// $route['products_detail/(:num)'] = 'CTR_Products/singleItemDetail/$1';

//                Transactions                    //
// $route['transactions-user/(:any)'] = 'CTR_Transactions/transactionsHistory/$1';
$route['transactions-user'] = 'CTR_Transactions/transactionsHistory';
$route['detail-transaction/(:any)'] = 'CTR_Transactions/transactionsHistoryDetail/$1';
$route['terima-barang/(:any)'] = 'CTR_Transactions/terimaBarang/$1';
$route['submits_terimaUser'] = 'SVC_Ajax/submit_user_signature';


//                Profiles                    //
$route['profiles-users'] = 'CTR_Settings/profiles_users/';
$route['user_lampiran'] = 'CTR_Settings/get_download_suratPernyataan/';



// ---------------- Admin / Oper ---------------------- //
// ---------------- Admin / Oper ---------------------- //


// $route['admin'] = 'CTR_Admin/';

//                Dashboard                      // 
$route['home'] = 'CTR_Dashboard/dashboard_admin/';
$route['data-pengiriman'] = 'CTR_Dashboard/dataDashPengirimanAdmin/';
$route['data-penambahan'] = 'CTR_Dashboard/dataDashPenambahanAdmin/';
$route['data-stock'] = 'CTR_Dashboard/dataDashStokAdmin/';
$route['data-alokasi'] = 'CTR_Dashboard/dataDashAlokasiAdmin/';
$route['data-alokasi-detail'] = 'CTR_Dashboard/dataDashAlokasiDetailAdmin/';

//                Main Menu                      //
$route['transaksi'] = 'CTR_Transactions/transaksi_admin/';
$route['proses_transaksi/(:any)'] = 'CTR_Transactions/proses_transaksi_admin/$1';
$route['proses_transaksi_master/(:any)'] = 'CTR_Transactions/proses_Mastertransaksi_admin/$1';
$route['proses_Csignature/(:any)'] = 'CTR_Transactions/proses_signature_courier_admin/$1';

$route['barang'] = 'CTR_Products/produk_admin/';
$route['history-stock/(:any)'] = 'CTR_Products/histori_stok_update_admin/$1';
// $route['histori-update-stok'] = 'CTR_Products/histori_stok_update_admin/';


//                Master Data                      //
$route['master-transaksi'] = 'CTR_Transactions/master_transaksi_admin/';
$route['detail-permintaan/(:any)'] = 'CTR_Transactions/detail_permintaan_admin/$1';
$route['update-transaksi-masuk/(:any)'] = 'CTR_Transactions/edit_transaksi/$1';

$route['master-barang'] = 'CTR_Products/master_produk_admin/';
$route['master-barang-edit/(:any)'] = 'CTR_Products/master_produk_adminEdit/$1';


// $route['master-histori-update-stok'] = 'CTR_Products/master_histori_stok_update_admin/'
$route['master-histori-stok-peritem/(:any)'] = 'CTR_Products/master_histori_peritem_admin/$s1';

//                Settings                      //
// $route['settings-kategori'] = 'CTR_Settings/settings_kategori/';
// $route['settings-merk'] = 'CTR_Settings/settings_merk/';
// $route['settings-satuan'] = 'CTR_Settings/settings_satuan/';
// $route['settings-users'] = 'CTR_Settings/settings_users/';

//                Report                      //
$route['laporan-assets'] = 'CTR_Report/report_assets/';
$route['laporan-transaksi'] = 'CTR_Report/report_transaction/';
$route['laporan-analis'] = 'CTR_Report/report_analis/';
$route['laporan-stokall'] = 'CTR_Report/laporan_stok/';
$route['laporan-transUser'] = 'CTR_Report/laporan_userTrans/';
$route['laporan-itemTrans'] = 'CTR_Report/laporan_BarangTransaksi/';
$route['laporan-itemTransDetail/(:any)'] = 'CTR_Report/laporan_BarangTransaksiDetail/$1';
$route['laporan-penghapusan'] = 'CTR_Report/report_penghapusan/';


//                Settings                      //
$route['settings-user'] = 'CTR_Settings/set_user';
$route['settings-kategori'] = 'CTR_Settings/set_category';
$route['settings-merk'] = 'CTR_Settings/set_merk';
$route['settings-satuan'] = 'CTR_Settings/set_satuan';
$route['settings-notif'] = 'CTR_Settings/set_notif';

// // -----------------AJAX---------------------- //
// // -----------------AJAX---------------------- //

//User
$route['set_showItem'] = 'SVC_Ajax/setShowItem';
$route['update_QtyCart'] = 'SVC_Ajax/upQtyCart';
$route['update_DescCart'] = 'SVC_Ajax/upKeteranganCart';
$route['update_ReasonCart'] = 'SVC_Ajax/upReasonCart';
$route['update_lockTrans'] = 'SVC_Ajax/upLockTransaksi';

$route['get_summarycart'] = 'SVC_Ajax/getSummaryCart';
$route['get_searchItem'] = 'SVC_Ajax/getItemSearch';
$route['unset_cari'] = 'SVC_Ajax/removeSearch';

$route['submits_terimaKurir'] = 'SVC_Ajax/submit_courier_signature';
$route['cetak_BASTK/(:any)'] = 'CTR_Report/gen_transactionBastKurir/$1';
$route['cetak_BAST/(:any)'] = 'CTR_Report/gen_transactionBast/$1';

//Admin
$route['update_Qtyacc'] = 'SVC_Ajax/upAdmQtyAproval';
$route['update_reasonacc'] = 'SVC_Ajax/upAdmReasonAproval';
$route['update_historyStok'] = 'SVC_Ajax/up_historyStock';


$route['update_kategoriStats'] = 'SVC_Ajax/up_kategory_status';
$route['update_merkStats'] = 'SVC_Ajax/up_merk_status';
$route['update_userStats'] = 'SVC_Ajax/up_user_status';
$route['update_satuanStats'] = 'SVC_Ajax/up_satuan_status';

$route['update_Merk'] = 'SVC_Ajax/up_merk';
$route['update_Kategory'] = 'SVC_Ajax/up_categori';
$route['update_Satuan'] = 'SVC_Ajax/up_satuan';

$route['get_barangMaster'] = 'SVC_Ajax/Data_JsonProdukBarang';
$route['submits_deactiveProd'] = 'SVC_Ajax/disableItem';



// // -----------------Submit---------------------- //
// // -----------------Submit---------------------- //

//User
$route['add_to_cart'] = 'SVC_Submit/submit_to_cart';
$route['del_item_cart'] = 'SVC_Submit/delete_item_cart';
$route['sub_cart'] = 'SVC_Submit/submit_allcart';
$route['smt_transaksi_user'] = 'SVC_Submit/submit_permintaanUser';

// Submit Admin  //
// =Products= //
$route['submits_products'] = 'SVC_Submit/submit_newProduct';
$route['update_products'] = 'SVC_Submit/update_newProduct';
$route['submits_Stockproducts'] = 'SVC_Submit/submit_stockProduct';
$route['viewInvoices/(:any)'] = 'CTR_Products/viewInvoices/$1';


// =Laporan= //
$route['cari_laporan_bulanan'] = 'SVC_Ajax/cari_laporan_bulanan';
$route['cari_laporan_bagian'] = 'SVC_Ajax/cari_laporan_KTU'; //notuse
$route['cari_laporan_deptId'] = 'SVC_Ajax/cari_laporan_deptId';
$route['cari_item_laporan'] = 'SVC_Ajax/cari_dataItems';
$route['cari_item_laporanDetail'] = 'SVC_Ajax/cari_dataItemDetail';


// = Settings = //
$route['submits-cat'] = 'SVC_Submit/Submit_set_category';
$route['submits-merk'] = 'SVC_Submit/Submit_set_merk';
$route['submits-satuan'] = 'SVC_Submit/Submit_set_satuan';
$route['submits-users'] = 'SVC_Submit/Submit_set_users';
$route['submits-notif'] = 'SVC_Submit/Submit_set_notif';
