<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Barra de busqueda -->
            <div class="col-6">
                
            </div>
            <!-- FIN -->

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block">
                    <a href="#" class = "btn btn-secondary rounded-circle btn-sm">
                        <i class = "fa fa-user"></i>
                    </a>
                </div>
            </ul>
        </nav>
        <!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Eliminar Usuario</h1>
    <div class="card rounded-0 bg-light shadows">
        <div class="card-body">
            <div class="row clearfix d-flex justify-content-end">
                
            </div>
            <div class="row clearfix d-flex justify-content-center">
                <div class="col-12 col-md-12 col-xs-12 ">
                    <form action="<?php echo base_url(); ?>index.php/Usuarios/drop_user/<?php echo $id;?>" method = "POST">
                        <div class = "alert alert-danger p-4 w-100" role = "alert">
                            <?php 
                                echo $msg." ".$data;
                            ?>
                            <br>
                            <br>
                            <br>
                            <button type = "submit" class = "btn btn-danger rounded-0 p-2">
                                <span class = "fa fa-trash"></span>
                                Eliminar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
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



<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.datatables.min.js"></script>
<!-- Interaccines para el modulo de usuarios -->
<script src="<?php echo base_url(); ?>assets/sitepay/js/jsUsuarios.js"></script>
</body>

</html>