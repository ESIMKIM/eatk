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

<div id="mTungguSimpan" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box" style="background-color: Yellow;">
                    <i class="material-icons">Notif</i>
                </div>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" style="text-align: center;">Harap Tunggu</h4>
                </br>
                <span id="pesanError"> Harap Tunggu Sampai Proses Upload Selesai !!! </span>
            </div>
        </div>
    </div>
</div>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Master Notif
        </h4>

        <!-- <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahKategoriBarang">
            Tambah Kategori Barang </br></a>
        <span><br><br></span> -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="perangkatBaru">
                            <div class="row">
                                <p>Input Notifikasi Update</p>
                                <hr>
                                <div class="col-12 mb-3">
                                    <br>
                                    <label for="nameExLarge" class="form-label">Update Version <span style="color: red;">*</span></label>
                                    <input type="text" id="versi" name="versi" class="form-control" />
                                </div>

                                <div class="col-12 mb-3">

                                    <label for="nameExLarge" class="form-label">Keterangan Update <span style="color: red;">*</span></label>

                                    <div id="editor-container"></div>
                                </div>

                                <div class="col-12 mb-3">
                                    </br></br>
                                    <div class="image-upload">
                                        <label for="nameExLarge" class="form-label">Video Update <span style="color: red;">*</span></label><br>
                                        <input id="fs" type="file" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
                    </div>
                </div>
            </div>





            <div class="col-12">
                </br>
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Version</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Versi</th>
                                    <th style="text-align:center;">Video</th>
                                    <!-- <th style="text-align:center;">Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <?php $i = 1; ?>
                                <?php foreach ($dataList as $data) : ?>
                                    <tr style="text-align:center;">
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?php echo $data->versi_update ?>
                                        </td>
                                        <td><video width="200" height="200" controls>
                                                <source src="<?php echo base_url('') . $data->url_video ?>" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video> </td>
                                        <!-- <td style="text-align:center;">


                                        </td> -->


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

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>


<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    'font': []
                }, {
                    'size': []
                }],
                [{
                    'color': []
                }, {
                    'background': []
                }],
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }],
                ['bold', 'italic', 'underline', 'strike'],
                [{
                    'align': []
                }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    });
</script>

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

            var content = quill.root.innerHTML;

            var data = new FormData();
            data.append("versi", $('#versi').val());
            data.append('fs', $('input[type=file]')[0].files[0]);
            data.append("keterangan", content);

            // console.log(data.get('versi'));
            // console.log(data.get('keterangan'));
            console.log(data.get('fs'));

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/submits-notif',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.error) {
                        $('#mGagalSimpan').modal('show');
                        // console.log(data);
                    }
                    if (data.success) {
                        // console.log(data);
                        $('#mTungguSimpan').modal('show');
                        var url = "<?php echo base_url("settings-notif") ?>";
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
            var satId = $(this).data('id');
            $(".modal-body #satId").val(satId);
        });

        $('#btn_updateSat').on('click', function() {
            var data = new FormData();

            data.append("satId", $('#satId').val());
            data.append("namaSat", $('#namaSat').val());

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/update_Satuan',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {


                    if (data.error) {
                        $('#mTungguSimpan').modal('show');
                        $('#mGagalSimpan').modal('show');
                        console.log(data);
                    }
                    if (data.success) {
                        // console.log(data);
                        $('#mTungguSimpan').modal('show');
                        var url = "<?php echo base_url("settings-satuan") ?>";
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

        // console.log(status);
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
                    var url = "<?php echo base_url("settings-satuan") ?>";
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