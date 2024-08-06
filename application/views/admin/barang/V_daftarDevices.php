<!-- Tambah Perangkat Modal -->
<div class="modal fade" id="mTambahPerangkat" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Tambah Perangkat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="perangkatBaru">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kode Barang</label>
                            <select class="form-select" id="kdBarang">
                                <option selected>Pilih Kode Barang</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Merk</label>
                            <select class="form-select" id="merk">
                                <option selected>Pilih Kode Barang</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="nameExLarge" class="form-label">Nama Perangkat</label>
                            <input type="text" id="namaPerangkat" name="namaPerangkat" class="form-control" placeholder="Enter Name" />
                        </div>

                        <div class="col-6 mb-3">
                            <label for="nameExLarge" class="form-label">Upload Thumbnail</label>
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
                <h4 class="modal-title" style="text-align: center;">Sukses!</h4>
                </br>
                <p class="text-center"><span id="pesanSukses"></span>.</p>
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
                <h4 class="modal-title" style="text-align: center;">Gagal!!</h4>
                </br>
                <p class="text-center" style="color: red;">Mohon Cek Kembali Form serta format file yang didukung hanya : pdf|png|jpg|jpeg</p>
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
                <h4 class="modal-title" style="text-align: center;">Gagal!!</h4>
                </br>
                <p class="text-center" style="color: red;">- Mohon Cek Kembali Form is; <br> - Mohon gunakan file excel yang telah disediakan</p>
            </div>
        </div>
    </div>
</div>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Master Perangkat
        </h4>
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
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
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
                <div class="card gambar">
                    <img id="image" src="" style="
                    width: 445px;
                    height: 445px;
                    object-fit: fill;" />
                </div>
                <br>
                <div class="card">
                    <div class="modal-body">
                        <h5>Nama Barang : <span id="vNamaBarang"></span> <span> - </span> <span id="vTipe"></span></h5>
                        <h5>Kode Barang : <span id="vKode"></span> <span> - </span> <span id="vKategori"></span></h5>
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
<script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/iconify-icon.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tablebutton/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tablebutton/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tablebutton/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tablebutton/jszip.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tablebutton/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/tablebutton/vfs_fonts.js"></script>



<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>



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
    $(document).ready(function() {
        tampil_data_barang(); //pemanggilan fungsi tampil barang.

        tampil_thumbnail();

        // $('#mydata').dataTable();
        $('#mydata').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        // $('#mydatadetail').dataTable();
        // $('#mydatadetail').dataTable();

        $('#mydata').on('click', function(e) {
            var id = $(e.target).closest('tr').find(".id").html();
        })

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
                            '<td>' + data[i].kode_barang + '</td>' +
                            '<td>' + data[i].kategori + '</td>' +
                            '<td style="text-align:center;">' + data[i].stok + '</td>' +
                            '<td style="text-align:center;">' +
                            '<a href="#javascript:;" class="btn btn-info item_lihat" data-bs-toggle="modal" data-bs-target="#mDetail" data="' +
                            data[i].item_header_id + '">Lihat</a>'
                        '</td>' +
                        '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

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
        window.onload = addRowHandlers();

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
            data.append('thumbnails', $('input[type=file]')[0].files[0]);

            console.log($('input[type=file]')[0].files[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/Smt_perangkatBaru',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    // console.log(data);
                    // console.log(data.error);
                    if (data.error) {
                        $('#mTambahPerangkat').modal('hide');
                        $('#mGagalSimpan').modal('show');

                        let isError = data.error;
                        let pesanError = data.error_info;

                        document.getElementById("isError").innerHTML = isError;
                        document.getElementById("pesanError").innerHTML = pesanError;
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

        //Simpan Stok Barang
        $('#btn_simpanNUP').on('click', function() {
            var data = new FormData();

            nup = $('#nup').val();
            sn = $('#sn').val();
            excel = $('input[type=file]')[1].files[0];

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

            // console.log(excel);

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
        $('#btn_update').on('click', function() {
            var kobar = $('#kode_barang2').val();
            var nabar = $('#nama_barang2').val();
            var harga = $('#harga2').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/barang/update_barang') ?>",
                dataType: "JSON",
                data: {
                    kobar: kobar,
                    nabar: nabar,
                    harga: harga
                },
                success: function(data) {
                    $('[name="kobar_edit"]').val("");
                    $('[name="nabar_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click', function() {
            var kode = $('#textkode').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/barang/hapus_barang') ?>",
                dataType: "JSON",
                data: {
                    kode: kode
                },
                success: function(data) {
                    $('#ModalHapus').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //GET HAPUS
        $('#show_data').on('click', '.item_hapus', function() {
            var id = $(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });
    });
</script>

<script>

</script>



</body>

</html>