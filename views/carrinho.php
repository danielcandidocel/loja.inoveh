<div class="carrinho">
    <div class="carrinho-topo">
        <div class="continuar">
            <h4>Meu Carrinho de Compras</h4>
            <button><a href="">Continuar Comprando</a></button>
        </div>
        <div class="finalizar">
            <button><a href="">Finalizar Compra</a></button>
        </div>
    </div>
    <div class="carrinho-produtos">
        <div class="carrinho-cabecalho">
            <label id="produto-nome">Produto(s)</label>
            <label>Quantidade</label>
            <label>Valor Unitário</label>
            <label>Sub-Total</label>
        </div>
        <?php  $total = 0;?>
        <div class="carrinho-corpo">
            <?php foreach($lista as $produto):
                ?>
            <div class="carrinho-itens">
                <label id="produto-nome">
                 <img src="<?php echo BASE_URL;?>assets/images/produtos/<?php echo $produto['imagem'];?>" />
                <?php echo $produto['nome'];?>
                </label>
                <label id="align"><?php echo $produto['qt'];?></label>
                <label id="align">R$ <?php echo number_format($produto['preco'], 2, ',', '.');?></label>
                <label id="align"><?php 
                $sub = (floatval($produto['preco']) * intval($produto['qt']));
                echo number_format($sub, 2, ',', '.');?></label>
                <?php $total += $sub;?>
            </div>
            
            <?php endforeach;?>
        </div>
<!--        
        Total <?php echo $total;?>
        -->
    </div>
    <div class="carrinho-valores">
        <div class="carrinho-frete">
            
        </div>
        <div class="carrinho-total">
            
        </div>
    </div>
    <div class="carrinho-rodape">
        <div class="continuar">
        </div>
        <div class="finalizar">
            <button><a href="<?php echo BASE_URL?>carrinho/dell">Finalizar Compra</a></button>
        </div>
    </div>
    <div class="carrinho-ofertas">
        <div class="carrinho-ofertas-produtos">
            
        </div>
    </div>
</div>