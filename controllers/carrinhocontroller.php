<?php

class carrinhocontroller extends controller {
    public function index() {
        $dados = array();
      
        
        $this->loadTemplate('carrinho', $dados);
    }
   
}

