<?php
	defined('BASEPATH') OR exit('Ação não permitida'); //não permite acesso direto ao scripit

	class Home extends CI_Controller
	{
		
		public function index()
		{

			$data = array(
				'titulo' => 'Home'
			);

			$this -> load -> view ('layout/header', $data);
			$this -> load -> view ('home/index');
			$this -> load -> view ('layout/footer');

		}
	}
?>