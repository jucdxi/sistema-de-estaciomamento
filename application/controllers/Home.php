<?php
	defined('BASEPATH') OR exit('Ação não permitida'); //não permite acesso direto ao scripit

	class Home extends CI_Controller
	{
		
		public function index()
		{
			$this -> load -> view ('home/index');
		}
	}
?>