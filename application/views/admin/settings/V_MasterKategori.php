<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Kategori</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container">
                        <hr>
                        <div class="col-12 mb-3">
                            <br>
                            <input hidden type="text" id="catId" name="catId" class="form-control" />

                            <label for="nameExLarge" class="form-label">Kateogri </label>
                            <input type="text" id="namaCat" name="namaCat" class="form-control"
                                placeholder="Masukan Kategori" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_updateCat">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Master Kategori
        </h4>

        <!-- <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahKategoriBarang">
            Tambah Kategori Barang </br></a>
        <span><br><br></span> -->

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form id="perangkatBaru">
                            <div class="row">
                                <p>Input Kategori Barang</p>
                                <hr>
                                <div class="col-12 mb-3">
                                    <br>
                                    <label for="nameExLarge" class="form-label">Nama Kategori Barang</label>
                                    <input type="text" id="namaKategori" name="namaKategori" class="form-control"
                                        placeholder="Masukan Nama Barang" />
                                </div>

                                <!-- <div class="col-12 mb-3">
                                    <label for="nameExLarge" class="form-label">Keterangan</label>
                                    <input type="text" id="keterangan" name="keterangan" class="form-control"
                                        placeholder="Masukan Keterangan" />
                                </div> -->

                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
                    </div>
                </div>
                <br>
                <!-- <div class="card">
                    <div class="card-body">
                        <form id="perangkatBaru">
                            <div class="row">
                                <p>Update Kategori Barang</p>
                                <hr>
                                <div class="col-12 mb-3">
                                    <br>
                                    <label for="nameExLarge" class="form-label">Edit Kategori Barang</label>
                                    <input type="text" id="editnamaKategori" name="editnamaKategori"
                                        class="form-control" placeholder="Masukan Nama Barang" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" id="btn_update">Simpan</button>
                    </div>
                </div> -->
            </div>
            <div class="col-8">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Kategori</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Nama Kategori</th>
                                    <th style="text-align:center;">Status</th>
                                    <th style="text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <?php $i = 1; ?>
                                <?php foreach ($dataList as $data) : ?>
                                <tr style="text-align:center;">
                                    <td><?= $i ?></td>
                                    <td><?= $data->name_category ?> </td>
                                    <?php
                                        $is_active = 0;
                                        if ($data->is_shown == 1) {
                                            $is_active = "Aktif";
                                        } else {
                                            $is_active = "Off";
                                        }
                                        ?>
                                    <td><?= $is_active ?> </td>
                                    <td style="text-align:center;">

                                        <a title="Edit Kategori" href="#" data-toggle="modal"
                                            data-id="<?= $data->category_id ?>" class="send-data-id"
                                            data-target="#exampleModal">
                                            <i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:text-box-settings-24-filled" width="40"
                                                    height="40">
                                                </iconify-icon>
                                            </i> </a>
                                        <?php if ($data->is_shown == 1) : ?>
                                        <input type="text" value="0" id="flag<?php echo $data->category_id ?>" hidden />
                                        <a title="Matikan" href="#" id="btn_matikan"
                                            onclick="updateStatus('<?= $data->category_id ?>')">
                                            <i class="menu-icon tf-icons" style="text-align:center; color:green">
                                                <iconify-icon icon="fluent:checkbox-indeterminate-16-filled" width="40"
                                                    height="40">
                                                </iconify-icon>
                                            </i></a>
                                        <?php else : ?>
                                        <input type="text" value="1" id="flag<?php echo $data->category_id ?>" hidden />
                                        <a title="Aktifkan" href="#" id="btn_nyalakan"
                                            onclick="updateStatus('<?= $data->category_id ?>')">
                                            <i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:checkbox-indeterminate-16-filled" width="40"
                                                    height="40">
                                                </iconify-icon>
                                            </i></a>

                                        <!-- <a href="#" onclick="updateStatus(<?= $data->category_id ?>);"> ok</a> -->
                                        <?php endif ?>
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
<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>


<script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() ?>/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
$(document).ready(function() {
    $("input[name$='radioExcel']").click(function() {
        var number = $(this).val();
        $("div.radioExcel").hide();
        $("#radioExcel" + number).show();
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    $('#mydata').dataTable();

    $('#btn_simpan').on('click', function() {
        var data = new FormData();
        data.append("namaKategori", $('#namaKategori').val());
        data.append("keterangan", $('#keterangan').val());

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/submits-cat',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.error) {
                    $('#mGagalSimpan').modal('show');
                    console.log(data);
                }
                if (data.success) {
                    console.log(data);
                    var url = "<?php echo base_url("settings-kategori") ?>";
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

    $(document).on("click", ".send-data-id", function() {
        var catId = $(this).data('id');
        $(".modal-body #catId").val(catId);
    });

    $('#btn_updateCat').on('click', function() {
        var data = new FormData();

        data.append("catId", $('#catId').val());
        data.append("namaCat", $('#namaCat').val());

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/update_Kategory',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.error) {
                    $('#mGagalSimpan').modal('show');
                    console.log(data);
                }
                if (data.success) {
                    console.log(data);
                    var url = "<?php echo base_url("settings-kategori") ?>";
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
});
</script>

<script type="text/javascript">
function updateStatus(id) {
    // var status = '';
    var status = $('#flag' + id).val();
    // var mati = $('#matikan' + id).val();

    // if (idup == 1) {
    //     status = idup;
    // }

    // if (mati == 0) {
    //     status = mati;
    // }

    // var data = new FormData();
    // data.append("status", status);
    // data.append("id_cat", id);

    console.log(status);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('update_kategoriStats') ?>",
        dataType: "JSON",
        data: {
            status: status,
            id_cat: id
        },
        success: function(data) {
            console.log(data);
            if (data.error) {
                $('#mGagalStatus').modal('show');
                // console.log(data);
            }
            if (data.success) {
                console.log(data);
                var url = "<?php echo base_url("settings-kategori") ?>";
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

    // console.log(status);
    // console.log(id);
}
</script>

</body>

</html>