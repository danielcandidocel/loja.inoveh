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


