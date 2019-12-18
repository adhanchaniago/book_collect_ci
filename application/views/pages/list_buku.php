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
                                <td>X</td>
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
</div>
<!-- /.content-wrapper -->