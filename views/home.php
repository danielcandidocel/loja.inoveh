
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    


<!--<section class="produtos-home">
    <?php foreach ($viewData['listHome'] as $produto): ?>
    <article id="article-home">
        <a href="<?php echo BASE_URL.'produto/abrir/'.$produto['slug'];?>">
        <div class="produto-home-imagem">
            <img src="<?php echo BASE_URL.'assets/images/produtos/'.$produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>"/>
        </div>
        <div class="produto-home-descricao">
            <h2><?php echo utf8_encode($produto['nome']); ?></h2>  
        </div>
        <div class="produto-home-marca">
            <p><?php echo $produto['marca']; ?></p>
        </div>
        <div class="produto-home-valor-de">
            <?php if(isset($produto['valor_de'])): ?>
            <p>De: R$ <?PHP echo number_format($produto['valor_de'], 2, ',', '.');?></p>
            <?php endif; ?>
        </div>
        <div class="produto-home-valor-por">
            <?php if(isset($produto['valor_de'])): ?>
            <p>Por: </p>
            <?php endif; ?>
            <strong>R$ <?PHP echo number_format($produto['valor_por'], 2, ',', '.');?></strong>
        </div>
        <div class="produto-home-add-to-cart">
            <a href="<?php echo BASE_URL; ?>carrinho">
                <div class="add-cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <p>Adicionar no </p><strong>Carrinho</strong>
                </div>
            </a>
        </div>
        <div class="produto-home-obs">
            <p>* Produto distribuido por <?php echo utf8_encode($produto['distribuidor']); ?></p>
        </div>
        </a>
    </article>
    <?php endforeach; ?>

