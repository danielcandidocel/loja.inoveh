<?php

class carrinhocontroller extends controller {
    
    public function index(){
        $dados = array();
        $c = new carrinho();
        $f = new frete();
        $frete = array();
        
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
            
            
        } else {
            $dados['carrinho'] = 0;
            $this->loadTemplate('home', $dados);
            exit();
        }

      
        if(!empty($_POST['cep'])) {
            $cep = intval($_POST['cep']);
            $frete = $f->calculoFreteCarrinho($cep);
            $_SESSION['frete'] = $frete;
        }
        
        if(!empty($_SESSION['frete'])) {
            $frete = $_SESSION['frete'];
        }
        
        $dados['frete'] = $frete;
        $this->loadTemplate('carrinho', $dados);
    }

    public function addCarrinho() {
        $dados = array();
        unset($_SESSION['frete']);
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
        header("Location: ".BASE_URL.'carrinho');
    }
    public function add() {
        $dados = array();
        unset($_SESSION['frete']);
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
    
    public function delProduto($id){
        if(!empty($id)) {
            unset($_SESSION['cartInoveh'][$id]);
            unset($_SESSION['frete']);
            
        }
        header("Location: ".BASE_URL."carrinho");
        exit;
    }
   
    public function dell() {
        unset($_SESSION['cartInoveh']);
        header("Location: ".BASE_URL);
    }
    
    public function freteDel() {
        if($_SESSION['frete']){
            unset($_SESSION['frete']);
        }
        header("Location: ".BASE_URL."carrinho");
        exit;
    }
    public function continuar(){
        unset($_SESSION['frete']);
        header("Location: ".BASE_URL);
    }
    public function finalizar(){
        $dados = array();
    
        if(!empty($_POST['finalizarFrete'])) {
            $dados['freteFinal'] = addslashes($_POST['finalizarFrete']);
             $dados['totalFinal'] = addslashes($_POST['finalizarTotal']);  
        }
        $this->loadTemplate('testes', $dados);
    }
}

