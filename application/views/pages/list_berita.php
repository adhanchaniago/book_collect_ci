<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">List Berita</li>
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
                                <th>Judul Berita</th>
                                <th>Tanggal</th>
                                <th>Penulis</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($list_berita != null){
                                foreach ($list_berita as $list_berita):?>
                                    <tr>
                                        <td><?php echo $list_berita->id ?></td>
                                        <td><?php echo $list_berita->judul ?></td>
                                        <td><?php echo $list_berita->tanggal ?></td>
                                        <td><?php echo $list_berita->penulis ?></td>
                                        <td><a
                                                href="javascript:;"
                                                data-judul="<?php echo $list_berita->judul ?>"
                                                data-img="<?php echo $list_berita->image ?>"
                                                data-id="<?php echo $list_berita->id ?>"
                                                data-toggle="modal" data-target="#view-berita">
                                                <button data-toggle="modal" data-target="#modal-default" data-toggle="tooltip" data-placement="top" title="View Berita"><i class="fas fa-list"></i></button>
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

        <div class="modal fade" id="view-berita">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="judul"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="image" name="image" width="100%">
                        <br>
                        <div id="isi"></div>
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