</section>-->


    <section id="secao-home">
        <div class="titulo">
            <h1>Produtos em Destaque</h1>
        </div>
        <div class="w3-content w3-display-container">
            <?php 
                $qt = 0;
                $p = 0;
            ?>
            <div class="w3-display-container mySlides">
                <section class="produtos-home">
                    <?php
                        while ($qt < $viewData['totalProdutos'][0]):
                        if($p==5): 
                    ?>
                </section>
            </div>

            <div class="w3-display-container mySlides">
                <section class="produtos-home">
                        <?php $p= 0;
                            endif;
                        ?>
                        <article  id="article-home">
                            <a href="<?php echo BASE_URL.'produto/abrir/'.$viewData['listHome'][$qt]['slug'];?>">
                            <div class="produto-home-imagem">
                                <img src="<?php echo BASE_URL.'assets/images/produtos/'.$viewData['listHome'][$qt]['imagem']; ?>" alt="<?php echo $produto['nome']; ?>"/>
                            </div>
                            <div class="produto-home-descricao">
                                <h2><?php echo utf8_encode($viewData['listHome'][$qt]['nome']); ?></h2>  
                            </div>
                            <div class="produto-home-marca">
                                <p><?php echo $viewData['listHome'][$qt]['marca']; ?></p>
                            </div>
                            <div class="produto-home-valor-de">
                                <?php if(isset($viewData['listHome'][$qt]['valor_de'])): ?>
                                <p><del>De: R$ <?PHP echo number_format($viewData['listHome'][$qt]['valor_de'], 2, ',', '.');?></del></p>
                                <?php endif; ?>
                            </div>
                            <div class="produto-home-valor-por">
                                <?php if(isset($viewData['listHome'][$qt]['valor_de'])): ?>
                                <p>Por: </p>
                                <?php endif; ?>
                                <strong>R$ <?PHP echo number_format($viewData['listHome'][$qt]['valor_por'], 2, ',', '.');?></strong>
                            </div>
                            <div class="produto-home-add-to-cart">
                                <a href="javascript:;" onclick="addCart(<?php echo $viewData['listHome'][$qt]['id'];?>)">
                                    <div class="add-cart">
                                        <span class="glyphicon glyphicon-shopping-cart"></span>
                                        <p>Adicionar no </p><strong>Carrinho</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="produto-home-obs">
                                <p>* Produto distribuido por <?php echo utf8_encode($viewData['listHome'][$qt]['distribuidor']); ?></p>
                            </div>
                            </a>
                        </article>
                    <?php $qt = $qt+1;
                        $p = $p+1;
                        endwhile;
                    ?>
                </section>
            </div>
            <div class="button-prev">
                <button class="button-slide1" onclick="plusDivs(-1)">&#10094;</button>
            </div>

            <div class="button-next">
                <button class="button-slide2" onclick="plusDivs(1)">&#10095;</button>
            </div>
        </div>
    </section>
    
    <section id="secao-home">
        <div class="titulo">
            <h1>Categoria X</h1>
        </div>
        <div class="w3-content w3-display-container">
            <?php 
                $qt = 0;
                $p = 0;
            ?>
            <div class="w3-display-container mySlides2">
                <section class="produtos-home">
                    <?php
                        while ($qt < $viewData['totalProdutos'][0]):
                        if($p==5): 
                    ?>
                </section>
            </div>
        <div class="w3-display-container mySlides2">
            <section class="produtos-home">
                    <?php $p= 0;
                    endif;
                    ?>
                <article  id="article-home">
                    <a href="<?php echo BASE_URL.'produto/abrir/'.$viewData['listHome'][$qt]['slug'];?>">
                        <div class="produto-home-imagem">
                            <img src="<?php echo BASE_URL.'assets/images/produtos/'.$viewData['listHome'][$qt]['imagem']; ?>" alt="<?php echo $produto['nome']; ?>"/>
                        </div>
                        <div class="produto-home-descricao">
                            <h2><?php echo utf8_encode($viewData['listHome'][$qt]['nome']); ?></h2>  
                        </div>
                        <div class="produto-home-marca">
                            <p><?php echo $viewData['listHome'][$qt]['marca']; ?></p>
                        </div>
                        <div class="produto-home-valor-de">
                            <?php if(isset($viewData['listHome'][$qt]['valor_de'])): ?>
                            <p><del>De: R$ <?PHP echo number_format($viewData['listHome'][$qt]['valor_de'], 2, ',', '.');?></del></p>
                            <?php endif; ?>
                        </div>
                        <div class="produto-home-valor-por">
                            <?php if(isset($viewData['listHome'][$qt]['valor_de'])): ?>
                            <p>Por: </p>
                            <?php endif; ?>
                            <strong>R$ <?PHP echo number_format($viewData['listHome'][$qt]['valor_por'], 2, ',', '.');?></strong>
                        </div>
                        <div class="produto-home-add-to-cart">
                            <a href="javascript:;" onclick="addCart()">
                                <div class="add-cart">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    <p>Adicionar no </p><strong>Carrinho</strong>
                                </div>
                            </a>
                        </div>
                        <div class="produto-home-obs">
                            <p>* Produto distribuido por <?php echo utf8_encode($viewData['listHome'][$qt]['distribuidor']); ?></p>
                        </div>
                    </a>
                </article>
                    <?php $qt = $qt+1;
                        $p = $p+1;
                        endwhile;
                    ?>
            </section>
        </div>

        <div class="button-prev">
            <button class="button-slide1" onclick="plusDivs2(-1)">&#10094;</button>
        </div>

        <div class="button-next">
            <button class="button-slide2" onclick="plusDivs2(1)">&#10095;</button>
        </div>

        </div>
    </section>
</div>

<div id="modalAddCart" class="modal fade" role="dialog">
    <div class="modal-dialog" id="modalAddProduto">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modalAddCart">
                    <div class="infomodal">
                        
                    </div>
                    <div class="formAdd">
                        <form method="POST" class="addtocartform" action="<?php echo BASE_URL; ?>carrinho/add">
                            <input type="hidden" name="id_produto" value="">
                            <input type="hidden" name="qt_produto" value="1" >
                            <input type="hidden" name="valor_produto" value="">
                            <button data-action="decrease">-</button>
                            <input type="text" name="qt" value="1" class="addtocart_qt"  disabled />
                            <button data-action="increase">+</button><br/><br/>
                            <input class="add-to-cart" type="submit" value="Adicionar" />
                        </form>
                    </div>
                </div>
                <a href="javascript:;" onclick="fechar_modalAddCart()"><span>Cancelar</span></a>
            </div>
        </div>
    </div>
</div>
