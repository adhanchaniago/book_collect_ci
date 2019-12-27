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

    <title>Koleksi | Taman Bacaan Masyarakat</title>

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
    <link rel="stylesheet" href="<?php echo base_url();?>front/css/jquery-ui.css">
</head>
<body>
<?php $this->load->view($header);?>
<section class="donation-area relative section-gap-top">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
                <div class="text-center text-wrap">
                    <h1 class="mb-25 text-black">Pencarian Buku</h1>
                    <p>Masukan satu atau lebih kata kunci dari judul</p>
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
                    <form id="search_buku_submit">
                        <div class="donation-input">
                            <div class="form-group">
                                <input type="text" placeholder="" class="form-control" name="title" id="title" value="">
                                <span class="fs-14"></span>
                            </div>
                        </div>
                        <button type="submit" class="primary-btn w-100">Pencarian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Donation Form Area -->

<!-- Start Condition Area -->
<section class="condition-area event-details-area section-gap-bottom" id="data_buku" style="display: none;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 card">
                <div class="condition-left">
                    <div class="card-body">
                        <img class="img-fluid" id="img_buku" src="<?php echo base_url();?>front/img/events/ed1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="condition-right">
                    <div class="card">
                        <div class="card-header">
<!--                            <div class="card-title" id="judul_buku"></div>-->
                            <h4 class="card-title" id="judul_buku"></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Kode Buku </div>
                                        <div class="col-md-8 card-text" id="kode_buku"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Jenis Buku </div>
                                        <div class="col-md-8 card-text" id="jenis_buku"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Tahun Terbit </div>
                                        <div class="col-md-8 card-text" id="tahun_terbit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Jumlah Buku </div>
                                        <div class="col-md-8 card-text" id="jumlah_buku"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Pengarang </div>
                                        <div class="col-md-8 card-text" id="pengarang"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Penerbit </div>
                                        <div class="col-md-8 card-text" id="penerbit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4 card-text">Deskripsi </div>
                                        <div class="col-md-8 card-text" id="deskripsi"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Condition Area -->

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
<script type="text/javascript">
    $(document).ready(function(){
        $( "#title" ).autocomplete({
            source: "<?php echo site_url('buku/autocomplete/?');?>",

            select: function (event, ui) {
                $('[name="title"]').val(ui.item.label);
            }
        });
    });
    //Simpan Barang
    $('#search_buku_submit').submit(function(event) {
        var title=$('#title').val();
        event.preventDefault();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url();?>search/by_judul",
            dataType : "JSON",
            data : {judul_buku:title},
            success: function(data){
                console.log(data);
                $('#data_buku').css("display", "block");
                $('#kode_buku').text(": "+data.kode_buku);
                $('#jenis_buku').text(": "+data.jenis_buku);
                $('#judul_buku').text(data.judul_buku);
                $('#jumlah_buku').text(": "+data.jumlah_buku);
                $('#pengarang').text(": "+data.pengarang);
                $('#penerbit').text(": "+data.penerbit);
                $('#deskripsi').text(": "+data.deskripsi);
                $('#tahun_terbit').text(": "+data.tahun_terbit);
                $('#img_buku').attr("src", "<?php echo base_url();?>dist/image/cover_buku/"+data.cover_buku);
            }
        });
        return false;
    });
</script>
</body>

</html>