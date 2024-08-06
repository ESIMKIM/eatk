<section class="cart_area" style="margin-top: -8%; margin-right: 5%; ">
    <div class="container">
        <!-- <div class="cart_inner"> -->
        <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <div class="">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row">
                                    <input hidden name="th_id" id="th_id" value="<?php echo $cart_list[0]->th_id ?>" />
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div class="container">
                                                <br>
                                                <p class="mb-2" style="text-align: center; font-size: 16pt;">Daftar
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
                                                        <h5 style="margin-left: 5%; font-size: 10pt;">
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

                                    <div class="col-sm-12">
                                        <hr>
                                        <p class="mb-2" style="text-align: center; font-size: 16pt;">
                                            Tanda Tangan / Paraf
                                        </p>
                                        <hr>
                                        <div class="container">
                                            <div class="wrapper">
                                                <!-- <img src="https://preview.ibb.co/jnW4Qz/Grumpy_Cat_920x584.jpg" width=400 height=200 /> -->
                                                <div class="col text-center">
                                                    <canvas style="border-style: solid;" id="signature-pad"
                                                        class="signature-pad" width=300 height=200></canvas>
                                                </div>

                                                <br>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="container">
                                            <div class="col text-center">
                                                <button class="btn btn-warning" id="clear">Hapus</button>
                                                <button type=" button" class="btn btn-primary"
                                                    id="btn_kirim_barang">Simpan</button>
                                            </div>
                                        </div>
                                        <hr class="my-4">
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
<!-- start footer Area -->
<!-- <?php $this->load->view('user/template/4_footer'); ?> -->
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