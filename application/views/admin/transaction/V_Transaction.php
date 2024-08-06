<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <!-- Modal Kunci Transaksi -->
    <div id="mConfSubmit" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: orange;">
                        <i class="material-icons">question_mark</i>
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Warning !!</h4>
                    <input type="text" name="kode" id="kode" hidden>
                    </br>
                    <!-- <p class="text-center"><span id="pesanSukses"></span>Hapus Item ini ?</p><br> -->
                    <p class="text-center"><span id="pesanSukses"></span>Selesaikan Transaksi? Pastikan anda sudah
                        melakukan Alokasi yang sesuai</p>
                </div>
                <div>
                    <button type="button" class="btn" style="margin-left: 30%; background-color: clay;" id="btn_hapusItem">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Transaksi -->
    <div class="modal fade" id="mSubmitTransaksi" aria-hidden="true">
        <div class="modal-dialog modal-l" role="document">
            <div class="modal-content">
                <form id="transaksi">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Submit Permintaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="form-control">
                                    <label for="exampleFormControlSelect1" class="form-label">Tanggal</label>
                                    <input type="date" id="tglsurat" class="form-control form-control-lg" siez="17" placeholder="Nomor Surat" />
                                </div>
                                </br>
                                <div class="form-control">
                                    <label for="nameExLarge" class="form-label">Alasan</label>
                                    <textarea type="text" id="no_surat" name="no_surat" class="form-control"></textarea>
                                </div>
                                </br>
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" id="btn_simpanTransaksi">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Transaksi Masuk
        </h4>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Transaksi</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata2" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th>#</th>
                                    <th style="text-align:center;">No Surat</th>
                                    <th style="text-align:center;">Direktorat / Bagian</th>
                                    <th style="text-align:center;">Tanggal</th>
                                    <th style="text-align:center;">Persetujuan</th>
                                    <th style="text-align:center;">Status</th>
                                    <th style="text-align:center;">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($cartlist as $data) : ?>
                                    <tr style="text-align:center;">
                                        <td>
                                            <p><?= $i ?></p>
                                        </td>
                                        <td>
                                            <p><?= $data->no_surat; ?></p>
                                        </td>
                                        <td>
                                            <p><?= $data->alias_dept; ?></p>
                                        </td>
                                        <td>
                                            <p><?= $data->tgl_surat; ?></p>
                                        </td>
                                        <td><?php
                                            if ($data->is_approval == 1) {
                                                echo "<p style='color: red'>Perlu Persetujuan</p>";
                                            } else {
                                                echo "<p style='color:green'>Tidak Perlu Persetujuan</p>";
                                            }
                                            ?> </td>
                                        <td><?php
                                            if ($data->status_admin == "Permohonan Baru") {
                                                echo "<p style='color:green'>Permohonan Baru</p>";
                                            } else if ($data->status_admin == "Sudah Diambil") {
                                                echo "<p style='color: blue'>Sudah Diambil</p>";
                                            } else if ($data->status_admin == "Sedang Diproses") {
                                                echo "<p style='color: orange'>Sedang Diproses</p>";
                                            }
                                            ?> </td>
                                        <td style="text-align:center;">
                                            <a title="Proses Permintaan" href="<?php echo base_url('proses_transaksi/') . $data->th_id ?>">
                                                <i class="menu-icon tf-icons" style="text-align:center; color:black">
                                                    <iconify-icon icon="uil:file-info-alt" width="40" height="40">
                                                    </iconify-icon>
                                                </i> </a>

                                            <?php if (empty($data->url_nodin)) : ?>
                                                <a title="Lihat BAST" class="liatNodin"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                        <iconify-icon icon="bxs:file-pdf" width="40" height="40"></iconify-icon>
                                                    </i></a>
                                            <?php else : ?>
                                                <a title="Lihat BAST" href="<?php echo $set_net . $data->url_nodin ?>" target="_blank" class="liatNodin"><i class="menu-icon tf-icons" style="text-align:center; color:red">
                                                        <iconify-icon icon="bxs:file-pdf" width="40" height="40"></iconify-icon>
                                                    </i></a>
                                            <?php endif; ?>

                                            <a title="Signature Users" href="<?php echo base_url('proses_Csignature/') . $data->th_id ?>"><i class="menu-icon tf-icons" style="text-align:center; color:darkgreen">
                                                    <iconify-icon icon="fluent:signature-28-regular" width="40" height="40">
                                                    </iconify-icon>
                                                </i></a>
                                            <!-- <a title="Cetak BAST"
                                            href="<?php echo base_url('cetak_BAST/') . $data->th_id ?>"><i
                                                class="menu-icon tf-icons" style="text-align:center; color:darkcyan;">
                                                <iconify-icon icon="uil:print" width="40" height="40"></iconify-icon>
                                            </i></a> -->
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

<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script> -->
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
        $('#mydata2').dataTable();
    });
</script>

</body>

</html>