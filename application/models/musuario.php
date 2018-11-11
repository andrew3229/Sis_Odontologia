<?php

class Musuario extends CI_Model
{
    function __construct(){
        parent:: __construct();
    }

    public function guardar($param){ //se envia un array "param" de toda la información del paciente
        #Recuperamos la información para almacenar en bd
        $campos = array(
          'usuario_nick'=>$param['usuario_nick'],
          'usuario_password'=>$param['usuario_password'],
          'usuario_nombre'=>$param['usuario_nombre'],
          'usuario_apellido'=>$param['usuario_apellido'],
          'usuario_correo'=>$param['usuario_correo'],
          'usuario_telefono'=>$param['usuario_telefono'],
          'usuario_direccion'=>$param['usuario_direccion'],
          'usuario_cedula'=>$param['usuario_cedula'],
        );

          #almacena la información en la tabla principal de bd
          $this->db->insert('usuario',$campos);
    }
}