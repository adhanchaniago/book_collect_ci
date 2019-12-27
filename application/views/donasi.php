<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>front/img/fav.png">

    <meta name="author" content="codepixer">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>Berita | Taman Bacaan Masyarakat</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>front/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/animate.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/main.css">
</head>
<body>
<?php $this->load->view($header);?>
<section class="donation-area relative section-gap-top">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="text-center text-wrap">
                    <h1 class="mb-25 text-black">Donasi</h1>
                    <p class="pt-10 pb-20">
                        Bertujuan untuk menyajikan bahan pustaka dan informasi guna kepentingan belajar dan rekreasi masyarakat juga mengadakan kegiatan yang bersifat kajian dan penalaran keilmuwan
                    </p>
                    <p>Disini Kalian bisa memilih antara donasi buku atau donasi non buku </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donation-form-area section-gap-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-12">
                <div class="donation-box">
                    <a href="<?php echo base_url();?>register">
                        <button type="button" class="primary-btn w-100">Donasi Buku</button>
                    </a>
                     <!-- Link kelogin -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="donation-form-area section-gap-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-12">
                <div class="donation-box">
                    <a href="<?php echo base_url();?>register">
                        <button type="button" class="primary-btn w-100">Donasi Non Buku</button>
                    </a><!-- Link kelogin -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.
                    </p>
                    <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                   required="" type="email">
                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->



<script src="<?php echo base_url();?>front/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>front/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url();?>front/js/easing.min.js"></script>
<script src="<?php echo base_url();?>front/js/hoverIntent.js"></script>
<script src="<?php echo base_url();?>front/js/superfish.min.js"></script>
<script src="<?php echo base_url();?>front/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url();?>front/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>front/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>front/js/jquery.sticky.js"></script>
<script src="<?php echo base_url();?>front/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url();?>front/js/waypoints.min.js"></script>
<script src="<?php echo base_url();?>front/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>front/js/parallax.min.js"></script>
<script src="<?php echo base_url();?>front/js/mail-script.js"></script>
<script src="<?php echo base_url();?>front/js/main.js"></script>
</body>

</html>