<?php 
	class Usuario extends Model{
	 	public function cadastro(){        
	 		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
				if (isset($_POST['snome']) && !empty($_POST['snome'])) {
					if (isset($_POST['email']) && !empty($_POST['email'])) {
						if (isset($_POST['senha']) && !empty($_POST['senha'])) {
							if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
								if (isset($_POST['rg']) && !empty($_POST['rg'])) {
									if (isset($_POST['dia']) && !empty($_POST['dia'])) {
										if (isset($_POST['mes']) && !empty($_POST['mes'])) {
											if (isset($_POST['ano']) && !empty($_POST['ano'])) {
												if (isset($_POST['sexo']) && !empty($_POST['sexo'])) {
                                                    $nome = addslashes($_POST['nome']);
                                                    $sn = addslashes($_POST['snome']);
                                                    $email = addslashes($_POST['email']);
                                                    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
                                                    $cpf = addslashes($_POST['cpf']);
                                                    $rg = addslashes($_POST['rg']);
                                                    $data_cad = Date("Y-m-d");
                                                    $data_nasc = $_POST['ano']."-".$_POST['mes']."-".$_POST['dia'];
                                                    
                                                    $sexo = addslashes($_POST['sexo']);

                                                    $sql = $this->connect->prepare("INSERT INTO `usuarios` (`nome`, `sobrenome`, `email`, `senha`, `data_cadastro`, `data_nasc`, `rg`, `cpf`, `sexo`) VALUES (:nome, :sn, :email, :senha, :data_cad, :data_nasc, :rg, :cpf, :sexo)");

                                                    $sql->bindParam(":nome", $nome);
                                                    $sql->bindParam(":sn", $sn);
                                                    $sql->bindParam(":email", $email);
                                                    $sql->bindparam(":senha", $senha);
                                                    $sql->bindParam(":data_cad", $data_cad);
                                                    $sql->bindParam(":data_nasc", $data_nasc);
                                                    $sql->bindParam(":rg", $rg);
                                                    $sql->bindParam(":cpf", $cpf);
                                                    $sql->bindParam(":sexo", $sexo);

                                                    $sql->execute();

                                                    echo "Cadastro realizado com sucesso!";
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
	 	}
        
        public function login(){
            $array = array();
            
            if(isset($_POST['email']) && !empty($_POST['email'])){
                
                $email = addslashes($_POST['email']);
                
                $sql = $this->connect->prepare("SELECT * FROM `usuarios` WHERE `email` = :email");
                $sql->bindValue(":email", $email);
                $sql->execute();
                
                if($sql->rowCount() > 0){
                    $array = $sql->fetchAll();
                }
            }
            
            return $array;
        }
	}
?>