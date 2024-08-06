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
                                <canvas id="myChart"></canvas>
                                <!-- <canvas id="mpChart" class="chart-canvas"></canvas> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Grafik Jumlah Total Distribusi ATK Semester 1<br> Maret 2023</h6>
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
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Grafik Penerima Distribusi ATK Per Direktorat dan Satker <br> Maret 2023</h6>
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
            <div class="col-lg-12 col-md-6 mt-1 mb-1">
                <div class="card z-index-2 ">
                    <div class="card-body" style="background-color: rgba(252,252,255,255);">
                        <div class="row">
                            <div class="col-lg-7     align-self-center">
                                <h2 class="text-black">Laporan Total Assets</h2>
                                <hr>
                                <p class="text-black">Summary Reports Global</p>
                                <p style="font-size: 10pt;">Laporan dibawah ini merupakan perhitungan global tidak
                                    berdasarkan waktu</p>
                                <div style="font-size: 16pt;" class="row">

                                    <div class="col-8">
                                        <br>
                                        <p class="text-black">Total Sisa Nominal Assets saat ini senilai</p>
                                        <!-- <hr> -->
                                    </div>
                                    <div class="col-4">
                                        <br>
                                        <p class="text-black">: <?php echo $sisa_asset ?></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-black">Total Jenis Barang saat ini berjumlah</p>
                                        <!-- <hr> -->
                                    </div>
                                    <div class="col-4">
                                        <p class="text-black"> : <?php echo $jenis_asset ?> Jenis</p>
                                        <br>
                                    </div>
                                    <hr>
                                    <p style="font-size: 12pt;" class="text-black">Summary Reports Each Years</p>
                                    <p style="font-size: 10pt;">Keterangan perhitungan dibawah ini berdasarkan
                                        masing-masing satuan yang
                                        ditetapkan oleh barang tersebut</p>
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
                                <img src="<?php echo base_url("assets/img/gif/data2.gif") ?>" alt="Computer man"
                                    width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Data Pengiriman</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <!-- <h2 class="mb-2" style="font-size: 18pt; margin-top: 10pt;"><?php echo $totStatis ?> -->
                                <span>Total : <?php echo $totalPengiriman[0]->total_persetujuan ?> Item</span>
                                <!-- <span>Detail Pengiriman</span> -->
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <?php $i = 1; ?>
                            <?php foreach ($dataPengiriman as $data) : ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php
                                                                $str = $data->name;
                                                                if (strlen($str) > 28)
                                                                    $str = substr($str, 0, 15) . '...';
                                                                echo $str ?></h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $data->persetujuan ?> Item</small>
                                    </div>
                                </div>
                            </li>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a style="text-align: center;" href="<?php echo base_url('data-pengiriman') ?>">
                        Selengkapnya </a>
                </div>
            </div>
            <div class="col-3">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Data Penambahan Stock</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <!-- <h2 class="mb-2" style="font-size: 18pt; margin-top: 10pt;"><?php echo $totStatis ?> -->
                                <span>Total : 2500 Barang</span>
                                <!-- <span>Detail Pengiriman</span> -->
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <?php $i = 1; ?>
                            <?php foreach ($dataPenerimaan as $data) : ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php
                                                                $str = $data->name;
                                                                if (strlen($str) > 28)
                                                                    $str = substr($str, 0, 15) . '...';
                                                                echo $str ?></h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $data->penerimaan ?> Item</small>
                                    </div>
                                </div>
                            </li>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a style="text-align: center;" href="<?php echo base_url('data-penambahan') ?>">
                        Selengkapnya </a>
                </div>
            </div>
            <div class="col-3">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Data Stock Akhir</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <!-- <h2 class="mb-2" style="font-size: 18pt; margin-top: 10pt;"><?php echo $totStatis ?> -->
                                <span>Total : 2500 Barang</span>
                                <!-- <span>Detail Pengiriman</span> -->
                            </div>
                        </div>
                        <ul class="p-0 m-0">
                            <?php $i = 1; ?>
                            <?php foreach ($dataStockReal as $data) : ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php
                                                                $str = $data->name;
                                                                if (strlen($str) > 22)
                                                                    $str = substr($str, 0, 15) . '...';
                                                                echo $str ?></h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $data->qty ?> Item</small>
                                    </div>
                                </div>
                            </li>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a style="text-align: center;" href="<?php echo base_url('data-stock') ?>">
                        Selengkapnya </a>
                </div>
            </div>
            <div class="col-3">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Data Distribusi Pengiriman</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <?php $i = 1; ?>
                            <?php foreach ($dataPerbagian as $data) : ?>
                            <li class="d-flex mb-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php
                                                                $str = $data->department_name;
                                                                if (strlen($str) > 35)
                                                                    $str = substr($str, 0, 15) . '...';
                                                                echo $str ?></h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $data->total ?> Item</small>
                                    </div>
                                </div>
                            </li>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a style="text-align: center;" href="<?php echo base_url('data-alokasi') ?>">
                        Selengkapnya </a>
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
$obj1 = (object) [
    'jurusan' => 'Stock Awal',
    'total' => '1000',
];
$obj2 = (object) [
    'jurusan' => 'Data Pengiriman',
    'total' => '500',
];
$obj3 = (object) [
    'jurusan' => 'Data Penambahan Stock',
    'total' => '100',
];
$obj4 = (object) [
    'jurusan' => 'Stock Akhir',
    'total' => '600',
];


