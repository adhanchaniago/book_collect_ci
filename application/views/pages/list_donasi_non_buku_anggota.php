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
                                <th>Terbilang</th>
                                <th>Progress</th>
                                <th>Tgl Transfer</th>
                                <th>Bukti Transfer</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_donasi != null){
                                foreach ($list_donasi as $list_donasi):?>
                                    <tr>
                                        <td><?php echo $list_donasi['id'] ?></td>
                                        <td><?php echo $list_donasi['nama_donatur'] ?></td>
                                        <td><?php echo $list_donasi['terbilang'] ?></td>
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
                                        <td><?php echo $list_donasi['tgl_transfer'] ?></td>
                                        <td>
                                            <a
                                                href="javascript:;"
                                                data-bukti="<?php echo $list_donasi['bukti_transfer']?>"
                                                data-toggle="modal" data-target="#show-bukti">
                                                <button data-toggle="modal" data-target="#modal-default" class="btn btn-info">View Bukti Transaksi</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;
                            } else {echo "<tr><td colspan='7'>Data Not Found</td></tr>";}?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <div class="modal fade" id="show-bukti">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Transaksi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="bukti_transaksi" name="bukti_transaksi" src="" alt="" width="100%">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.modal-dialog -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->