<div id="mSuksesSimpan" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="fa fa-check" aria-hidden="true"></i>

                </div>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" style="text-align: center;">Success!</h4>
                </br>
                <p class="text-center">Item berhasil ditambahkan</p>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-9 col-lg-8 col-md-7">
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="single-product">
                        <img class="img-fluid" src="<?= $dataProducts[0]['images']; ?>" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3><?= $dataProducts[0]['name']; ?></h3>
                        <?php
                        $varName = '';
                        if ($dataProducts[0]['qty'] >= 1) {
                            $varName = 'Stock Tersedia';
                        } else {
                            $varName = 'Stock tidak Tersedia';
                        }
                        ?>
                        <ul class="list">
                            <li><span>Merk</span> : <?= $dataProducts[0]['name_merk']; ?></li>
                            <li><span>Category</span> : <?= $dataProducts[0]['name_category']; ?></li>
                            <li><span>Ketersediaan</span> : <?= $varName; ?></li>
                            <li><span>Satuan</span> : <?= $dataProducts[0]['name_satuan']; ?></li>

                        </ul>
                        <!-- <p><?= $dataProducts[0]['desc']; ?></p> -->
                        <br>
                        <div class="product_count">
                            <input hidden type="text" name="prod_id" id="prod_id"
                                value="<?= $dataProducts[0]['products_id']; ?>" />
                            <label for="qty">Quantity:</label>
                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Quantity:"
                                class="input-text qty">
                            <!-- <button
                                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button
                                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp&amp sst > 0 ) result.value--;return false;"
                                class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <button type="button" class="primary-btn" id="add_cart">Tambah ke Cart</button>
                            <!-- <a class="primary-btn" href="">Add to Cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!--================End Single Product Area =================-->
</div>
</div>
</div>


<!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->


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
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
</script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<!-- <script src="<?php echo base_url('assets/js/gmaps.min.js') ?>"></script> -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
<script>
$(document).ready(function() {
    //Simpan Barang
    $('#add_cart').on('click', function() {
        var data = new FormData();
        data.append("qty", $('#qty').val());
        data.append("prod_id", $('#prod_id').val());

        // console.log($('input[type=file]')[1].files[0]);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/add_to_cart',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.error) {
                    // $('#mTambahPerangkat').modal('hide');
                    // $('#mGagalSimpan').modal('show');
                    console.log(data);
                    let isError = data.error;
                    let pesanError = data.pesanError;

                    // document.getElementById("isError").innerHTML = isError;
                    document.getElementById("pesanError").innerHTML = pesanError;

                    // console.log(pesanError);
                }
                if (data.success) {
                    console.log(data);
                    // $('#mTambahPerangkat').modal('hide');
                    // addRowHandlers();

                    // var oTable = $("#mydata").dataTable();
                    // oTable.fnDestroy();
                    // oTable.destroy();

                    // tampil_data_barang();
                    // $('#mydata').DataTable();
                    // tampil_data_barang();
                    // $('#mydata').DataTable();
                    // let pesanSukses = data.pesan;
                    // document.getElementById("pesanSukses").innerHTML = pesanSukses;

                    $('#mSuksesSimpan').modal('show');
                }
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
            },
        });
        return false;
    });




});
</script>
</body>

</html>