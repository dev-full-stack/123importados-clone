<?php
    class Produto extends Model{
        public function addProduto(){
            
        }
        
        public function getProdutos($cat = ''){
            $array = array();
            
            $sql = "SELECT * FROM `produtos` ORDER BY RAND()";
            
            if(!empty($cat)){
                $sql = substr($sql, 0, 25);
                $sql = $sql." WHERE `categoria` = '$cat'";
            }
            
            $sql = $this->connect->query($sql);
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
        
        public function getProduto($prod){
            $array = array();
            
            $sql = $this->connect->prepare("SELECT * FROM `produtos` WHERE `numero` = :num");
            $sql->bindParam(":num", $prod);
            
            $sql->execute();
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
    }
?>