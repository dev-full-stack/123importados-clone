<?php 
	class categoriasController extends Controller{
		public function index(){
			header("Location: ".BASE_URL);
		}

		public function ver($cat){
            $dados = array();
            
            $p = new Produto();
            $dados['produtos'] = $p->getProdutos($cat);
            
            $this->loadTemplate("categoria", $dados);
        }
	}
?>