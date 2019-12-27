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

    <title>Kontak Kami | Taman Bacaan Masyarakat</title>

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
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/toastr/toastr.min.css">
</head>
<body>
<?php $this->load->view($header);?>
<section class="causes-area section-gap-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 section-title">
                <h1>Kontak Kami</h1>
            </div>
        </div>
    </div>
</section>

<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <!--                        <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>-->
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Jl. Dewi Sartika, Sigambir, </h5>
                        <p>Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52219</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>0808</h5>
                        <p>07:00 - 21:00</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>support@rasabaik.com</h5>
                        <p>Send us your question anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area" id="form_submit_contact" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                   class="common-input mb-20 form-control" required="" type="text" id="name">

                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
                                   required="" type="email" id="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'"
                                   class="common-input mb-20 form-control" required="" type="text" id="subject">
                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'Messege'" required="" id="message"></textarea>
                            <button type="submit" class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
                        </div>
                    </div>
                </form>
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
<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function(){
        //Simpan Barang
        $('#form_submit_contact').submit(function(event) {
            var name=$('#name').val();
            var email=$('#email').val();
            var subject=$('#subject').val();
            var message=$('#message').val();
            event.preventDefault();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url();?>kontak/insert",
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                data : new FormData(this),
                success: function(data){
                    toastr.success('Pesan Telah Dikirim');
                    $('#form_submit_contact').trigger("reset");
                }
            });
        });
    })
</script>
</body>

</html>
