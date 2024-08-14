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

        <div class="modal fade" id="mUpdateStok" aria-hidden="true">
            <div class="modal-dialog modal-l" role="document">
                <div class="modal-content">
                    <form id="transaksi">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel4">Update Stok</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <hr>
                                    <p style="color: red;">Catatan * <br> Pengisian Update Stok <br> 1. Jika Ingin
                                        mengupdate total stok
                                        yang salah input cukup update di kolom Total Barang; <br>2. Jika ingin update
                                        kelebihan alokasi silahkan update kolom Barang Terkirim dan Sisa Barang, dimana
                                        sisa barang akan diubah sesuai stok, dan juga sesuaikan jumlah barang terkirim.
                                    </p>
                                    <div class="form-control">
                                        <label class="form-label">Total Barang</label>
                                        <input hidden type="text" id="prodId" name="prodId" class="form-control form-control-lg" value='' />
                                        <input type="text" id="total" name="total" class="form-control form-control-lg" siez="17">
                                    </div><br>
                                    <div class="form-control">
                                        <label class="form-label">Barang Terkirim</label>
                                        <input type="text" id="terkirim" name="terkirim" class="form-control form-control-lg" siez="17">
                                    </div></br>
                                    <div class="form-control">
                                        <label class="form-label">Sisa Barang</label>
                                        <input type="text" id="sisa" name="sisa" class="form-control form-control-lg" siez="17">
                                    </div><br>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary" id="btn_updateStockHistory">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                                    <th style="text-align:center;">Total Barang</th>
                                    <th style="text-align:center;">Barang Terkirim</th>
                                    <th style="text-align:center;">Sisa Barang</th>
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
                                        <td><?= $data->terkirim; ?> </td>
                                        <td><?= $data->sisa; ?> </td>
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
                                            <a title="Lihat Invoice" href="<?php echo base_url('viewInvoices/') . $data->history_prod_id; ?>" class="liatNodin"><i class="menu-icon tf-icons" style="text-align:center; color:red">
                                                    <iconify-icon icon="bxs:file-pdf" width="40" height="40"></iconify-icon>
                                                </i></a>
                                            <a title="Edit" href="#" class="open-AddBookDialog" data-id="<?php echo $data->history_prod_id; ?>" data-bs-toggle="modal" data-bs-target="#mUpdateStok" class="liatNodin"><i class="menu-icon tf-icons" style="text-align:center; color:orange">
                                                    <iconify-icon icon="fluent:box-arrow-up-24-regular" width="40" height="40"></iconify-icon>
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

    $(document).on("click", ".open-AddBookDialog", function() {
        var myId = $(this).data('id');
        $(".modal-body #prodId").val(myId);
        // console.log(myId);
    });



    $('#btn_updateStockHistory').on('click', function() {
        let url = window.location.pathname; // Mendapatkan path dari URL
        let parts = url.split('/'); // Memisahkan berdasarkan karakter '/'
        let parameter = parts[parts.length - 1]; // Mengambil bagian terakhir dari array

        var data = new FormData();
        data.append("total", $('#total').val());
        data.append("terkirim", $('#terkirim').val());
        data.append("sisa", $('#sisa').val());
        data.append("prodId", $('#prodId').val());
        data.append("pID", parameter);
        // console.log(parameter);

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/update_historyStok',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.error) {
                    $('#mUpdateStok').modal('hide');
                    if (data.errorImage) {
                        $('#mUpdateBarangImageGagal').modal('show');
                    } else {
                        $('#mUpdateBarangGagal').modal('show');
                    }
                }
                if (data.success) {
                    $('#mUpdateStok').modal('hide');
                    // $('#mUpdateBarangSukses').modal('show');

                    var url = "<?php echo base_url("history-stock/") ?>" +
                        data.id;
                    // var go = url.concat(th_id);
                    window.location = url;
                }
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
            },
        });
        return false;
    });
</script>




</body>

</html>