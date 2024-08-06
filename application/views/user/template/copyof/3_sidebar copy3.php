<div class="container">
    <div class="row">
        <!-- <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <div class="card-body">
                    <div class="scrollable">
                        <ul>
                            <?php foreach ($category as $data) : ?>
                                <li class="list-group-item"><a style="color: black;" href="<?php echo base_url('kategori/') . $data['category_id'] . '/0' ?> "><?php echo $data['name_category'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-filter">
                    <div class="top-filter-head">Merk Filters</div>
                    <div class="card-body">
                        <div class="scrollable">
                            <ul>
                                <?php foreach ($merk as $data) : ?>
                                    <li class="list-group-item"><a style="color: black;" href="<?php echo base_url('merk/') . $data['merk_id'] . '/0' ?> "><?php echo $data['name_merk'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-xl-12 col-lg-12 col-md-5">
            <section class="features-area section_gap" style="margin-top: -100px;">
                <div class="container">
                    <div class="row features-inner">
                        <?php foreach ($category as $data) : ?>
                            <!-- single features -->
                            <div class="col-lg-2 col-4">
                                <a href="<?php echo base_url('kategoriSet/') . $data['category_id'] ?>">
                                    <div class="single-features">
                                        <div class="f-icon">
                                            <img src="<?php echo base_url($data['desc']) ?>" style="width: 100px;" alt="">
                                        </div>
                                        <h6><?php echo $data['name_category'] ?></h6>
                                        <!-- <p>Free Shipping on all order</p> -->
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>

        <script>
            function clickNavbar() {
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>unset_cari',
                    dataType: "JSON",
                    data: {
                        search: search,
                    },
                    success: function(data) {},
                    error: function(data, jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                        console.log(textStatus);
                    },
                });

                return false;
            }
        </script>