<?php

class homecontroller extends controller {
 
    public function index() {
        $filtros= array();//variavel para atualização dos filtros
        $cat = new categorias();
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
        $dados['categorias_produtos'] = $cat->getCategorias();
//        echo '<pre>';
//         print_r($dados['categorias_produtos']);
//         exit();
       
//        $dados['valor_carrinho'] = $cart->getSubTotal();
        
        
//        $categorias = new categorias();
//        $widget = new widget();
//        
//        $dados = $widget->dadosTemplate();
//        
//        $fb = new Facebook\Facebook([
//            'app_id' => '126206881515613',
//            'app_secret' => 'db14533b745e0f9a2495cc21e1f2ed0b',
//            'default_graph_version' => 'v2.11'
//        ]);
//        
//        $helper = $fb->getRedirectLoginHelper();
//        
//        $permissions = array('email');
//        
//        $loginurl = $helper->getLoginUrl(BASE_URL.'fb/calback', $permissions);
//        $dados['loginurl'] = $loginurl;
//        
//        $f = new filtros();
//        
//         $filtros = array('categoria'=>'');
//        if(!empty($_GET['filtro']) && is_array($_GET['filtro'])) {
//            $filtros = $_GET['filtro'];
//        }
        
        
//        $paginaAtual = 1;
//        $offset = 0;
//        $limit = 6;
              
//        if(!empty($_GET['p'])) {
//            $paginaAtual = $_GET['p'];//pega na url GET o resultado de p, conforme definido no link da paginação do home            
//        }     
         //        Filtros
//        $dados['filtros'] = $f->getFiltros($filtros);
//        $dados['filtros_selecionados'] = $filtros; //filtros selecionados pelo formulario GET
//        $dados['termoBusca'] = '';
        
//        $offset = ($paginaAtual * $limit) - $limit;
//        $dados['listaHome'] = $produtos->getProdutos($offset, $limit, $filtros);//pega todos produtos, definindo incio e limite
//        $dados['totalProdutos'] = $produtos->getTotalProdutos($filtros);//pegando o total de itens do produto para gerar a paginação.
//        $dados['numeroPaginas'] = ceil($dados['totalProdutos'] / $limit);//ceil arredonda pra cima
//        $dados['paginaAtual'] = $paginaAtual;//pagina atual para activar paginação
        $dados['totalProdutos'] = $p->getTotalProdutos();
        $dados['listHome'] = $p->getProdutosHome();
        
        $this->loadTemplate('home', $dados);//loadView é uma função do arquivo core/controller.php.
    }
   
}

