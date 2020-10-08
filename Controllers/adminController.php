<?php
 class adminController extends Controller{
     public function index(){
         if(isset($_SESSION['logged'])){
             header("location: ".BASE_URL."erro");
         }elseif(!isset($_SESSION['adm-logged'])){
             header("Location: ".BASE_URL."admin/login");
         }else{
             $dados = array();
             
             $cat = new Categoria();
             $pag = new Pagamento();
             $pro = new Produto();
             $ven = new Venda();
             
             $dados['categorias'] = $cat->getCategorias();
             $dados['pagamentos'] = $pag->getPagamentos();
             $dados['produtos'] = $pro->getProdutos();
             $dados['vendas'] = $ven->getVendas();
             
             $this->loadTemplate("adm-page", $dados);
         }
     }
     
     public function login(){
         if(isset($_SESSION['adm-logged'])){
             header("Location: ".BASE_URL."admin");
         }else{
             $dados = array();
             
            if(isset($_POST['senha']) && !empty($_POST['senha'])){
                $senha = addslashes($_POST['senha']);
            }
             
             $a = new Admin();
             $login = $a->login();
             
             if(!empty($login)){
                 foreach($login as $dado){
                     if(password_verify($senha, $dado['password'])){
                         $_SESSION['adm-logged'] = true;
                         header("location: ".BASE_URL."admin");
                     }
                 }
             }
             
             $this->loadTemplate("login", $dados);
         }
     }
     
     public function adicionarCategoria(){     
         $c = new Categoria();
         $c->addCategoria();
     }
     
     public function logout(){
         $_SESSION = array();
         session_destroy();
         header("Location: ".BASE_URL."admin");
     }
 }
?>