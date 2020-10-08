<?php
    class produtoController extends Controller{
        public function index($prod){
            if(!empty($prod)){
                $dados = array();
                
                $p = new Produto();
                $dados['produto'] = $p->getProduto($prod);
                
               if(isset($_POST['qt'])){                   
                   if(isset($_SESSION['id'])){
                       $c = new Carrinho();
                       $c->addCart($prod);
                       header("Location:".BASE_URL."carrinho");
                   }else{
                       header("Location: ".BASE_URL."login");
                   }
               }
                
                $this->loadTemplate("produto", $dados);
            }else{
                header("Location".BASE_URL);
            }
        }
    }
?>