<?php

class carrinhocontroller extends controller {
    public function index(){}

    public function add() {
        $dados = array();
      if($_POST['qt_produto']){
          $dados['qt'] = addslashes($_POST['qt_produto']);
          $dados['id'] = addslashes($_POST['id_produto']);
      }
        
        $this->loadTemplate('carrinho', $dados);
    }
   
}

