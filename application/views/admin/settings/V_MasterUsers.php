<!-- Tambah Kode Barang -->
<div class="modal fade" id="mTambahKategoriBarang" aria-hidden="true">
    <div class="modal-dialog modal-l" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="perangkatBaru">
                    <div class="row">
                        <div class="col-8 mb-3">
                            <label class="form-label">Nama </label>
                            <input type="text" id="nama" name="nama" class="form-control" />
                            <br>
                            <label class="form-label">NIP</label>
                            <input type="text" id="nip" name="nip" class="form-control" />
                            <br>
                            <label class="form-label">Direktorat</label>
                            <select class="form-select" id="dept" name="dept">
                                <option selected>Pilih</option>
                                <?php foreach ($dept as $data) : ?>
                                    <option value="<?php echo $data->id_department ?>">
                                        <?php echo $data->department_name ?> - <?php echo $data->section_name ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <label class="form-label">Role Akun</label>
                            <select class="form-select" id="role" name="role">
                                <option selected>Pilih</option>
                                <?php foreach ($role as $data) : ?>
                                    <option value="<?php echo $data->role_id ?>">
                                        <?php echo $data->name_role ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="col-4 mb-3">
                            <br>
                            <div class="card gambar">
                                <img id="image" src="<?php echo base_url('assets/img/admin/settings/settingsGear.png') ?>" style="
                    width: 150px;
                    height: 150px;
                    object-fit: fill;" />
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" id="btn_simpanUser">Save changes</button>
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
                <span id="pesanError"> Check Kembali Form isian anda </span>
            </div>
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

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Master Users
        </h4>

        <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahKategoriBarang">
            Tambah User </br></a>
        <span><br><br></span>

        <div class="row">
            <div class="card" style="padding: 50px;">
                <h5 class="card-header">Daftar Kategori</h5>
                <div class="table-responsive text-nowrap">
                    <table id="mydata" class="table">
                        <thead>
                            <tr class="text-nowrap" style="text-align:center;">
                                <th style="text-align:center;">#</th>
                                <th style="text-align:center;">Nama</th>
                                <th style="text-align:center;">NIP</th>
                                <th style="text-align:center;">Departments</th>
                                <th style="text-align:center;">Role Akun</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                            <?php $i = 1; ?>
                            <?php foreach ($dataList as $data) : ?>

                                <tr style="text-align:center;">
                                    <td><?= $i ?></td>
                                    <td><?= $data->name ?> </td>
                                    <td><?= $data->nip ?> </td>
                                    <?php if (empty($data->section_name)) : ?>
                                        <td><?= $data->department_name ?> </td>
                                    <?php else : ?>
                                        <td><?= $data->department_name . "  ( " . $data->section_name . " )" ?> </td>
                                    <?php endif; ?>
                                    <td><?= $data->name_role ?> </td>
                                    <td style="text-align:center;">
                                        <a title="Edit Kategori" href="#" data-toggle="modal" data-id="<?= $data->user_id ?>" class="send-data-id" data-target="#exampleModal">
                                            <i class="menu-icon tf-icons" style="text-align:center; color:grey">
                                                <iconify-icon icon="fluent:text-box-settings-24-filled" width="40" height="40">
                                                </iconify-icon>
                                            </i> </a>

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
<!-- / Layout wrapper -->

<!-- Core S -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
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


<script type="text/javascript">
    $(document).ready(function() {
        $('#mydata').dataTable();

        $('#btn_simpanUser').on('click', function() {
            var data = new FormData();

            data.append("nama", $('#nama').val());
            data.append("nip", $('#nip').val());
            data.append("dept", $('#dept').val());
            data.append("role", $('#role').val());

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/submits-users',
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
                        var url = "<?php echo base_url("settings-user") ?>";
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

</body>

</html>