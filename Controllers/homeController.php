<?php
	class homeController extends Controller{
		public function index(){
			$dados = array();
            
            $p = new Produto();
            $dados['produtos'] =$p->getProdutos();
            
			$this->loadTemplate('home', $dados);
		}
	}
?>