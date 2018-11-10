<?php

class Mpaciente extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function guardar($param){ //se envia un array "param" de toda la información del paciente
        #Recuperamos la información para almacenar en bd
        $campos = array(
          'paciente_nombre'=>$param['paciente_nombre'],
          'paciente_apellido'=>$param['paciente_apellido'],
          'paciente_fecha_nacimiento'=>$param['paciente_fecha_nacimiento'],
          'paciente_sexo'=>$param['paciente_sexo'],
          'paciente_direccion'=>$param['paciente_direccion'],
          'paciente_estado_civil'=>$param['paciente_estado_civil'],
          'paciente_profesion'=>$param['paciente_profesion'],
          'paciente_telefono'=>$param['paciente_telefono'],
          'paciente_cedula'=>$param['paciente_cedula'],
          'paciente_medico_cabecera'=>$param['paciente_medico_cabecera']
          );
          echo "enctra";
          #almacena la información en la tabla principal
          $this->db->insert('paciente',$campos);
    }
}