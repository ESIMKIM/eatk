<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">

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
                        <h6 class="mb-0 ">Grafik</h6>
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
                                <canvas id="rmChart" class="chart-canvas"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Grafik</h6>
                        <!-- <p class="text-sm ">Nilai Jumlah Arsip berdasarkan Alokasi RM</p> -->
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-6 col-lg-4">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Pengiriman Bulan ini :</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <!-- <h2 class="mb-2" style="font-size: 18pt; margin-top: 10pt;"><?php echo $totStatis ?> -->
                                2500 Barang</h2>
                                <span>Detail Pengiriman</span>
                            </div>
                            <a href=""> See More </a>
                            <!-- <div id="orderStatisticsChart"></div> -->
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pulpen</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Spidol</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Tinta A</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Tinta C</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Tinta B</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <?php foreach ($data as $val) : ?>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i
                                            class="bx bx-mobile-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">

                                    <div class="me-2">
                                        <h6 class="mb-0"><?php echo $val->name; ?> </h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $val->total_distribusi; ?> Unit</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <?php endforeach; ?> -->
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-4">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Total Perangkat</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <!-- <h2 class="mb-2" style="font-size: 18pt; margin-top: 10pt;"><?php echo $totDevices ?> -->
                                1000 Barang</h2>
                                <span>Total Perangkat</span>
                            </div>
                            <!-- <div id="orderStatisticsChart"></div> -->
                            <a href=""> See More </a>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Pulpen</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Spidol</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Tinta A</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Tinta C</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <!-- <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div> -->
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Tinta B</h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1000 Pcs</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <?php foreach ($data1 as $val) : ?>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i
                                            class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0"><?php echo $val->name; ?> </h6>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold"><?php echo $val->total_devices; ?> Unit</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <?php endforeach; ?> -->
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <br>
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transaksi Pengiriman</h5>
                        <!-- <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <!-- <img src="<?php echo base_url() ?>/assets/img/icons/unicons/cc-success.png" -->
                                    alt="User" class="rounded" />
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Internal</small>
                                        <h6 class="mb-0">Direktorat Kerja Sama Keimigrasian</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <a href="" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <!-- <img src="<?php echo base_url() ?>/assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" /> -->
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Internal</small>
                                        <h6 class="mb-0">Kantor Imigrasi Depok</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <a href="" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </li>

                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <!-- <img src="<?php echo base_url() ?>/assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" /> -->
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">External</small>
                                        <h6 class="mb-0">Direktorat Izin Tinggal Keimigrasian</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <a href="" class="btn btn-primary">Lihat</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
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

<!-- <script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script> -->
<!-- endbuild -->

<!-- Vendors JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<!-- Main JS -->
<!-- <script src="<?php echo base_url() ?>/assets/js/main.js"></script> -->
<script>
/* Create color array */

var letters = '0123456789ABCDEF'.split('');
var COLORS = '#';
for (var i = 0; i < 6; i++) {
    COLORS += letters[Math.floor(Math.random() * 16)];
}

var ctx_mp = document.getElementById("mpChart").getContext("2d");
var data = {
    labels: <?php echo $thnData ?>,
    datasets: [{
        label: "Tender Cepat",
        backgroundColor: "rgba(50, 97, 199, 0.8)",
        data: <?php echo $CTcmpData ?>
    }, {
        label: "Tender Seleksi",
        backgroundColor: "rgba(90, 223, 24, 0.6)",
        data: <?php echo $cTsmpData ?>
    }, {
        label: "Pengadaan Langsung",
        backgroundColor: "rgba(216, 73, 46, 0.8)",
        data: <?php echo $cPglmpData ?>
    }, {
        label: "Penunjukan Langsung",
        backgroundColor: "rgba(82, 221, 226, 0.6)",
        data: <?php echo $cPjlmpData ?>
    }, {
        label: "Pengadaan Dikecualikan",
        backgroundColor: "rgba(255,	51,	51, 0.8)",
        data: <?php echo $cPKmpData ?>
    }, {
        label: "Penunjukan E-Purcashing",
        backgroundColor: "rgba(	0, 157, 255, 0.6)",
        data: <?php echo $cPEmpData ?>
    }]
};

$(document).ready(function() {
    $("#example3").DataTable({
        "responsive": true,
        "lengthChange": false,
        "searching": false
    });
});

var myBarChart = new Chart(ctx_mp, {
    type: 'bar',
    data: data,
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        },
        tooltips: {
            callbacks: {
                label(tooltipItem, data) {
                    // Get the dataset label.
                    // const label = data.datasets[tooltipItem.datasetIndex].label;

                    // Format the y-axis value.
                    // const value = numeral(tooltipItem.yLabel).format('$0,0');
                    var label = data.datasets[tooltipItem.datasetIndex].label;

                    var val = new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR"
                    }).format(data.datasets[tooltipItem.datasetIndex].data);
                    // var val = numeral(data.datasets[tooltipItem.datasetIndex].data).format('$0,0');
                    return 'Total ' + label + ' senilai : ' + val;
                }
            }
        }
    }
});


var ctx_rm = document.getElementById("rmChart").getContext("2d");
var data = {
    labels: <?php echo $thnData ?>,
    datasets: [{
        label: "Tender Cepat",
        backgroundColor: "rgba(50, 97, 199, 0.8)",
        data: <?php echo $CTcrmData ?>
    }, {
        label: "Tender Seleksi",
        backgroundColor: "rgba(90, 223, 24, 0.6)",
        data: <?php echo $cTsrmData ?>
    }, {
        label: "Pengadaan Langsung",
        backgroundColor: "rgba(216, 73, 46, 0.8)",
        data: <?php echo $cPglrmData ?>
    }, {
        label: "Penunjukan Langsung",
        backgroundColor: "rgba(82, 221, 226, 0.6)",
        data: <?php echo $cPjlrmData ?>
    }, {
        label: "Pengadaan Dikecualikan",
        backgroundColor: "rgba(255,	51,	51, 0.8)",
        data: <?php echo $cPKrmData ?>
    }, {
        label: "Penunjukan E-Purcashing",
        backgroundColor: "rgba(	0, 157, 255, 0.6)",
        data: <?php echo $cPErmData ?>
    }]
};

var myBarChart = new Chart(ctx_rm, {
    type: 'bar',
    data: data,
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }]
        },
        tooltips: {
            callbacks: {
                label(tooltipItem, data) {
                    // Get the dataset label.
                    // const label = data.datasets[tooltipItem.datasetIndex].label;

                    // Format the y-axis value.
                    // const value = numeral(tooltipItem.yLabel).format('$0,0');
                    var label = data.datasets[tooltipItem.datasetIndex].label;

                    var val = new Intl.NumberFormat("id-ID", {
                        style: "currency",
                        currency: "IDR"
                    }).format(data.datasets[tooltipItem.datasetIndex].data);
                    // var val = numeral(data.datasets[tooltipItem.datasetIndex].data).format('$0,0');
                    return 'Total ' + label + ' senilai : ' + val;
                }
            }
        }
    }
});
</script>


</body>

</html>