<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span> Terima Permintaan
        </h4>

        <!-- <a href="#" class="btn rounded-pill btn-info" data-bs-toggle="modal" data-bs-target="#mTambahTransaksi">Buat
            Permintaan</br></a> -->
        <!-- <span><br><br></span> -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 20px;">
                    <!-- <h5 class="card-header">Daftar Permintaan</h5> -->
                    <div class="card-header">
                        <h5>Detail Transaksi</h5></br>
                        <p>Kode Permohonan : INV/20230502-KD/1 </p>
                        <p>Tanggal : 30/5/2023</p>
                        <!-- <p>Status : Selesai</p> -->
                    </div>

                    <div class="table-responsive text-nowrap">
                        <table id="mydata" class="table">
                            <thead>
                                <tr class="text-nowrap" style="text-align:center;">
                                    <th style="text-align:center;">#</th>
                                    <th style="text-align:center;">Image</th>
                                    <th style="text-align:center;">Nama Barang</th>
                                    <th style="text-align:center;">Permintaan</th>
                                    <th style="text-align:center;">Alasan</th>
                                    <th style="text-align:center;">Disetujui</th>
                                    <!-- <th style="text-align:center;">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody id="show_data">
                                <input name="th_id" id="th_id" value="<?= $item[0]->th_id; ?>" hidden>
                                <?php $i = 1; ?>
                                <?php foreach ($item as $datas) : ?>

                                    <tr>
                                        <td style="text-align:center;"><?php echo $i ?></td>
                                        <td><img src="<?= $datas->images; ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                        <td><?= $datas->name; ?></td>
                                        <td style="text-align:center;"><?= $datas->quantity; ?></td>
                                        <td style="text-align:center;"><?= $datas->reason_desc; ?></td>
                                        <td style="text-align:center;"><?= $datas->approval; ?></td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="modal-footer" style="margin-top: 30px">
                        <a href="<?php echo base_url('transaksi') ?>" class="btn btn-outline-secondary">Kembali </a>
                    </div>
                </div>
                <br>
            </div>
            <div class=" col-lg-9 col-md-10 col-sm-12">
                <?php if (empty($dataSig[0]->signature_courier)) : ?>

                    <!-- empty($dataSig[0]->signature_courier) -->

                    <div class="card" style="height: 450px;">
                        <h4 style="margin: 25px;">
                            Tanda Tangan Penerima
                        </h4>
                        <br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="container">
                                            <label>Masukan Nama</label>
                                            <input type="text" class="form-control" name="namaCourier" id="namaCourier" />
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-6 col-md-8 col-sm-8">
                                <div class="wrapper">
                                    <!-- <img src="https://preview.ibb.co/jnW4Qz/Grumpy_Cat_920x584.jpg" width=400 height=200 /> -->
                                    <canvas style="border-style: solid; margin-left: 25px;" id="signature-pad" class="signature-pad" width=300 height=200></canvas>
                                    <br>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-4 col-sm-4">
                                <button class="btn btn-warning" id="clear" style="width: 200px;">Hapus Tanda
                                    Tangan</button>
                                <br><br>
                                <button type=" button" class="btn btn-primary" id="btn_kirim_barang" style="width: 200px;">Terima Barang
                                </button>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- / Content -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    <!-- ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    , IDM -->
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>

</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>

<script src="<?php echo base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/iconify-icon.min.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/js/menu.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script> -->


<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
    rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>

<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script> -->

<script src="<?php echo base_url() ?>assets/js/signpad/js/signature_pad.umd.js"></script>
<script src="<?php echo base_url() ?>assets/js/signpad/js/app.js"></script>

<!-- <script type="text/javascript">
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
            url: '<?php echo base_url() ?>submits_terimaKurir',
            dataType: "JSON",
            data: {
                th_id: th_id,
                data: data
            },
            success: function(data) {
                // if (data.error) {
                //     $('#mGagalTerima').modal('show');
                //     var url = "<?php echo base_url("transactions-user") ?>";
                //     // setTimeout(function() {
                //     window.open(url);
                // }, 2000);
                // }
                if (data.success) {
                    var url = "<?php echo base_url("proses_Csignature/") ?>".th_id;
                    // setTimeout(function() {
                    window.open(url);
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
</script> -->

<script type="text/javascript">
    // function go_to(th) {
    //     window.open("https://www.w3schools.com");
    // }
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
            var namaCourier = $("#namaCourier").val();

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>submits_terimaKurir',
                dataType: "JSON",
                data: {
                    th_id: th_id,
                    data: data,
                    namaCourier: namaCourier
                },
                success: function(data) {
                    // console.log("<?php echo base_url("proses_Csignature/") ?>" + th_id);
                    var url = "<?php echo base_url("proses_Csignature/") ?>" + th_id;
                    //     // setTimeout(function() {
                    window.open(url, "_self");
                    // window.open("https://www.w3schools.com");

                    // go_to(th_id);
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