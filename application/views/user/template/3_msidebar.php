<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1 style="padding-right: 150px; margin-top: -15px; color: lightslategray;">Alat Tulis Kantor
                </h1>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: -80px;">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <section class="features-area section_gap" style="margin-top: 20px; margin-left: 1%; margin-right: 3%;">
                <!-- <div class="container"> -->
                <div class="row features-inner">
                    <?php foreach ($category as $data) : ?>
                        <!-- single features -->
                        <div class="col-4">
                            <a class="urlmove" href="#" data-id="<?php echo base_url('kategoriSet/') . $data['category_id'] ?>">
                                <div class="single-features">
                                    <div class="f-icon">
                                        <img src="<?php echo base_url($data['desc']) ?>" style="width: 40px;" alt="">
                                    </div>
                                    <h6><?php echo $data['name_category'] ?></h6>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- </div> -->
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
                    error: function(data, jqXHR, textStatus, errorThrown) {
                        alert('Error adding / update data');
                        console.log(textStatus);
                    },
                });

                return false;

            })
        </script>