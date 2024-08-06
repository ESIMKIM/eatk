<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Data Transaksi Per Item
        </h4>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <div class="row">
                        <div class="col-5">
                            <!-- <form id="perangkatBaru"> -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Cari Barang</label>
                                        <input type="text" id="namaBarang" name="namaBarang" class="form-control" placeholder="Masukan Nama Barang" />
                                    </div>

                                    <div>
                                        <button type="button" class="btn btn-primary" id="cari_Barang">
                                            Cari Data</button>
                                    </div>
                                </div>
                            </div>

                            <!-- </form> -->
                        </div>
                        <div class="col-2">
                        </div>
                        <!-- <div class="col-5">
                            <div class="position-relative">
                                <img src="<?php echo base_url("assets/img/gif/data4.gif") ?>" alt="Computer man" width="50%" style="margin-left: 100px;">
                            </div>
                        </div> -->
                        <div class="col-5">
                            <div class="position-relative">
                                <br>
                                <label>Keterangan</label>
                                <hr>
                                <p style="text-align: justify; font-size: 14pt;">
                                    Menu ini berfungsi untuk mentracing data pengiriman barang berdasarkan satu barang,
                                    dimana akan melacak pengiriman barang tersebut untuk seluruh Bagian atau Direktorat
                                    Teknis
                                </p>
                                <hr>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

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


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        // $('#mydata').dataTable();

        var wage = document.getElementById("namaBarang");
        wage.addEventListener("keydown", function(e) {
            if (e.keyCode === 13) {
                validate(e);
            }
        });

        function validate(e) {
            cariBarang();
        }



        $('#cari_Barang').on('click', function() {
            cariBarang();
        });

        function cariBarang() {
            var data = new FormData();
            data.append("namaBarang", $('#namaBarang').val());

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>cari_item_laporan',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    // Pastikan data adalah array objek
                    if (Array.isArray(data)) {
                        // Inisialisasi DataTable jika belum diinisialisasi
                        if (!$.fn.DataTable.isDataTable('#mydata')) {
                            $('#mydata').DataTable({
                                "data": data,
                                "columns": [{
                                        "data": null,
                                        "render": function(data, type, row, meta) {
                                            return meta.row + 1;
                                        }
                                    },
                                    {
                                        "data": "name"
                                    },
                                    {
                                        "data": "products_id",
                                        "render": function(data, type, row) {
                                            return '<a href="<?php echo base_url('laporan-itemTransDetail/') ?>' +
                                                data +
                                                '" class="btn btn-info item_lihat">Lihat History</a>';
                                        }
                                    }
                                ]
                            });
                        } else {
                            var table = $('#mydata').DataTable();
                            table.clear();
                            table.rows.add(data);
                            table.draw();
                        }
                    } else {
                        console.error('Data tidak sesuai format yang diharapkan:', data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    console.log(textStatus, errorThrown);
                }
            });

            return false;
        }


        // $('#cari_Barang').on('click', function() {
        //     var data = new FormData();
        //     data.append("namaBarang", $('#namaBarang').val());

        //     // console.log(data);

        //     $.ajax({
        //         type: "POST",
        //         url: '<?php echo base_url() ?>cari_item_laporan',
        //         dataType: "JSON",
        //         data: data,
        //         processData: false,
        //         contentType: false,
        //         success: function(data) {
        //             // console.log(data);
        //             var html = '';
        //             var i;
        //             var c = 1;
        //             for (i = 0; i < data.length; i++) {
        //                 // console.log(data[i].item_header_id)
        //                 html += '<tr>' +
        //                     '<td style="text-align:center; font-size:12pt;">' + c++ +
        //                     '</td>' +
        //                     '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                     .name + '</td>' +
        //                     '<td style="text-align:center; font-size:12pt;"> <a href="<?php echo base_url('laporan-itemTransDetail/') ?>' +
        //                     data[i]
        //                     .products_id +
        //                     '" class="btn btn-info item_lihat">Lihat History</a > </td> ' +
        //                     '</tr>';
        //             }
        //             $('#mydata').dataTable();
        //             $('#show_data').html(html);


        //         },
        //         error: function(data, jqXHR, textStatus, errorThrown) {
        //             alert('Error adding / update data');
        //             console.log(textStatus);
        //         },
        //     });
        //     return false;
        // });

        // $('#mydata').DataTable({
        //     dom: 'Bfrtip',
        //     buttons: [
        //         'copy', 'csv', 'excel', 'pdf', 'print'
        //     ]
        // });


    });
</script>




</body>

</html>