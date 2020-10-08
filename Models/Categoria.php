<?php 
    class Categoria extends Model{
        public function getCategorias($cat = ''){
            $array = array();
            
            $sql = $this->connect->prepare("SELECT * FROM `categorias`");
            $sql->execute();
            
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            
            return $array;
        }
        
        public function addCategoria(){
            if(isset($_POST['cat']) && !empty($_POST['cat'])){
                $sql = $this->connect->prepare("INSERT INTO `categorias` (`nome`) VALUES (?)");
                $sql->bindParam("s", $_POST['cat']);
                $sql->execute();
            }
        }
    }
?>