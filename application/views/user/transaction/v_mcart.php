<section class="cart_area" style="margin-top: -8%; margin-right: 5%; ">

    <!-- <div id="mErrorValidasiForm" class="modal fade">
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
    </div> -->

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
                    <p class="text-center" style="color: red;"><br> <span id="errSpan"></span></p>
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
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- <h5 class="mb-3"><a href="#!" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Kembali
                                                </a></h5>
                                            <hr> -->

                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div>
                                                <p class="mb-1" style="font-size: 10pt;">Daftar Permintaan Barang</p>
                                                <p class="mb-0" style="font-size: 8pt;">Anda memiliki
                                                    <span><?php echo $count ?></span>
                                                    Barang
                                                    di dalam Daftar
                                                </p>
                                            </div>
                                        </div>
                                        <?php $i = 1; ?>
                                        <?php foreach ($cart as $data) : ?>
                                        <?php $content = substr($data['descs'], 0, 50) . " ...";
                                            ?>
                                        <div class="card mb-3">
                                            <div class="card-body"
                                                style="box-shadow: 0 5px 10px rgba(0,0,0,0.10), 0 6px 6px rgba(0,0,0,0.23);">
                                                <!-- <div class="d-flex justify-content-between "> -->
                                                <div class="d-flex flex-row align-items-center">
                                                    <input hidden type="text" id="idi_<?php echo $i ?>" name="idi"
                                                        class="form-control" value="<?= $data['cart_id']; ?>" />
                                                    <br>
                                                    <div>
                                                        <img src="<?= $data['images']; ?>" class="img-fluid rounded-3"
                                                            alt="Shopping item" style="width: 100px;">
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 style="margin-left: 5%; font-size: 10pt;">
                                                            <?= $data['name']; ?>
                                                            <?php if ($data['is_approval'] == 1) {
                                                                    echo '<span style="color:red">*</span>';
                                                                } ?></h5>
                                                    </div>
                                                </div>

                                                <!-- </div> -->

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div style="width: 70px;">
                                                                <br>
                                                                <h5 class="mb-0" style=" font-size: 10pt;">Jumlah
                                                                </h5>
                                                                <input type="number" inputmode="numeric"
                                                                    oninput="this.value = this.value.replace(/\D+/g, '')"
                                                                    min="1" id="qty_<?php echo $i ?>" name="qty"
                                                                    class="form-control"
                                                                    value="<?= $data['quantity']; ?>"
                                                                    onchange="updateQty(<?php echo $i ?>)" />
                                                            </div>

                                                            <div style="width: 100px;">
                                                                <br><br>
                                                                <a href="#" id="btn_hapus_cart"
                                                                    onclick="hapus_item_onCart(<?php echo $i ?>)"
                                                                    class="btn"><span class="lnr lnr-trash"
                                                                        style="color: red;"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12" style="margin-top: -5%;">
                                                        <br>
                                                        <span style="font-size: 10pt;">Pilih Alasan</span><br>
                                                        <textarea id="txtdesc<?php echo $i ?>" name="txtdesc"
                                                            class="form-control"
                                                            rows="2"><?= $data['keterangan']; ?></textarea>
                                                        <br>

                                                        <button style="font-size: 10pt;"
                                                            class="buttonsa<?php echo $i ?> btn-sm btn-info"
                                                            onclick="tet('a'+<?php echo $i ?>)"
                                                            value="Habis">Habis</button>
                                                        <button style="font-size: 10pt;"
                                                            class="buttonsb<?php echo $i ?> btn-sm btn-info"
                                                            onclick="tet('b'+ <?php echo $i ?>)" value="Hilang">
                                                            Hilang</button>
                                                        <button style="font-size: 10pt;"
                                                            class="buttonsc<?php echo $i ?> btn-sm btn-info"
                                                            onclick="tet('c'+<?php echo $i ?>)" value="Persediaan">Stok

                                                        </button>
                                                        <button style="font-size: 10pt;"
                                                            class="buttonsd<?php echo $i ?> btn-sm btn-info"
                                                            onclick="tet('d'+<?php echo $i ?>)" value="Rusak">
                                                            Rusak</button>
                                                    </div>
                                                </div>

                                                <?php if ($data['is_approval'] == 1) {
                                                        echo '<p style="color:red; font-size:8pt;"> Barang perlu Lampiran <p>';
                                                    }
                                                    ?>
                                            </div>
                                        </div>
                                        <?php $i++ ?>
                                        <?php endforeach; ?>

                                    </div>
                                    <div class="col-sm-12">
                                        <br>
                                        <div class="card text-white rounded-3" style="line-height: 30px;">
                                            <div class="card-body" style="color: black;">
                                                <p class="mb-2" style="text-align: center; font-size: 10pt;">
                                                    Daftar Permintaan Barang
                                                </p>
                                                <form class="mt-4">
                                                    <table class="table table-bordered table-sm rounded">
                                                        <thead class="alert-warning">
                                                            <tr>
                                                                <th scope="col"
                                                                    style="text-align: center; font-size: 10pt;">Nama
                                                                    Barang</th>
                                                                <th scope="col"
                                                                    style="text-align: center; font-size: 10pt;">Total
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="show_data">
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card" style="height: 560px; line-height: 30px;">
                                            <div class="card-body"
                                                style="box-shadow: 0 5px 10px rgba(0,0,0,0.10), 0 6px 6px rgba(0,0,0,0.23);">
                                                <p class="mb-2" style="text-align: center; font-size: 10pt;">Proses
                                                    Permintaan Barang
                                                </p>
                                                <hr>
                                                <form class="mt-4">
                                                    <p class="mb-2" style="font-size: 10pt;">Isikan Nomor Surat</p>
                                                    <div class="form-outline form-white mb-4">
                                                        <input type="text" id="nosurat"
                                                            class="form-control form-control-lg"
                                                            style="font-size: 10pt;" placeholder="Nomor Surat" />
                                                        <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                                    </div>
                                                    <p class="mb-2" style="font-size: 10pt;">Isikan Tanggal Surat</p>
                                                    <div class="form-outline form-white mb-4">
                                                        <input type="date" id="tglsurat"
                                                            class="form-control form-control-lg"
                                                            style="font-size: 10pt;" placeholder="Nomor Surat" />
                                                        <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                                    </div>

                                                    <p class="mb-2" style="font-size: 10pt;">Masukan Dokumen</p>
                                                    <div class="image-upload">

                                                        <input id="nodin_lampiran" type="file"
                                                            style="font-size: 10pt;" />
                                                    </div>

                                                </form>
                                                <br>
                                                <a href="<?php echo base_url("/user_lampiran") ?>"
                                                    style="font-size: 10pt;">Unduh Draf
                                                    Lampiran</a>

                                                <hr class="my-4">

                                                <button type="button" onclick="submit_cart()"
                                                    class="btn btn-info btn-block btn-lg" style="border-radius: 15px;">

                                                    <!-- <span>$4818.00</span> -->
                                                    <span style="text-align: center;">Kirim</span>

                                                </button>

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
                html += '<tr>' +
                    '<td style="text-align:left; font-size:8pt;">' + data[i].name + '</td>' +
                    '<td style="text-align:center; font-size:8pt;">' + data[i].quantity + '</td>' +
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
    var nodin = $('input[type=file]')[0].files[0];

    var data = new FormData();
    data.append("nosurat", $('#nosurat').val());
    data.append("tglsurat", $('#tglsurat').val());
    data.append('nodin_lampiran', $('input[type=file]')[0].files[0]);

    // console.log(no);
    // console.log(tgl);
    // console.log(files);
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('sub_cart') ?>",
        dataType: "JSON",
        data: data,
        processData: false,
        contentType: false,
        success: function(data) {
            // console.log(data);
            if (data.errorFile) {
                $('#mErrorfile').modal('show');
            }
            if (data.error) {
                // $('#mErrorValidasiForm').modal('show');
                $('#mErrorValidasiForm').modal('show');
                // $('#mErrorValidasiForm').modal('show');
                var dataPesan = data.pesan;
                // let span = document.getElementById("myspan");

                document.getElementById("errSpan").textContent = dataPesan
            }
            if (data.success) {
                // let result = '';
                // const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                // const charactersLength = characters.length;
                // let counter = 0;
                // while (counter < 15) {
                //     result += characters.charAt(Math.floor(Math.random() * charactersLength));
                //     counter += 1;
                // }

                // var str = '<?php echo base_url('transactions-user/') ?> ' + result;
                // var url = str.replace(/\s/g, '');

                // console.log(url);
                window.location.href = '<?php echo base_url('transactions-user') ?>';
            }

        },
        error: function(data, jqXHR, textStatus, errorThrown) {
            alert('Error adding / update data');
            console.log(textStatus);
        },
    });

    return false;
}
</script>


</body>

</html>