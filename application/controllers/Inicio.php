<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		            $this->load->library('session');

            $usuario = array(
                    'nome'  => 'TESTE',
                    'email'     => 'kjkjk',
                    'logado' => TRUE
            );

            $this->session->set_userdata($usuario);


		$this->load->view('layout/header');
		$this->load->view('inicio');
		$this->load->view('layout/footer');
	}

	public function casamentos ()
	{
		$this->load->view('layout/header');
		$this->load->view('casamentos');
		$this->load->view('layout/footer');	
	}

	public function orcamentos ()
	{
		$this->load->view('layout/header');
		$this->load->view('orcamentos');
		$this->load->view('layout/footer');	
	}

}
