
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<section class="produto">
    <article>
        <div class="title">
            <h1> <?php echo utf8_encode($produto['nome']);?></h1>
        </div>
        
        <div class="info-produto">
            <div class="imagens-produto">
                <div class="mainphoto">
                    <img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $produto['imagens'][0]['url']; ?>" />
                </div>
                <div class="galeria">
                     <?php foreach ($produto['imagens'] as $img): ?>
                    <div class="photo-item">
                       <img src="<?php echo BASE_URL; ?>assets/images/produtos/<?php echo $img['url']; ?>" />
                    </div>            
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="info-shop">
                <div class="links">
                    <a href=""><?php echo $produto['marca'];?></a>
                    <span>|</span>
                    <a href="#descricao">Ver Descrição Completa</a>
                </div>
                <div class="valor_de">
                <?php if ($produto['valor_de'] > 0): ?>
                <span>De R$ <strong id="de"><?php echo number_format($produto['valor_de'], 2, ',', '.');?></strong></span>
                    <?php endif; ?> 
                </div>
                <div>
                <span>Por R$ <strong id="por"><?php echo number_format($produto['valor_por'], 2, ',', '.');?></strong> à vista</span>
                </div>
                <div class="frete_qt">
                    <form method="POST" class="addtocartform" action="<?php echo BASE_URL; ?>carrinho/addCarrinho">
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
                        <form method="POST" class="qt">
                            <input type="hidden" name="id_produto" value="<?php echo $produto['id']; ?>" />
                            <input type="hidden" name="frete_qt" value="1" />
                            <input type="number" name="cep" maxlength="8" />
                            <a href="javascript:;" id="button-calcular" onclick="calcularFrete()"><span id="ok">Calcular</span></a>
                        </form> 
                        <span>Não sabe o frete? <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blanc">Clique Aqui</a></span>
                        
                        
                </div>
                
            </div>
        </div>
    </article>
    <hr>
</section>
  

  
<div id="modalFrete" class="modal fade" role="dialog">
    <div class="modal-dialog" id="mdFrete">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Frete</h2><br/>
                <div class="freteModal">
                    
                </div>
                <a href="javascript:;" onclick="fechar_modalCep()"><span>Fechar</span></a>
            </div>
        </div>
    </div>
</div>

<div id="descricao"></div>
        <?PHP //  $this->loadViewDescricao($produto['slug'], $viewData); ?>