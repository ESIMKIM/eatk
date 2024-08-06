<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <?php echo $this->session->userdata('role_id') ?> -->
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-1 mb-1">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="shadow-primary border-radius-lg py-3 pe-1">
                            <div class="chart">
                                </br>
                                <canvas id="myChartS1"></canvas>
                                <!-- <canvas id="mpChart" class="chart-canvas"></canvas> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Grafik Jumlah Total Distribusi ATK Semester 1</h6>
                        <!-- <p class="text-sm ">Nilai Jumlah Arsip berdasarkan Alokasi PNBP</p> -->
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-1 mb-1">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="shadow-primary border-radius-lg py-3 pe-1">
                            <div class="chart">
                                </br>
                                <canvas id="myChartS2"></canvas>
                                <!-- <canvas id="mpChart" class="chart-canvas"></canvas> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Grafik Jumlah Total Distribusi ATK Semester 2</h6>
                        <!-- <p class="text-sm ">Nilai Jumlah Arsip berdasarkan Alokasi PNBP</p> -->
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-1 mb-1">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="shadow-primary border-radius-lg py-3 pe-1">
                            <div class="chart">
                                </br>
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Grafik Penerima Distribusi ATK</h6>
                        <!-- <h6 class="mb-0 ">Maret 2023</h6> -->
                        <!-- <p class="text-sm ">Nilai Jumlah Arsip berdasarkan Alokasi RM</p> -->
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 mt-1 mb-1">
                <div class="card z-index-2 ">
                    <div class="card-body" style="background-color: rgba(252,252,255,255);">
                        <div class="row">
                            <div class="col-lg-7     align-self-center">
                                <h2 class="text-black">Laporan Total Assets</h2>
                                <hr>
                                <p class="text-black">Summary Laporan Global Realtime</p>
                                <p style="font-size: 10pt;">Laporan asset keseluruhan sampai saat ini</p>
                                <div style="font-size: 16pt;" class="row">

                                    <div class="col-8">
                                        <br>
                                        <p class="text-black">Total sisa nominal assets saat ini senilai</p>
                                        <!-- <hr> -->
                                    </div>
                                    <div class="col-4">
                                        <br>
                                        <p class="text-black">: <?php echo $sisa_asset ?></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-black">Total jenis barang saat ini berjumlah</p>
                                        <!-- <hr> -->
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black"> : <?php echo $jenis_asset ?> Jenis</p>
                                        <br>
                                    </div>
                                    <hr>
                                    <p style="font-size: 12pt;" class="text-black">Summary Laporan Tahun ini</p>
                                    <p style="font-size: 10pt;">Laporan asset berdasarkan tahun berjalan</p>
                                    <div class="col-8">
                                        <br>
                                        <p class="text-black">Jumlah Pengiriman barang tahun ini sebanyak</p>

                                    </div>
                                    <div class="col-4">
                                        <br>
                                        <p class="text-black">: <?php echo $pengiriman_asset ?> Item</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-black">Jumlah Penerimaan barang tahun ini sebanyak</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black">: <?php echo $dataPenerimaanAsset ?> Item</p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-black">Jumlah Stock Akhir barang tahun ini sebanyak</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black">: <?php echo $sisa_item_Tahun ?> Item</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5 position-relative">
                                <img src="<?php echo base_url("assets/img/gif/data2.gif") ?>" alt="Computer man" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                , IDM
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
</div>

<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core S -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script> -->
<!-- endbuild -->

<!-- Vendors JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->

<!-- Main JS -->
<!-- <script src="<?php echo base_url() ?>/assets/js/main.js"></script> -->
<?php
//Inisialisasi nilai variabel awal
$objS1_stokAwal = (object) [
    'title' => 'Stock Awal',
    'total' => $gS1_stokAwal,
];
$objS1_kirim = (object) [
    'title' => 'Data Pengiriman',
    'total' => $gS1_kirim,
];
$objS1_tambah = (object) [
    'title' => 'Data Penambahan Stock',
    'total' => $gS1_tambahStok,
];
$objS1_stokAkhir = (object) [
    'title' => 'Stock Akhir',
    'total' => $gS1_stokAkhir,
];

$objS2_stokAwal = (object) [
    'title' => 'Stock Awal',
    'total' => $gS2_stokAwal,
];
$objS2_kirim = (object) [
    'title' => 'Data Pengiriman',
    'total' => $gS2_kirim,
];
$objS2_tambah = (object) [
    'title' => 'Data Penambahan Stock',
    'total' => $gS2_tambahStok,
];
$objS2_stokAkhir = (object) [
    'title' => 'Stock Akhir',
    'total' => $gS2_stokAkhir,
];



$warna = '';
// $z = 1;
// foreach ($listDep as $data) {
//     ${'dataDir_' . $z} = (object) [
//         'title' => $data->department_name,
//         'total' => $data->total,
//     ];
//     $warna .= $data->color_graph . ',';
//     $z++;
// }

// $trimmed = rtrim($warna, ', ');
// $warna .= ']';


