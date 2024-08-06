<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIMKIM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <div id="error_login" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle"></h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                    <!-- <span aria-hidden="true">×</span> -->
                    </button>
                </div>
                <div class="modal-body">
                    <h4 style="text-align: center;"><span id="pesanError"></span></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <section class="sign-in-page bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Sign in</h1>
                        <p>Enter your email address and password to access admin panel.</p>
                        <div class="mt-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control mb-0" name="nip" id="nip"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <!-- <a href="#" class="float-right">Forgot password?</a> -->
                                <input type="password" class="form-control mb-0" name="password" id="password"
                                    placeholder="Password">
                            </div>
                            <div class="d-inline-block w-100">
                                <!-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div> -->
                                <button id="btn_login" class="btn btn-primary float-right">Sign in</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white"
                        style="background: url(<?php echo base_url() ?>assets/images/login/2.jpg) no-repeat 0 0; background-size: cover;">
                        <a class="mb-5" href="#"><img style="height: 100px; width: 120px;"
                                src="<?php echo base_url() ?>assets/images/logo-white.png" class="img-fluid"
                                alt="logo"></a>

                        <div class="item">
                            <img style="padding-top: 5%; padding-bottom: 8%;"
                                src="<?php echo base_url() ?>assets/images/login/1.png" class="img-fluid mb-4"
                                alt="logo">
                            <h2 class="mb-1 text-white">SIMKIM</h2>
                            <h4 class="mb-1 text-white">Management Devices</h4>
                            <!-- <p>It is a long established fact that a reader will be distracted by the readable content.</p> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/smooth-scrollbar.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>


    <script>
    function submit_login() {
        var nip = $('input[name="nip"]').val();
        var password = $('input[name="password"]').val();

        console.log(nip);
        console.log(password);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('auth/login') ?>",
            dataType: "JSON",
            async: true,
            data: {
                nip: nip,
                password: password
            },
            success: function(data) {
                console.log(data);
                if (data.error) {
                    $("#error_login").modal('show');
                    document.getElementById("pesanError").innerHTML = data.pesan;
                }

                if (data.success) {
                    $('#success_message').html(data.success);
                    $('#nip').val("");
                    $('#password').val("");

                    $('#nip_error').html('');
                    $('#password_error').html('');
                    // console.log(data);
                    window.location.href = "<?php echo base_url('dashboard/') ?>"


                }
            },
            error: function(data, jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                console.log(textStatus);
                // $('#btn_simpan').text('save'); //change button text
                // $('#btn_simpan').attr('disabled', false); //set button enable 

            },
        });
        return false;
    }

    $('#btn_login').on('click', function() {
        submit_login();
    });

    document.onkeydown = function(evt) {
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if (keyCode == 13) {
            submit_login();
            // document.test.submit();
        }
    }
    </script>

    <?php if ($this->session->userdata('habis_seson') == TRUE) : ?>
    <script>
    $(document).ready(function() {
        $("#sesi_habis").modal('show');
    });
    </script>
    <?php $this->session->sess_destroy(); ?>
    <?php endif; ?>
</body>

</html>