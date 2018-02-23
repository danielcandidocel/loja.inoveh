<?php
class produtos extends model {
    
    public function getProdutosHome() {
        $array = array();
        
        $sql = "SELECT *, (select imagem_produto.url from imagem_produto where imagem_produto.id_produto = produtos.id limit 1)as imagem, (select marcas.nome from marcas where marcas.id = produtos.id_marca) as marca, (select distribuidor.nome from distribuidor where distribuidor.id = produtos.id_distribuidor) as distribuidor FROM produtos ORDER BY RAND() LIMIT 6";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
            
        }
        
        return $array;
    }
    
    public function getTotalProdutos(){
        $array = array();
        
        $sql = "SELECT COUNT(*) as total_produtos FROM produtos";
        $sql = $this->db->query($sql);
            if($sql->rowCount() > 0) {
            $array = $sql->fetch();
            
        }
        
        return $array;
    }
    
    public function getInfoProduto($slug) {
        $array = array();
        
        $sql = "SELECT id FROM produtos WHERE slug = :slug";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":slug", $slug);
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
            $id = $array['id'];
                
            $sql = "SELECT *, (select marcas.nome from marcas where produtos.id_marca = marcas.id) as marca FROM produtos WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
            $array = $sql->fetch();

                foreach($array as $item) {//para cada item pegar todas as imagens do produtos
                    $array['imagens'] = $this->getImage($id);//pega as imagens pelo metodo getImage
                }            
            }
        }
        return $array;
    }
    
    public function getImage($id) {
        $array = array();
        
        $sql = "SELECT url FROM imagem_produto WHERE id_produto = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
    public function getInfo($id) {
        $array = array();
        
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        
        return $array;
    }
}