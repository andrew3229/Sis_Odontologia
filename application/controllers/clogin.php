<?php

    class Clogin extends CI_Controller{
        
        function __construct(){
            parent:: __construct();
            $this->load->model('mlogin');
        }

        public function index(){
            $data['mensaje']='';
            $this->load->view('vlogin',$data);
        }

        public function login(){
            $usuario= $this->input->post('txtUsuario');
            $contraseña= $this->input->post('txtClave');

            $res=$this->mlogin->login($usuario,$contraseña);
            

            if ($res==1) {
               $this->load->view('usuario/vupdateusuario'); //ingreso a la pantalla del medico principal
             
            }else{
                $data['mensaje']="usuario o contraseña erronea";
                $this->load->view('vlogin',$data);
              

            }
        }
    }
?>