$objd1 = (object) [
    'department' => 'Kermakim',
    'total' => '453',
];
$objd2 = (object) [
    'department' => 'Lantaskim',
    'total' => '654',
];
$objd3 = (object) [
    'department' => 'Wasdakim',
    'total' => '254',
];
$objd4 = (object) [
    'department' => 'Intalkim',
    'total' => '468',
];
$objd5 = (object) [
    'department' => 'Intelkim',
    'total' => '468',
];
$objd6 = (object) [
    'department' => 'Sistik',
    'total' => '1500',
];
$objd7 = (object) [
    'department' => 'Kepegawaian Sesdit',
    'total' => '254',
];
$objd8 = (object) [
    'department' => 'P2L Sesdit',
    'total' => '954',
];
$objd9 = (object) [
    'department' => 'Umum Sesdit',
    'total' => '785',
];

$hasil = [$obj1, $obj2, $obj3, $obj4];
$hasil2 = [$objd1, $objd2, $objd3, $objd4, $objd5, $objd6, $objd7, $objd8, $objd9];
// var_dump($hasil);

$nama_jurusan = "";
$jumlah = null;
$label = "";

$dept = "";
$jumlah2 = null;
$labels = "";

foreach ($hasil as $item) {
    $jur = $item->jurusan;
    $nama_jurusan .= "'$jur'" . ", ";
    $jum = $item->total;
    $jumlah .= "$jum" . ", ";
    $label .= $item->jurusan;
}

foreach ($hasil2 as $item) {
    $jur = $item->department;
    $dept .= "'$jur'" . ", ";
    $jum = $item->total;
    $jumlah2 .= "$jum" . ", ";
    $labels .= $item->department;
}
// var_dump($label);
?>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
Chart.defaults.font.family = "Roboto";
// Chart.defaults.font.size = 18;
Chart.defaults.color = "grey";
var barChart = new Chart(ctx, {
    // The type of chart we want to create

    type: 'bar',
    // The data for our dataset
    data: {
        labels: [<?php echo $nama_jurusan; ?>],
        datasets: [{
            label: 'Data Total Distribusi',
            backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)',
                'rgb(175, 238, 239)'
            ],
            borderColor: ['rgb(255, 99, 132)'],
            data: [<?php echo $jumlah; ?>]
        }]
    },
    // Configuration options go here
    options: {

    }
});


var ctx = document.getElementById('myChart2').getContext('2d');
Chart.defaults.font.family = "Roboto";
// Chart.defaults.font.size = 18;
Chart.defaults.color = "grey";
var barChart = new Chart(ctx, {
    // The type of chart we want to create

    type: 'bar',
    // The data for our dataset
    data: {
        labels: [<?php echo $dept; ?>],
        datasets: [{
            label: 'Data Distribusi Direktorat',
            backgroundColor: ['rgb(31, 58, 61)', 'rgba(0, 187, 45)', 'rgb(236, 124, 38)',
                'rgb(108, 113, 86)', 'rgba(234, 230, 202)', 'rgba(117, 21, 30)',
                'rgba(66, 70, 50)', 'rgba(27, 85, 131)', 'rgba(236, 124, 38)'
            ],
            borderColor: ['rgb(255, 99, 132)'],
            data: [<?php echo $jumlah2; ?>]
        }]
    },
    // Configuration options go here
    options: {

    }
});
</script>


</body>

</html>