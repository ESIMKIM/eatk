<div class="sidebar-filter mt-50">
    <div class="top-filter-head">Product Filters</div>
    <div class="common-filter">
        <div class="head">Brands</div>
        <form action="#">
            <ul>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label
                        for="apple">Faster<span>(29)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label
                        for="asus">Joyko<span>(29)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label
                        for="gionee">Stabilo<span>(19)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label
                        for="micromax">Kenko<span>(19)</span></label></li>
                <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label
                        for="samsung">Sandisk<span>(19)</span></label></li>
            </ul>
        </form>
    </div>
    <!-- <div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div> -->
</div>
</div>
<div class="col-xl-9 col-lg-8 col-md-7">
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
        <!-- <div class="sorting">
            <select>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
            </select>
        </div> -->
        <div class="sorting mr-auto">
            <select>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
            </select>
        </div>
        <div class="pagination">
            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
            <a href="#">6</a>
            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Filter Bar -->
    <!-- Start Best Seller -->
    <section class="lattest-product-area pb-40 category-list">
        <table border='1' width='100%' style='border-collapse: collapse;'>
            <tr>
                <th>no</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            <?php
			$sno = $row + 1;
			foreach ($result as $data) {

				$content = substr($data['desc'], 0, 180) . " ...";
				echo "<tr>";
				echo "<td>" . $sno . "</td>";
				echo "<td><a href='" . $data['desc'] . "' target='_blank'>" . $data['name'] . "</a></td>";
				echo "<td>" . $content . "</td>";
				echo "</tr>";
				$sno++;
			}
			if (count($result) == 0) {
				echo "<tr>";
				echo "<td colspan='3'>No record found.</td>";
				echo "</tr>";
			}
			?>
        </table>
        <div class="row">
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <a href="single-product.html"> <img class="img-fluid" src="img/product/product-1.jpg" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <!-- <div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div> -->
                        </div>
                    </a>
                </div>
            </div>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <a href="single-product.html"> <img class="img-fluid" src="img/product/product-2.jpg" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <!-- <div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div> -->
                        </div>
                    </a>
                </div>
            </div>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <a href="single-product.html"> <img class="img-fluid" src="img/product/product-3.jpg" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <!-- <div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div> -->
                        </div>
                    </a>
                </div>
            </div>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <a href="single-product.html"> <img class="img-fluid" src="img/product/product-4.jpg" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <!-- <div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div> -->
                        </div>
                    </a>
                </div>
            </div>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <a href="single-product.html"> <img class="img-fluid" src="img/product/product-5.jpg" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <!-- <div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div> -->
                        </div>
                    </a>
                </div>
            </div>
            <!-- single product -->
            <div class="col-lg-4 col-md-6">
                <div class="single-product">
                    <a href="single-product.html"> <img class="img-fluid" src="img/product/product-6.jpg" style="width: 400px;
								height: 300px;
								object-fit: fill;" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <!-- <div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div> -->
                        </div>
                </div>
                </a>
            </div>
        </div>
    </section>
    <!-- End Best Seller -->
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center">
        <div class="sorting mr-auto">
            <select>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
            </select>
        </div>
        <div class="pagination">
            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
            <a href="#">6</a>
            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Filter Bar -->
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
<script src="<?php echo base_url('assets/js/gmaps.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>