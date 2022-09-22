<?php  
	defined('BASEPATH') OR exit('Ação não permitida');

	
	class Usuarios extends CI_Controller
	{
 		public function index()
		{
			$data = array(
				'titulo' => 'Usuarios cadastrados',

				'usuarios' => $this->ion_auth->users()->result(), //pega todos os usuários
			);
			/*
			echo '<pre>';
			print_r($data['usuarios']);
			exit();*/  //teste chamada do db

			$this->load->view('layout/header', $data);
			$this->load->view('usuarios/index');
			$this->load->view('layout/footer');	
		}
	}
?>