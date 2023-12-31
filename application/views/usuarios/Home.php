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
    <h1 class="h3 mb-4 text-gray-800">Lista de Usuarios</h1>
    <div class="card rounded-0 bg-light shadows">
        <div class="card-body">
            <div class="row clearfix d-flex justify-content-end">
                <div class="col-3">
                    <a href = "<?php echo base_url(); ?>index.php/Usuarios/add" class = "w-100 btn btn-warning rounded-0">
                        <i class = "fa fa-plus"></i> Agregar Usuario
                    </a>
                </div>
            </div>
            <div class="row clearfix d-flex justify-content-center">
                <div class="col-12 col-md-12 col-xs-12 table-responsive">
                    <table class = "table table-stripped table-hover w-100" id = "load-table-users">
                        <thead class = "bg-warning text-dark">
                            <tr>
                                <td class = "text-center"><b>Nro</b></td>
                                <td>Nombre y Apellido</td>
                                <td class = "text-center">Opciones</td>
                            </tr>
                        </thead>
                        <tbody >
                            <?php $x = 0; foreach($data->result() as $file){ $x++; ?>
                                <tr>
                                    <td class = "text-center">
                                        <b><?php echo $x; ?></b>
                                    </td>
                                    <td><?php echo $file->person_name." ".$file->person_last_name; ?></td>
                                    <td class = "text-center">
                                        <div class = "btn-group">
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/del_usuario/<?php echo $file->id_user; ?>" class = "btn btn-sm btn-primary"><i class = "fa fa-trash"></i></a>
                                            <a href="<?php echo base_url(); ?>index.php/Usuarios/edit_usuario/<?php echo $file->id_user; ?>" class = "btn btn-sm btn-primary"><i class = "fa fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
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