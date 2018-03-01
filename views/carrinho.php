<script src="<?php echo BASE_URL; ?>assets/js/script_freteCarrinho.js" type="text/javascript"></script>
<div class="carrinho">
    <div class="carrinho-topo">
        <div class="continuar">
            <h4>Meu Carrinho de Compras</h4>
            <button><a href="<?php echo BASE_URL?>">Continuar Comprando</a></button>
        </div>
        <div class="finalizar">
            <form method="POST" action="<?php echo BASE_URL;?>carrinho/finalizar">
                <input type="hidden" name="finalizarFrete"  />
                <input type="hidden" name="finalizarTotal" />
                <input type="submit" value="Finalizar Compra" id="btn-finalizar"/>
            </form>
        </div>
    </div>
    <div class="carrinho-produtos">
        <div class="carrinho-cabecalho">
            <label id="produto-nome">Produto(s)</label>
            <label>Quantidade</label>
            <label>Valor Unitário</label>
            <label>Sub-Total</label>
            <label id="align2"></label>
        </div>
        <?php  $total = 0;?>
        <div class="carrinho-corpo">
            <?php foreach($lista as $produto):
                ?>
            <div class="carrinho-itens">
                <label id="produto-nome">
                 <img src="<?php echo BASE_URL;?>assets/images/produtos/<?php echo $produto['imagem'];?>" />
                <?php echo utf8_encode($produto['nome']);?>
                </label>
                <label><?php echo $produto['qt'];?></label>
                <label>R$ <?php echo number_format($produto['preco'], 2, ',', '.');?></label>
                <label id="align">R$ <?php 
                $sub = (floatval($produto['preco']) * intval($produto['qt']));
                echo number_format($sub, 2, ',', '.');?></label>
                <label id="align2"><a href="<?php echo BASE_URL;?>carrinho/delProduto/<?PHP echo $produto['id'];?>"><span class="glyphicon glyphicon-remove"></span></a></label>
                <?php $total += $sub;?>
            </div>
            
            <?php endforeach;?>
        </div>

    </div>
    <div class="carrinho-valores">
        <div class="carrinho-frete">
            <div class="calculo-frete">
                <?php if(!isset($frete) || empty($frete)):?>
                <span>Calcule o Valor do Frete:</span>                
                <form method="POST">
                    <input type="number" name="cep" maxlength="8" />
                    <input type="submit" id="ok" value="Calcular" />
                </form> 
                <span>Não sabe o frete? <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blanc">Clique Aqui</a></span>
                <?php else: ?>
                    <?php if ($frete['erro'] != '0'):?>
                        <span id="cepIncorreto">CEP Incorreto</span>
                        <a href="<?php echo BASE_URL?>carrinho/freteDel" id="recalcular">Recalcular</a>
                    <?php else: ?>
                        <span>Valor do Frete: <strong>R$ <input type="text" id="freteFinalizar" value="<?php echo $frete['preco'];?>"/></strong></span>
                        <span>Prazo Estimado: <strong><?php echo $frete['prazo'];?> dias</strong></span>
                        <a href="<?php echo BASE_URL?>carrinho/freteDel" id="recalcular">Recalcular</a>
                    <?php endif;?>
                <?php endif;?>
                
            </div>
            <div class="msg-frete">
                <span><strong>Atenção: </strong>O Prazo começa a contar  a partir  da aprovação do Pagamento.</span>
            </div>
        </div>
        <div class="carrinho-total">
            <div class="total-produtos">
                <label>Total dos Produtos</label>
                <input type="hidden" id="valorCompra" value="<?php echo $total;?>" />
                <label>R$ <?php echo number_format($total, 2, ',', '.');?></label>
            </div>
            <div class="total-frete">
                <label>Valor do Frete</label>
                
                <label id="freteTotal"></label>
            </div>
            <div class="total-compra">
                <label>Total da Compra</label>
                
                <label id="totalCompra"> Calcule o Frete</label>
            </div>
            <div class="cancelar-compra">
                <button><a href="<?php echo BASE_URL?>carrinho/dell">Cancelar Compra</a></button>
            </div>
        </div>
    </div>
    <div class="carrinho-rodape">
        <div class="continuar">
            <button><a href="<?php echo BASE_URL?>">Continuar Comprando</a></button>
        </div>
        <div class="finalizar">
            <form method="POST" action="<?php echo BASE_URL;?>carrinho/finalizar">
                <input type="hidden" name="finalizarFrete"  />
                <input type="hidden" name="finalizarTotal" />
                <input type="submit" value="Finalizar Compra" id="btn-finalizar"/>
            </form>
        </div>
    </div>
    <div class="carrinho-ofertas">
        <div class="carrinho-ofertas-produtos">
            
        </div>
    </div>
</div>
