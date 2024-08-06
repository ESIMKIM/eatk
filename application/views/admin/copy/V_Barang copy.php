<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <!-- update Perangkat Modal -->
    <div class="modal fade" id="mupdatePerangkat" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Edit Perangkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="perangkatBaruedit">
                        <div class="row">
                            <input type="text" id="id_edit" name="id_edit" class="form-control" hidden />
                            <div class="col-6 mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Kode Barang</label>
                                <select class="form-select" id="kdBarang_edit" name="kdBarang_edit">
                                    <option selected>Pilih Kode Barang</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Merk</label>
                                <select class="form-select" id="merk_edit" name="merk_edit">
                                    <option selected value=>Pilih Merk Barang</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="nameExLarge" class="form-label">Nama Perangkat</label>
                                <input type="text" id="namaPerangkat_edit" name="namaPerangkat_edit" class="form-control" placeholder="Enter Name" />
                            </div>

                            <div class="col-6 mb-3">
                                <label for="nameExLarge" class="form-label">Upload Thumbnail</label><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnails_edit" id="thumbnails_edit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" id="btn_updatePerangkat">Save changes</button>
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
                                <label for="exampleFormControlSelect1" class="form-label">Kategori Barang</label>
                                <select class="form-select" id="kdBarang">
                                    <option selected>Pilih Kategori Barang</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Merk</label>
                                <select class="form-select" id="merk">
                                    <option selected>Pilih Merk</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Satuan Barang</label>
                                <select class="form-select" id="merk">
                                    <option selected>Pilih Satuan Barang</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Nama Barang</label>
                                <input type="text" id="namaPerangkat" name="namaPerangkat" class="form-control" placeholder="Masukan Nama Barang" />
                            </div>
                            <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Jumlah Barang</label>
                                <input type="text" id="namaPerangkat" name="namaPerangkat" class="form-control" placeholder="Masukan Jumlah" />
                            </div>
                            <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Harga Barang</label>
                                <input type="text" id="namaPerangkat" name="namaPerangkat" class="form-control" placeholder="Masukan Harga" />
                            </div>
                            <div class="col-12 mb-3">
                                <label for="nameExLarge" class="form-label">Upload Thumbnail Barang</label><br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnails" id="thumbnails">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" id="btn_simpanPerangkat">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Detail Modal -->
    <div class="modal fade" id="mDetail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Detail Perangkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahPerangkatStok">Tambah
                                Stok Perangkat </br></a></br></br>
                            <div class="card">
                                <!-- <h5 class="card-header"><span id="vMerks"></span> <span> - </span> <span id="vItems"></span> -->
                                </h5>
                                <div class="table-responsive text-nowrap">
                                    <table id="mydatadetail" class="table">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th style="text-align: center;">#</th>
                                                <th style="text-align: center;">Merk</th>
                                                <th style="text-align: center;">Tipe</th>
                                                <th style="text-align: center;">Kode Barang</th>
                                                <th style="text-align: center;">Nama Barang</th>
                                                <th style="text-align: center;">NUP </th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_dataDetail">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Stok Modal -->
    <div class="modal fade" id="mTambahPerangkatStok" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Tambah Stok Perangkat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title"><span id="vMerk"></span> <span> - </span> <span id="vItem"></span></h5></br>
                    <div class="row">

                        <div class="col-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input radioExcel" name="radioExcel" type="radio" value="2" checked />
                                <label class="form-check-label"> Input Manual </label>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input radioExcel" name="radioExcel" type="radio" value="3" />
                                <label class="form-check-label"> Input by Excel </label>
                            </div>
                        </div>

                        <div id="radioExcel2" class="radioExcel">
                            <div class="col mb-3">
                                <label for="nameExLarge" class="form-label">NUP</label>
                                <input type="text" id="nup" name="nup" class="form-control" placeholder="Masuk NUP" />
                                <span id="vId" hidden></span>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="nameExLarge" class="form-label">Serial Number</label>
                                    <input type="text" name="sn" id="sn" class="form-control" placeholder="Masukan Serial Number" />
                                </div>
                            </div>
                        </div>

                        <div id="radioExcel3" class="radioExcel" style="display: none;">
                            <div class="col mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input type="file" class="custom-file-input" name="fileExcel" id="fileExcel">
                            </div>
                            <br>
                            <a href="<?php echo base_url('download_excel') ?>">Download Template Excel Perangkat</a>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" id="btn_simpanNUP">Save changes</button>
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
            <span class="text-muted fw-light"></span> Barang
        </h4>

        <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahPerangkat">Tambah
            Perangkat </br></a>
        <span><br><br></span>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header">Daftar Perangkat</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th>#</th>
                                    <th style="display:none;">id</th>
                                    <th>Merk</th>
                                    <th>Tipe</th>
                                    <!-- <th>Kode Barang</th>
                                    <th>Nama Barang</th> -->
                                    <th>Stok </th>
                                    <th>Aksi </th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                </br>
                <div class="card gambar">
                    <img id="image" src="" style="
                    width: 445px;
                    height: 445px;
                    object-fit: fill;" />
                </div>
                <br>
                <div class="card">
                    <div class="modal-body">
                        <h4 style="text-align: center;">Information Devices</h4>
                        <hr>
                        <!-- <h5>Nama Barang : <span id="vNamaBarang"></span> <span> - </span> <span id="vTipe"></span></h5>
                        <h5>Kode Barang : <span id="vKode"></span></h5>
                        <h5>Nama Kode : <span id="vKategori"></span></h5>
                        <h5>Lokasi Rak : <span id="vKategori">Rak 1</span> <span id="vKategori">- Baris 2</span></h5> -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h5>Nama Barang</h5>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1">
                                <h5> : </h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5><span id="vNamaBarang"></span> <span> - </span> <span id="vTipe"></span></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h5>Kode Barang</h5>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1">
                                <h5> : </h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5><span id="vKode"></span></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h5> </h5>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1">
                                <h5> </h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5><span id="vKategori"></span></h5>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h5>Lokasi</h5>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1">
                                <h5> : </h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <h5><span>Rak 1</span> - <span>Baris 2</span></h5>
                            </div>
                        </div> -->
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
<!-- <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->

