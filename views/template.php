<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=0" />
        
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
        
        <!--Script para funcionar o Slider-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!--Scritp para funcionar a barra de rolagem do preço-->
        
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
                <a href="">
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
                        <form>
                            <input type="text" id="busca" placeholder="Digite o que procura"/>
                            <input type="button" value="Buscar" id="button" class="button"/>
                        </form>
                    </div>
                    <div class="cart">
                        <a href="<?php echo BASE_URL; ?>cart">
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
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="">Balanças</li>
                    <li><a href="">Suprimentos</a></li>
                    <li><a href="">Informática</a></li>
                    <li style="border-right: 2px solid #FFF"><a href="">Automação</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="corpo">
        <section id="banner">
            <div class="container">
                <div id="slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo BASE_URL;?>assets/images/slide/imagem.jpg" alt="INOVEH" style="width:100%" />
                        </div>
                        <div class="item">
                            <img src="<?php echo BASE_URL;?>assets/images/slide/imagem1.jpg" alt="INOVEH" style="width:100%" />
                        </div>
                        <div class="item">
                            <img src="<?php echo BASE_URL;?>assets/images/slide/imagem.jpg" alt="INOVEH" style="width:100%" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="titulo">
            <h1>Produtos em Destaque</h1>
        </div>
        <section class="produtos-home">
            <?php foreach ($viewData['listHome'] as $produto): ?>
            <article>
                <div class="produto-imagem">
                    <img src="<?php echo BASE_URL.'assets/images/produtos/'.$produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>"/>
                </div>
                <div class="produto-descricao">
                    <h2><?php echo utf8_encode($produto['nome']); ?></h2>  
                </div>
                <div class="produto-marca">
                    <p><?php echo $produto['marca']; ?></p>
                </div>
                <div class="produto-valor-de">
                    <?php if(isset($produto['valor_de'])): ?>
                    <p>De: R$ <?PHP echo number_format($produto['valor_de'], 2, ',', '.');?></p>
                    <?php endif; ?>
                </div>
                <div class="produto-valor-por">
                    <?php if(isset($produto['valor_de'])): ?>
                    <p>Por: </p>
                    <?php endif; ?>
                    <strong>R$ <?PHP echo number_format($produto['valor_por'], 2, ',', '.');?></strong>
                </div>
                <div class="produto-add-to-cart">
                    <a href="">
                        <div class="add-cart">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <p>Adicionar no </p><strong>Carrinho</strong>
                        </div>
                    </a>
                </div>
                <div class="produto-obs">
                    <p>* Produto distribuido por <?php echo utf8_encode($produto['distribuidor']); ?></p>
                </div>
                 
            </article>
            <?php endforeach; ?>
            
        </section>
    </div>
              
     
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
                    <a href="https://www.facebook.com/inovehsolucoes/"><img src="<?php echo BASE_URL; ?>assets/images/face.png" alt=""/></a>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5535999999999"><img src="<?php echo BASE_URL; ?>assets/images/whatsapp.png" alt=""/></a>
                    <a href="https://www.youtube.com/channel/UCZMHTPDbVnR7Edlj3fIh_LA"><img src="<?php echo BASE_URL; ?>assets/images/youtube.png" alt=""/></a>
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
    <script src="<?php echo BASE_URL; ?>assets/js/script.js" type="text/javascript"></script>
    
</body>
</html>


<?php $this->loadViewinTemplate($viewName, $viewData);