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
            <div class="col-lg-8 col-md-6 col-sm-12">
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
                                <tr>
                                    <td style="text-align:center;">1</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2017/2/7/16297281/16297281_47c39ee5-d4b8-45a4-8b8e-838474a2b6be_800_800.jpg"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>PEMBOLONG KERTAS NO.85</td>
                                    <td style="text-align:center;">10</td>
                                    <td style="text-align:center;">Habis</td>
                                    <td style="text-align:center;">8</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;">2</td>
                                    <td><img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/23/2225839/2225839_05eeff78-ddfb-4655-9aab-d8865e97887c_877_877.jpg"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;"></td>
                                    <td>LEM KERTAS STIK 25 GR</td>
                                    <td style="text-align:center;">10</td>
                                    <td style="text-align:center;">Habis</td>
                                    <td style="text-align:center;">10</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer" style="margin-top: 30px">
                        <!-- <a href="<?php echo base_url('transaksi') ?>" class="btn btn-outline-secondary">Kembali </a>
                        <button type="button" class="btn btn-primary" id="btn_simpanPerangkat">Simpan
                            Permintaaan</button> -->
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-md-6 col-sm-12">
                <!-- <div class="container">
                    <style>
                    .kbw-signature {
                        width: 400px;
                        height: 200px;
                    }

                    #sig canvas {
                        width: 100% !important;
                        height: auto;
                    }
                    </style>
                    <form method="POST" action="upload.php">

                        <h1>Tanda Tangan Penerima Barang</h1>

                        <div class="col-md-12">
                            <label class="" for="">Signature:</label>
                            <br />
                            <div id="sig"></div>
                            <br />
                            <button id="clear">Clear Signature</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>

                        <br />
                        <a href="#" class="btn btn-success">Simpan</a>
                    </form>
                </div> -->
                <div id="signature-pad" class="signature-pad">
                    <div class="signature-pad--body">
                        <canvas></canvas>
                    </div>
                    <div class="signature-pad--footer">
                        <div class="description">Sign above</div>

                        <div class="signature-pad--actions">
                            <div class="column">
                                <button type="button" class="button clear" data-action="clear">Clear</button>
                                <!-- <button type="button" class="button" data-action="change-background-color">Change background color</button> -->
                                <!-- <button type="button" class="button" data-action="change-color">Change color</button> -->
                                <!-- <button type="button" class="button" data-action="change-width">Change width</button> -->
                                <!-- <button type="button" class="button" data-action="undo">Undo</button> -->

                            </div>
                            <!-- <div class="column">
          <button type="button" class="button save" data-action="save-png">Save as PNG</button>
          <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
          <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
          <button type="button" class="button save" data-action="save-svg-with-background">Save as SVG with background</button>
        </div> -->
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


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script> -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
    rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
</script>

<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script>
$('#widget').draggable();
</script>
<script type="text/javascript">
var sig = $('#sig').signature({
    syncField: '#signature64',
    syncFormat: 'PNG'
});
$('#clear').click(function(e) {
    e.preventDefault();
    sig.signature('clear');
    $("#signature64").val('');
});
</script>

</body>

</html>