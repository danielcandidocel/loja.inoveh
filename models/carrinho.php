<?php
class carrinho extends model {

    public function getList(){
        $array = array();
        
        $p = new produtos();
        
        if(isset($_SESSION['cartInoveh'])){
        $cart = $_SESSION['cartInoveh'];
        
            foreach ($cart as $id => $qt){
                
                $info = $p->getInfo($id);
                $imagem = $p->getImage($id);
                
                $array[] = array(
                    'id' => $id,
                    'qt' => $qt,
                    'preco' => $info['valor_por'],
                    'nome' => $info['nome'],
                    'imagem' => $imagem[0]['url'],
                    'peso' => $info['peso'],
                    'altura' => $info['altura'],
                    'largura' => $info['largura'],
                    'comprimento' => $info['comprimento'],
                    'diametro' => $info['diametro'],
                    'slug' => $info['slug']
                );
            }
        }
        return $array;
    }
    
    public function getSubTotal() {
        $list = $this->getList();
        
        $sub = 0;
        
        foreach ($list as $item) {
            $sub += (floatval($item['preco']) * intval($item['qt']));
        }
        
        return $sub;
    }
    
    
}


