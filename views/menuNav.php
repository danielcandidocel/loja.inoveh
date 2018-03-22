<script src="<?php echo BASE_URL; ?>assets/js/script_menuNav.js" type="text/javascript"></script>
<div class="menu">
    <nav>
        <div class="menuMobile">
            
            <div class="mm_line"></div>
            <div class="mm_line"></div>
            <div class="mm_line"></div>
        </div>
        <div class="titulo-categoria">
            <span>Categorias</span>
        </div>
        <div class="categorias">
            <ul>
                <?php 
                $margin = 192;
                foreach ($cat as $categoria):?>
                <li><a href=""><?php echo utf8_encode($categoria['nome']);?></a><i class="fas fa-angle-right" style="text-align: right"></i><div class="dropdown-categorias" style="margin-top: <?php echo $margin;?>px">
                  <?php foreach ($categoria['produto'] as $produto):?>
                        <a href=""><?php 
                               
                        echo utf8_encode($produto['nome']);?></a>
                        <?php endforeach;?>
                </div></li>
                
                <?php $margin -=35; endforeach; ?>
            </ul>
        </div>
    </nav>
</div>
