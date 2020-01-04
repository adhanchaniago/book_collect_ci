<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Data Donasi Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Kelola Donasi Buku</li>
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
                                <th>Nama Donatur</th>
                                <th>Instansi</th>
                                <th>Progress</th>
                                <th>Jumlah Buku</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Cara Donasi</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_donasi != null){
                                foreach ($list_donasi as $list_donasi):?>
                                    <tr>
                                        <td><?php echo $list_donasi['id'] ?></td>
                                        <td><?php echo $list_donasi['nama_donatur'] ?></td>
                                        <td><?php echo $list_donasi['instansi'] ?></td>
                                        <td><span class="badge
                                        <?php
                                            if ( $list_donasi['progress'] == "belum diproses"){
                                                echo "badge-warning";
                                            } elseif ($list_donasi['progress'] == "sedang diproses"){
                                                echo "badge-success";
                                            } elseif ($list_donasi['progress'] == "selesai diproses"){
                                                echo "badge-danger";
                                            }
                                            ?>
                                        "><?php echo $list_donasi['progress'] ?></span></td>
                                        <td><?php echo $list_donasi['jumlah_buku'] ?></td>
                                        <td><?php echo $list_donasi['no_hp'] ?></td>
                                        <td><?php echo $list_donasi['alamat_rumah'] ?></td>
                                        <td><?php echo $list_donasi['cara_donasi'] ?></td>
                                        <td><a
                                                    href="javascript:;"
                                                    data-progres="<?php echo $list_donasi['progress']?>"
                                                    data-id="<?php echo $list_donasi['id']?>"
                                                    data-toggle="modal" data-target="#edit-progres">
                                                <button data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" data-placement="top" title="Edit Progress Donasi"><i class="fas fa-edit"></i></button>
                                            </a>
                                            <a href="<?php echo base_url().'admin/cetak_donasi/'.$list_donasi['id'];?>" target="_blank">
                                                <button data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Cetak Donasi"><i class="fas fa-print"></i></button>
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

        <div class="modal fade" id="edit-progres">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Progress</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" id="form_edit_progres">
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Progres Donasi</label>
                                    <select class="form-control" name="edit_progres" id="edit_progres">
                                        <option value="">Pilih Progres</option>
                                        <option value="belum diproses">Belum Diproses</option>
                                        <option value="sedang diproses">Sedang Diproses</option>
                                        <option value="selesai diproses">Selesai Diproses</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id_donasi" id="id_donasi" value="">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btn_submit_progres_buku" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->