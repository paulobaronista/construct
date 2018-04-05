<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'REFORME JA - CONSTRUCT';
		$data['description'] = 'Oportunidade única em Reformas e obras completas, feitas de um modo inteligente e sob medida.';
		$data['keywords'] = 'reformas, obras, desconto em reforma, desconto em obra, pintura, obra residencial, reforma residencial, obra comercial, reforma coemrcial';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'home_view';
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/home.php */