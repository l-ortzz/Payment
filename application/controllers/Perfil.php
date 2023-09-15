<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuariomodel');
    }

    public function index($id) {
        // Obtenha o usuário com base no ID
        $data['usuario'] = $this->Usuariomodel->obter_usuario($id);
    
        
    
        // Carregue a view 'perfil' com os dados
        $this->load->view('perfil', $data);
    }
    

    


}
