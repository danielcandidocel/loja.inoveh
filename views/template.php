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
        <div class="container">
            <div class="logo">
                <a href="">
                    <img src="<?php echo BASE_URL; ?>assets/images/logo_inoveh.png" />
                </a>
            </div>
            <div class="topo">
                <div class="nav1">
                    <nav>
    <!--                    <div class="menuMobile">
                            <div class="mm_line"></div>
                            <div class="mm_line"></div>
                            <div class="mm_line"></div>
                        </div>-->
                        <ul>
                            <li><a href="">Login ou Cadastre-se</a></li>
                            <li><a href="">Meus Pedidos</a></li>
                            <li><a href="">Central de Atendimento</a></li>
                            <li><a href="" id="televendas">Televendas (35) 99999-9999</a></li>                            
                        </ul>
                    </nav>
                </div>
                <div class="nav2">
                    <div class="buscar">
                        <input type="text" name="search" />
                        <button>Buscar</button>
                    </div>
                    <div class="cart">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <div class="cartqt">
                            <?PHP echo (isset($viewData['qt_carrinho']))?$viewData['qt_carrinho']:'0';?>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </header>
    <div class="menu">
<!--            <nav>
                    <div class="menuMobile">
                        <div class="mm_line"></div>
                        <div class="mm_line"></div>
                        <div class="mm_line"></div>
                    </div>
                <ul>
                    <li class="active"><a href="">Balança</a></li>
                    <li><a href="">Automação</a></li>
                    <li><a href="">Informática</a></li>
                    <li><a href="">Suprimento</a></li>                            
                </ul>
            </nav>-->
        </div>
    <section id="banner">
        
    </section>
    <section id="corpo">
        <div class="container">
            
        </div>
    </section>
              
     
<footer>
    
</footer>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.zoom.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script> 
    
</body>
</html>


<?php $this->loadViewinTemplate($viewName, $viewData);