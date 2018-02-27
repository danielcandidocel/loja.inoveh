<?php

class carrinhocontroller extends controller {
    
    public function index(){
        $dados = array();
        $c = new carrinho();
            //        Carrinho
        if(!isset($_SESSION['cartInoveh']) || (isset($_SESSION['cartInoveh']) && count($_SESSION['cartInoveh']) == 0)) {
            unset($_SESSION['frete']);
            header("Location: ".BASE_URL);
            exit;
        }
        if(isset($_SESSION['cartInoveh'])){
            $qt = 0;
            foreach ($_SESSION['cartInoveh'] as $qtd){
                $qt += intval($qtd);
            }
            $dados['qt_carrinho'] = $qt;
            
            $dados['lista'] = $c->getList();
            
            $this->loadTemplate('carrinho', $dados);
        } else {
            $dados['carrinho'] = 0;
            $this->loadTemplate('home', $dados);
        }
//        $dados['valor_carrinho'] = $cart->getSubTotal();
      
        
        
    }

    public function add() {
        $dados = array();
       if(!empty($_POST['id_produto'])) {
            $id = intval($_POST['id_produto']);
            $qt = intval($_POST['qt_produto']);  
            
            //incluir os produtos em uma SESSION
            if(!isset($_SESSION['cartInoveh'])) {
                $_SESSION['cartInoveh'] = array();             
            }
            
            if(isset($_SESSION['cartInoveh'][$id])) {
                $_SESSION['cartInoveh'][$id] += $qt;
            } else {
                $_SESSION['cartInoveh'][$id] = $qt;
            }            
        }
        header("Location: ".BASE_URL.'#article-home');
    }
   
    public function dell() {
        unset($_SESSION['cartInoveh']);
        header("Location: ".BASE_URL);
    }
}

