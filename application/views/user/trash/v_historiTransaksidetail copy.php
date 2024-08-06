<section class="cart_area" style="background-color: #eee; margin-top: -8%; ">

    <div class="container">

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
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="card text-white rounded-3"
                                                style="height: 500px; line-height: 30px; border-radius: 20px; color: black;">
                                                <div class="card-body" style="color: black;">
                                                    <p class="mb-2" style="text-align: center;">Proses Permintaan Barang
                                                    </p>
                                                    <hr>
                                                    <form class="mt-4">
                                                        <p class="mb-2">Isikan Nomor Surat</p>
                                                        <div class="form-outline form-white mb-4">
                                                            <input type="text" id="nosurat"
                                                                class="form-control form-control-lg" size="17"
                                                                placeholder="Nomor Surat" />
                                                            <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                                        </div>
                                                        <p class="mb-2">Isikan Tanggal Surat</p>
                                                        <div class="form-outline form-white mb-4">
                                                            <input type="date" id="tglsurat"
                                                                class="form-control form-control-lg" siez="17"
                                                                placeholder="Nomor Surat" />
                                                            <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                                        </div>

                                                        <p class="mb-2">Masukan Dokumen</p>
                                                        <div class="image-upload">

                                                            <input id="file-input" type="file" />
                                                        </div>

                                                    </form>

                                                    <hr class="my-4">

                                                    <button type="button" onclick="submit_cart()"
                                                        class="btn btn-info btn-block btn-lg"
                                                        style="border-radius: 15px;">

                                                        <!-- <span>$4818.00</span> -->
                                                        <span style="text-align: center;">Kirim</span>

                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-9">
                                            <br><br>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div>
                                                    <h3 class="mb-1">Daftar Transaksi</h3>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="<?= base_url('assets/img/users/icons1.png') ?>"
                                                                class="img-fluid rounded-3" alt="Shopping item"
                                                                style="width: 80px;">
                                                        </div>
                                                        <div class="col-lg-7">
                                                            </br>
                                                            <h5>INV/20230620/MPL/3302366649</br>30/16/2023</h5>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            </br>
                                                            <!-- <a href="#" id="btn_hapus_cart"
                                                                onclick="hapus_item_onCart(1)"
                                                                class="btn btn-primary">Detail Transaksi</a> -->
                                                            <a href="<?php $data = 1;
                                                                        echo base_url('detail-transaction/') . $data; ?>"
                                                                id="btn_hapus_cart" class="btn btn-primary">Detail
                                                                Transaksi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="<?= base_url('assets/img/users/icons1.png') ?>"
                                                                class="img-fluid rounded-3" alt="Shopping item"
                                                                style="width: 80px;">
                                                        </div>
                                                        <div class="col-lg-7">
                                                            </br>
                                                            <h5>INV/20230620/MPL/3302366649</br>30/16/2023</h5>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            </br>
                                                            <a href="#" id="btn_hapus_cart"
                                                                onclick="hapus_item_onCart(1)"
                                                                class="btn btn-primary">Detail Transaksi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="<?= base_url('assets/img/users/icons1.png') ?>"
                                                                class="img-fluid rounded-3" alt="Shopping item"
                                                                style="width: 80px;">
                                                        </div>
                                                        <div class="col-lg-7">
                                                            </br>
                                                            <h5>INV/20230620/MPL/3302366649</br>30/16/2023</h5>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            </br>
                                                            <a href="#" id="btn_hapus_cart"
                                                                onclick="hapus_item_onCart(1)"
                                                                class="btn btn-primary">Detail Transaksi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="<?= base_url('assets/img/users/icons1.png') ?>"
                                                                class="img-fluid rounded-3" alt="Shopping item"
                                                                style="width: 80px;">
                                                        </div>
                                                        <div class="col-lg-7">
                                                            </br>
                                                            <h5>INV/20230620/MPL/3302366649</br>30/16/2023</h5>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            </br>
                                                            <a href="#" id="btn_hapus_cart"
                                                                onclick="hapus_item_onCart(1)"
                                                                class="btn btn-primary">Detail Transaksi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<!-- <script src="<?php echo base_url('assets/js/gmaps.min.js') ?>"></script> -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script>
tampilSummary();

function tet(ids) {
    const firstChar = ids.charAt(0);
    let lastChar = ids.substring(1);

    var iddesc = '#txtdesc' + lastChar;
    var idbuttons = '.buttons' + ids;


    idx = iddesc;
    cntrl = $(idbuttons).val();
    // idx = "#txt-area" + lastChar;

    // var cntrl = $(this).html();  
    // alert(ids);
    $(idx).val(function(_, val) {
        return cntrl
    });

    updateDesc(lastChar);
    // console.log(idx);
    // console.log(idbuttons);
    console.log(cntrl);
}

function updateQty(id) {
    var qtys = "#qty_" + id;
    var ids = "#idi_" + id;
    var idi = $(ids).val();
    var qty = $(qtys).val();
    $.ajax({
        type: "POST",
        url: '<?php echo base_url() ?>/update_QtyCart',
        dataType: "JSON",
        data: {
            idi: idi,
            qty: qty,
        },
        success: function(data) {
            if (data.error) {
                console.log("error : ".data.pesan);
            }
            if (data.success) {
                tampilSummary();
            }
        },
        error: function(data, jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            console.log(textStatus);
        },
    });
}

// function updateReason(id) {
//     var idi = "#idi_" + id;
//     var idr = "#reason_" + id;
//     var idi = $(idi).val();
//     var reason = $(idr).val();

//     $.ajax({
//         type: "POST",
//         url: '<?php echo base_url() ?>/update_ReasonCart',
//         dataType: "JSON",
//         data: {
//             idi: idi,
//             reason: reason,
//         },
//         success: function(data) {
//             // location.reload();
//             if (data.error) {}
//             if (data.success) {}
//         },
//         error: function(data, jqXHR, textStatus, errorThrown) {
//             alert('Error adding / update data');
//             console.log(textStatus);
//         },
//     });
// }

function updateDesc(id) {
    var idi = "#idi_" + id;
    var idr = "#txtdesc" + id;
    var idix = $(idi).val();
    var desc = $(idr).val();

    $.ajax({
        type: "POST",
        url: '<?php echo base_url() ?>/update_DescCart',
        dataType: "JSON",
        data: {
            idi: idix,
            desc: desc,
        },
        success: function(data) {
            console.log(data);
            if (data.error) {}
            if (data.success) {}
        },
        error: function(data, jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            console.log(textStatus);
        },
    });
}

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
                html += '<tr style="text-align:center;">' +
                    '<td>' + data[i].name + '</td>' +
                    '<td>' + data[i].quantity + '</td>' +
                    '</tr>';
            }
            $('#show_data').html(html);
        }
    });
}

function hapus_item_onCart(id) {
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

function submit_cart() {
    var no = $('#nosurat').val();
    var tgl = $('#tglsurat').val();
    // var tgl = new Date($('#tgl_surat').val());

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('sub_cart') ?>",
        dataType: "JSON",
        data: {
            no: no,
            tgl: tgl
        },
        success: function(data) {
            console.log(data);

        },
        error: function(data, jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            console.log(textStatus);
        },
    });

    return false;
}

// $('#btn_hapus_cart').on('click', function() {

// });
</script>

</body>

</html>