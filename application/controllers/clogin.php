<?php

    class Clogin extends CI_Controller{
        function __construct(){
            parent:__construct();
        }

        public function index(){
            $this->view->load('vlogin');
        }
    }
?>