<script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() ?>/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/select2.min.js"></script>

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<script>
    $(document).ready(function() {
        // $("input[name$='cars']").click(function () {
        //   var test = $(this).val();

        //   $("div.desc").hide();
        //   $("#Cars" + test).show();
        // });

        $("input[name$='radioExcel']").click(function() {
            var number = $(this).val();

            $("div.radioExcel").hide();
            $("#radioExcel" + number).show();
        });
    });
</script>

<script type="text/javascript">
    var oTable;
    $(document).ready(function() {
        tampil_data_barang(); //pemanggilan fungsi tampil barang.

        tampil_thumbnail();

        $('#mydata').dataTable();

        $("#mydata").click(function(e) {
            addRowHandlers();
            // if ($(this).hasClass('row_selected')) {
            //     $(this).removeClass('row_selected');
            // } else {
            //     oTable.$('tr.row_selected').removeClass('row_selected');
            //     $(this).addClass('row_selected');
            // }
        });
        // $('#mydatadetail').dataTable();
        // $('#mydatadetail').dataTable();

        // $('#mydata').on('click', function(e) {
        //     var id = $(e.target).closest('tr').find(".id").html();
        // })

        $('#mydata').on('click', '.paginate_button', function() {
            alert("'You clicked on")
        });

        // $("#mydata").on("click", ".activeAccount", function() {
        //     addRowHandlers();
        // });

        $("#kdBarang").select2({
            createTag: function() {
                // Disable tagging
                return null;
            },
            dropdownParent: "#mTambahPerangkat",
            width: '100%',
            lineheight: '15px',
            dropdownCssClass: "bigdrop",
            tags: true,
            // multiple: true,
            // tokenSeparators: [',', ' '],
            // minimumInputLength: 3,
            // minimumResultsForSearch: 10,
            ajax: {
                url: '<?php echo base_url() ?>/ajax_kd-barang',
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        $("#kdBarang_edit").select2({
            createTag: function() {
                // Disable tagging
                return null;
            },
            dropdownParent: "#mupdatePerangkat",
            width: '100%',
            lineheight: '15px',
            dropdownCssClass: "bigdrop",
            tags: true,
            // multiple: true,
            // tokenSeparators: [',', ' '],
            // minimumInputLength: 3,
            // minimumResultsForSearch: 10,
            ajax: {
                url: '<?php echo base_url() ?>/ajax_kd-barang',
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        $("#merk").select2({
            createTag: function() {
                // Disable tagging
                return null;
            },
            dropdownParent: "#mTambahPerangkat",
            width: '100%',
            lineheight: '15px',
            dropdownCssClass: "bigdrop",
            tags: true,
            // multiple: true,
            // tokenSeparators: [',', ' '],
            // minimumInputLength: 3,
            // minimumResultsForSearch: 10,
            ajax: {
                url: '<?php echo base_url() ?>/ajax_merk',
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        $("#merk_edit").select2({
            createTag: function() {
                // Disable tagging
                return null;
            },
            dropdownParent: "#mupdatePerangkat",
            width: '100%',
            lineheight: '15px',
            dropdownCssClass: "bigdrop",
            tags: true,
            // multiple: true,
            // tokenSeparators: [',', ' '],
            // minimumInputLength: 3,
            // minimumResultsForSearch: 10,
            ajax: {
                url: '<?php echo base_url() ?>/ajax_merk',
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        searchTerm: params.term // search term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        // $('#merk_edit').select2('data', {
        //     id: '123',
        //     text: 'res_data.primary_email'
        // });

        //fungsi tampil barang
        function tampil_data_barang() {
            $.ajax({
                type: 'GET',
                url: '<?php echo base_url() ?>/ajax_devices',
                async: false,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    var c = 1;
                    for (i = 0; i < data.length; i++) {
                        // console.log(data[i].item_header_id)
                        html += '<tr style="text-align:center;">' +
                            '<td>' + c++ + '</td>' +
                            '<td style="display:none;">' + data[i].item_header_id + '</td>' +
                            '<td>' + data[i].merk + '</td>' +
                            '<td>' + data[i].item_name + '</td>' +
                            // '<td>' + data[i].kode_barang + '</td>' +
                            // '<td>' + data[i].kategori + '</td>' +
                            '<td style="text-align:center;">' + data[i].stok + '</td>' +
                            '<td style="text-align:center;">' +
                            '<a href="#javascript:;" class="btn btn-warning item_edit" data="' +
                            data[i].item_header_id + '">Edit</a>' + ' ' +
                            '<a href="#javascript:;" class="btn btn-info item_lihat" data-bs-toggle="modal" data-bs-target="#mDetail" data="' +
                            data[i].item_header_id + '">Lihat</a>' + ' ' +
                            '<a href="#javascript:;" class="btn btn-danger item_hapus" data-bs-toggle="modal" data="' +
                            data[i].item_header_id + '">Hapus</a>'
                        '</td>' +
                        '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        // window.onload = addRowHandlers();

        //mengirimkan id pada saat klik row pada table, than send data thumbnails
        function addRowHandlers() {
            var table = document.getElementById("mydata");
            var rows = table.getElementsByTagName("tr");
            for (i = 0; i < rows.length; i++) {
                var currentRow = table.rows[i];
                var createClickHandler =
                    function(row) {
                        return function() {
                            var cell = row.getElementsByTagName("td")[1];
                            var id = cell.innerHTML;

                            // console.log(id)
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url() ?>/ajax_thumbnail',
                                dataType: "JSON",
                                data: {
                                    ids: id
                                },
                                success: function(data) {
                                    // console.log(data);
                                    for (i = 0; i < data.length; i++) {
                                        // console.log(data[i].thumbnails);

                                        tampil_thumbnail(data[i].thumbnails)
                                        tampil_deskripsi(data[i].kode_barang, data[i].item_name,
                                            data[i].kategori, data[i].merk, data[i]
                                            .item_header_id)

                                        // console.log(data[i].kode_barang, data[i].item_name,
                                        //     data[i].kategori, data[i].merk, data[i]
                                        //     .item_header_id);
                                    }
                                }

                            });
                            // alert("id:" + id);
                        };
                    };
                currentRow.onclick = createClickHandler(currentRow);


            }
        }



        //menampilkan data (gambar) thumbnail yang telah di kirim via addrowhandler
        function tampil_thumbnail(path) {
            let image = document.getElementById("image");

            if (path == null) {
                // image.src = "https://www.imigrasi.go.id/wp-content/uploads/2022/09/Logo-IM-3.png";
                image.src = "<?php echo base_url('/files/tmp_upload/devices master.png') ?>";
                // "https://www.shutterstock.com/image-vector/awesome-responsive-web-design-development-260nw-212845249.jpg";

            } else {
                image.src = path;
            }
        }

        //menampilkan data (gambar) thumbnail yang telah di kirim via addrowhandler
        function tampil_deskripsi(kode, item, kategori, merk, id) {
            let vKode = kode
            let vItem = item
            let vKategori = kategori
            let vMerk = merk


            // console.log(vMerk);

            document.getElementById("vKode").innerHTML = vKode;
            document.getElementById("vItem").innerHTML = vItem;
            document.getElementById("vKategori").innerHTML = vKategori;
            document.getElementById("vNamaBarang").innerHTML = vMerk;
            document.getElementById("vMerk").innerHTML = vMerk;
            document.getElementById("vTipe").innerHTML = vItem;
            document.getElementById("vId").innerHTML = id;
        }

        //GET Lihat Detail
        $('#show_data').on('click', '.item_lihat', function() {
            var id = $(this).attr('data');
            // console.log(id);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/ajax_devices-detail',
                dataType: "JSON",
                data: {
                    ids: id
                },
                success: function(data) {

                    var html = '';
                    var i;
                    var c = 1;
                    for (i = 0; i < data.length; i++) {
                        // console.log(data[i].kode_barang);
                        // console.log(data[i].namaA)
                        html += '<tr style="text-align:center;">' +
                            '<td>' + c++ + '</td>' +
                            '<td>' + data[i].namaA + '</td>' +
                            '<td>' + data[i].item_name + '</td>' +
                            '<td>' + data[i].kode_barang + '</td>' +
                            '<td>' + data[i].namaB + '</td>' +
                            '<td style="text-align:center;">' + data[i].nup + '</td>' +
                            '</tr>';
                    }
                    $('#show_dataDetail').html(html);
                    $('#mydatadetail').dataTable();
                }
            });
            return false;
        });

        //Simpan Barang
        $('#btn_simpanPerangkat').on('click', function() {
            var data = new FormData();
            data.append("item_name", $('#namaPerangkat').val());
            data.append("category_id", $('#kdBarang').val());
            data.append("merk_id", $('#merk').val());
            data.append('thumbnails', $('input[type=file]')[1].files[0]);

            // console.log($('input[type=file]')[1].files[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/Smt_perangkatBaru',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.error) {
                        $('#mTambahPerangkat').modal('hide');
                        $('#mGagalSimpan').modal('show');

                        let isError = data.error;
                        let pesanError = data.pesanError;

                        // document.getElementById("isError").innerHTML = isError;
                        document.getElementById("pesanError").innerHTML = pesanError;

                        // console.log(pesanError);
                    }
                    if (data.success) {
                        $('#mTambahPerangkat').modal('hide');
                        // addRowHandlers();

                        var oTable = $("#mydata").dataTable();
                        oTable.fnDestroy();
                        // oTable.destroy();

                        tampil_data_barang();
                        $('#mydata').DataTable();
                        // tampil_data_barang();
                        // $('#mydata').DataTable();
                        let pesanSukses = data.pesan;
                        document.getElementById("pesanSukses").innerHTML = pesanSukses;

                        $('#mSuksesSimpan').modal('show');
                        addRowHandlers();
                        // $('#mydata').dataTable();
                        // $('#mydata').DataTable().ajax.reload();
                    }
                },
                error: function(data, jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    console.log(textStatus);
                },
            });
            return false;
        });

        //Simpan Barang
        $('#btn_updatePerangkat').on('click', function() {
            var data = new FormData();
            data.append("item_name", $('#namaPerangkat_edit').val());
            data.append("category_id", $('#kdBarang_edit').val());
            data.append("merk_id", $('#merk_edit').val());
            data.append('thumbnails', $('input[type=file]')[0].files[0]);
            data.append("id_edit", $('#id_edit').val());

            // console.log($('#id_edit').val());
            // console.log($('input[type=file]')[0].files[0]);

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/Up_perangkatBaru',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.error) {
                        $('#mupdatePerangkat').modal('hide');
                        $('#mGagalSimpan').modal('show');

                        let isError = data.error;
                        let pesanError = data.pesanError;

                        // document.getElementById("isError").innerHTML = isError;
                        document.getElementById("pesanError").innerHTML = pesanError;

                        // console.log(pesanError);
                    }
                    if (data.success) {
                        $('#mupdatePerangkat').modal('hide');
                        // addRowHandlers();

                        var oTable = $("#mydata").dataTable();
                        oTable.fnDestroy();
                        // oTable.destroy();

                        tampil_data_barang();
                        $('#mydata').DataTable();
                        // tampil_data_barang();
                        // $('#mydata').DataTable();
                        let pesanSukses = data.pesan;
                        document.getElementById("pesanSukses").innerHTML = pesanSukses;

                        $('#mSuksesSimpan').modal('show');
                        addRowHandlers();
                        // $('#mydata').dataTable();
                        // $('#mydata').DataTable().ajax.reload();
                    }
                },
                error: function(data, jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    console.log(textStatus);
                },
            });
            return false;
        });

        //Simpan Stok Barang
        $('#btn_simpanNUP').on('click', function() {
            var data = new FormData();

            nup = $('#nup').val();
            sn = $('#sn').val();
            excel = $('input[type=file]')[2].files[0];

            if (excel == null) {
                data.append("nup", nup);
                data.append("sn", sn);
            } else {
                data.append("nup", nup);
                data.append("sn", sn);
                data.append('fileExcel', excel);
            }

            var input = document.getElementById("vId");
            var text = input.innerHTML;
            data.append("header_id", text);

            console.log(excel);

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/Smt_stokPerangkat',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    // console.log(data);
                    // console.log(data.error);
                    if (data.error) {
                        $('#mTambahPerangkat').modal('hide');
                        $('#mGagalSimpanStok').modal('show');
                    }
                    if (data.success) {
                        $('#mTambahPerangkatStok').modal('hide');

                        var dTable = $("#mydatadetail").dataTable();
                        dTable.fnDestroy();

                        var hTable = $("#mydata").dataTable();
                        hTable.fnDestroy();


                        tampil_data_barang();
                        // $('#mydatadetail').DataTable();
                        $('#mydata').DataTable();
                        // $('#mydatadetail').dataTable();
                        addRowHandlers();
                        let pesanSukses = data.pesan;
                        document.getElementById("pesanSukses").innerHTML = pesanSukses;


                        $('#mSuksesSimpan').modal('show');
                    }
                },
                error: function(data, jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    console.log(textStatus);
                },
            });
            return false;
        });

        //Update Barang
        // $('#btn_update').on('click', function() {
        //     var kobar = $('#kode_barang2').val();
        //     var nabar = $('#nama_barang2').val();
        //     var harga = $('#harga2').val();
        //     $.ajax({
        //         type: "POST",
        //         url: "<?php echo base_url('index.php/barang/update_barang') ?>",
        //         dataType: "JSON",
        //         data: {
        //             kobar: kobar,
        //             nabar: nabar,
        //             harga: harga
        //         },
        //         success: function(data) {
        //             $('[name="kobar_edit"]').val("");
        //             $('[name="nabar_edit"]').val("");
        //             $('[name="harga_edit"]').val("");
        //             $('#ModalaEdit').modal('hide');
        //             tampil_data_barang();
        //         }
        //     });
        //     return false;
        // });

        // update  devices
        $('#show_data').on('click', '.item_edit', function() {
            var ids = $(this).attr('data');
            // console.log(ids);
            // $('#mupdatePerangkat').modal('show');
            // $('#mupdatePerangkat').modal('show');
            // $('[name="kobar_edit"]').val("");
            //             $('[name="nabar_edit"]').val("");
            //             $('[name="harga_edit"]').val("");        
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('ajax_headerUpdate') ?>",
                dataType: "JSON",
                data: {
                    ids: ids
                },
                success: function(data) {
                    $('#mupdatePerangkat').modal('show');
                    var i;
                    for (i = 0; i < data.length; i++) {
                        $('[name="id_edit"]').val(ids);
                        $('[name="kodeBarang_edit"]').val(data[0].kode_barang);
                        $('[name="namaKB_edit"]').val(data[0].name);
                    }
                },
                error: function(data, jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    console.log(textStatus);
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapusItem').on('click', function() {
            var kode = $('#kode').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('del_item') ?>",
                dataType: "JSON",
                data: {
                    kode: kode
                },
                success: function(data) {
                    $('#mHapus').modal('hide');

                    var dTable = $("#mydatadetail").dataTable();
                    dTable.fnDestroy();

                    var hTable = $("#mydata").dataTable();
                    hTable.fnDestroy();


                    tampil_data_barang();
                    $('#mydata').DataTable();
                    addRowHandlers();
                }
            });
            return false;
        });

        //GET HAPUS
        $('#show_data').on('click', '.item_hapus', function() {
            var id = $(this).attr('data');
            $('#mHapus').modal('show');
            $('[name="kode"]').val(id);
        });
    });
</script>

<script>

</script>



</body>

</html>