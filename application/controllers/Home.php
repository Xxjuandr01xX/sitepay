<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->helper(["form" => "url"]);
    }

    public function index(){
        $this->load->view("resources/head");
        if($this->session->userdata("user_rol") == 1){
            $this->load->view("resources/menus/menu_administrador");
            $this->load->view("Home/index_administrador");
        }else{
            redirect("/Login/index");
        }
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
