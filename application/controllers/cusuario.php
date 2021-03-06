<?php

class Cusuario extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('musuario');
        
    }

    public function index() //Carga los formularios
    {
        $this->load->view('usuario/vusuario');
    }

    public function guardar()
    {   
        //se valida el ingreso al metodo de almacenamiento
        // echo "Entro al metodo guardar";
        // $this->load->view('paciente/vpaciente');
        //Datos de almacenamito de usuario obtenido de la vista vusuario.php
        $param['usuario_nick']=$this->input->post('txtNick');
        $param['usuario_password']= $this->input->post('txtConstraseña');
        $param['usuario_nombre']=$this->input->post('txtNombres');
        $param['usuario_apellido']=$this->input->post('txtApellidos');
        $param['usuario_correo']=$this->input->post('txtCorreo');
        $param['usuario_telefono']=$this->input->post('txtTelefono');
        $param['usuario_direccion']=$this->input->post('txtDireccion');
        $param['usuario_cedula']=$this->input->post('txtCedula');

        //llamamos al modelo de paciente y llamamos al metodo guardar 
        $this->musuario->guardar($param);   
        
    }

    //se modifica la información del medico
    public function actualizarDatos(){
       
        $param['usuario_nombre']=$this->input->post('txtNombre');
        $param['usuario_apellido']=$this->input->post('txtApellido');
        $param['usuario_nick']=$this->input->post('txtNick');
        $this->musuario->actualizarDatos($param);

        $this->load->view('usuario/vusuario'); 
        //redirect ('cusuario/index');
    }


    //elimina la información de un médico
    public function eliminarUsuario(){
        $idU=$this->input->post('txtIdUsuario');
        $this->musuario->eliminarUsuario($idU);
    }



}