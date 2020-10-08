<?php
	class erroController extends Controller{
		public function index(){
			$dados = array();
			$this->loadTemplate('erro', $dados);
		}
	}
?>