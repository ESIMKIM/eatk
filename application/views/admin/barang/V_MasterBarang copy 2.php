<!-- Content wrapper -->
<div class="content-wrapper">

    <div id="mUpdateBarangSukses" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fa fa-check" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Berhasil</h4>
                    </br>
                    <p class="text-center">Barang Berhasil diSimpan</p>
                    <p class="text-center" style="font-size: 8pt; color: green;">Silahkan Refresh Page</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mUpdateBarangImageGagal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Gagal Input Lampiran</h4>
                    </br>
                    <p class="text-center" style="color: red;">Lampiran tidak Sesuai / Kosong</p>
                    <p class="text-center" style="color: red;">Note : Format => jpg, png, jpeg / Size => 500KB</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mUpdateBarangGagal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Gagal Update Stock</h4>
                    </br>
                    <p class="text-center" style="color: red;">Cek Kembali Semua Form Isian Anda</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mInputBarangSukses" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fa fa-check" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Berhasil</h4>
                    </br>
                    <p class="text-center">Barang Berhasil diSimpan</p>
                    <p class="text-center" style="font-size: 8pt; color: green;">Silahkan Refresh Page</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mInputBarangImageGagal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Gagal Input Gambar</h4>
                    </br>
                    <p class="text-center" style="color: red;">Gambar tidak Sesuai / Kosong</p>
                    <p class="text-center" style="color: red;">Note : Format => jpg, png, jpeg / Size => 500KB</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mInputBarangGagal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Gagal Input</h4>
                    </br>
                    <p class="text-center" style="color: red;">Cek Kembali Semua Form Isian Anda</p>
                </div>
            </div>
        </div>
    </div>

    <!-- tambah Perangkat Modal -->
    <div class="modal fade" id="mTambahPerangkat" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="perangkatBaru">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label class="form-label">Kategori Barang</label>
                                <select class="form-select" id="kategoriBarang">
                                    <option selected>Pilih Kategori Barang</option>
                                    <?php foreach ($kategori as $data) : ?>
                                        <option value="<?= $data['category_id'] ?>"><?= $data['name_category'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Merk</label>
                                <select class="form-select" id="merkBarang">
                                    <option selected>Pilih Merk</option>
                                    <?php foreach ($merk as $data) : ?>
                                        <option value="<?= $data['merk_id'] ?>"><?= $data['name_merk'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Satuan Barang</label>
                                <select class="form-select" id="satuanBarang">
                                    <option selected>Pilih Satuan Barang</option>
                                    <?php foreach ($satuan as $data) : ?>
                                        <option value="<?= $data['satuan_id'] ?>"><?= $data['name_satuan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Persetujuan Pimpinan</label>
                                <select class="form-select" id="persetujuan">
                                    <option value="0">Tidak</option>
                                    <option value="1">Iya</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Nama Barang</label>
                                <input type="text" id="namaBarang" name="namaBarang" class="form-control" placeholder="Masukan Nama Barang" />
                            </div>
                            <!-- <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Jumlah Barang</label>
                                <input type="text" id="jumlahBarang" name="jumlahBarang" class="form-control"
                                    placeholder="Masukan Jumlah" />
                            </div> -->
                            <!-- <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Harga Per Barang</label>
                                <input type="text" id="hargaBarang" name="hargaBarang" class="form-control"
                                    placeholder="Masukan Harga" />
                            </div> -->
                            <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Upload Thumbnail Barang</label><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnails" id="thumbnails">
                                </div>
                                <label style="color: red;">* File Maksimal 500Kb</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" id="btn_simpanBarang">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mUpdateStok" aria-hidden="true">
        <div class="modal-dialog modal-l" role="document">
            <div class="modal-content">
                <form id="transaksi">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Update Stok Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <hr>
                                <div class="form-control">
                                    <label class="form-label">Nomor PO</label>
                                    <input hidden type="text" id="prodId" name="prodId" class="form-control form-control-lg" value='' />
                                    <input type="text" id="no_po" name="no_po" class="form-control form-control-lg" siez="17" placeholder="Nomor PO" />
                                </div><br>
                                <div class="form-control">
                                    <label class="form-label">Tanggal PO</label>
                                    <input type="date" id="tgl_surat" name="tgl_surat" class="form-control form-control-lg" siez="17" placeholder="Nomor Surat" />
                                </div></br>
                                <div class="form-control">
                                    <label class="form-label">Harga Per Barang</label>
                                    <input type="number" id="harga" name="harga" class="form-control form-control-lg" siez="17" placeholder="Harga Barang Per Item" />
                                </div><br>
                                <div class="form-control">
                                    <label class="form-label">Jumlah Barang</label>
                                    <input type="number" id="jumlah" name="jumlah" class="form-control form-control-lg" siez="17" placeholder="Jumlah Barang" />
                                </div><br>
                                <div class="form-control">
                                    <label for="nameExLarge" class="form-label">Keterangan</label>
                                    <textarea type="text" id="keterangan" name="keterangan" class="form-control"></textarea>
                                </div>
                                </br>
                                <div class="form-control">
                                    <label for="nameExLarge" class="form-label">Upload Lampiran</label><br>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnails_invoice" id="thumbnails_invoice">
                                    </div>
                                    <label style="color: red;">* Maksimal 500KB</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary" id="btn_updateStock">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Master Barang
        </h4>

        <div class="row">
            <!-- <div class="col-2">
                <a href="<?php echo base_url('histori-update-stok') ?>" class="btn rounded-pill btn-info">History Stock
                    Update
                    </br></a>
                <span><br><br></span>
            </div> -->
            <!--<div class="col-5">-->
            <!--    <a href="#" class="btn rounded-pill btn-success" data-bs-toggle="modal"-->
            <!--        data-bs-target="#mTambahPerangkat">Tambah-->
            <!--        Barang </br></a>-->
            <!--    <span><br><br></span>-->
            <!--</div>-->
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
                                    <th style="text-align:center;">Gambar</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">Merk Barang</th>
                                    <th style="text-align:center;">Harga Perbarang</th>
                                    <th style="text-align:center;">Kategori</th>
                                    <th style="text-align:center;">Stok</th>
                                    <th style="text-align:center;">Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($dataProduk as $data) : ?>
                                    <tr style="text-align:center;">

                                        <td><?= $i ?></td>
                                        <td><img src="<?= $data->gambar; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                        <td> <?= $data->nama_barang; ?></td>
                                        <td><?= $data->merk; ?> </td>
                                        <td><?php $hasil_rupiah = "Rp " . number_format($data->prices, 2, ',', '.');
                                            echo $hasil_rupiah; ?> </td>
                                        <td><?= $data->category; ?> </td>
                                        <td><?= $data->stok; ?> </td>
                                        <td style="text-align:center;">
                                            <a title="Tambah Stock" id="tambahStock" class="open-AddBookDialog" data-id="<?php echo $data->products_id; ?>" data-bs-toggle="modal" data-bs-target="#mUpdateStok" href="#"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                    <iconify-icon icon="fluent:box-arrow-up-24-regular" width="40" height="40">
                                                    </iconify-icon>
                                                </i></a>

                                            <a title="Edit Item" href="<?php echo base_url('master-barang-edit/') . $data->products_id ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                    <iconify-icon icon="fluent:box-edit-20-regular" width="40" height="40">
                                                    </iconify-icon>
                                                </i></a>
                                            <a title="Histori" href="<?php echo base_url('history-stock/') . $data->products_id ?>"><i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                    <iconify-icon icon="fluent:box-search-16-regular" width="40" height="40">
                                                    </iconify-icon>
                                                </i></a>

                                            <!-- <a title="Disable Item" data-bs-toggle="modal" data-bs-target="#mUpdateStok"
                                            href="<?php echo base_url('update-transaksi-masuk') . '/1' ?>"><i
                                                class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fe:disabled" width="40" height="40">
                                                </iconify-icon>
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

        $('#btn_simpanBarang').on('click', function() {
            var data = new FormData();
            data.append("namaBarang", $('#namaBarang').val());
            data.append("jumlahBarang", $('#jumlahBarang').val());
            data.append("hargaBarang", $('#hargaBarang').val());
            data.append("kategoriBarang", $('#kategoriBarang').val());
            data.append("merkBarang", $('#merkBarang').val());
            data.append("persetujuan", $('#persetujuan').val());
            data.append("satuanBarang", $('#satuanBarang').val());
            data.append('thumbnails', $('input[type=file]')[0].files[0]);

            // console.log(data);
            // console.log($('input[type=file]')[0].files[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/submits_products',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.error) {
                        $('#mTambahPerangkat').modal('hide');
                        if (data.errorImage) {
                            $('#mInputBarangImageGagal').modal('show');
                        } else {
                            $('#mInputBarangGagal').modal('show');
                        }
                    }
                    if (data.success) {
                        $('#mTambahPerangkat').modal('hide');
                        // $('#mInputBarangSukses').modal('show');
                        var url = "<?php echo base_url("master-barang") ?>";
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


        // $("#tambahStock").click(function() {
        //     var myId = $(this).data('id');
        //     $(".modal-body #prodId").val(myId);
        //     console.log(myId);
        // });

        $('#btn_updateStock').on('click', function() {
            var data = new FormData();
            data.append("no_po", $('#no_po').val());
            data.append("tgl_surat", $('#tgl_surat').val());
            data.append("harga", $('#harga').val());
            data.append("jumlah", $('#jumlah').val());
            data.append("keterangan", $('#keterangan').val());
            data.append("prodId", $('#prodId').val());
            data.append('thumbnails_invoice', $('input[type=file]')[1].files[0]);

            // console.log($('#prodId').val());
            // console.log($('#no_po').val());
            // console.log($('#tgl_surat').val());
            // console.log($('#harga').val());
            // console.log($('#jumlah').val());
            // console.log($('#keterangan').val());
            // console.log($('input[type=file]')[1].files[0])
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/submits_Stockproducts',
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

                        var url = "<?php echo base_url("master-barang") ?>";
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

        $(document).on("click", ".open-AddBookDialog", function() {
            var myId = $(this).data('id');
            $(".modal-body #prodId").val(myId);
            // console.log(myId);
        });
    });
</script>



</body>

</html>