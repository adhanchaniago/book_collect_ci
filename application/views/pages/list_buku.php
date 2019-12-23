<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kode Buku</th>
                                <th>Jenis Buku</th>
                                <th>Judul Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_buku != null){
                                foreach ($list_buku as $list_buku):?>
                            <tr>
                                <td><?php echo $list_buku->id ?></td>
                                <td><?php echo $list_buku->kode_buku ?></td>
                                <td><?php echo $list_buku->jenis_buku ?></td>
                                <td><?php echo $list_buku->judul_buku ?></td>
                                <td><?php echo $list_buku->jumlah_buku ?></td>
                                <td><?php echo $list_buku->pengarang ?></td>
                                <td><?php echo $list_buku->penerbit ?></td>
                                <td><?php echo $list_buku->tahun_terbit ?></td>
                                <td>
                                    <a
                                            href="javascript:;"
                                            data-cover="<?php echo $list_buku->cover_buku ?>"
                                            data-toggle="modal" data-target="#show-cover">
                                        <button data-toggle="modal" data-target="#modal-default" class="btn btn-warning">View Cover Buku</button>
                                    </a>
                                </td>
                                <td>
                                    <a
                                            href="javascript:;"
                                            data-id="<?php echo $list_buku->id ?>"
                                            data-kode="<?php echo $list_buku->kode_buku ?>"
                                            data-jenis="<?php echo $list_buku->jenis_buku ?>"
                                            data-judul="<?php echo $list_buku->judul_buku ?>"
                                            data-desc="<?php echo $list_buku->deskripsi ?>"
                                            data-jumlah="<?php echo $list_buku->jumlah_buku ?>"
                                            data-pengarang="<?php echo $list_buku->pengarang ?>"
                                            data-penerbit="<?php echo $list_buku->penerbit ?>"
                                            data-tahun="<?php echo $list_buku->tahun_terbit ?>"
                                            data-lokasi="<?php echo $list_buku->lokasi_buku ?>"
                                            data-toggle="modal" data-target="#edit-buku">
                                        <button data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" data-placement="top" title="Edit Buku"><i class="fas fa-edit"></i></button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;
                            } else {echo "<tr><td>Data Not Found</td></tr>";}?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="show-cover">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cover Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="cover_buku" name="cover_buku" src="" alt="" width="100%">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="edit-buku">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" id="form_submit_edit_buku">
                            <div class="card-body">
                                <input type="hidden" id="id_buku" name="id_buku">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_buku">Kode Buku</label>
                                            <input type="number" class="form-control" name="kode_buku" id="kode_buku" placeholder="Kode Buku">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Buku</label>
                                            <input type="text" class="form-control" name="jenis_buku" id="jenis_buku" placeholder="Jenis Buku">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul Buku</label>
                                            <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jumlah Buku</label>
                                            <input type="number" class="form-control" name="jumlah_buku" id="jumlah_buku" placeholder="Jumlah Buku">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pengarang</label>
                                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun Terbit</label>
                                            <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lokasi Buku</label>
                                            <input type="text" class="form-control" name="lokasi_buku" id="lokasi_buku" placeholder="Lokasi Buku">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cover Buku (max 200Kb)</label>
                                            <input type="file" class="form-control" name="cover_buku" id="cover_buku">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" id="btn_submit_edit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>

</div>
<!-- /.content-wrapper -->