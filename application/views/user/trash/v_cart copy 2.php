<section class="cart_area" style="background-color: #eee; margin-top: -10%; ">

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

                                        <div class="col-lg-7">
                                            <h5 class="mb-3"><a href="#!" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Kembali
                                                </a></h5>
                                            <hr>

                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div>
                                                    <p class="mb-1">Daftar Permintaan Barang</p>
                                                    <p class="mb-0">Anda memiliki <span><?php echo "5" ?></span> Barang
                                                        di dalam Daftar</p>
                                                </div>
                                            </div>
                                            <?php $i = 1; ?>
                                            <?php foreach ($cart as $data) : ?>
                                            <?php $content = substr($data['desc'], 0, 50) . " ...";
                                                ?>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div>
                                                                <img src="<?= $data['images']; ?>"
                                                                    class="img-fluid rounded-3" alt="Shopping item"
                                                                    style="width: 65px;">
                                                            </div>
                                                            <div class="ms-3">
                                                                <h5 style="margin-left: 5%;"><?= $data['name']; ?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <div style="width: 50px;">
                                                                <h5 class="mb-0">Qty</h5> <br>
                                                                <input type="text" id="qty" name="qty"
                                                                    class="form-control" value="1" />
                                                            </div>
                                                            <div style="width: 10px;"></div>
                                                            <div style="width: 100px;">
                                                                <h5 class="mb-0">Alasan</h5> <br>
                                                                <select id="reason">
                                                                    <option value="1">Hilang</option>
                                                                    <option value="2">Rusak</option>
                                                                    <option value="3">Habis</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <br>
                                                        <span>Tulisakan Alasan</span><br>
                                                        <textarea id="txt-area<?php echo $i ?>" name="txt-area" rows="2"
                                                            cols="50"></textarea>
                                                        <br>

                                                        <button class="buttons<?php echo $i ?>"
                                                            onclick="getIdTxtarea(<?php echo $i ?>)">Barang Sudah
                                                            Habis</button>
                                                        <button class="buttons<?php echo $i ?>"
                                                            value="<?php echo $i ?>">Sebagai Persediaan Stok</button>
                                                        <button class="buttons<?php echo $i ?>"
                                                            value="<?php echo $i ?>">Barang sudah hilang</button>
                                                        <button class="buttons<?php echo $i ?>"
                                                            value="<?php echo $i ?>">Barang telah rusak</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php echo $i++ ?>
                                            <?php endforeach; ?>



                                        </div>
                                        <div class="col-lg-5">
                                            <div class="card bg-secondary text-white rounded-3">
                                                <d iv class="card-body">
                                                    <form class="mt-4">
                                                        <div class="form-outline form-white mb-4">
                                                            <input type="text" id="typeName"
                                                                class="form-control form-control-lg" siez="17"
                                                                placeholder="Nomor Surat" />
                                                            <!-- <label class="form-label" for="typeName">Nomor Surat</label> -->
                                                        </div>
                                                    </form>

                                                    <hr class="my-4">

                                                    <div class="d-flex justify-content-between">
                                                        <p class="mb-2">Jenis Barang</p>
                                                        <p class="mb-2">5</p>
                                                    </div>

                                                    <div class="d-flex justify-content-between mb-4">
                                                        <p class="mb-2">Total Barang</p>
                                                        <p class="mb-2">100</p>
                                                    </div>

                                                    <button type="button" class="btn btn-info btn-block btn-lg">
                                                        <div class="d-flex justify-content-between">
                                                            <!-- <span>$4818.00</span> -->
                                                            <span>Proses Permintaan<i
                                                                    class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                        </div>
                                                    </button>

                                                </d>
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
$(document).ready(function() {
    data = ".buttons" + <?php echo $i ?>;
    const id = "#txt-area" + <?php echo $i ?>;
    $(data).click(function() {
        var cntrl = $(this).html();
        $(id).val(function(_, val) {
            return val + cntrl + ", "
        });
    });
});


function getIdTxtarea(ids) {
    // alert("assus");
    data = ".buttons" + ids;
    const idx = "#txt-area" + ids;
    $(data).click(function() {
        var cntrl = $(this).html();
        $(idx).val(function(_, val) {
            return val + cntrl + ", "
        });
    });
}

// function f1(objButton) {
//     data = objButton.value;

//     let newStr = data.substring(1);
//     const firstChar = data.charAt(0);

//     id = "#txt-area-" + firstChar
//     // var cntrl = $(this).html();
//     $(id).val(function(_, val) {
//         return val + newStr + ", "
//     });
//     alert(data)
// }
</script>

</body>

</html>