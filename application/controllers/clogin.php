<?php

    class Clogin extends CI_Controller{
        
        function __construct(){
            parent:: __construct();
            $this->load->model('mlogin');
        }

        public function index(){
            $this->load->view('vlogin');
        }

        public function login(){
            $usuario= $this->input->post('txtUsuario');
            $contraseña= $this->input->post('txtClave');

            $res=$this->mlogin->login($usuario,$contraseña);
            

            if ($res==1) {
               $this->load->view('usuario/vupdateusuario');
             
            }else{
               $this->load->view('vlogin');
              

            }
        }
    }
?>