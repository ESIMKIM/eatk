<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-5">
            <section class="features-area section_gap" style="margin-top: -100px;">
                <div class="container">
                    <div class="row features-inner">
                        <?php foreach ($category as $data) : ?>
                        <!-- single features -->
                        <div class="col-lg-2 col-4">
                            <!-- <a data-toggle="modal" data-id="ISBN-001122" title="Add this item" class="open-AddBookDialog btn btn-primary" href="#addBookDialog">test</a> -->

                            <a class="urlmove" href="##"
                                data-id="<?php echo base_url('kategoriSet/') . $data['category_id'] ?>">
                                <div class="single-features">
                                    <div class="f-icon">
                                        <img src="<?php echo base_url($data['desc']) ?>" style="width: 100px;" alt="">
                                    </div>
                                    <h6><?php echo $data['name_category'] ?></h6>
                                </div>
                            </a>


                            <!-- <a onclick="clickNavbar()" href="<?php echo base_url('kategoriSet/') . $data['category_id'] ?>">
                                    <div class="single-features">
                                        <div class="f-icon">
                                            <img src="<?php echo base_url($data['desc']) ?>" style="width: 100px;" alt="">
                                        </div>
                                        <h6><?php echo $data['name_category'] ?></h6>
                                    </div>
                                </a> -->
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
        $(document).on("click", ".urlmove", function() {
            var dataUrl = $(this).data('id');

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>unset_cari',
                dataType: "JSON",
                data: {
                    search: dataUrl,
                },
                success: function(data) {
                    window.open(dataUrl, "_self");
                    // console.log(data);
                },
                // error: function(data, jqXHR, textStatus, errorThrown) {
                //     alert('Error adding / update data');
                //     console.log(textStatus);
                // },
            });

            return false;

        })
        </script>


        <script type="text/javascript">
        function clickNavbar() {
            search = 1;

            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>unset_cari',
                dataType: "JSON",
                data: {
                    search: search,
                },
                success: function(data) {
                    console.log(data);
                },
                // error: function(data, jqXHR, textStatus, errorThrown) {
                //     alert('Error adding / update data');
                //     console.log(textStatus);
                // },
            });

            return false;
        }
        </script>