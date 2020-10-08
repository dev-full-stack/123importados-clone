<?php
	class loginController extends Controller{
		public function index(){
			$dados = array();
            
            if(isset($_POST['senha'])){
                $senha = addslashes($_POST['senha']);
            }
            
            $u = new Usuario();
            $login = $u->login();
            
            if(!empty($login)){
                foreach($login as $dado){
                    if(password_verify($senha, $dado['senha'])){
                        $_SESSION['logged'] = true;
                        $_SESSION['id'] = $dado['id'];
                        $_SESSION['loja-user'] = $dado['email'];
                        $_SESSION['nome'] = $dado['nome'];
                        $_SESSION['sn'] = $dado['sobrenome'];
                        $_SESSION['sexo'] = $dado['sexo'];
                        header("Location: ".BASE_URL);
                    }
                }
            }
            
			$this->loadTemplate('login', $dados);
		}

		public function logout(){
			$_SESSION = array();
			session_destroy();
			header("Location: /");
		}
	}
?>