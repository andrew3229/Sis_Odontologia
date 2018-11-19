<?php

class Mlogin extends CI_Model{

    public function login($usuario,$contraseña){
        //Realiza la consulta a la base de datos
        $this->db->select('u.usuario_id, u.usuario_nick,  u.usuario_password, u.usuario_nombre, u.usuario_apellido');
        $this->db->from('usuario u');
        $this->db->where('u.usuario_nick', $usuario);
        $this->db->where('u.usuario_password',$contraseña);

        //obtiene toda la informacion de la bd
        $res=$this->db->get();

        if ($res->num_rows()==1) {
           $r=$res->row();
           $session_datos=array(
           //identifico el nombre del usuario con el que ingreso a la sesion y los demas datos
            'session_usuario_id'=>$r->usuario_id,
            'session_usuario_datos' => $r->usuario_nombre.",".$r->usuario_apellido.",".$r->usuario_nick
           );
           
           $this->session->set_userdata($session_datos);
           return 1;
        }else{
            return 0;
        }

        // return $res->$result();
    }
}
