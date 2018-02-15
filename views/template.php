<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=0" />
        
  
        
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
        <script src="<?php echo BASE_URL; ?>assets/js/script.js" type="text/javascript"></script>
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
                        <li id="tel">Televendas (35) 99999-9999</li>
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

              
     
<footer>
    
</footer>
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
    </script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script> 
    
</body>
</html>


<?php $this->loadViewinTemplate($viewName, $viewData);