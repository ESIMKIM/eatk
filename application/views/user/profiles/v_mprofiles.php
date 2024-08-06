<section class="cart_area" style="margin-top: -8%; margin-right: 5%;">

    <div class="container">
        <!-- <div class="cart_inner"> -->
        <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <div class="">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body ">

                                <div class="row">
                                    <div class="col-3">

                                        <img src="<?php echo base_url('assets/img/logoatk2.jpg') ?>" style="width: 150%; text-align: center; margin-top: 15%; margin-left: 35%;">

                                    </div>
                                    <div class="col-9">
                                        <div class="container">
                                            <!-- <p class="mb-2">NAMA</p> -->
                                            <input type="text" class="form-control form-control-sm" style="border: none; background-color: white;" disabled size="17" value="<?php echo $data[0]->name ?>" />

                                            <!-- <p class="mb-2">NIP</p> -->
                                            <input type="text" class="form-control form-control-sm" style="border: none; background-color: white;" disabled size="17" value="<?php echo $data[0]->nip ?>" />

                                            <!-- <p class="mb-2">JABATAN </p> -->
                                            <!-- <input type="text" class="form-control form-control-sm" size="17" value="<?php echo $data[0]->department_name ?>" /> -->
                                        </div>
                                        <!-- <div>
                                            <br>
                                            <h4 style="font-size: 14pt;"><?php echo $data[0]->name ?></h4>
                                            <hr>
                                            <h4 style="font-size: 14pt;"><?php echo $data[0]->nip ?></h4><br>
                                        </div> -->
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-12">
                                        <div class="container">
                                            <h4 style="font-size: 10pt;">
                                                <?php echo $data[0]->department_name ?></h4>
                                        </div>
                                    </div>


                                    <!-- <div class="col-sm-12">
                                        <div class="card text-white rounded-3"
                                            style="height: 400px; line-height: 30px; border-radius: 50px; color: black;">
                                            <div class="card-body" style="color: black;">
                                                <h3 class="mb-2" style="text-align: center;">INFORMASI AKUN
                                                </h3>
                                                <hr><br>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <img src="<?php echo base_url('assets/img/logoatk2.jpg') ?>"
                                                            style="width: 10%" class="img-fluid">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h4 style="font-size: 6pt;"><?php echo $data[0]->name ?></h4>
                                                        <h4 style="font-size: 6pt;"><?php echo $data[0]->nip ?></h4>
                                                        <h4 style="font-size: 6pt;">
                                                            <?php echo $data[0]->department_name ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- </div> -->
        <br>
        <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php base_url() ?>/CTR_Auth/logout" class="btn btn-danger" style="text-align: center; width: 100%;">
                                        Log Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                        '<td style="text-align:left; font-size:8pt;">' + data[i].name + ' Item</td>' +
                        '<td style="text-align:center; font-size:8pt;">' + data[i].quantity + ' Item</td>' +
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
                }
                if (data.success) {
                    // let result = '';
                    // const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                    // const charactersLength = characters.length;
                    // let counter = 0;
                    // while (counter <script 15) {
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