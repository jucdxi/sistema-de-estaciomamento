<?php
	defined ('BASEPATH') OR exit ('Ação não permitda'); // não permite que acesse o script diretamente

	class Home extends CI_Controller{
		public function index (){
			$this->load->view('home/index');
		}
	} 

?>