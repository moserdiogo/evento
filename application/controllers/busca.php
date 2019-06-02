<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busca extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('busca_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $dados = array(
            'cidade' => $this->input->post('cidade'),
            'evento' => $this->input->post('evento'),
            'data' => $this->input->post('data'), 
            'pessoas' => $this->input->post('pessoas'),            
        );

        $data['busca'] = $this->busca_model->buscar($dados);

        $this->load->view('layout/header');
        $this->load->view('busca/index', $data);
        $this->load->view('layout/footer');
    }

    public function detalhes($id)
    {
        $data['parceiro'] = $this->busca_model->detalhes($id);

           
        $this->load->view('layout/header');
        $this->load->view('busca/detalhes', $data);
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
