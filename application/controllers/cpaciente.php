<?php

class Cpaciente extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('mpaciente');
        
    }

    public function index() //Carga los formularios
    {
        $this->load->view('paciente/vpaciente');
    }

    public function guardar()
    {   
        //se valida el ingreso al metodo de almacenamiento
        // echo "Entro al metodo guardar";
        // $this->load->view('paciente/vpaciente');
        //Datos de almacenamito de paciente obtenido de la vista vpaciente.php
        $param['paciente_nombre']=$this->input->post('txtNombre');
        $param['paciente_apellido']= $this->input->post('txtApellido');
        $param['paciente_fecha_nacimiento']=$this->input->post('dateFechaNacimiento');
        $param['paciente_sexo']=$this->input->post('rdbsexo');
        $param['paciente_direccion']=$this->input->post('txtDireccion');
        $param['paciente_estado_civil']=$this->input->post('rdbestadocivil');
        $param['paciente_profesion']=$this->input->post('txtProfesion');
        $param['paciente_telefono']=$this->input->post('txtTelefono');
        $param['paciente_cedula']=$this->input->post('txtCedula');
        $param['paciente_medico_cabecera']=$this->input->post('txtMedicoCabecera');

        //llamamos al modelo de paciente y llamamos al metodo guardar 
        $this->mpaciente->guardar($param);   
        
    }
}