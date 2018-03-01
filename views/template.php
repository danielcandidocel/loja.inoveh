<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=0" />
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
        
        <!--Script para funcionar o Slider-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!--Scritp para funcionar a barra de rolagem do preço-->
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script> 
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
        
        <title>Inoveh Shop</title>
    </head>
<body>
    <header>
        <div class="topo">
            <div class="logo">
                <a href="<?php echo BASE_URL;?>">
                    <img src="<?php echo BASE_URL;?>assets/images/logo_inoveh.png" />
                </a>
            </div>
            <div class="topo-menu">
                <div class="topo-info">
                    <ul>
                        <li id="normal"><a href="">Faça Login ou Cadastre-se</a></li>
                        <li><a href="">Meus Pedidos</a></li>
                        <li><a href="">Central de Atendimento</a></li>
                        <li id="tel">Televendas (35) 3042-1849</li>
                    </ul>
                </div>
                <div class="busca">
                    <div class="campo-busca">
                        <form action="<?php echo BASE_URL?>produto/busca" method="GET">
                            <input type="text" id="busca" name="b" placeholder="Digite o que procura"/>
                            <input type="submit" value="Buscar" id="button" class="button"/>
                        </form>
                    </div>
                    <div class="cart">
                        <a href="<?php echo BASE_URL; ?>carrinho">
                            <div class="cartarea">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <div class="cartqt">
                                    <?PHP echo (isset($viewData['qt_carrinho']))?$viewData['qt_carrinho']:'0';?>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      <?php  $this->loadView('menuNav', array('cat'=>$viewData['categorias']));?>
    </header>
    
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
 
<footer>
    <div class="rodape">
        <div class="rod1">
            <img src="<?php echo BASE_URL; ?>assets/images/logo_inoveh_branco.png" />
            <p>Rua Esmeraldina Aquino Machado, 70<br/>
                Centro - Pouso Alegre / MG <br/>
                CEP 37550-000<br/>
                <a href="tel:03530421849">(35) 3042-1849</a><br/>
                contato@loja.inoveh.com.br</p>
        </div>
        <div class="rod2">
            <p>Institucional</p>
            <ul>
                <li><a href="">Política de Privacidade</a></li>
                <li><a href="">Tempo de Garantia</a></li>
                <li><a href="">Trocas e Devoluções</a></li>
                <li><a href="">Pagamentos</a></li>
                <li><a href="">Programa de Afiliados</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </div>
        <div class="rod3">
            <div class="rod3a">
                <p>Parcerias</p>
            <ul>
                <li><a href="">Inoveh Petros</a></li>
                <li><a href="">Simples Auditor</a></li>
                <li><a href="">Inoveh Web</a></li>
            </ul>
            </div>
            <div class="rod3b">
                <p>Redes Sociais</p>
                <div class="social">
                    <a href="https://www.facebook.com/inovehsolucoes/" target="_blanc"><img src="<?php echo BASE_URL; ?>assets/images/face.png" alt=""/></a>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5535999999999" target="_blanc"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp.png" alt=""/></a>
                    <a href="https://www.youtube.com/channel/UCZMHTPDbVnR7Edlj3fIh_LA" target="_blanc"><img src="<?php echo BASE_URL; ?>assets/images/youtube.png" alt=""/></a>
                </div>
            </div>
        </div>
        <div class="rod4">
            <div class="rod4a">
                <p>Formas de Pagamento</p>
                <img src="<?php echo BASE_URL; ?>assets/images/cartoes.png" alt=""/>
            </div>
            <div class="rod4b">
                <p>Segurança</p>
                <img src="<?php echo BASE_URL; ?>assets/images/selo_certisign.gif" alt=""/>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p> © Copyright 2018 - Inoveh Shop</p>
    </div>
</footer>
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
    </script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
    
    <script src="<?php echo BASE_URL; ?>assets/js/script_produto.js" type="text/javascript"></script>
    
    <script src="<?php echo BASE_URL; ?>assets/js/modais.js" type="text/javascript"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/slide_produtos_home.js" type="text/javascript"></script>
    
</body>
</html>


