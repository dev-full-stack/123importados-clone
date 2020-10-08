<?php 
    class Pagamento extends Model{
        public function getPagamentos(){
            $array = array();
            
            $sql = $this->connect->prepare("SELECT * FROM `categorias`");
            $sql->execute();
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
    }
?>