<?php
	class ajaxController extends Controller{
		public function index(){
			header("Location: ".BASE_URL."/erro");
		}

		public function cadastro(){
			$u = new Usuario();
			$u->cadastro();
		}
	}
?>