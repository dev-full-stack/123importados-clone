<?php 
    class Admin extends Model{
        public function login(){
            $array = array();
            
            if(isset($_POST['email']) && !empty($_POST['email'])){
                
                $sql = $this->connect->prepare("SELECT * FROM `admins` WHERE `email` = :email");
                $sql->bindValue(":email", $_POST['email']);
                $sql->execute();
                
                if($sql->rowCount() > 0){
                    $array = $sql->fetchAll();
                }
            }
            
            return $array;
        }
    }
?>