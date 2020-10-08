<?php 
    class userController extends Controller{
        public function index(){
            if(isset($_SESSION['logged'])){
                $dados = array();
                $this->loadTemplate("minhaconta", $dados);
            }else{
                header("Location: ".BASE_URL."login");
            }
        }
    }
?>