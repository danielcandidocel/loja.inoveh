<?php

class produtocontroller extends controller {
    
  

    public function index() {    
        header("Location: ".BASE_URL);
    }
    public function abrir($slug) {
        $dados = array();
        
        $p = new produtos();
        
        $dados['produto'] = $p->getInfoProduto($slug);
        
        $this->loadTemplate('produto', $dados);//loadView é uma função do arquivo core/controller.php.
    }
    
    public function freteDel($slug){
        unset($_SESSION['frete']);
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
}

