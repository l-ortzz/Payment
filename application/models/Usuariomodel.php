<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariomodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obter_usuario($id) {
        // Consultar o banco de dados para obter informações do usuário com base no ID
        $this->db->where('id', $id);
        return $this->db->get('usuarios')->row_array();
    }
}
