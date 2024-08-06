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
<hr><br><br><br>



<div class="product_image_area" style="margin-top: -5%; ">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="single-product">
                    <img class="img-fluid" src="<?= $dataProducts[0]['images']; ?>" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1" style="margin-top: -8%;">
                <div class="s_product_text">
                    <h3><?= $dataProducts[0]['name']; ?></h3>
                    <?php
                    $varName = '';
                    $checker = '';
                    if ($dataProducts[0]['qty'] >= 10) {
                        $varName = '<span style="color:green;">Stock Tersedia<span>';
                    } else {
                        $varName = '<span style="color:red;">Stock tidak Tersedia<span>';
                        $checker = 'habis';
                    }
                    ?>
                    <!-- <h3>Faded SkyBlu Denim Jeans</h3> -->
                    <!-- <h2>$149.99</h2> -->
                    <ul class="list">
                        <li><span>Merk</span> : <?= $dataProducts[0]['name_merk']; ?></li>
                        <li><span>Category</span> : <?= $dataProducts[0]['name_category']; ?></li>
                        <li><span>Ketersediaan</span> : <?= $varName; ?></li>
                        <li><span>Satuan</span> : <?= $dataProducts[0]['name_satuan']; ?></li>

                    </ul>
                    <hr><br><br><br>
                    <!-- <p><?= $dataProducts[0]['descs']; ?></p> -->
                    <div class="product_count">
                        <input hidden type="text" name="prod_id" id="prod_id"
                            value="<?= $dataProducts[0]['products_id']; ?>" />

                        <label for="qty">Quantity:</label>
                        <input type="text" name="qty" id="qty_id" maxlength="12" value="1" title="Quantity:"
                            class="input-text qty">
                        <button
                            onclick="var result = document.getElementById('qty_id'); var qty_id = result.value; if( !isNaN( qty_id )) result.value++;return false;"
                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                        <!-- <button
                            onclick="var result = document.getElementById('qty_id'); var qty_id = result.value; if( !isNaN( qty_id ) &amp;&amp; qty_id > 0 ) result.value--;return false;"
                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                    </div>
                    <div class="card_area d-flex align-items-center">
                        <?php if ($checker !== "habis") : ?>
                        <button type="button" class="primary-btn" id="add_cart">Tambah ke Cart</button>
                        <?php else : ?>
                        <button disabled type="button" class="primary-btn" style="background-color: red;">Barang
                            Habis</button>
                        <?php endif; ?>
                        <!-- <button type="button" class="primary-btn" id="add_cart">Tambah ke Cart</button> -->
                        <!-- <a class="primary-btn" href="">Add to Cart</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!--================End Single Product Area =================-->
</div>
</div>
</div>


<!-- start footer Area -->
<?php $this->load->view('user/template/4_footer'); ?>
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
        data.append("qty", $('#qty_id').val());
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