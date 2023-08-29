<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(["form" => "url"]);
        $this->load->library("session");
    }

    public function index(){
        return $this->load->view("login/FormLogin");
    }

    public function pross_Login(){
        $mail = $this->input->post("mail_account");
        $pass = $this->input->post("password_account");
        $this->load->model("Usuarios_model");
        if($this->Usuarios_model->is_user_exist($mail, $pass) == true){
            foreach($this->Usuarios_model->account_user_data($mail, $pass)->result() as $data){
                $session_user_data = [
                    "user_id"            => $data->user_id,
                    "user_rol"           => $data->user_rol,
                    "person_id"          => $data->person_id,
                    "person_first_name"  => $data->person_first_name,
                    "person_last_name"   => $data->person_last_name,
                    "person_mail"        => $data->person_mail
                ];
                $this->session->set_userdata($session_user_data);
                redirect("/Home/index");
            }
        }else{
            redirect("/Login/index");
        }
    }
}

/* End of file Login.php and path \application\controllers\Login.php */
