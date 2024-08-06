<section class="cart_area" style="margin-top: -15%; margin-right: 5%;">

    <div id="mSubmitTrans" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fa fa-check" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Success !!</h4>
                    </br>
                    <p class="text-center">Input Transaksi Berhasil</p>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="cart_inner">
            <!-- <h2 style="text-align: center;">Daftar Barang</h2>
            <br> -->
            <!-- <br> -->
            <div class="container">
                <!-- <div class="cart_inner"> -->
                <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card">
                                <div class="container" style="margin-left: 5%; margin-top: 10%;">
                                    <h4>Transaksi Aktif</h4>
                                    <br>
                                </div>

                                <div class="card-body" style="                                                                                               
                                                
                                                height: 500px;
                                                overflow-x: hidden;
                                                overflow-y: auto;
                                                text-align: justify;">
                                    <?php $i = 1; ?>
                                    <?php foreach ($cart_active as $data) : ?>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h5 style="font-size: 12pt; text-align: right; <?= $data->color; ?>">
                                                            <?= $data->status_name; ?></h5><br>
                                                        <h5 style="font-size: 12pt;"><?= $data->no_surat; ?></h5>
                                                        <h5 style="font-size: 8pt;"><?= $data->tgl_surat; ?></h5>

                                                        <br>

                                                    </div>
                                                    <div class="col-sm-12">
                                                        <h5 style="font-size: 10pt;">Jumlah Barang :
                                                            <?= $data->total_quantity; ?> Unit</h5>
                                                        <br>
                                                        <hr>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <?php if ($data->status == 3) : ?>
                                                            <td style="text-align:center;">
                                                                <a href="<?php echo base_url('detail-transaction/') . $data->th_id ?>" class="btn btn-warning btn-sm" style="border-radius: 5px;">
                                                                    Lihat Daftar
                                                                </a>
                                                                <a href="<?php echo base_url('terima-barang/') . $data->th_id ?>" class="btn btn-info btn-sm" style="border-radius: 5px;">
                                                                    Terima Barang
                                                                </a>
                                                            </td>
                                                        <?php else : ?>
                                                            <td style="text-align:center;">
                                                                <a href="<?php echo base_url('detail-transaction/') . $data->th_id ?>" class="btn btn-warning btn-sm" style="border-radius: 5px;">
                                                                    Lihat Daftar
                                                                </a>
                                                            </td>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- </div> -->
            </div>
            <br>
            <section class="h-100 h-custom">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="card" style="padding: 50px;">
                                        <H3>Riwayat Transaksi</H3>
                                        <hr>
                                        <div class="table-responsive">
                                            <table id="historiData" class="table">
                                                <thead>
                                                    <tr class="text-nowrap" style="text-align:center;">
                                                        <th style="text-align:center;">#</th>
                                                        <th style="text-align:center;">Kode Transaksi</th>
                                                        <th style="text-align:center;">No Surat</th>
                                                        <th style="text-align:center;">Tanggal Permintaan</th>
                                                        <!-- <th style="text-align:center;">Qty</th>
                                                        <th style="text-align:center;">Status</th> -->
                                                        <th style="text-align:center;">___</th>
                                                        <th style="text-align:center;">___</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($cart_nonactive as $data) : ?>
                                                        <tr style="text-align:center;">
                                                            <td><?= $i ?></td>
                                                            <td><?= $data->no_invc; ?></td>
                                                            <td><?= $data->no_surat; ?></td>
                                                            <td><?= $data->tgl_surat; ?></td>
                                                            <!-- <td><?= $data->total_quantity; ?></td>
                                                        <?php if ($data->status == 1) : ?>
                                                        <td style="color:green"><?= $data->status_name; ?></td>
                                                        <?php elseif ($data->status == 2) : ?>
                                                        <td style="color:orange"><?= $data->status_name; ?></td>
                                                        <?php elseif ($data->status == 3) : ?>
                                                        <td style="color:blue"><?= $data->status_name; ?></td>
                                                        <?php elseif ($data->status == 4) : ?>
                                                        <td style="color:red"><?= $data->status_name; ?></td>
                                                        <?php endif; ?> -->
                                                            <td style="text-align:center;">
                                                                <a href="<?php echo base_url('detail-transaction/') . $data->th_id ?>" class="btn btn-warning btn-sm"> Lihat
                                                                </a>
                                                            </td>
                                                            <td style="text-align:center;">
                                                                <a target="_blank" href="<?php echo base_url('cetak_BAST/') . $data->th_id ?>" class="btn btn-info btn-sm"> BAST
                                                                </a>
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
                </div>
            </section>
        </div>
    </div>
</section>

</div>
</div>
</div>
</div>


<script src="<?php echo base_url('assets/js/vendor/jquery-3.6.4.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.sticky.js') ?>"></script>
<script src="<?php echo base_url('assets/js/nouislider.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>


<!-- <script src="https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script> -->


<!-- <script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script> -->
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<!-- <script src="<?php echo base_url('assets/js/gmaps.min.js') ?>"></script> -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script>
    $(document).ready(function() {

        is_submit();

        function is_submit() {

            var is_submit = '<?php echo $this->session->userdata('sesi_submit'); ?>';
            if (is_submit !== "") {
                $('#mSubmitTrans').modal('show');
            }

            <?php $this->session->unset_userdata('sesi_submit'); ?>
            console.log(is_submit);
        }


        $('#transaktif').dataTable({
            // "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            // "responsive": true,
            // "rowReorder": {
            //     selector: 'td:nth-child(3)'
            // }
        });

        // new DataTable('#transaktif', {
        //     responsive: true,
        //     rowReorder: {
        //         selector: 'td:nth-child(5)'
        //     }
        // });

        $('#historiData').dataTable({
            // "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });

        function terima_barang(id) {
            let text = "Apakah Anda yakin menghapus Item ini ?";
            if (confirm(text) == true) {
                var idr = "#idi_" + id;
                var kode = $(idr).val();

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('del_item_cart') ?>",
                    dataType: "JSON",
                    data: {
                        kode: kode
                    },
                    success: function(data) {

                        location.reload();
                    },
                    error: function(data, jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                        console.log(textStatus);
                    },
                });
            } else {
                text = "You canceled!";
            }
            return false;
        }
    });
</script>

</body>

</html>