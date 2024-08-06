<section class="cart_area" style="margin-top: -8%; ">

    <div id="mErrorSubmit" class="modal fade">
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
                    <p class="text-center" style="color: red;"><span id="erxSpan"></span>
                </div>
            </div>
        </div>
    </div>

    <div id="mttd_terima" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box" style="background-color: red;">
                        <i class="fa fa-exclamation" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Informasi</h4>
                    </br>
                    <p class="text-center" style="color: black;">Anda memiliki lebih dari satu Transaksi yang belum
                        diselesaikan <br><br> harap selesaikan transaksi lainnya dengan mengklik
                        tombol <span style="color: red;">"Terima
                            Barang"</span> di menu
                        transaksi untuk dapat melakukan transaksi lainnya. <br> Terima Kasih</p>
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <a href="<?php echo base_url('transactions-user') ?>" class="btn btn-primary"><span
                                style="color:black">Selesaikan</span></a>
                    </div>
                    <!-- <a href="<?php echo base_url('transactions-user') ?>" class="btn btn-primary"
                    style="background-color: cyan; text-align: center;"><span style="color:black">Get It
                        Now</span> </a> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

    <div id="minfobarang" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fa fa-check" aria-hidden="true"></i>

                    </div>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" style="text-align: center;">Sukses !!</h4>
                    </br>
                    <p class="text-center" style="color: black; font-size: large;">Permintaan sedang diproses, silahkan
                        langsung ke gudang ATK untuk melakukan pengambilan barang<br>
                        <hr>
                    </p>
                    <p class="text-center" style="color: black; font-size: large;">Terima Kasih
                    </p>
                </div>
                <div class="modal-footer">
                    <div class="col text-center">
                        <!-- <a href="#" class="btn btn-primary"><span style="color:black">Close</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <a href="<?php base_url() ?>/CTR_Auth/logout" class="float">
        <i class="fa fa-power-off my-float"></i>
    </a>

    <div class="container">
        <div class="cart_inner" style="height: 1300px;">
            <!-- <h2 style="text-align: center;">Daftar Barang</h2>
            <br> -->

            <section class="h-100 h-custom"
                style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                <div class="container py-5">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <!-- <h5 class="mb-3"><a href="#!" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Kembali
                                                </a></h5>
                                            <hr> -->

                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div>
                                                    <p class="mb-1">Daftar Permintaan Barang</p>
                                                    <p class="mb-0">Anda memiliki
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
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between ">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <input hidden type="text" id="idi_<?php echo $i ?>"
                                                                name="idi" class="form-control"
                                                                value="<?= $data['cart_id']; ?>" />

                                                            <div>
                                                                <img src="<?= $data['images']; ?>"
                                                                    class="img-fluid rounded-3" alt="Shopping item"
                                                                    style="width: 65px;">
                                                            </div>
                                                            <div class="ms-3">
                                                                <h5 style="margin-left: 5%;"><?= $data['name']; ?>
                                                                    <?php if ($data['is_approval'] == 1) {
                                                                            echo '<span style="color:red">*</span>';
                                                                        } ?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div style="width: 70px;">
                                                                <h5 class="mb-0">Quantity</h5> <br>
                                                                <input type="number" inputmode="numeric"
                                                                    oninput="this.value = this.value.replace(/\D+/g, '')"
                                                                    min="1" id="qty_<?php echo $i ?>" name="qty"
                                                                    class="form-control"
                                                                    value="<?= $data['quantity']; ?>"
                                                                    onchange="updateQty(<?php echo $i ?>)" />
                                                            </div>
                                                            <div style=" width: 10px;">
                                                            </div>
                                                            <!-- <div style="width: 100px;">
                                                                <h5 class="mb-0">Alasan</h5> <br>
                                                                <select id="reason_<?php echo $i ?>"
                                                                    onchange="updateReason(<?php echo $i ?>)">
                                                                    <?php foreach ($reason as $as) { ?>
                                                                    <?php if ($data['reason_id'] == $as['reason_id']) : ?>
                                                                    <option selected
                                                                        value="<?php echo $data['reason_id'] ?>">
                                                                        <?php echo $data['title'] ?> </option>
                                                                    <?php else : ?>
                                                                    <option value="<?php echo $as['reason_id'] ?>">
                                                                        <?php echo $as['title'] ?> </option>
                                                                    <?php endif; ?>
                                                                    <?php } ?>

                                                                </select>
                                                            </div> -->
                                                            <div style="width: 100px;">
                                                                <br><br>
                                                                <a href="#" id="btn_hapus_cart"
                                                                    onclick="hapus_item_onCart(<?php echo $i ?>)"
                                                                    class="btn"><span class="lnr lnr-trash"
                                                                        style="color: red;"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <br>
                                                        <span>Pilih Alasan</span><br>
                                                        <textarea id="txtdesc<?php echo $i ?>" disabled name="txtdesc"
                                                            rows="2" cols="60"><?= $data['keterangan']; ?></textarea>
                                                        <br>

                                                        <button class="buttonsa<?php echo $i ?>"
                                                            onclick="tet('a'+<?php echo $i ?>)"
                                                            value="Habis">Habis</button>
                                                        <button class="buttonsb<?php echo $i ?>"
                                                            onclick="tet('b'+ <?php echo $i ?>)" value="Hilang">
                                                            Hilang</button>
                                                        <button class="buttonsc<?php echo $i ?>"
                                                            onclick="tet('c'+<?php echo $i ?>)" value="Stok">Stok
                                                        </button>
                                                        <button class="buttonsd<?php echo $i ?>"
                                                            onclick="tet('d'+<?php echo $i ?>)" value="Rusak">
                                                            Rusak</button>
                                                    </div>

                                                    <?php if ($data['is_approval'] == 1) {
                                                            echo '<p style="color:red"> Barang perlu Lampiran <p>';
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <?php $i++ ?>
                                            <?php endforeach; ?>

                                        </div>
                                        <div class="col-lg-5">
                                            <br>
                                            <div class="card text-white rounded-3"
                                                style="line-height: 30px; border-radius: 50px;">
                                                <div class="card-body" style="color: black;">
                                                    <br>
                                                    <p class="mb-2" style="text-align: center;">Daftar Permintaan Barang
                                                    </p>
                                                    <hr>
                                                    <form class="mt-4">
                                                        <table class="table table-bordered table-sm rounded">
                                                            <thead class="alert-info">
                                                                <tr>
                                                                    <th scope="col" style="text-align: center;">Nama
                                                                        Barang</th>
                                                                    <th scope="col" style="text-align: center;">Total
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

                                            <div class="card text-white rounded-3"
                                                style="height: 680px; line-height: 30px; border-radius: 50px; color: black;">
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
                                                        <p style="color:red" class="mb-2">(* Unggah lampiran khusus
                                                            barang yang memerlukan persetujuan)</p>
                                                        <p class="mb-2">Masukan Dokumen</p>
                                                        <div class="image-upload">

                                                            <input id="nodin_lampiran" type="file" />
                                                        </div>

                                                    </form>
                                                    <br>
                                                    <a
                                                        href="<?php echo base_url("/files/files_unduhan/draft_surat.docx") ?>">Unduh
                                                        draft
                                                        lampiran barang</a><br>
                                                    <a
                                                        href="<?php echo base_url("/files/files_unduhan/contoh_lampiran_materai.pdf") ?>">Unduh
                                                        contoh
                                                        lampiran khusus materai</a>

                                                    <hr class="my-4">

                                                    <?php if ($ttd_belum > 1) : ?>
                                                    <button type="button" class="btn btn-secondary btn-block btn-lg"
                                                        style="border-radius: 15px;" data-toggle="modal"
                                                        data-target="#mttd_terima">
                                                        <span style="text-align: center;">Kirim</span>
                                                    </button>
                                                    <?php else : ?>
                                                    <button type="button" onclick="submit_cart()"
                                                        class="btn btn-info btn-block btn-lg"
                                                        style="border-radius: 15px;">
                                                        <span style="text-align: center;">Kirim</span>
                                                    </button>
                                                    <?php endif; ?>



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
// cek();

function cek() {
    var data = <?php echo $ttd_belum ?>;
    console.log(data);
    if (data > 0) {
        $('#mttd_terima').modal('show');
    }

}

tampilSummary();

function tet(ids) {
    const firstChar = ids.charAt(0);
    let lastChar = ids.substring(1);
    // console.log(lastChar);
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

    console.log(lastChar);
    updateDesc(lastChar);
    // console.log(idx);
    // console.log(idbuttons);

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
                $('#mErrorValidasiForm').modal('show');
                // $('#mErrorValidasiForm').modal('show');

                document.getElementById("errSpan").textContent = data.pesan;
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
                $('#minfobarang').modal('show');
                setTimeout(function() {
                    $('#minfobarang').modal('hide');
                }, 5000);

                setTimeout(function() {
                    window.location.href = '<?php echo base_url('transactions-user') ?>';
                }, 6000);
                // window.location.href = '<?php echo base_url('transactions-user') ?>';
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