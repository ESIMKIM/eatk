<section class="cart_area" style="margin-top: -8%; margin-right: 5%;">

    <div id="mErrorValidasiForm" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Transaksi Gagal</h4>
                    </br>
                    <p class="text-center" style="color: red;"><br> Periksa kembali Nomor Surat dan Tanggal Surat</p>
                </div>
            </div>
        </div>
    </div>

    <div id="mErrorfile" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Transaksi Gagal</h4>
                    </br>
                    <p class="text-center" style="color: red;"><br> Pastikan telah mengupload file lampiran untuk barang
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="itemFlag" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: orange;">
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Informasi</h4>
                    </br>
                    <p class="text-center"><br> Anda Memilih Barang yang memerlukan persetujuan oleh Subkoor LP,
                        Silahkan <span style="color: red;"> Upload Surat Lampiran </span> Barang Tersebut</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- <div class="cart_inner"> -->
        <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <div class="">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- <div class="card" style="line-height: 30px;">
                                            <div class="card-body"
                                                style="box-shadow: 0 5px 10px rgba(0,0,0,0.10), 0 6px 6px rgba(0,0,0,0.23);"> -->
                                        <p class="mb-2" style="text-align: center; font-size: 14pt;">Detail
                                            Permohonan
                                        </p>
                                        <hr>
                                        <form class="mt-4">
                                            <p class="mb-2" style="font-size: 10pt;">Nomor Surat</p>
                                            <div class="form-outline form-white mb-4" style="font-size: 10pt;">
                                                <input type="text" id="nosurat" class="form-control form-control-lg"
                                                    size="17" placeholder="Nomor Surat"
                                                    value="<?= $cart_list[0]->no_surat ?>" disabled />
                                                <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                            </div>
                                            <p class="mb-2" style="font-size: 10pt;">Tanggal Surat</p>
                                            <div class="form-outline form-white mb-4" style="font-size: 10pt;">
                                                <input type="date" id="tglsurat" class="form-control form-control-lg"
                                                    siez="17" placeholder="Nomor Surat"
                                                    value="<?= $cart_list[0]->tgl_surat ?>" disabled />
                                                <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                            </div>
                                        </form>


                                        <hr class="my-4">
                                        <!-- </div>
                                        </div> -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- </div> -->
    </div>
    <br>
    <div class="container">
        <!-- <div class="cart_inner"> -->
        <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <div class="">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="container">
                                                <br>
                                                <p class="mb-2" style="text-align: center; font-size: 14pt;">Daftar
                                                    Barang</p>
                                                <hr>
                                            </div>
                                        </div>
                                        <?php $i = 1; ?>
                                        <?php foreach ($cart_list as $data) : ?>
                                        <?php $content = 1;
                                            ?>
                                        <div class="card mb-3">
                                            <div class="card-body"
                                                style="box-shadow: 0 5px 10px rgba(0,0,0,0.10), 0 6px 6px rgba(0,0,0,0.23);">
                                                <!-- <div class="d-flex justify-content-between "> -->
                                                <div class="d-flex flex-row align-items-center">
                                                    <br>
                                                    <div>
                                                        <img src="<?= $data->images; ?>" class="img-fluid rounded-3"
                                                            alt="Shopping item" style="width: 65px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 style="margin-left: 5%; font-size: 12pt;">
                                                            <?= $data->name; ?>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <!-- </div> -->

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div style="width: 70px;">
                                                                <br>
                                                                <h5 class="mb-0" style=" font-size: 8pt;">Permintaan
                                                                </h5>
                                                                <input type="number" inputmode="numeric" name="qty"
                                                                    class="form-control" value="<?= $data->quantity; ?>"
                                                                    disabled />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div style="width: 70px;">
                                                                <br>
                                                                <h5 class="mb-0" style=" font-size: 8pt;">Alokasi
                                                                </h5>
                                                                <input type="number" inputmode="numeric" name="qty"
                                                                    class="form-control" value="<?= $data->approval; ?>"
                                                                    disabled />
                                                            </div>
                                                        </div>
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
                    </div>
                </div>
            </div>
        </section>
        <!-- </div> -->
    </div>
</section>

</div>
</div>

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
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<!-- <script src="<?php echo base_url('assets/js/gmaps.min.js') ?>"></script> -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script>
$(document).ready(function() {

    <?php
        $isBMN = 'none';
        foreach ($app as $data) {
            $indexed[$data->is_approval] = $data->name; // explaination create new array create id using url dan value url, so we can use isset to find array number id with url
        }

        if (isset($indexed[1])) {
            $isBMN = 'flag';
        }

        ?>

    var is_approval = '<?php echo ($isBMN) ?>';

    if (is_approval == 'flag') {
        $('#itemFlag').modal('show');
    }


});
</script>



<script type="text/javascript">
tampilSummary();



function tampilSummary() {
    $.ajax({
        type: 'GET',
        url: '<?php echo base_url() ?>/get_summarycart',
        async: false,
        dataType: 'json',
        success: function(data) {
            var html = '';
            var i;
            var c = 1;
            for (i = 0; i < data.length; i++) {
                // console.log(data[i].item_header_id)
                html += '<tr>' +
                    '<td style="text-align:left; font-size:8pt;">' + data[i].name + ' Item</td>' +
                    '<td style="text-align:center; font-size:8pt;">' + data[i].quantity + ' Item</td>' +
                    '</tr>';
            }
            $('#show_data').html(html);
        }
    });
}
</script>


</body>

</html>