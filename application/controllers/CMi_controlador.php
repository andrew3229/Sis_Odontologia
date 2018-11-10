<?php
class CMi_controlador extends CI_Controller
{
    function _construct()
    {
        parent::_construct();
    }
    
    public function index(){
        $this->load->view('VMi_controlador');
    }
}


