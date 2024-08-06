<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <section class="features-area section_gap" style="margin-top: 20px; margin-left: 1%; margin-right: 3%;">
                <!-- <div class="container"> -->
                <div class="row features-inner">
                    <?php foreach ($category as $data) : ?>
                        <!-- single features -->
                        <div class="col-4">
                            <a href="<?php echo base_url('kategori/') . $data['category_id'] . '/0' ?>">
                                <div class="single-features">
                                    <div class="f-icon">
                                        <img src="<?php echo base_url($data['desc']) ?>" style="width: 30px;" alt="">
                                    </div>
                                    <h6><?php echo $data['name_category'] ?></h6>
                                    <!-- <p>Free Shipping on all order</p> -->
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- </div> -->
            </section>
        </div>