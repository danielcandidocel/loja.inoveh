<section class="produto">
    <article>
        <div class="title">
            <h1> <?php echo utf8_encode($produto['nome']);?></h1>
        </div>
        <div class="links">
            <a href="">Ver Descrição Completa</a> 
            <span>|</span>
            <a href=""><?php echo $produto['marca'];?></a>
        </div>
        <div class="info-produto">
            <div class="imagens-produto">
                <div class="imagem-destaque">
                    <img src="<?php echo BASE_URL.'assets/images/produtos/'.$produto['imagens'][0]['url'];?>" />
                </div>
                <div class="imagens-slide">
                    <?php foreach($produto['imagens'] as $imagens) :?>
                    <a href=""><img src="<?php echo BASE_URL.'assets/images/produtos/'.$imagens['url'];?>" /></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="info-shop">
                <div class="valor_de">
                <?php if ($produto['valor_de'] > 0): ?>
                <span>De R$ <strong id="de"><?php echo number_format($produto['valor_de'], 2, ',', '.');?></strong></span>
                    <?php endif; ?> 
                </div>
                <div>
                <span>Por R$ <strong id="por"><?php echo number_format($produto['valor_por'], 2, ',', '.');?></strong> à vista</span>
                </div>
                <div>
                    <form method="POST" class="addtocartform" action="<?php echo BASE_URL; ?>cart/add">
                        <input type="hidden" name="id_produto" value="<?php echo $produto['id']; ?>"/>            
                        <input type="hidden" name="qt_produto" value="1" />
                        <input type="hidden" name="valor_produto" value="<?php echo number_format($produto['preco'], 2, ',', '.');?>"/>
                        <button data-action="decrease">-</button>
                        <input type="text" name="qt" value="1" class="addtocart_qt"  disabled />
                        <button data-action="increase">+</button><br/><br/>
                        <input class="add-to-cart" type="submit" value="Adicionar ao Carrinho" />
                    </form>
                </div>
                <div class="retire">
                    <span id="retire">Retire na Loja com Frete Gratis! <a href="">Saiba Mais</a></span>
                </div>
                <div class="frete">
                    <span>Consulte Frete e Prazo:</span>
                    <form method="POST">
                        <input type="number" name="cep" maxlength="8" />
                        <input id="ok" type="submit" value="Calcular" />
                    </form> 
                    <span>Não sabe o frete? <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blanc">Clique Aqui</a></span>
                </div>
                
            </div>
        </div>
    </article>
    <hr>
</section>







<?PHP // $this->loadView('descricao_produto1', $viewData); ?>