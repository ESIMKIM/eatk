<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Update Transaksi
        </h4>

        <!-- <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahTransaksi">Buat
            Permintaan</br></a> -->
        <!-- <span><br><br></span> -->

        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="card" style="padding: 70px;">
                    <h5 class="card-header">Direktorat Kerja Sama Keimigrasian</h5>
                    <h5 class="card-header">Daftar Barang</h5>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
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
                                    <td style="text-align:Left;">SPIDOL BESAR HITAM PERMANEN</td>
                                    <td style="text-align:center;">10</td>
                                    <td style="text-align:center;">Habis</td>
                                    <td style="text-align:center;"><input type="text" id="setujui" name="setujui"
                                            value="1" style="width: 50px; text-align: center;" /></td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">2</td>
                                    <td style="text-align:Left;">PEMBOLONG KERTAS KECIL</td>
                                    <td style="text-align:center;">10</td>
                                    <td style="text-align:center;">Habis</td>
                                    <td style="text-align:center;"><input type="text" id="setujui" name="setujui"
                                            value="1" style="width: 50px; text-align: center;" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer" style="margin-top: 30px">
                        <a href="<?php echo base_url('master-transaksi') ?>" class="btn btn-outline-secondary">Kembali
                        </a>
                        <button type="button" class="btn btn-primary" id="btn_simpanPerangkat">Simpan
                            Permintaaan</button>
                    </div>
                    </br>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <h5 class="card-header" style="text-align: center; padding-bottom: 50px;">Informasi Permintaan</h5>

                    <div class="row">
                        <div class="col-lg-5     col-md-6 col-sm-12">
                            <h5>Nomor Surat</h5>
                            </br>
                            <h5>Tanggal Surat</h5>
                            </br>
                            <h5>Nomor INV</h5>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h5>: IMI .324. 14U1298 </h5>
                            </br>
                            <h5>: 30-06-2023</h5>
                            </br>
                            <h5>: INV30062023</h5>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.487/pdf.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.487/pdf.min.js"></script>
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
    tampil_data_stok(); //pemanggilan fungsi tampil barang.

    $('#mydata').on('click', function(e) {
        var id = $(e.target).closest('tr').find(".id").html();
    })

    // $('#dataInput').dataTable();


    $("#pemberi").select2({
        createTag: function() {
            // Disable tagging
            return null;
        },
        dropdownParent: "#mTambahTransaksi",
        width: '100%',
        lineheight: '15px',
        dropdownCssClass: "bigdrop",
        tags: true,
        // multiple: true,
        // tokenSeparators: [',', ' '],
        // minimumInputLength: 3,
        // minimumResultsForSearch: 10,
        ajax: {
            url: '<?php echo base_url() ?>/ajax_p1',
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
    $("#penerima").select2({
        createTag: function() {
            // Disable tagging
            return null;
        },
        dropdownParent: "#mTambahTransaksi",
        width: '100%',
        lineheight: '15px',
        dropdownCssClass: "bigdrop",
        tags: true,
        // multiple: true,
        // tokenSeparators: [',', ' '],
        // minimumInputLength: 3,
        // minimumResultsForSearch: 10,
        ajax: {
            url: '<?php echo base_url() ?>/ajax_p2',
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


    // tambahbarang (Nama Barang)
    $("#namaPerangkat").select2({
        createTag: function() {
            // Disable tagging
            return null;
        },
        dropdownParent: "#mInputPerangkat",
        width: '100%',
        lineheight: '15px',
        dropdownCssClass: "bigdrop",
        tags: true,
        // multiple: true,
        // tokenSeparators: [',', ' '],
        // minimumInputLength: 3,
        // minimumResultsForSearch: 10,
        ajax: {
            url: '<?php echo base_url() ?>/ajax_addPerangkat',
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

    //pilih nup
    $('#namaPerangkat').change(function() {
        var ids = $(this).find(':selected')[0].value;
        console.log(ids);

        $("#namaPerangkatNUP").select2({
            createTag: function() {
                // Disable tagging
                return null;
            },
            dropdownParent: "#mInputPerangkat",
            width: '100%',
            lineheight: '15px',
            dropdownCssClass: "bigdrop",
            tags: true,
            // multiple: true,
            // tokenSeparators: [',', ' '],
            // minimumInputLength: 3,
            // minimumResultsForSearch: 10,
            ajax: {
                url: '<?php echo base_url() ?>/ajax_addNup',
                type: "post",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        searchTerm: params.term, // search term
                        // id: $('#namaPerangkat').val(),
                        id: ids,
                    };
                },
                processResults: function(response) {
                    console.log(response);
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });



    //fungsi tampil barang
    function tampil_data_barang() {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>/ajax_transaction',
            async: false,
            dataType: 'json',
            success: function(data) {

                //     <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahTransaksi">Buat
                // Permintaan</br></a>

                var html = '';
                var i;
                var c = 1;
                for (i = 0; i < data.length; i++) {

                    html += '<tr style="text-align:center;">' +
                        '<td>' + c++ + '</td>' +
                        '<td style="display:none;">' + data[i].th_id + '</td>' +
                        '<td>' + data[i].no_surat + '</td>' +
                        '<td>' + data[i].dep + '</td>' +
                        '<td>' + data[i].no_nodin + '</td>' +
                        '<td>' + data[i].tgl + '</td>' +
                        '<td>' + data[i].name + '</td>' +
                        '<td style="text-align:center;">' +
                        '<a title="Cetak BAST" href="#javascript:;" class="tambahBarang" data-bs-toggle="modal" data-bs-target="#mInputPerangkat" data="' +
                        data[i].th_id +
                        '"><i class="menu-icon tf-icons" style="text-align:center; color:grey"> <iconify-icon icon="uil:print" width="40" height="40"></iconify-icon> </i></a>' +
                        ' ' +
                        '<a title="Tambah Perangkat" href="#javascript:;" class="tambahBarang" data-bs-toggle="modal" data-bs-target="#mInputPerangkat" data="' +
                        data[i].th_id +
                        '"><i class="menu-icon tf-icons" style="text-align:center; color:grey"> <iconify-icon icon="uil:link-add" width="40" height="40"></iconify-icon> </i></a>' +
                        ' ' +
                        '<a title="Data Perangkat" href="#javascript:;" class="daftarPerangkat" data-bs-toggle="modal" data-bs-target="#mDaftarPerangkat" data="' +
                        data[i].th_id +
                        '"> <i class="menu-icon tf-icons" style="text-align:center; color:grey"> <iconify-icon icon="uil:file-info-alt" width="40" height="40"></iconify-icon> </i> </a>' +
                        ' ' +
                        '<a title="Nodin Permintaan" href="#javascript:;" class="liatNodin" data="' +
                        data[i].th_id +
                        '"><i class="menu-icon tf-icons" style="text-align:center; color:grey"> <iconify-icon icon="bxs:file-pdf" width="40" height="40"></iconify-icon> </i></a>'
                    '</td>' +
                    '</tr>';
                }
                $('#show_data').html(html);
                $('#mydata').dataTable();
            }
        });
    }


    $('#show_data').on('click', '.daftarPerangkat', function() {
        var id = $(this).attr('data');
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/ajax_transaction_devices',
            dataType: "JSON",
            data: {
                ids: id
            },
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr style="text-align:left;">' +
                        '<td>' + data[i].namaBarang + '</td>' +
                        '<td >' + data[i].nups + '</td>' +
                        '</tr>';
                }
                $('#dataPerangkat').html(html);
                $('#tbldataPerangkat').dataTable();
            }
        });
        return false;
    });



    function tampil_data_stok() {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>/ajax_devices',
            async: false,
            dataType: 'json',
            success: function(data) {

                //     <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahTransaksi">Buat
                // Permintaan</br></a>

                var html = '';
                var i;
                var c = 1;
                for (i = 0; i < data.length; i++) {

                    html += '<tr style="text-align:center;">' +
                        '<td style="display:none;">' + data[i].item_header_id + '</td>' +
                        '<td>' + data[i].kode_barang + '</td>' +
                        '<td>' + data[i].merk + '</td>' +
                        '<td>' + data[i].item_name + '</td>' +
                        '<td style="text-align:center;">' +
                        '<a href="#javascript:;" class="btn btn-info tambahBarang" data-bs-toggle="modal" data-bs-target="#mInputPerangkat" data="' +
                        data[i].th_id + '">Pilih</a>' + ' ' +
                        '<a href="#javascript:;" class="btn btn-warning liatNodin" data="' +
                        data[i].th_id + '">Hapus</a>'
                    '</td>' +
                    '</tr>';
                }
                $('#show_dataInput').html(html);
                $('#dataInput').dataTable();
            }

        });
    }

    //fungsi simpan
    $('#btn_simpanTransaksi').on('click', function() {
        var data = new FormData();
        data.append("pemberi", $('#pemberi').val());
        data.append("penerima", $('#penerima').val());
        data.append("no_surat", $('#no_surat').val());
        data.append("no_nodin", $('#no_nodin').val());
        data.append("tgl", $('#tgl').val());
        data.append('nodin', $('input[type=file]')[0].files[0]);

        // console.log($('#tgl').val());
        // console.log($('#pemberi').val());
        // console.log($('#penerima').val());
        // console.log($('#no_surat').val());
        // console.log($('#no_nodin').val());
        // console.log($('input[type=file]')[0].files[0]);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/Smt_stokTrans',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                // console.log(data);
                // console.log(data.error);
                if (data.error) {
                    $('#mTambahTransaksi').modal('hide');
                    $('#mGagalSimpan').modal('show');

                    let pesanError = data.pesan;
                    document.getElementById("pesan").innerHTML = pesanError;
                }
                if (data.success) {
                    $('#mTambahTransaksi').modal('hide');
                    addRowHandlers();

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

    //get nodin
    $('#show_data').on('click', '.liatNodin', function() {
        var idx = $(this).attr('data');
        var data = new FormData();
        data.append("id", idx);
        console.log(idx);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/nodin',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {

                // console.log('open');
                // var objbuilder = '';
                // objbuilder += ('<object width="100%" height="100%"      data="data:application/pdf;base64,');
                // objbuilder += (data);
                // objbuilder += ('" type="application/pdf" class="internal">');
                // objbuilder += ('<embed src="data:application/pdf;base64,');
                // objbuilder += (data);
                // objbuilder += ('" type="application/pdf" />');
                // objbuilder += ('</object>');

                // var win = window.open("", "_blank", "titlebar=yes");
                // win.document.title = "My Title";
                // win.document.write('<html><body>');
                // win.document.write(objbuilder);
                // win.document.write('</body></html>');
                // layer = jQuery(win.document);


                // const fileWindow = window.open();
                // const url = 'data:application/pdf;base64,' + data + btoa(
                //     new Uint8Array(response)
                //     .reduce((data, byte) => data + String.fromCharCode(byte), '')
                // );
                // fileWindow.document.write(
                //     '<title>Visualisation</title>' +
                //     '<body style="overflow: hidden; margin: 0">' +
                //     '<object width="100%" width="-webkit-fill-available" height="100%" height="-webkit-fill-available" type="application/pdf" data="' + encodeURI(url) + '"></object>' +
                //     '</body>'
                // );

                // atob() is used to convert base64 encoded PDF to binary-like data.
                // (See also https://developer.mozilla.org/en-US/docs/Web/API/WindowBase64/
                // Base64_encoding_and_decoding.)
                //  var pdfData = atob(
                //    'JVBERi0xLjcKCjEgMCBvYmogICUgZW50cnkgcG9pbnQKPDwKICAvVHlwZSAvQ2F0YWxvZwog' +
                //    'IC9QYWdlcyAyIDAgUgo+PgplbmRvYmoKCjIgMCBvYmoKPDwKICAvVHlwZSAvUGFnZXMKICAv' +
                //    'TWVkaWFCb3ggWyAwIDAgMjAwIDIwMCBdCiAgL0NvdW50IDEKICAvS2lkcyBbIDMgMCBSIF0K' +
                //    'Pj4KZW5kb2JqCgozIDAgb2JqCjw8CiAgL1R5cGUgL1BhZ2UKICAvUGFyZW50IDIgMCBSCiAg' +
                //    'L1Jlc291cmNlcyA8PAogICAgL0ZvbnQgPDwKICAgICAgL0YxIDQgMCBSIAogICAgPj4KICA+' +
                //    'PgogIC9Db250ZW50cyA1IDAgUgo+PgplbmRvYmoKCjQgMCBvYmoKPDwKICAvVHlwZSAvRm9u' +
                //    'dAogIC9TdWJ0eXBlIC9UeXBlMQogIC9CYXNlRm9udCAvVGltZXMtUm9tYW4KPj4KZW5kb2Jq' +
                //    'Cgo1IDAgb2JqICAlIHBhZ2UgY29udGVudAo8PAogIC9MZW5ndGggNDQKPj4Kc3RyZWFtCkJU' +
                //    'CjcwIDUwIFRECi9GMSAxMiBUZgooSGVsbG8sIHdvcmxkISkgVGoKRVQKZW5kc3RyZWFtCmVu' +
                //    'ZG9iagoKeHJlZgowIDYKMDAwMDAwMDAwMCA2NTUzNSBmIAowMDAwMDAwMDEwIDAwMDAwIG4g' +
                //    'CjAwMDAwMDAwNzkgMDAwMDAgbiAKMDAwMDAwMDE3MyAwMDAwMCBuIAowMDAwMDAwMzAxIDAw' +
                //    'MDAwIG4gCjAwMDAwMDAzODAgMDAwMDAgbiAKdHJhaWxlcgo8PAogIC9TaXplIDYKICAvUm9v' +
                //    'dCAxIDAgUgo+PgpzdGFydHhyZWYKNDkyCiUlRU9G');
                // var pdfData = atob(data);
                // // var pdfData = atob(
                // //     'JVBERi0xLjQKJeLjz9MKNCAwIG9iago8PC9MZW5ndGggMTc5Mi9GaWx0ZXIvRmxhdGVEZWNvZGU+\nPnN0cmVhbQp4nL2az2tcVRTHXwUVZiP6D+RttC3S5N2f855BRFEDVadJZqqETmsbm0YlaWuToEXx\nB7VQCaNd2MSNhS7EhbuuxIXQv8CFGze6kYI7XUURpN4fM+/dibn33HNbZGhz29w333s+c++558cU\nOckPkbzIRSXU36+ttt5qPdNrMZkLUeW9063neq25Fs0P6//V84p8NLu32pp6nuSkyHtnWgcO9t7U\nc5sp5s2ch1ghJ0UuWDVJuX2W5tQ8W5gZF5ZbBzYmPrx55OetN64szX6wNNX56ez93aP6jYt8eY83\nP3Zc/TxtFueXJUWR87I9KehIlPBx0e7RIy/5RUj+tvrN4eH8+ZmRqmTamqLK1RTJh+OVVtf/ANdT\n1MRVPeTtUg2D87UAbzcCehx6gDgKZEwiClQpcy5CnF7NFtuf71x5MZEVxhSz+oYVj2PFHQEOsxop\nkDGJ+E1FQ7AWfuz1L6SSQhhi1t6QInGkiCNAIkhxhxTB7ipWhUDpI790e3kilRXCFLP6mhUro1ix\nshHQY5AVaVg1EtGsJMTqvXfnH09khTHFrL5hJeJYCUdAwKxGCmRMIpoVg1itPjrgqawQppjVN6xo\nHCvqCNAIVsJhRVGspFIoIFbd6Y3tQbX41bUslRjCIGNDTYxWUcRo1QjoMUiMNsQaiVhitB0itnlj\n/hFNbfGF5alBlUgMY5CxoSEm44hJR0DCxEYKZEwi9jxSHoweLl+dOTn9xZeprBCmmNU3rFgcK+YI\nsAhW0mHF0NEDJcHo4cGV31JBIewwS29AFXGgnJiXAjEvcRTImETspiJ6G3o5vf/D/PVTD31yK5UV\nwhSz+poV4UUMK8JJLaDHICsnfG8koljRgqo8p5zkdXJF6Dis7Z25tRP3dU51bi7sv3Ru8anu9KVz\nn/1ybd9yf31rdm6l+1dn7ezV6+f7/T86hwa/d7L5B05s48ESJzESxgQoMfLnLWENm1BYDSihULNq\nDT1G5ka0UnBFCG5W7XoVGU2FhzHMn8gAGtzRAHIMC8yBh0yWVKjJaQje5red/vrrl5N5GVuoiLHF\nn84AGsTRAPIMNavWMGNcykSl0CLB9PLk/pQsgJpFWVysqCJw+U0BNIijAeBSs2oNM8bh0rFmeHst\nrOFRMXNTDVFJEoHKbwagQRwNCJUkjYYeI1G1Obiz5v7emEjLx5ksamScxxQv/OYAGsTRAJCpWbWG\nGeOQmUeCuysjytuXWVv9VD4/a+PBcY71yH6jAA3iaADgrKd3vD4OHNFZZxUERxUwosAV+k+y80c4\nZn99JqxhCydWAyqcWC/ZeExkDYgVAiiY6XL1ibVXZo7fHjybfAUgDpDfoLCGhWY1IGh2Dzf7GQmN\nCl05C+21+Zc/utj5+k5/cet7/WP9Tv/M7MzyxEL/4NJ5tQdpVqph6ha0ltpTFVMi3LvsBWgIRwOo\nR+nTOtIwY1xpTVgfC/ZMOr++sw+PTJh00OYHUlfwwPzAH7uHNWwYbTXAhgNrN90ZNUbmB5IbkWD6\nZW4HZpwezaQasUym5K2yxtc2iwT7Tl7TwhoWn9WA8KlZtYYeI/ENd1yw+6Q7T4PHun+m7jjMbvAn\nPIAGdzSgxo35KJyPBZdUCS7hUG5l5eFPv+n8s3nrLrAhTPJHDIAGcTSgHo5B5WDDRSUWG9yRqi+H\nZG4Imywrx1+DN6zVsPeO1QD7OYZVww15ww65BbtTo5p4WocKb5L/mgM0hKMBtXYMKgcb7iod3gv/\nQ+UI77P9DgjQ4I4G4BHsXeDcCzgnJ7lJisPpF1ev0dVap2LJABHG+V0RoEEcDcA1WGgOQJy7M1s2\nGBingrIH1RoR43v2PkSAhnA0gIOq4Yw0zBh3UDllOWNAml+onSbVa1KNWXKygDDK3/cFNKijAbRi\nLSwHHK63zNXb6zpWAJzMhAJWGmzJNXGMSf7mb1jD9mOtBtSPtagabMgGMzcd5nC6kIoKY4a/6wto\nSEcDaMdaPA4qXGdZH03KgaMpjePnao/RTCSDQxjlbwEDGszRANqzFpYDDtlm1ssi99b5443wt4AB\nDSfFhXqzFo4DKqLNvOufkW1ARVVdLGW7JrrrC6zdnc6TH4e++BdZBKxUdM0COnXtNBDpxEmVDOix\nH7uxeDGtx26L9faD5Ka/AX2Qugkw6oHrMdxmtxq2z241oD47dzT4mEak5yYAsIQGgAMqbsf7jQhr\nWFBWAwJlT1Jzqjyg/MfePrD7k4ys6EInTX/1o/Nd9sRd7n/t54muUfOQULghFheKm+AU6IiYSnRy\n7oLIK/zlgHsX9tt8xYkscSUHLku4gcRVbJkQiuO7Yf4ORVgD0xvw14Eid5iaLQidrMqaGPtvaUt/\nEW/16RUeqglGxxdazu8J1X4uzIuYDL0KfVSO5L97XgKPCmVuZHN0cmVhbQplbmRvYmoKMSAwIG9i\nago8PC9Hcm91cDw8L1R5cGUvR3JvdXAvQ1MvRGV2aWNlUkdCL1MvVHJhbnNwYXJlbmN5Pj4vUGFy\nZW50IDUgMCBSL0NvbnRlbnRzIDQgMCBSL1R5cGUvUGFnZS9SZXNvdXJjZXM8PC9Qcm9jU2V0IFsv\nUERGIC9UZXh0IC9JbWFnZUIgL0ltYWdlQyAvSW1hZ2VJXS9Db2xvclNwYWNlPDwvQ1MvRGV2aWNl\nUkdCPj4vRm9udDw8L0YxIDIgMCBSL0YyIDMgMCBSPj4+Pi9NZWRpYUJveFswIDAgNTk1IDg0Ml0v\nUm90YXRlIDkwPj4KZW5kb2JqCjYgMCBvYmoKWzEgMCBSL1hZWiAwIDYwNSAwXQplbmRvYmoKMiAw\nIG9iago8PC9CYXNlRm9udC9IZWx2ZXRpY2EvVHlwZS9Gb250L0VuY29kaW5nL1dpbkFuc2lFbmNv\nZGluZy9TdWJ0eXBlL1R5cGUxPj4KZW5kb2JqCjcgMCBvYmoKPDwvRm9udEJCb3ggWy0yNSAtMjU0\nIDEwMDAgODgwXS9DYXBIZWlnaHQgODgwL1N0eWxlPDwvUGFub3NlKAEFAgIEAAAAAAAAACk+Pi9U\neXBlL0ZvbnREZXNjcmlwdG9yL1N0ZW1WIDkzL0Rlc2NlbnQgLTEyMC9GbGFncyA2L0ZvbnROYW1l\nL1NUU29uZy1MaWdodC9Bc2NlbnQgODgwL0l0YWxpY0FuZ2xlIDA+PgplbmRvYmoKOCAwIG9iago8\nPC9CYXNlRm9udC9TVFNvbmctTGlnaHQvQ0lEU3lzdGVtSW5mbzw8L09yZGVyaW5nKEdCMSkvUmVn\naXN0cnkoQWRvYmUpL1N1cHBsZW1lbnQgND4+L1R5cGUvRm9udC9TdWJ0eXBlL0NJREZvbnRUeXBl\nMC9Gb250RGVzY3JpcHRvciA3IDAgUi9EVyAxMDAwPj4KZW5kb2JqCjMgMCBvYmoKPDwvRGVzY2Vu\nZGFudEZvbnRzWzggMCBSXS9CYXNlRm9udC9TVFNvbmctTGlnaHQtVW5pR0ItVUNTMi1IL1R5cGUv\nRm9udC9FbmNvZGluZy9VbmlHQi1VQ1MyLUgvU3VidHlwZS9UeXBlMD4+CmVuZG9iago1IDAgb2Jq\nCjw8L0lUWFQoMi4xLjcpL1R5cGUvUGFnZXMvQ291bnQgMS9LaWRzWzEgMCBSXT4+CmVuZG9iago5\nIDAgb2JqCjw8L05hbWVzWyhKUl9QQUdFX0FOQ0hPUl8wXzEpIDYgMCBSXT4+CmVuZG9iagoxMCAw\nIG9iago8PC9EZXN0cyA5IDAgUj4+CmVuZG9iagoxMSAwIG9iago8PC9OYW1lcyAxMCAwIFIvVHlw\nZS9DYXRhbG9nL1ZpZXdlclByZWZlcmVuY2VzPDwvUHJpbnRTY2FsaW5nL0FwcERlZmF1bHQ+Pi9Q\nYWdlcyA1IDAgUj4+CmVuZG9iagoxMiAwIG9iago8PC9DcmVhdG9yKEphc3BlclJlcG9ydHMgTGli\ncmFyeSB2ZXJzaW9uIDUuNi4wKS9Qcm9kdWNlcihpVGV4dCAyLjEuNyBieSAxVDNYVCkvTW9kRGF0\nZShEOjIwMTcxMjI5MTE0OTE0KzA4JzAwJykvQ3JlYXRpb25EYXRlKEQ6MjAxNzEyMjkxMTQ5MTQr\nMDgnMDAnKT4+CmVuZG9iagp4cmVmCjAgMTMKMDAwMDAwMDAwMCA2NTUzNSBmIAowMDAwMDAxODc1\nIDAwMDAwIG4gCjAwMDAwMDIxNjMgMDAwMDAgbiAKMDAwMDAwMjYwNSAwMDAwMCBuIAowMDAwMDAw\nMDE1IDAwMDAwIG4gCjAwMDAwMDI3MjkgMDAwMDAgbiAKMDAwMDAwMjEyOCAwMDAwMCBuIAowMDAw\nMDAyMjUxIDAwMDAwIG4gCjAwMDAwMDI0NDIgMDAwMDAgbiAKMDAwMDAwMjc5MiAwMDAwMCBuIAow\nMDAwMDAyODQ2IDAwMDAwIG4gCjAwMDAwMDI4NzkgMDAwMDAgbiAKMDAwMDAwMjk4NCAwMDAwMCBu\nIAp0cmFpbGVyCjw8L1Jvb3QgMTEgMCBSL0lEIFs8NzM3YjNiYTEyZTQ3ZjE4MDdlYjE1NDA1NjMw\nMDQyYWI+PDRiMzVlN2ZlOWU0YTM4YWU3ZDJiY2E1MTgzNmQ2NWZmPl0vSW5mbyAxMiAwIFIvU2l6\nZSAxMz4+CnN0YXJ0eHJlZgozMTUyCiUlRU9GCg=='
                // // );

                // //
                // // The workerSrc property shall be specified.
                // //
                // pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.487/pdf.worker.min.js';

                // // Opening PDF by passing its binary data as a string. It is still preferable
                // // to use Uint8Array, but string or array-like structure will work too.
                // pdfjsLib.getDocument({
                //     data: pdfData
                // }).then(function getPdfHelloWorld(pdf) {
                //     // Fetch the first page.
                //     pdf.getPage().then(function getPageHelloWorld(page) {
                //         var scale = 1.5;
                //         var viewport = page.getViewport(scale);

                //         // Prepare canvas using PDF page dimensions.
                //         var canvas = document.getElementById('the-canvas');
                //         var context = canvas.getContext('2d');
                //         canvas.height = viewport.height;
                //         canvas.width = viewport.width;

                //         // Render PDF page into canvas context.
                //         var renderContext = {
                //             canvasContext: context,
                //             viewport: viewport
                //         };
                //         page.render(renderContext);
                //     });
                // });


                // $('#mNodin').modal('show');


                var win = window.open();
                var blob = base64ToBlob(data, 'application/pdf');
                win.document.write('<iframe src="' + URL.createObjectURL(blob) +
                    '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>'
                )


                function base64ToBlob(base64, type = "application/octet-stream") {
                    const binStr = atob(base64);
                    const len = binStr.length;
                    const arr = new Uint8Array(len);
                    for (let i = 0; i < len; i++) {
                        arr[i] = binStr.charCodeAt(i);
                    }
                    return new Blob([arr], {
                        type: type
                    });
                }

            }

        });
    });

});
</script>

<script>

</script>



</body>

</html>