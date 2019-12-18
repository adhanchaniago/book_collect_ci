<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Donasi Buku</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">Untuk Donasi Buku, Isi Formulir Dibawah Ini :</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="form_submit_invoice">
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
                                            <label for="exampleInputEmail1">Jumlah Buku Yang Didonasikan</label>
                                            <input type="number" class="form-control" name="jumlah_buku" id="jumlah_buku" placeholder="Jumlah Buku">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pengiriman</label>
                                            <select class="form-control" name="pengiriman" id="pengiriman">
                                                <option value="">Pilih Pengiriman</option>
                                                <option value="Dalam Satu Kota">Dalam Satu Kota</option>
                                                <option value="Dalam Satu Provinsi">Dalam Satu Provinsi</option>
                                                <option value="Antar Provinsi">Antar Provinsi</option>
                                                <option value="Antar Negara">Antar Negara</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cara Donasi</label>
                                            <select class="form-control" name="cara_donasi" id="cara_donasi" onchange="caraDonasi(event)">
                                                <option value="">Pilih Cara Donasi</option>
                                                <option value="dikirim">Dikirim</option>
                                                <option value="dijemput">Dijemput</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="dikirim" style="display: none;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dikirim Ke TBM Dengan Alamat</label>
                                            <textarea class="form-control" rows="3" placeholder="Jl Dewi Sartika Tegal" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="dijemput" style="display: none;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dijemput Ke Alamat Donatur</label>
                                            <textarea class="form-control" rows="3" id="alamat_donatur" name="alamat_donatur" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Satu Kota/ Dalam Kota</label>
                                            <select class="form-control" name="satu_kota" id="satu_kota">
                                                <option value="">Satu Kota Atau Dalam Kota</option>
                                                <option value="Satu Kota">Satu Kota</option>
                                                <option value="Dalam Kota">Dalam Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" id="btn_submit" class="btn btn-primary">Submit</button>
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