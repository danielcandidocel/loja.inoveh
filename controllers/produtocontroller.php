<?php

class produtocontroller extends controller {
    
  

    public function index() {    
        
        header("Location: ".BASE_URL);
    }
    public function abrir($slug) {
        $dados = array();
        $cat = new categorias();
        $dados['categorias'] = $cat->getCategorias();
        //        Carrinho
        if(isset($_SESSION['cartInoveh'])){
            $qt = 0;
            foreach ($_SESSION['cartInoveh'] as $qtd){
                $qt += intval($qtd);
            }
            $dados['qt_carrinho'] = $qt;
        } else {
            $dados['carrinho'] = 0;
        }
//        $dados['valor_carrinho'] = $cart->getSubTotal();
        $p = new produtos();
        
        $dados['produto'] = $p->getInfoProduto($slug);
        
        $this->loadTemplate('produto', $dados);//loadView é uma função do arquivo core/controller.php.
    }
    
    public function freteDel($slug){
        unset($_SESSION['freteInoveh']);
        header("Location: ".BASE_URL."produto/abrir/".$slug);
    }
   
    public function consultarFrete(){
        $f = new frete();
         
        $frete = array();
      
       
        if($_POST['cep']) {
        $cep = intval($_POST['cep']);
        $frete_qt = intval($_POST['frete_qt']);
        $id_produto = intval($_POST['id_produto']);
       
        $frete = $f->calculoFrete($cep, $frete_qt, $id_produto);

         
        }
        echo json_encode($frete);         
        exit();
        
    }
    
    public function busca() {
        $dados = array();
        $p = new produtos();
        
//        Carrinho
        if(isset($_SESSION['cartInoveh'])){
            $qt = 0;
            foreach ($_SESSION['cartInoveh'] as $qtd){
                $qt += intval($qtd);
            }
            $dados['qt_carrinho'] = $qt;
        } else {
            $dados['carrinho'] = 0;
        }
//        $dados['valor_carrinho'] = $cart->getSubTotal();

    if(isset($_GET['b']) && !empty($_GET['b'])){
        $busca = addslashes($_GET['b']);
        $dados['busca'] = $p->buscar($busca);
    } 
    if (empty($dados['busca'])){
        $dados['contador'] = 1;
    } else {
        $dados['contador'] = 0;
    }
                   
        $this->loadTemplate('buscar', $dados);
    }
    
    public function getProdutoCart(){
        $p = new produtos();
         
        $array = array();
      
       
        if($_POST['id']) {
        $id = addslashes($_POST['id']);
               
        $array = $p->getInfoProdutoCart($id);

         
        }
        echo json_encode($array);         
        exit();
    }
}

