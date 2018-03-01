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
                <?php foreach ($cat as $categoria):?>
                <li><a href=""><?php echo utf8_encode($categoria['nome']);?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</div>
