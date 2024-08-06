<!-- Content wrapper -->
<div class="content-wrapper">
    <div id="mUpdateBarangGagal" class="modal fade">
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


    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Edit Barang
        </h4>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">

                    <div class="modal-body">
                        <form id="perangkatBaru">
                            <div class="row">
                                <input type="text" id="prods_id" name="prods_id" value="<?= $product[0]->products_id ?>"
                                    hidden />
                                <div class="col-12 mb-3">
                                    <label class="form-label">Kategori Barang</label>
                                    <select class="form-select" id="kategoriBarang">
                                        <option selected>Pilih Kategori Barang</option>
                                        <?php foreach ($kategori as $data) : ?>
                                        <?php if ($product[0]->category_id == $data['category_id']) : ?>
                                        <option selected value="<?= $data['category_id'] ?>">
                                            <?= $data['name_category'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $data['category_id'] ?>"><?= $data['name_category'] ?>
                                        </option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Merk</label>
                                    <select class="form-select" id="merkBarang">
                                        <option selected>Pilih Merk</option>
                                        <?php foreach ($merk as $data) : ?>
                                        <?php if ($product[0]->merk_id == $data['merk_id']) : ?>
                                        <option selected value="<?= $data['merk_id'] ?>"><?= $data['name_merk'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $data['merk_id'] ?>"><?= $data['name_merk'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Satuan Barang</label>
                                    <select class="form-select" id="satuanBarang">
                                        <option selected>Pilih Satuan Barang</option>
                                        <?php foreach ($satuan as $data) : ?>
                                        <?php if ($product[0]->satuan_id == $data['satuan_id']) : ?>
                                        <option selected value="<?= $data['satuan_id'] ?>"><?= $data['name_satuan'] ?>
                                        </option>
                                        <?php else : ?>
                                        <option value="<?= $data['satuan_id'] ?>"><?= $data['name_satuan'] ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Persetujuan Pimpinan</label>
                                    <select class="form-select" id="persetujuan">
                                        <?php if ($product[0]->is_approval == 0) : ?>
                                        <option selected value="<?= $product[0]->is_approval ?>">Tidak</option>
                                        <option value="1">Iya</option>
                                        <?php elseif ($product[0]->is_approval == 1) : ?>
                                        <option selected value="<?= $product[0]->is_approval ?>">Iya</option>
                                        <option value="0">Tidak</option>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="nameExLarge" class="form-label">Nama Barang</label>
                                    <input type="text" id="namaBarang" name="namaBarang" class="form-control"
                                        placeholder="Masukan Nama Barang" value="<?= $product[0]->name ?>" />
                                </div>

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
                        <a href="<?php echo base_url("master-barang") ?> " class="btn btn-secondary">
                            Kembali
                        </a>
                        <button type="button" class="btn btn-primary" id="btn_updateBarang">Save changes</button>
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

    $('#btn_updateBarang').on('click', function() {
        var data = new FormData();
        data.append("prods_id", $('#prods_id').val());
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
            url: '<?php echo base_url() ?>/update_products',
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


    $(document).on("click", ".open-AddBookDialog", function() {
        var myId = $(this).data('id');
        $(".modal-body #prodId").val(myId);
        // console.log(myId);
    });
});
</script>



</body>

</html>