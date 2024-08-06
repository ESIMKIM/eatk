<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Histori Barang Masuk
        </h4>

        <!-- <div class="row">
            <div class="col-2">
                <a href="<?php base_url('histori-update-stok') ?>" class="btn rounded-pill btn-info">History Stock Update
                    </br></a>
                <span><br><br></span>
            </div>
            <div class="col-5">
                <a href="#" class="btn rounded-pill btn-success" data-bs-toggle="modal" data-bs-target="#mTambahPerangkat">Tambah
                    Barang </br></a>
                <span><br><br></span>
            </div>
        </div> -->


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Barang</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">No PO</th>
                                    <th style="text-align:center;">Tanggal</th>
                                    <th style="text-align:center;">Jumlah</th>
                                    <th style="text-align:center;">Harga</th>
                                    <th style="text-align:center;">Aksi </th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <?php $i = 1; ?>
                                <?php foreach ($dataProduk as $data) : ?>
                                <tr style="text-align:center;">
                                    <td><?= $i ?></td>
                                    <td> <?= $data->name; ?></td>
                                    <td><?= $data->no_po; ?> </td>
                                    <td><?= $data->date_po; ?> </td>
                                    <td><?= $data->total; ?> </td>
                                    <td><?= $data->prices; ?> </td>
                                    <td style="text-align:center;">
                                        <!-- <a title="Tambah Stock" id="tambahStock" class="open-AddBookDialog"
                                            data-id="<?php echo $data->products_id; ?>" data-bs-toggle="modal"
                                            data-bs-target="#mUpdateStok" href="#"><i class="menu-icon tf-icons"
                                                style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:box-arrow-up-24-regular" width="40"
                                                    height="40">
                                                </iconify-icon>
                                            </i></a> -->
                                        <a title="Lihat Invoice"
                                            href="<?php echo base_url('viewInvoices/') . $data->history_prod_id; ?>"
                                            class="liatNodin"><i class="menu-icon tf-icons"
                                                style="text-align:center; color:red">
                                                <iconify-icon icon="bxs:file-pdf" width="40" height="40"></iconify-icon>
                                            </i></a>
                                    </td>
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


<script type="text/javascript">
$(document).ready(function() {
    $('#mydata').dataTable();
});
</script>




</body>

</html>