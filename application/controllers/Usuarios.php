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
            $this->load->view("resources/menus/menu_administrador");
            $this->load->view("usuarios/home");
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
    }
    public function add(){
        /**
         * Formulario para Agregar un Usuario nuevo al sistema.
         */
    }
    public function insert_user(){
        /**
         * Procesamiento de datos del formulario de nuevo usuario.
         */
    }
}

/* End of file Usuarios.php and path \application\controllers\Usuarios.php */
