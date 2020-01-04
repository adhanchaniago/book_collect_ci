<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>History Data Donasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/anggota">Home</a></li>
                        <li class="breadcrumb-item active">History Data Donasi</li>
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
                                <th width="8%">Jumlah Buku</th>
                                <th>No Hp</th>
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
                                                echo 'badge-warning" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="Akan Di Proses Dalam 3 Hari dan Akan Mendapatkan Notifikasi"';
                                            } elseif ($list_donasi['progress'] == "sedang diproses"){
                                                echo 'badge-success"';
                                            } elseif ($list_donasi['progress'] == "selesai diproses"){
                                                echo 'badge-danger"';
                                            }
                                            ?>
                                        ><?php echo $list_donasi['progress'] ?></span></td>
                                        <td><?php echo $list_donasi['jumlah_buku'] ?></td>
                                        <td><?php echo $list_donasi['no_hp'] ?></td>
                                        <td><?php echo $list_donasi['cara_donasi'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url().'anggota/cetak_donasi/'.$list_donasi['id'];?>" target="_blank">
                                                <button data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Cetak Donasi"><i class="fas fa-print"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else {echo "<tr><td colspan='8'>Data Not Found</td></tr>";}?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

        <!-- /.modal-dialog -->
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->