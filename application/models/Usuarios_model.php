<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Usuarios_model extends CI_Model 
{
    public function __construct(){
        $this->load->database();
    }
    /**
     *  Funciones para validacion y verificacion de datos de usuario.
     */
    public function is_user_exist($mail, $pass){
        $sql = "SELECT count(*) as 'field' FROM pay_cuenta a INNER JOIN pay_persona b ON a.id_persona_fk=b.id WHERE b.mail = '$mail' AND a.pwd = MD5('$pass');";
        foreach($this->db->query($sql)->result() as $data){
            if($data->field == 1){
                return true;
            }else{
                return false;
            }
        }
    }
    public function account_user_data($mail, $pass){
        $sql = "SELECT a.id AS 'user_id',
                        a.id_rol_fk AS 'user_rol',
                        a.id_persona_fk AS 'person_id',
                        b.nombre AS 'person_first_name',
                        b.apellido AS 'person_last_name',
                        b.mail AS 'person_mail' 
                FROM pay_cuenta a INNER JOIN pay_persona b 
                ON a.id_persona_fk=b.id 
                WHERE b.mail = '$mail' AND a.pwd = MD5('$pass')";
        return $this->db->query($sql);
    }
    /**
     * Fin
     */
}


/* End of file Usuarios_model_model.php and path \application\models\Usuarios_model_model.php */
