<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(["form" => "url"]);
        $this->load->library("session");
    }
    public function index(){
        $this->load->view("resources/head");
        if($this->session->userdata("user_rol") == 1){
            $this->load->model("Usuarios_model");
            $this->load->view("resources/menus/menu_administrador");
            $this->load->view("usuarios/home",[
                "data" => $this->Usuarios_model->get_data_table_usuarios()
            ]);
        }else{
            redirect("/Login/index");
        }
    }
    public function search_input_text(){
        /**
         * Codigo para busqueda en barra superior.
         */
    }
    public function alert_msg($color, $mensaje){
        /**
         * Alerta para mostrar en caso de que los datos no sean correctos
         */
        $this->load->view("resources/head");
        if($this->session->userdata("user_rol") == 1){
            $this->load->model("Usuarios_model");
            $this->load->view("resources/menus/menu_administrador");
            $this->load->view("usuarios/add", [
                "msg"             => $mensaje, 
                "color"           => $color,
                "nacionalidades"  => $this->Usuarios_model->get_nacionalidades(),
                "roles"           => $this->Usuarios_model->get_roles()
            ]);
        }else{
            redirect("/Login/index");
        }
    }
    public function add(){
        $this->load->view("resources/head");
        if($this->session->userdata("user_rol") == 1){
            $this->load->model("Usuarios_model");
            $this->load->view("resources/menus/menu_administrador");
            $this->load->view("usuarios/add", [
                "msg"             => "",
                "nacionalidades"  => $this->Usuarios_model->get_nacionalidades(),
                "roles"           => $this->Usuarios_model->get_roles()
            ]);
        }else{
            redirect("/Login/index");
        }
    }
    public function del_usuario($id_usuario){
        /**
         * Ventana para mostrar datos del usuario.
         */
        $this->load->view("resources/head");
        if($this->session->userdata("user_rol") == 1){
            $this->load->model("Usuarios_model");
            $this->load->view("resources/menus/menu_administrador");
            $this->load->view("usuarios/delete", [
                "msg"  => "Esta seguro que desea eliminar a ",
                "data" => $this->Usuarios_model->get_data_user($id_usuario),
                "id"   => $id_usuario
            ]);
        }else{
            redirect("/Login/index");
        }
    }
    public function drop_user($id_usuario){
        echo $id_usuario;
    }
    public function insert_user(){
        $nac = $this->input->post("sel_nac"); //@var nac, id de la dacionalidad.
        $dni = $this->input->post("dni_us"); //@var dni, documento nacional de identidad.
        $nom = $this->input->post("nom_us"); //@var nom, nombre de la persona.
        $ape = $this->input->post("ape_us"); //@var ape, apellido de la persona.
        $tel = $this->input->post("pho_us"); //@var tel, telefono de la persona.
        $cor = $this->input->post("mail_us"); 
        $dir = $this->input->post("dir_us");
        $birt_day = $this->input->post("birt_us");
        $pas = $this->input->post("pass_us");
        $rol = $this->input->post("sel_rol");
        $this->load->model("Usuarios_model");
        if($nac == 0){
            $this->alert_msg("danger", "Asegurece de Seleccionar una nacionalidad.");
        }else if($dni == ""){
            $this->alert_msg("danger", "Debe llenar el campo Dni Correctamente.");
        }else if($nom == ""){
            $this->alert_msg("danger", "Debe llenar el campo Nombre Correctamente.");
        }else if($ape == ""){
            $this->alert_msg("danger", "Debe llenar el campo Apellido Correctamente.");
        }else if($tel == ""){
            $this->alert_msg("danger", "Debe llenar el campo Telefono Correctamente.");
        }else if($cor == ""){
            $this->alert_msg("danger", "Debe llenar el campo Correo Electronico Correctamente.");
        }else if($dir == ""){
            $this->alert_msg("danger", "Debe llenar el campo Direccion Correctamente.");
        }else if($birt_day == ""){
            $this->alert_msg("danger", "Debe llenar el campo Fecha de nacimiento Correctamente.");
        }else if($pas == ""){
            $this->alert_msg("danger", "Debe llenar el campo Contrasenia Correctamente.");
        }else if($rol == 0){
            $this->alert_msg("danger", "Asegurece de Seleccionar un tipo de permisologia.");
        }else{
            var_dump($this->Usuarios_model->insert_user($nac, $dni, $nom, $ape, $tel, $cor, $dir, $birt_day, $pas, $rol));
            /*if($this->Usuarios_model->insert_user($nac, $dni, $nom, $ape, $tel, $cor, $dir, $birt_day, $pas, $rol) == true){
                redirect("/Usuarios/index");
            }else{

            }*/
        }
    }
}

/* End of file Usuarios.php and path \application\controllers\Usuarios.php */
