<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Barra de busqueda -->
            <div class="col-6">
                <div class="input-group">
                    <input type="text" name="" id="" class="form-control" placeholder = "Buscar Usuario....">
                    <button type="button" class = "btn btn-warning rounded-0">
                        <i class = "fa fa-search"></i>
                    </button>
                    <a href = "<?php echo base_url(); ?>index.php/Usuarios/add" class = "btn btn-warning rounded-0">
                        <i class = "fa fa-plus"></i>
                    </a>
                </div>
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
    <h1 class="h3 mb-4 text-gray-800">Lista de Usuarios</h1>
    <div class="card rounded-0 bg-light shadows">
        <div class="card-body">
            <div class="row clearfix d-flex justify-content-center">
                <div class="col-12 col-md-12 col-xs-12 table-responsive">
                    <table class = "table table-stripped table-hover w-100">
                        <thead class = "bg-warning text-dark">
                            <tr class = "text-center">
                                <td><b>Nro</b></td>
                                <td>Nombre y Apellido</td>
                                <td>Permisos</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody id = "table-load-fields">

                        </tbody>
                    </table>
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
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
</body>

</html>