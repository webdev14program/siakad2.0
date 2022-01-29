<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>Dashboard_smk">
            <div class="sidebar-brand-text mx-3">KURIKULUM <br>SD</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_sd">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data Master
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-asterisk"></i>
                <span>Menu Master</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">List Data Master</h6>
                    <a class="collapse-item" href="<?= base_url() ?>Dashboard_sd/data_guru">Data Guru</a>
                    <!-- <a class="collapse-item" href="<?= base_url() ?>Dashboard_smk/data_siswa">Data Siswa</a>
                    <a class="collapse-item" href="<?= base_url() ?>Dashboard_smk/data_kelas">Data Kelas</a>
                    <a class="collapse-item" href="<?= base_url() ?>Dashboard_smk/data_jurusan">Master Jurusan</a> -->
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data Absen
        </div>


        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_sd/data_absen_guru_perbulan">
                <i class="fas fa-user-secret"></i>
                <span>Guru</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_smk/data_absen_siswa_perbulan">
                <i class="fas fa-user-graduate"></i>
                <span>Siswa</span></a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_sd/keterangan_tambahan">
                <i class="fas fa-calendar-week"></i>
                <span>Keterangan Tambahan</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN SD</span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php $this->load->view($content) ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-warning ">
            <div class="container my-auto">
                <div class="copyright text-center text-white my-auto">
                    <h6 class="text-center font-weight-bold text-uppercase">Copyright &copy; Perguruan Tunas Harapan swadarma</h6>
                    <h6 class="text-center text-white font-weight-bold text-uppercase">Design By Produktif TEFA SMK TUNAS harapan</h6>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INGIN KELUAR APLIKASI SEKARANG?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><span class="text-danger">LOGOUT UNTUK KELUAR SYSTEM</span> </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url() ?>Dashboard/logout">Logout</a>
            </div>
        </div>
    </div>
</div>