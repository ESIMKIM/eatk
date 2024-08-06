<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Laporan Transaksi ATK
        </h4>

        <!-- <div class="row">
            <div class="col-2">
                <a href="<?php echo base_url('histori-update-stok') ?>" class="btn rounded-pill btn-info">History Stock
                    Update
                    </br></a>
                <span><br><br></span>
            </div>
            <div class="col-5">
                <a href="#" class="btn rounded-pill btn-success" data-bs-toggle="modal"
                    data-bs-target="#mTambahPerangkat">Tambah
                    Barang </br></a>
                <span><br><br></span>
            </div>
        </div> -->


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <div class="row">
                        <div class="col-7">
                            <h4 class="card-header" style="margin-top: -25px;">Pilih Periode Transaksi Barang</h4><br>
                            <form action="<?php echo base_url("cari_laporan_bulanan") ?>" method="post">
                                <!-- <input type="date" name="tgl_laporan_dari" class="form-select" id="tgl_laporan_dari" />

                                <input type="date" name="tgl_laporan_sampai" class="form-select"
                                    id="tgl_laporan_sampai" />

                                <input type="submit" class="btn btn-info" /> -->
                                <div class="row">
                                    <div class="col-3">
                                        <label class="form-label">Dari Bulan</label>
                                        <input type="date" name="tgl_laporan_dari" class="form-select" id="tgl_laporan_dari" />
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Sampai Bulan</label>
                                        <input type="date" name="tgl_laporan_sampai" class="form-select" id="tgl_laporan_sampai" />
                                    </div>
                                    <div class="col-3">
                                        <br class="form-label">
                                        <input type="submit" class="btn btn-info"></input>
                                    </div>
                                </div>
                            </form>

                            <!-- <div class="row">
                                    <div class="col-3">
                                        <label class="form-label">Dari Bulan</label>
                                        <input type="date" name="tgl_laporan_dari" class="form-select"
                                            id="tgl_laporan_dari" />
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Sampai Bulan</label>
                                        <input type="date" name="tgl_laporan_sampai" class="form-select"
                                            id="tgl_laporan_sampai" />
                                    </div>
                                    <div class="col-3">
                                        <br class="form-label">
                                        <input type="submit" class="btn btn-info"></input>
                                    </div>
                                </div> -->

                        </div>
                        <div class="col-5">
                            <div class="position-relative">
                                <img src="<?php echo base_url("assets/img/gif/data4.gif") ?>" alt="Computer man" width="50%" style="margin-left: 100px;">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Gambar</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">Merk Barang</th>
                                    <th style="text-align:center;">Pengiriman</th>
                                    <th style="text-align:center;">Pemasukan</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <?php $i = 1; ?>
                                <?php foreach ($datalaporan as $data) : ?>
                                    <tr style="text-align:center;">
                                        <td><?= $i ?></td>
                                        <?= $data->name; ?>
                                        <?= $data->prices; ?>
                                        <?= $data->total; ?>
                                        <?= $data->sisa; ?>
                                        <?= $data->terkirim; ?>
                                        <!-- <td><?= $i ?></td>
                                        <td><img src="<?= $data->images; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"> </td>
                                        <td> <?= $data->name; ?></td>
                                        <td><?= $data->name_merk; ?> </td>
                                        <?php
                                        $pemasukan = 0;
                                        if (!empty($data->total_jumlah)) {
                                            $pemasukan = $data->total_jumlah;
                                        }
                                        ?>
                                        <td style="color: blue;"><?= $data->total_terkirim; ?> </td>
                                        <td style="color: green;"><?= $pemasukan; ?> </td> -->
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
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
<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/iconify-icon.min.js"></script>

<script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() ?>/assets/js/dashboards-analytics.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/select2.min.js"></script>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        // $('#mydata').dataTable();
        $('#mydata').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>




</body>

</html>