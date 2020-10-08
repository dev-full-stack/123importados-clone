<?php 
    class ofertasController extends Controller{
        public function index(){
            $dados = array();
            
            $p = new Produto();
            $dados['produtos'] = $p->getProdutos();
            
            $this->loadTemplate("ofertas", $dados);
        }
    }
?>