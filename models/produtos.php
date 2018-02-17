<?php
class produtos extends model {
    
    public function getProdutosHome() {
        $array = array();
        
        $sql = "SELECT *, (select imagem_produto.url from imagem_produto where imagem_produto.id_produto = produtos.id)as imagem, (select marcas.nome from marcas where marcas.id = produtos.id_marca) as marca, (select distribuidor.nome from distribuidor where distribuidor.id = produtos.id_distribuidor) as distribuidor FROM produtos ORDER BY RAND() LIMIT 6";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
            
        }
        
        return $array;
    }
}