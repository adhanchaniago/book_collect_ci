<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?php echo base_url(); ?>dist/img/user_administrator.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Administrator</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">Dashboard Admin</li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        User
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin/add_user" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Form Add User</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-book-reader"></i>
                    <p>
                        Kelola Data Buku
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin/add_buku" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Form Add Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin/list_buku" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Buku</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Kelola Data Berita
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>admin/add_berita" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Form Add Berita</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->