<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Data Transaksi Barang

        </h4>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 50px;">
                    <div><input hidden type="text" name="idBarang" id="idBarang" value="<?php echo $idBarang ?>"></div>

                    <div class="row">
                        <div class="table-responsive text-nowrap">
                            <table id="mydata" class="table">
                                <thead>
                                    <tr class="text-nowrap" style="text-align:center;">
                                        <th style="text-align:left;">#</th>
                                        <th style="text-align:left;">Nama Barang</th>
                                        <th style="text-align:left;">Alokasi</th>
                                        <th style="text-align:left;">Nomor Surat</th>
                                        <th style="text-align:left;">Tanggal Surat</th>
                                        <th style="text-align:left;">Permintaan</th>
                                        <th style="text-align:left;">Persetujuan</th>
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
        // $('#mydata').DataTable({
        //     dom: 'Bfrtip',
        //     buttons: [
        //         'copy', 'csv', 'excel', 'pdf', 'print'
        //     ]
        // });

        var data = new FormData();
        data.append("idBarang", $('#idBarang').val());


        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>cari_item_laporanDetail',
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
                            "dom": 'Bfrtip',
                            "buttons": [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ],
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
                                    "data": "alias_dept"
                                },
                                {
                                    "data": "no_surat"
                                },
                                {
                                    "data": "tgl_surat"
                                },
                                {
                                    "data": "quantity"
                                },

                                {
                                    "data": "approval"
                                },
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


        // $.ajax({
        //     type: "POST",
        //     url: '<?php echo base_url() ?>cari_item_laporanDetail',
        //     dataType: "JSON",
        //     data: data,
        //     processData: false,
        //     contentType: false,
        //     success: function(data) {
        //         // console.log(data);
        //         var html = '';
        //         var i;
        //         var c = 1;
        //         for (i = 0; i < data.length; i++) {
        //             // console.log(data[i].item_header_id)
        //             html += '<tr>' +
        //                 '<td style="text-align:center; font-size:12pt;">' + c++ +
        //                 '</td>' +
        //                 '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                 .name + '</td>' +
        //                 '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                 .alias_dept + '</td>' +
        //                 '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                 .no_surat + '</td>' +
        //                 '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                 .tgl_surat + '</td>' +
        //                 '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                 .quantity + '</td>' +
        //                 '<td style="text-align:left; font-size:12pt;">' + data[i]
        //                 .approval + '</td>' +


        //                 // '<td style="text-align:center; font-size:12pt;"> <a href="<?php echo base_url('laporan-itemTransDetail/') ?>' +
        //                 // data[i]
        //                 // .products_id +
        //                 // '" class="btn btn-info item_lihat">Lihat History</a > </td> ' +
        //                 '</tr>';
        //         }
        //         $('#show_data').html(html);

        //         $('#mydata').dataTable();

        //     },
        //     error: function(data, jqXHR, textStatus, errorThrown) {
        //         alert('Error adding / update data');
        //         console.log(textStatus);
        //     },
        // });
        // return false;
        // }



    });
</script>




</body>

</html>