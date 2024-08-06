<div id="mGagalSimpan" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box" style="background-color: red;">
                    <i class="material-icons">report_problem</i>
                </div>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" style="text-align: center;">Error!!</h4>
                </br>
                <!-- <p class="text-center"></p> -->
                <span id="pesan"></span>
            </div>
        </div>
    </div>
</div>

<div id="mSuksesSimpan" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons">&#xE876;</i>
                </div>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" style="text-align: center;">Success!</h4>
                </br>
                <p class="text-center"><span id="pesanSukses"></span>.</p>
            </div>
        </div>
    </div>
</div>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Alokasi Permintaan
        </h4>

        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card" style="padding: 20px;">
                    <!-- <h5 class="card-header">Daftar Permintaan</h5> -->
                    <div class="card-header">
                        <h5>Detail Transaksi</h5></br>
                        <p>Kode Permohonan : <?php echo $item[0]->no_invc ?> </p>
                        <p>Tanggal : <?php echo $item[0]->tgl_surat ?></p>
                    </div>

                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Image</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">Permintaan</th>
                                    <th style="text-align:center;">Alasan</th>
                                    <th style="text-align:center;">Disetujui</th>
                                    <th style="text-align:center;">Stock Saat ini</th>
                                    <th style="text-align:center;">Keterangan / Alasan</th>
                                    <!-- <th style="text-align:center;">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <?php $i = 1; ?>
                                <?php foreach ($item as $datas) : ?>
                                <tr>
                                    <td>
                                        <input hidden type="text" id="idi_<?php echo $i ?>" name="idi"
                                            class="form-control" value="<?= $datas->th_id; ?>" />
                                    </td>
                                    <td style="text-align:center;"><?php echo $i ?></td>
                                    <td><img src="<?= $datas->images; ?>" class="img-fluid rounded-3"
                                            alt="Shopping item" style="width: 80px;"></td>
                                    <td><?= $datas->name; ?></td>
                                    <td style="text-align:center;"><?= $datas->quantity; ?></td>
                                    <td style="text-align:center;"><?= $datas->reason_desc; ?></td>
                                    <td style="text-align:center;"><input type="text" id="setujui_<?php echo $i ?>"
                                            name="setujui" style="width: 50px; text-align: center;"
                                            onchange="updateQty(<?php echo $i ?>)" />
                                    </td>
                                    <td style="text-align:center;"><?= $datas->qty; ?></td>
                                    <td style="text-align:center;"><textarea name="alasanAdmin"
                                            id="alasanAdmin"></textarea>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer" style="margin-top: 30px">
                        <a href="<?php echo base_url('transaksi') ?>" class="btn btn-outline-secondary">Kembali </a>
                        <button type="button" class="btn btn-primary" id="btn_simpanTransaksi">Simpan
                            Permintaaan</button>
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

<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core S -->
<!-- build:js assets/vendor/js/core.js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.487/pdf.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.487/pdf.min.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/iconify-icon.min.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url() ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() ?>assets/js/dashboards-analytics.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    $("input[name$='radioExcel']").click(function() {
        var number = $(this).val();

        $("div.radioExcel").hide();
        $("#radioExcel" + number).show();
    });

    function updateQty(id) {
        var qtys = "#setujui_" + id;
        var ids = "#idi_" + id;
        var idi = $(ids).val();
        var qty = $(qtys).val();
        console.log(idi);
        console.log(qty);
        // $.ajax({
        //     type: "POST",
        //     url: '<?php echo base_url() ?>/update_Qtyacc',
        //     dataType: "JSON",
        //     data: {
        //         idi: idi,
        //         qty: qty,
        //     },
        //     success: function(data) {
        //         if (data.error) {
        //             console.log("error : ".data.pesan);
        //         }
        //         if (data.success) {
        //             tampilSummary();
        //         }
        //     },
        //     error: function(data, jqXHR, textStatus, errorThrown) {
        //         alert('Error adding / update data');
        //         console.log(textStatus);
        //     },
        // });
    }
});
</script>

</body>

</html>