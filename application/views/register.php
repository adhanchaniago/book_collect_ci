<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TBM SiGambir | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box col-md-6">
    <div class="register-logo">
<!--        <a href="#"><b>TBM</b>SiGambir</a>-->
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>front/img/logo.jpg" alt="" title="" /></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Silahkan Mendaftar Untuk Donasi Lalu Login</p>

            <form id="form_submit_invoice">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" name="name" id="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Birth" id="tgl_lahir" name="tgl_lahir" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="No Handphone" name="phone" id="phone">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-at"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <textarea name="alamat" id="alamat" cols="50" rows="4" placeholder=" Alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
<!--                    <div class="col-8"></div>-->
                    <div class="col-4">
                        <button type="submit" id="btn_submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?php echo base_url(); ?>login" class="text-center">Saya Sudah Pernah Mendaftar</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url();?>plugins/toastr/toastr.min.js"></script>
<script>
    //Datemask dd/mm/yyyy
    $('#tgl_lahir').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();


    //Simpan Barang
    $('#btn_submit').on('click',function(){
        var username = $('#username').val();
        var password = $('#password').val();
        var name = $('#name').val();
        var tgl_lahir = $('#tgl_lahir').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var alamat = $('#alamat').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url();?>register/insert",
            dataType : "JSON",
            data : {username:username , password:password, fullname:name, tgl_lahir:tgl_lahir, no_hp:phone, email:email,
                    alamat:alamat},
            success: function(data){
                toastr.success('Berhasil Mendaftar');
                $('#form_submit_invoice').trigger("reset");
                window.location = "<?php echo base_url();?>login";
            }
        });
        return false;
    });

</script>
</body>
</html>
