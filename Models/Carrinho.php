<?php 
    class Carrinho extends Model{
        
        public function addCart($num){
            if((isset($_POST['qt']) && $_POST['qt'] > 0) && !empty($num)){
                $sql = $this->connect->prepare("INSERT INTO `carrinho` (`num_prod`, `user`, `quantidade`) VALUES (:num_prod, :usuario, :qt)");
                
                $sql->bindParam(":num_prod", $num);
                $sql->bindValue(":usuario", $_SESSION['id']);
                $sql->bindValue(":qt", $_POST['qt']);
                
                $sql->execute();
            }
        }
        
        public function getCarrinho(){
            $array = array();
            
            if(isset($_SESSION['id'])){
                $sql = $this->connect->prepare("SELECT * FROM `carrinho` WHERE `user` = :usuario");
                $sql->bindValue(":usuario", $_SESSION['id']);
                $sql->execute();

                if($sql->rowCount() > 0){
                    $array = $sql->fetchAll();
                }
            }
            
            return $array;
        }
        
        public function getProdCarrinho(){
            $array = array();
            
            if(isset($_SESSION['id'])){
                $sql = $this->connect->prepare("SELECT `num_prod` FROM `carrinho` WHERE `user` = :usuario");
                $sql->bindValue(":usuario", $_SESSION['id']);

                $sql->execute();

                $cart['carrinho'] = $sql->fetchAll();

                for($c = 0; $c < count($cart['carrinho']); $c++){
                    $carrinho[$c] = $cart['carrinho'][$c]['num_prod'];
                }

                $sql = $this->connect->prepare("SELECT * FROM `produtos` WHERE `numero` IN (".implode(",", $carrinho).")");
                $sql->execute();

                if($sql->rowCount() > 0){
                    $array = $sql->fetchAll();
                }
            }
            
            return $array;
        }
    }
?>