foreach ($listDep as $data) {
    $warna .= "'" . $data->color_graph . "',";
}

// var_dump($listDep);

$trimmed = rtrim($warna, ', ');
$warna = $trimmed;

// $dataDir_1 = (object) [
//     'department' => $listDep[0]->alias_dept,
//     'total' => $listDep[0]->total,
// ];

// $dataDir_2 = (object) [
//     'department' => $listDep[1]->alias_dept,
//     'total' => $listDep[1]->total,
// ];

// $dataDir_3 = (object) [
//     'department' => $listDep[2]->alias_dept,
//     'total' => $listDep[2]->total,
// ];


// $dataDir_4 = (object) [
//     'department' => $listDep[3]->alias_dept,
//     'total' => $listDep[3]->total,
// ];


// $dataDir_5 = (object) [
//     'department' => $listDep[4]->alias_dept,
//     'total' => $listDep[4]->total,
// ];


// $dataDir_6 = (object) [
//     'department' => $listDep[5]->alias_dept,
//     'total' => $listDep[5]->total,
// ];


// $dataDir_7 = (object) [
//     'department' => $listDep[6]->alias_dept,
//     'total' => $listDep[6]->total,
// ];


// $dataDir_8 = (object) [
//     'department' => $listDep[7]->alias_dept,
//     'total' => $listDep[7]->total,
// ];


// $dataDir_9 = (object) [
//     'department' => $listDep[8]->alias_dept,
//     'total' => $listDep[8]->total,
// ];


// $dataDir_10 = (object) [
//     'department' => $listDep[9]->alias_dept,
//     'total' => $listDep[9]->total,
// ];


// $dataDir_11 = (object) [
//     'department' => $listDep[10]->alias_dept,
//     'total' => $listDep[10]->total,
// ];


// $dataDir_12 = (object) [
//     'department' => $listDep[11]->alias_dept,
//     'total' => $listDep[11]->total,
// ];


// $dataDir_13 = (object) [
//     'department' => $listDep[12]->alias_dept,
//     'total' => $listDep[12]->total,
// ];


// var_dump($warna);
$hasilS1 = [$objS1_stokAwal, $objS1_kirim, $objS1_tambah, $objS1_stokAkhir];
$hasilS2 = [$objS2_stokAwal, $objS2_kirim, $objS2_tambah, $objS2_stokAkhir];
// var_dump($hasilS1);
// $hasil2 = [
//     $dataDir_1, $dataDir_2, $dataDir_3, $dataDir_4, $dataDir_5, $dataDir_6, $dataDir_7, $dataDir_8, $dataDir_9, $dataDir_10, $dataDir_11, $dataDir_12, $dataDir_13
// ];

// $hasil2s = [
//     $listDep
// ];
// var_dump($hasil2);
// var_dump($listDep);

$titleS1 = "";
$jumlah = null;
$label = "";

$titleS2 = "";
$jumlah1 = null;
$label1 = "";


$dept = "";
$jumlah2 = null;
$labels = "";

foreach ($hasilS1 as $item) {
    $jur = $item->title;
    $titleS1 .= "'$jur'" . ", ";
    $jum = $item->total;
    $jumlah .= "$jum" . ", ";
    $label .= $item->title;
}

foreach ($hasilS2 as $items) {
    $jur1 = $items->title;
    $titleS2 .= "'$jur1'" . ", ";
    $jum1 = $items->total;
    $jumlah1 .= "$jum1" . ", ";
    $label1 .= $items->title;
}


foreach ($listDep as $item) {
    $ddep = $item->alias_dept;
    $dept .= "'$ddep'" . ", ";
    $jum2 = $item->total;
    $jumlah2 .= "$jum2" . ", ";
    $labels .= $item->department;
}
// var_dump($hasil2);
?>

<script>
    var ctx = document.getElementById('myChartS1').getContext('2d');
    Chart.defaults.font.family = "Roboto";
    // Chart.defaults.font.size = 18;
    Chart.defaults.color = "grey";
    var barChart = new Chart(ctx, {
        // The type of chart we want to create

        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $titleS1; ?>],
            datasets: [{
                label: 'Total',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)',
                    'rgb(175, 238, 239)'
                ],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {

            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });

    var ctx = document.getElementById('myChartS2').getContext('2d');
    Chart.defaults.font.family = "Roboto";
    // Chart.defaults.font.size = 18;
    Chart.defaults.color = "grey";
    var barChart = new Chart(ctx, {
        // The type of chart we want to create

        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $titleS2; ?>],
            datasets: [{
                label: 'Total',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)',
                    'rgb(175, 238, 239)'
                ],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah1; ?>]
            }]
        },
        // Configuration options go here
        options: {

            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });


    var ctx = document.getElementById('myChart2').getContext('2d');
    Chart.defaults.font.family = "Roboto";
    Chart.defaults.color = "grey";
    var barChart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: [<?php echo $dept; ?>],
            datasets: [{
                label: 'Data Distribusi Direktorat',
                backgroundColor: [<?php echo $warna; ?>],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah2; ?>]
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>


</body>

</html>