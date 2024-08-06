<!-- Content wrapper -->
<div class="content-wrapper">

    <div class="modal fade" id="mUpdateStok" aria-hidden="true">
        <div class="modal-dialog modal-l" role="document">
            <div class="modal-content">
                <form id="transaksi">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Edit Transaksi Masuk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <hr>
                                <div class="form-control">
                                    <label class="form-label">Nomor PO</label>
                                    <input type="text" id="no_po" class="form-control form-control-lg" siez="17" placeholder="Nomor PO" />
                                </div><br>
                                <div class="form-control">
                                    <label class="form-label">Tanggal PO</label>
                                    <input type="date" id="tglsurat" class="form-control form-control-lg" siez="17" placeholder="Nomor Surat" />
                                </div></br>
                                <div class="form-control">
                                    <label class="form-label">Jumlah Barang</label>
                                    <input type="text" id="jumlah" name="jumlah" class="form-control form-control-lg" siez="17" placeholder="Nomor PO" />
                                </div><br>
                                <div class="form-control">
                                    <label for="nameExLarge" class="form-label">Keterangan</label>
                                    <textarea type="text" id="keterangan" name="keterangan" class="form-control"></textarea>
                                </div><br>
                                <div class="form-control">
                                    <label for="nameExLarge" class="form-label">Upload Lampiran</label><br>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnails" id="thumbnails">
                                    </div>
                                </div>
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

    <!-- OK Simpan Modal -->
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

    <!-- Modal HAPUS -->
    <div id="mHapus" class="modal fade">
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
                    <p class="text-center"><span id="pesanSukses"></span>Item ini memiliki persediaan perangkat yang
                        tersedia, apakah anda ingin menghapusnya ?</p>
                </div>
                <div>
                    <button type="button" class="btn" style="margin-left: 35%; background-color: red;" id="btn_hapusItem">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Gagal Simpan Modal -->
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
                    <span id="pesanError"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Gagal Stok Simpan Modal -->
    <div id="mGagalSimpanStok" class="modal fade">
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
                    <p class="text-center" style="color: red;">- Mohon Cek Kembali Form is; <br> - Mohon gunakan file
                        excel
                        yang telah disediakan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Master Transaksi Histori
        </h4>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Barang</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="display:none;">id</th>
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Gambar</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">No PO</th>
                                    <th style="text-align:center;">Tanggal</th>
                                    <th style="text-align:center;">Jumlah</th>
                                    <th style="text-align:center;">Harga</th>
                                    <th style="text-align:center;">Aksi </th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>1</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2023/3/27/e9637a7c-dd5f-4617-9d4a-4b99d09a217e.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>RAUTAN PENSIL KECIL</td>
                                    <td>21-PO 465316556</td>
                                    <td>21/05/2023</td>
                                    <td>50</td>
                                    <td>17500</td>
                                    <td style="text-align:center;">
                                        <a title="Edit" data-bs-toggle="modal" data-bs-target="#mUpdateStok" href="<?php echo base_url('update-transaksi-masuk') . '/1' ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:box-edit-20-regular" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                        <a title="Lampiran" href="<?php echo base_url('files/lampiran_users/lmp_inv.pdf') ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="bxs:file-pdf" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                    </td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>2</td>
                                    <td style="display: none;">id_coy</td>
                                    <td><img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-1168095/paper-one_paper-one-kertas-fotokopi--80-g--f4-_full03.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>Kertas F4</td>
                                    <td>21-PO 4865131653</td>
                                    <td>21/05/2023</td>
                                    <td>150</td>
                                    <td>67500</td>
                                    <td style="text-align:center;">
                                        <a title="Edit" data-bs-toggle="modal" data-bs-target="#mUpdateStok" href="<?php echo base_url('update-transaksi-masuk') . '/1' ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:box-edit-20-regular" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                        <a title="Lampiran" href="<?php echo base_url('files/lampiran_users/lmp_inv.pdf') ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="bxs:file-pdf" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                    </td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>3</td>
                                    <td style="display: none;">id_coy</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/23/2225839/2225839_05eeff78-ddfb-4655-9aab-d8865e97887c_877_877.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>LEM KERTAS STIK 25 GR</td>
                                    <td>21-PO 653165466</td>
                                    <td>21/05/2023</td>
                                    <td>250</td>
                                    <td>57500</td>
                                    <td style="text-align:center;">
                                        <a title="Edit" data-bs-toggle="modal" data-bs-target="#mUpdateStok" href="<?php echo base_url('update-transaksi-masuk') . '/1' ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:box-edit-20-regular" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                        <a title="Lampiran" href="<?php echo base_url('files/lampiran_users/lmp_inv.pdf') ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="bxs:file-pdf" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                    </td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td style="display: none;">id coy</td>
                                    <td>4</td>
                                    <td style="display: none;">id_coy</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/2/7/16297281/16297281_47c39ee5-d4b8-45a4-8b8e-838474a2b6be_800_800.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>PEMBOLONG KERTAS NO.85</td>
                                    <td>21-PO 465315432</td>
                                    <td>21/05/2023</td>
                                    <td>550</td>
                                    <td>17500</td>
                                    <td style="text-align:center;">
                                        <a title="Edit" data-bs-toggle="modal" data-bs-target="#mUpdateStok" href="<?php echo base_url('update-transaksi-masuk') . '/1' ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:box-edit-20-regular" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                        <a title="Lampiran" href="<?php echo base_url('files/lampiran_users/lmp_inv.pdf') ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="bxs:file-pdf" width="40" height="40">
                                                </iconify-icon>
                                            </i></a>
                                    </td>
                                </tr>
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