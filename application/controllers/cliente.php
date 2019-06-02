<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('cliente_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('cadastro_cliente/index');
        $this->load->view('layout/footer');
    }

    public function cadastrar(){

        $this->form_validation->set_rules('nome', 'Nome', 
          'required|min_length[5]|max_length[40]');

        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('telefone', 'Telefone', 
          'required|min_length[5]|max_length[12]');

        //$this->form_validation->set_rules('senha', 'Senha', 
        //  'required|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE) {
            $erros = array('mensagens' => validation_errors());
            //$this->load->view('cadastro/formulario', $erros);
            $this->load->view('layout/header');
            $this->load->view('cadastro_cliente/index', $erros);
            $this->load->view('layout/footer');
        }

        $dados = array(
            'name' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'), 
            //'senha' => $this->input->post('senha'),            
        );

        if ($this->cliente_model->salvar($dados)) {
            $this->load->view('layout/header');
            $this->load->view('cadastro_cliente/cadastrado');
            $this->load->view('layout/footer');
        }
        
        /*
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Usuário', 
          'required|min_length[5]|max_length[12]');
        
        if ($this->form_validation->run() == FALSE) {
            $erros = array('mensagens' => validation_errors());
            //$this->load->view('cadastro/formulario', $erros);
            $this->load->view('layout/header');
            $this->load->view('contato', $erros);
            $this->load->view('layout/footer');
        } else {
            echo "Formulário enviado com sucesso.";
        }
        */

    }

    
}
