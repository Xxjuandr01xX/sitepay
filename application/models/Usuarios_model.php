<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Usuarios_model extends CI_Model 
{
    public function __construct(){
        $this->load->database();
    }
    /**
     * Metodos GET
     */
    public function get_nacionalidades(){
        return $this->db->get("pay_nacionalidad");
    }
    public function get_roles(){
        return $this->db->get("pay_rol");
    }
    public function get_data_user($id_usuario){
        $resp = "false";
        foreach($this->db->get_where("pay_cuenta", ["id" => $id_usuario])->result() as $dta_user){
            foreach ($this->db->get_where("pay_persona", ["id" => $dta_user->id_persona_fk])->result() as $dta_pers) {
                $resp = $dta_pers->nombre." ".$dta_pers->apellido." Correo Electronico: ".$dta_pers->mail;
            }
        }
        return $resp;
    }
    /**
     * Conversion de formato de fecha de inputs
     */
    public function input_to_date($date){
        $value = explode("/", $date);
        return $value[2]."-".$value[1]."-".$value[0];
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
    /**
     * Insercion de datos en la tabla de personas, y usuarios.
     */
    public function insert_user($nac, $dni, $nom, $ape, $tel, $cor, $dir, $birt_day, $pas, $rol){
        $person_insert = $this->db->insert("pay_persona", [
            "id"                    => null,
            "id_nacionalidad_fk"    => $nac,
            "dni"                   => $dni,
            "nombre"                => $nom,
            "apellido"              => $ape,
            "telefono"              => $tel,
            "mail"                  => $cor,
            "fec_nac"               => $this->input_to_date($birt_day),
            "direccion"             => $dir 
        ]);
        if($person_insert == true){
            $id_persona  = $this->db->insert_id();
            $user_create = $this->db->insert("pay_cuenta", [
                "id"              => null,
                "id_persona_fk"   => $id_persona,
                "id_rol_fk"       => $rol,
                "pwd"             => MD5('$pas')
            ]);
            if($user_create){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public function get_data_table_usuarios(){
        return $this->db->query("SELECT a.nombre    AS 'person_name', a.apellido  AS 'person_last_name', b.id_rol_fk AS 'id_rol_fk' , b.id        AS 'id_user'
        FROM pay_persona a INNER JOIN pay_cuenta b ON a.id=b.id_persona_fk;");
    }
}

