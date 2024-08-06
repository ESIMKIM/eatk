<!-- Tambah Transaksi Modal -->
<div class="modal fade" id="mTambahTransaksi" aria-hidden="true">
    <div class="modal-dialog modal-l" role="document">
        <div class="modal-content">
            <form id="transaksi">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-control">
                                <label for="exampleFormControlSelect1" class="form-label">Pihak Pertama</label>
                                <select class="form-select" id="pemberi" name="pemberi">
                                    <option selected>Pilih Pihak Pertama</option>
                                </select>
                            </div>
                            </br>
                            <div class="form-control">
                                <label for="exampleFormControlSelect1" class="form-label">Pihak Kedua</label>
                                <select class="form-select" id="penerima" name="penerima">
                                    <option selected>Pilih Pihak Kedua</option>
                                </select>
                            </div>
                            </br>
                            <div class="form-control">
                                <label for="nameExLarge" class="form-label">No Surat</label>
                                <input type="text" id="no_surat" name="no_surat" class="form-control"
                                    placeholder="Enter No Surat" />
                            </div>
                            </br>
                            <div class="form-control">
                                <label for="nameExLarge" class="form-label">No Surat Nodin</label>
                                <input type="text" id="no_nodin" name="no_nodin" class="form-control"
                                    placeholder="Enter No Nodin" />
                            </div>
                            </br>
                            <div class="form-control">
                                <label for="exampleFormControlSelect1" class="form-label">Tanggal Nodin</label>
                                <input type="date" id="tgl">
                            </div>
                            </br>
                            </br>
                            <div class="form-control">
                                <label for="nameExLarge" class="form-label">Upload Nodin <span
                                        style="color: red;"><br>WARNING : <br>1. Jika
                                        Tidak Ada Nodin Upload PDF kosong <br>2. Nama File upload tidak boleh
                                        menggunakan
                                        symbol atau spasi)</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="nodin" id="nodin">
                                </div>
                            </div>
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

<!-- Tambah Barang -->
<div class="modal fade" id="mInputPerangkat" aria-hidden="true">
    <div class="modal-dialog modal-l" role="document">
        <div class="modal-content">
            <form id="transaksi">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah Perangkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-control">
                                <label for="exampleFormControlSelect1" class="form-label">Nama Perangkat</label>
                                <select class="form-select" id="namaPerangkat" name="namaPerangkat">
                                    <option selected>Pilih Perangkat</option>
                                </select>
                            </div>
                            </br>
                            <div class="form-control">
                                <label for="exampleFormControlSelect1" class="form-label">Serial Number / NUP</label>
                                <select class="form-select" id="namaPerangkatNUP" name="namaPerangkatNUP">
                                    <option selected>Pilih Pihak Kedua</option>
                                </select>
                            </div>
                            </br>
                            <div class="form-control">
                                <label for="nameExLarge" class="form-label">Keterangan</label>
                                <textarea type="text" id="no_surat" name="no_surat" class="form-control"></textarea>
                            </div>
                            </br>
                            </br>
                            </br>
                            <!-- <div class="form-control">
                                <label for="nameExLarge" class="form-label">Upload Nodin <span style="color: red;">(Jika
                                        Tidak Ada Nodin Upload PDF kosong)</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="nodin" id="nodin">
                                </div>
                            </div> -->
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

<!-- Tambah Barang -->
<div class="modal fade" id="mDaftarPerangkat" aria-hidden="true">
    <div class="modal-dialog modal-l" role="document">
        <div class="modal-content">
            <form id="transaksi">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Daftar Perangkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="card-header">Daftar Perangkat</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="tbldataPerangkat" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">Perangkat</th>
                                    <th style="text-align:center;">NUP</th>
                                </tr>
                            </thead>
                            <tbody id="dataPerangkat">

                            </tbody>
                        </table>
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

<div class="modal fade" id="mNodin" aria-hidden="true">
    <div class="modal-dialog modal-l" role="document">
        <div class="modal-content">
            <form id="transaksi">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <canvas id="the-canvas"></canvas>
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

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Terima Permintaan
        </h4>

        <!-- <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahTransaksi">Buat
            Permintaan</br></a> -->
        <!-- <span><br><br></span> -->

        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="card" style="padding: 20px;">
                    <!-- <h5 class="card-header">Daftar Permintaan</h5> -->
                    <div class="card-header">
                        <h5>Detail Transaksi</h5></br>
                        <p>Kode Permohonan : INV/20230502-KD/1 </p>
                        <p>Tanggal : 30/5/2023</p>
                        <!-- <p>Status : Selesai</p> -->
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
                                    <!-- <th style="text-align:center;">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <tr>
                                    <td style="text-align:center;">1</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/2/7/16297281/16297281_47c39ee5-d4b8-45a4-8b8e-838474a2b6be_800_800.jpg"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>PEMBOLONG KERTAS NO.85</td>
                                    <td style="text-align:center;">10</td>
                                    <td style="text-align:center;">Habis</td>
                                    <td style="text-align:center;">8</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">2</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/23/2225839/2225839_05eeff78-ddfb-4655-9aab-d8865e97887c_877_877.jpg"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>LEM KERTAS STIK 25 GR</td>
                                    <td style="text-align:center;">10</td>
                                    <td style="text-align:center;">Habis</td>
                                    <td style="text-align:center;">10</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer" style="margin-top: 30px">
                        <a href="<?php echo base_url('transaksi') ?>" class="btn btn-outline-secondary">Kembali </a>
                        <button type="button" class="btn btn-primary" id="btn_simpanPerangkat">Simpan
                            Permintaaan</button>
                    </div>
                </div>
            </div>

            <div class=" col-lg-12 col-md-6 col-sm-12">
                <div class="container">

                    <!-- <img class="img-fluid" src="<?= $hel; ?>" style="width: 300px;
								height: 200px;
								object-fit: fill; text-align:center;position:relative" alt=""> -->


                    <form method="POST" action="upload.php">

                        <h1>Test Signature</h1>

                        <div class="col-md-12">
                            <label class="" for="">Signature:</label>
                            <br />
                            <div id="sig"></div>
                            <br />
                            <button id="clear">Clear Signature</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>

                        <br />
                        <button class="btn btn-success">Submit</button>
                    </form>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.487/pdf.min.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/iconify-icon.min.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>
<!-- <script src="http://code.jquery.com/jquery.min.js"></script> -->

<script src="<?php echo base_url() ?>/assets/js/signaturepad/js/jquery.ui.touch-punch.min.js"></script>

</script>
<script>
$('#widget').draggable();
</script>
<script type="text/javascript">
var sig = $('#sig').signature({
    syncField: '#signature64',
    syncFormat: 'PNG'
});
$('#clear').click(function(e) {
    e.preventDefault();
    sig.signature('clear');
    $("#signature64").val('');
});
</script>
</body>

</html>