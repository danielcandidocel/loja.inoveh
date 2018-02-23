<div class="buscar">
<?php 
if($contador == 1): ?>
    <h3 id="buscar">Não encontrou nenhum resultado para "<?php echo $_GET['b'];?>"</h3>
    <a href="<?php echo BASE_URL;?>">Limpar Busca</a>
<?php else:  ?>
<h3 id="buscar">Resultado(s) para "<?php echo $_GET['b'];?>"</h3>

<section class="produtos-busca">
    
    <?php foreach ($busca as $produto): ?>
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

</section>
<?php endif; ?>
</div>