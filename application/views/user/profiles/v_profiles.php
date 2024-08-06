<section class="cart_area" style="background-color: #eee; margin-top: -8%; ">

    <div class="container">

        <div class="cart_inner">
            <!-- <h2 style="text-align: center;">Daftar Barang</h2>
            <br> -->

<a href="<?php base_url() ?>/CTR_Auth/logout" class="float">
    <i class="fa fa-power-off my-float"></i>
</a>

            <section class="h-100 h-custom" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="card" style="padding: 50px;">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <br>
                                                <div class="card text-white rounded-3" style=" border-radius: 30px;">
                                                    <div class="card-body" style="color: black;">
                                                        <br>
                                                        <img src="<?php echo base_url('assets/img/logoatk2.jpg') ?>" style="width: 100%" class="img-fluid">

                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <br>
                                                <div class="card text-white rounded-3" style="height: 400px; line-height: 30px; border-radius: 50px; color: black;">
                                                    <div class="card-body" style="color: black;">
                                                        <h3 class="mb-2" style="text-align: center;">INFORMASI AKUN
                                                        </h3>
                                                        <hr><br>
                                                        <div class="row" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                                            <div class="col-lg-3">
                                                                <h4>Nama</h4></br>
                                                                <h4>NIP</h4></br>
                                                                <h4>Direktorat</h4></br>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <h4> : <?php echo $data[0]->name ?></h4></br>
                                                                <h4> : <?php echo $data[0]->nip ?></h4></br>
                                                                <h4> : <?php echo $data[0]->department_name ?></h4>
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div style="text-align: center">
                                                            
                                                    </div>
                                                </div>
                                                <div class="row"
                                                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center ;">
                                                            <div class="col-lg-12">
                                                                <h4>Helpdesk :
                                                                    <a href="https://api.whatsapp.com/send?phone=+6281212195284&text=System_ATK."
                                                                        target="_blank">
                                                                        <i class="fa fa-whatsapp"
                                                                            style="font-size: 20px;"> Click Here</i>
                                                                    </a>
                                                                </h4>
                                                                <br><br>
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

<!-- <script src="<?php echo base_url() ?>/assets/js/jquery.dataTables.min.js"></script> -->
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<!-- <script src="<?php echo base_url('assets/js/gmaps.min.js') ?>"></script> -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script>
    tampilSummary();
    $('#historiData').dataTable({
        // "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false
    });

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