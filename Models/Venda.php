<?php
    class Venda extends Model{
        public function getVendas(){
            $array = array();
            
            $sql = $this->connect->prepare("SELECT * FROM `vendas`");
            $sql->execute();
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
    }
?>