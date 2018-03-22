<?php
class categorias extends model {
    
    public function getCategorias(){
        $array = array();
        
        $sql = "SELECT * FROM categorias ORDER BY nome ASC";
        $sql = $this->db->query($sql);
        
         if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
            foreach ($array as $key => $cat){
                
                $sql = "SELECT * FROM produtos WHERE categoria = :cat";
                $sql = $this->db->prepare($sql);
                $sql->bindValue("cat", $cat['id']);
                $sql->execute();
                    if($sql->rowCount() > 0) {
                        $array[$key]['produto'] = $sql->fetchAll();
                    }
            }
                
        }
        
        
        return $array;
    }
    
}