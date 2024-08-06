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

<div class="col-xl-12 col-lg-12 col-md-12">
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
        <div class="sorting mr-auto">
            <select id="showItem" onchange="showItemqty()">
                <option value="16">Show 16</option>
                <option value="28">Show 28</option>
                <option value="40">Show 40</option>
            </select>
        </div>

        <?php if ($this->input->post('cari') != null) : ?>
            <div class="sorting">
                <h5 style="color: white;">Hasil Pencarian :</h5>
                <input type="text" value="<?php echo $this->input->post('cari'); ?>" disabled>
            </div>
        <?php endif; ?>

        <!-- <div class="pagination"> -->
        <nav aria-label="Page navigation example">
            <?php echo $pagination; ?>
        </nav>

    </div>
    <!-- End Filter Bar -->
    <!-- Start Best Seller -->
    <section class="lattest-product-area pb-40 category-list">
        <div class="row">
            <?php if (!empty($result)) : ?>
                <?php $i = 1;
                foreach ($result as $data) : ?>
                    <?php
                    // $content = substr($data['name'], 0, 17) . " ...";
                    $content = $data['name'];
                    $str = $data['name'];
                    $length = strlen($str);

                    $varName = '';
                    if ($data['qty'] >= 10) {
                        $varName = '<span style="color:green;">Stock Tersedia<span>';
                    } else {
                        $varName = '<span style="color:red;">Stock tidak Tersedia<span>';
                    }
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <!-- <a href="<?php echo base_url('products_detail/') . $data['products_id'] ?>">  -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <img class="img-fluid" src="<?= $data['images']; ?>" style="width: 300px;
								height: 200px;
								object-fit: fill;" alt="">
                                    <div class="product-details">
                                        <input id="prod_id_<?php echo $i ?>" name="prod_id" value="<?= $data['products_id']; ?>" hidden>
                                        <?php if ($length <= 21) : ?>
                                            <h6><?= $content ?></h6>
                                            <!-- <h6><?= $length ?></h6> -->
                                            <br>
                                        <?php else : ?>
                                            <h6><?= $content ?></h6>
                                            <!-- <h6><?= $length ?></h6> -->
                                        <?php endif; ?>

                                        <div class="price">
                                            <h6><?= $varName ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-12 col-md-12">
                                    <div class="product-details">
                                        <div class="prd-bottom">
                                            <a href="#/" onclick="tambahitem(<?php echo $i ?>)" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">Tambahkan</p>
                                            </a>
                                            <a href="<?php echo base_url('products_detail/') . $data['products_id'] ?>" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">Lihat Detail</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                </br>
                <div class="col-lg-12 col-md-6" style="text-align: center;">
                    <h6 style="text-align: center; padding-top: 10%; padding-bottom:10% ;">Produk Tidak Ditemukan</h6>
                </div>
            <?php endif; ?>



        </div>
    </section>
</div>
</div>
</div>


<!-- start footer Area -->
<?php $this->load->view('user/template/4_footer'); ?>
<!-- End footer Area -->


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
    function showItemqty() {
        var data = new FormData();

        data.append("showItem", $('#showItem').val());

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>set_showItem',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                location.reload();
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
            },
        });
        return false;
    }

    function showItemqty2() {
        var data = new FormData();

        data.append("showItem", $('#showItem2').val());

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>set_showItem',
            dataType: "JSON",
            data: data,
            processData: false,
            contentType: false,
            success: function(data) {
                location.reload();
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
            },
        });
        return false;
    }

    function tambahitem(id) {
        // preventDefault();
        var string = '#prod_id_' + id;
        var prod_id = $(string).val();
        var qty = 1;

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>/add_to_cart',
            dataType: "JSON",
            data: {
                prod_id: prod_id,
                qty: qty
            },
            success: function(data) {
                console.log(data);
                if (data.error) {

                }
                if (data.success) {

                    $('#mSuksesSimpan').modal('show');
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