<section class="cart_area" style="background-color: #eee; margin-top: -8%; ">

    <div class="container">
        <div id="mSuksesTerima" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="fa fa-check" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" style="text-align: center;">Berhasil</h4>
                        </br>
                        <p class="text-center">Barang Berhasil diSimpan</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="mGagalTerima" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box" style="background-color: red;">
                            <i class="fa fa-exclamation" aria-hidden="true"></i>

                        </div>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" style="text-align: center;">Error!!</h4>
                        </br>
                        <p class="text-center" style="color: red;">Harap Hubungi Administrasi</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart_inner">
            <!-- <h2 style="text-align: center;">Daftar Barang</h2>
            <br> -->

            <section class="h-100 h-custom"
                style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3>Detail Transaksi</h3></br>
                                    <div class="row">
                                        <div class="col-3">
                                            <br><br><br><br>
                                            <h4 style="font-family: 'roboto'">
                                                Nomor Surat</h4>
                                            <h4 style="font-family: 'roboto'">Nomor Invoice</h4>
                                            <h4 style="font-family: 'roboto'">Tanggal</h4>
                                        </div>
                                        <div class="col-3">
                                            <br><br><br><br>
                                            <h4 style=" font-family: 'roboto'">: <?= $cart_list[0]->no_surat ?></h4>
                                            <h4 style=" font-family: 'roboto'">: <?= $cart_list[0]->no_invc ?></h4>
                                            <h4 style=" font-family: 'roboto'">: <?= $cart_list[0]->tgl_surat ?></h4>
                                        </div>

                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card" style="height: 300px;">
                                                    <h4 style="margin: 25px;">
                                                        Tanda Tangan Penerima
                                                    </h4>
                                                    <br>
                                                    <div class="container">
                                                        <div class="wrapper">
                                                            <!-- <img src="https://preview.ibb.co/jnW4Qz/Grumpy_Cat_920x584.jpg" width=400 height=200 /> -->
                                                            <div class="col text-center">
                                                                <canvas style="border-style: solid;" id="signature-pad"
                                                                    class="signature-pad" width=300 height=200></canvas>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </br></br>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="col text-center">
                                                            <button class="btn btn-warning" id="clear"
                                                                style="width: 200px;">Hapus
                                                                Tanda Tangan</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="col text-center">
                                                            <button type=" button" class="btn btn-primary"
                                                                id="btn_kirim_barang" style="width: 200px;">Terima
                                                                Barang
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </br></br>
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
                                                <input hidden name="th_id" id="th_id"
                                                    value="<?php echo $cart_list[0]->th_id ?>" />
                                                <?php $i = 1; ?>
                                                <?php foreach ($cart_list as $data) : ?>

                                                <tr style="text-align:center;">
                                                    <td><?= $i ?></td>
                                                    <td><img src="<?= $data->images; ?>" class="img-fluid rounded-3"
                                                            alt="Shopping item" style="width: 80px;"></td>
                                                    <td><?= $data->name; ?></td>
                                                    <td> <?= $data->quantity; ?> <?= ' ' . $data->name_satuan; ?>
                                                    </td>
                                                    <td><?= $data->approval; ?> <?= ' ' . $data->name_satuan; ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
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

<script src="<?php echo base_url() ?>assets/js/signpad/js/signature_pad.umd.js"></script>
<script src="<?php echo base_url() ?>assets/js/signpad/js/app.js"></script>

<script type="text/javascript">
$('#historiData').dataTable({
    // "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false
});

$(document).ready(function() {
    var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });
    var saveButton = document.getElementById('btn_kirim_barang');
    var cancelButton = document.getElementById('clear');


    saveButton.addEventListener('click', function(event) {
        var data = signaturePad.toDataURL('image/png');
        var th_id = $("#th_id").val();

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>submits_terimaUser',
            dataType: "JSON",
            data: {
                th_id: th_id,
                data: data
            },
            success: function(data) {
                if (data.error) {
                    $('#mGagalTerima').modal('show');
                    var url = "<?php echo base_url("transactions-user") ?>";
                    // setTimeout(function() {
                    window.open(url);
                    // }, 2000);
                }
                if (data.success) {
                    // $('#mSuksesTerima').modal('show');
                    var url = "<?php echo base_url("transactions-user") ?>";
                    // setTimeout(function() {
                    window.open(url, "_self");
                    // }, 2000);

                }
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
            },
        });

    });

    cancelButton.addEventListener('click', function(event) {
        signaturePad.clear();
    });
});
</script>
</body>

</html>