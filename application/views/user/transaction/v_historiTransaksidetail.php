<section class="cart_area" style="background-color: #eee; margin-top: -8%; ">

    <div class="container">

        <div class="cart_inner">
            <!-- <h2 style="text-align: center;">Daftar Barang</h2>
            <br> -->

            <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>Detail Transaksi</h3></br>
                                    <div class="row">
                                        <div class="col-3">
                                            <h4 style="font-family: 'arial'">
                                                Nomor Surat</h4>
                                            <h4 style="font-family: 'arial'">Nomor Invoice</h4>
                                            <h4 style="font-family: 'arial'">Tanggal</h4>
                                        </div>
                                        <div class="col-6">
                                            <h4 style=" font-family: 'arial'">: <?= $cart_list[0]->no_surat ?></h4>
                                            <h4 style=" font-family: 'arial'">: <?= $cart_list[0]->no_invc ?></h4>
                                            <h4 style=" font-family: 'arial'">: <?= $cart_list[0]->tgl_surat ?></h4>
                                        </div>
                                        <div class="col-3">
                                            <?php if (empty($lampiran)) : ?>
                                            <?php else : ?>
                                                <a title="lihat" href="<?php echo base_url($lampiran) ?>">
                                                    <span style="font-size: 20px;" class="ti-printer"> Lihat Lampiran</a>
                                            <?php endif; ?>
                                            <br>
                                            <?php if (empty($ttd[0]->signature_user)) : ?>
                                            <?php else : ?>
                                                <a href="<?php echo base_url('cetak_BAST/') . $cart_list[0]->th_id ?>">
                                                    <span style="font-size: 20px;" class="ti-printer"> Lihat BAST</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <h5> </h5>

                                    <hr></br>

                                    <div class=" table-responsive">
                                        <table id="historiData" class="table">
                                            <thead>
                                                <tr class="text-nowrap" style="text-align:center;">
                                                    <th style="text-align:center;">#</th>
                                                    <th style="text-align:center;">##</th>
                                                    <th style="text-align:center;">Nama Barang</th>
                                                    <th style="text-align:center;">Permintaan</th>
                                                    <th style="text-align:center;">Persetujuan</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($cart_list as $data) : ?>
                                                    <tr style="text-align:center;">
                                                        <td><?= $i ?></td>
                                                        <td><img src="<?= $data->images; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                                        <td><?= $data->name; ?></td>
                                                        <td> <?= $data->quantity; ?> <?= ' ' . $data->name_satuan; ?></td>
                                                        <td><?= $data->approval; ?> <?= ' ' . $data->name_satuan; ?></td>
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
            </section>
        </div>
    </div>
</section>

</div>
</div>
<!-- start footer Area -->
<?php $this->load->view('user/template/4_footer'); ?>
<!-- End footer Area -->
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

<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script>
    $('#historiData').dataTable({
        // "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false
    });
</script>

</body>

</html>