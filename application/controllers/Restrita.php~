<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restrita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            if ($this->session->userdata('privilegio') != 1) {
                redirect('Inicio');
            }
        }
    }

    public function index() {
        $dados['url'] = base_url();
        $dados["display"] = "none";
        $dados['acao'] = "";
        $dados["conteudo"] = "<h3>Bem-vindo a área de administração, aqui você poderá fazer todas as configurações do site.</h3>";
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function deslogar() {
        $this->session->sess_destroy();
        redirect('Inicio');
    }

}
