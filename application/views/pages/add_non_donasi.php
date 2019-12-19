<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Donasi Non Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Donasi Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form role="form" id="form_submit_non_donasi">
                            <div class="card-header">
                                <div class="row">
                                    <h3 class="card-title">Jika anda ingin berdonasi, silahkan transfer ke nomor rekening 0014-0537-1124-9-2 (Bank BRI a/n Slamet Raharjo)
                                        <br> kemudian isi form dibawah ini:</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Donatur</label>
                                            <input type="text" name="nama_donatur" id="nama_donatur" class="form-control" placeholder="Nama Donatur">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pekerjaan</label>
                                            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instansi">Instansi</label>
                                            <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Instansi">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Hp</label>
                                            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat Rumah</label>
                                            <textarea class="form-control" rows="4" name="alamat_rumah" id="alamat_rumah" placeholder="Alamat Rumah"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Terbilang</label>
                                            <input type="number" class="form-control" name="terbilang" id="terbilang" placeholder="terbilang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ditransfer Melalui</label>
                                            <input type="text" class="form-control" placeholder="0014-0537-1124-9-2 (Bank BRI a/n Slamet Raharjo)" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Bukti Transfer</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="bukti_transfer">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pesan">Pesan</label>
                                            <textarea class="form-control" name="pesan" id="pesan" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Transfer</label>
                                            <input type="text" class="form-control" name="tgl_transfer" id="tgl_transfer" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->