<?php

class produtocontroller extends controller {
    
  

    public function index() {    
        header("Location: ".BASE_URL);
    }
    public function abrir($slug) {
        $dados = array();
        $p= new produtos();
        
        $dados['produto'] = $p->getInfoProduto($slug);
        
        
        $this->loadTemplate('produto', $dados);//loadView é uma função do arquivo core/controller.php.
    }
   
}

