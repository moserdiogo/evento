<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('contato_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('contato/index');
        $this->load->view('layout/footer');
    }

    public function enviar(){

        if (!$this->input->post('enviar')) {
            redirect('inicio', 'location');
        }

        $this->form_validation->set_rules('nome', 'Nome', 
          'required|min_length[5]|max_length[20]');

        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('mensagem', 'Mensagem', 
          'required|min_length[5]|max_length[300]');

        if ($this->form_validation->run() == FALSE) {
            $erros = array('mensagens' => validation_errors());
            //$this->load->view('cadastro/formulario', $erros);
            $this->load->view('layout/header');
            $this->load->view('contato/index', $erros);
            $this->load->view('layout/footer');
        }

        $dados = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'), 
            'assunto' => $this->input->post('assunto'),
            'mensagem' => $this->input->post('mensagem'),
            'data' => date('Y-m-d'),
            
        );

        if ($this->contato_model->salvar($dados)) {
            
            $this->load->library('session');

            $usuario = array(
                    'nome'  => $dados['nome'],
                    'email'     => $dados['email'],
                    'logado' => TRUE
            );

            $this->session->set_userdata($usuario);

            $this->load->view('layout/header');
            $this->load->view('contato/enviado');
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
