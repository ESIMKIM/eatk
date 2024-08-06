<div class="col-xl-9 col-lg-8 col-md-7">
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
        <div class="sorting mr-auto">
            <select id="showItem" onchange="showItemqty()">
                <option value="16">Show 16</option>
                <option value="28">Show 28</option>
                <option value="40">Show 40</option>
            </select>
        </div>

        <!-- <div class="pagination"> -->
        <nav aria-label="Page navigation example">
            <?php echo $pagination; ?>
        </nav>

    </div>
    <!-- End Filter Bar -->
    <!-- Start Best Seller -->
    <section class="lattest-product-area pb-40 category-list">
        <div class="row">
            <?php foreach ($result as $data) : ?>
            <?php $content = substr($data['desc'], 0, 50) . " ..."; ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <a href="<?php echo base_url('products_detail/') . $data['products_id'] ?>"> <img class="img-fluid"
                            src="<?= $data['images']; ?>" style="width: 300px;
								height: 200px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6><?= $data['name']; ?></h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">Tambahkan</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Lihat Detail</p>
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- End Best Seller -->
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
        <div class="sorting mr-auto">
            <select id="showItem2" onchange="showItemqty2()">
                <option value="16">Show 16</option>
                <option value="28">Show 28</option>
                <option value="40">Show 40</option>
            </select>
        </div>
        <!-- <div class="pagination"> -->
        <nav aria-label="Page navigation example">
            <?php echo $pagination; ?>
        </nav>

    </div>
    <!-- End Filter Bar -->
</div>
</div>
</div>


<!-- start footer Area -->
<?php $this->load->view('user/template/4_footer'); ?>
<!-- End footer Area -->

<!-- Modal Quick Product View -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container relative">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="product-quick-view">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="quick-view-carousel">
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-view-content">
                            <div class="top">
                                <h3 class="head">Mill Oil 1000W Heater, White</h3>
                                <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span
                                        class="ml-10">$149.99</span></div>
                                <div class="category">Category: <span>Household</span></div>
                                <div class="available">Availibility: <span>In Stock</span></div>
                            </div>
                            <div class="middle">
                                <p class="content">Mill Oil is an innovative oil filled radiator with the most
                                    modern technology. If you are
                                    looking for something that can make your interior look awesome, and at the same
                                    time give you the pleasant
                                    warm feeling during the winter.</p>
                                <a href="#" class="view-full">View full Details <span
                                        class="lnr lnr-arrow-right"></span></a>
                            </div>
                            <div class="bottom">
                                <div class="color-picker d-flex align-items-center">Color:
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                </div>
                                <div class="quantity-container d-flex align-items-center mt-15">
                                    Quantity:
                                    <input type="text" class="quantity-amount ml-15" value="1" />
                                    <div class="arrow-btn d-inline-flex flex-column">
                                        <button class="increase arrow" type="button" title="Increase Quantity"><span
                                                class="lnr lnr-chevron-up"></span></button>
                                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span
                                                class="lnr lnr-chevron-down"></span></button>
                                    </div>

                                </div>
                                <div class="d-flex mt-20">
                                    <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
</script>



</body>

</html>