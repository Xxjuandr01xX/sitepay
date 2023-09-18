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
    <h1 class="h3 mb-4 text-gray-800">Agregar nuevo Usuario al sistema</h1>
    <?php if($msg == null || $msg == ""){ ?>
         
    <?php }else{ ?>
        <div class = "alert alert-warning rounded-0 shadow mb-4" role = "alert">
            <i class = "fa fa-triangle"></i>
            <?php echo $msg; ?>        
        </div>
    <?php } ?>
    <div class="card rounded-0 bg-light shadows">
        <div class="card-body">
            <div class="row clearfix d-flex justify-content-center">
                <div class="col-10 col-md-10 col-xs-10">
                <form action = "<?php echo base_url(); ?>index.php/Usuarios/insert_user" method = "POST">
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <select name="sel_nac" id="">
                                <option value="0">----</option>
                                <?php foreach($nacionalidades->result() as $nac){ ?>
                                    <option value="<?php echo $nac->id; ?>"><?php echo $nac->cod_dni; ?></option>
                                <?php } ?>
                            </select>
                        </label>
                        <input type="text" name="dni_us" id="dni_us" class="form-control" placeholder = "XXXXXXXX">
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-user"></i>
                        </label>
                        <input type="text" name="nom_us" id="nom_us" class="form-control" placeholder = "Nombres">
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-user"></i>
                        </label>
                        <input type="text" name="ape_us" id="ape_us" class="form-control" placeholder = "Apellidos"> 
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </label>
                        <input type="text" name="pho_us" id="pho_us" class="form-control" placeholder = "(XXXX)-XXXXXXX">
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </label>
                        <input type="mail" name="mail_us" id="mail_us" class="form-control" placeholder = "XX@XX.com">
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </label>
                        <input type="text" name="birt_us" id="birt_us" class="form-control" placeholder = "__/__/____"> 
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-map"></i>
                        </label>
                        <textarea class = "form-control" name="dir_us" id="dir_us" cols="30" rows="10">

                        </textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input type="password" name="pass_us" id="" class="form-control" placeholder = "Ingrese su contrasenia ...!"> 
                    </div>
                    <div class="input-group mb-3">
                        <label for="" class="input-group-text">
                            <i class="fa fa-key"></i>
                        </label>
                        <select class = "form-control" name="sel_rol" id="">
                            <option value="0">----</option>
                            <?php foreach($roles->result() as $rl){ ?>
                                <option value="<?php echo $rl->id; ?>"><?php echo $rl->descripcion;?></option>
                            <?php } ?>
                        </select> 
                    </div>
                    <a href = "<?php echo base_url(); ?>index.php/Usuarios/index" class = "btn btn-primary rounded-0 w-100 mb-3">
                        <i class = "fa fa-home"></i>
                        Regresar
                    </a>
                    <button type="submit" class = "btn btn-warning rounded-0 w-100">
                        <i class = "fa fa-save"></i>
                        Registrar
                    </button>
                </form>
                <!-- Fin -->
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
<!-- Datepicker Bootstrap-->
<script src="<?php echo base_url(); ?>assets/vendor/momentjs/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Jquery inputmask -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<!-- Interaccines para el modulo de usuarios -->
<script src="<?php echo base_url(); ?>assets/sitepay/js/jsUsuarios.js"></script>
</body>

</html>