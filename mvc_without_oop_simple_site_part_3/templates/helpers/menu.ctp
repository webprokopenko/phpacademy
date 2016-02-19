<div class="main-menu">
<?php foreach($menu as $item_name => $item){ ?>
    <a href="<?=$item['url']?>" <?php if ( $item['is_active'] ) { ?> class="menu-item-active" <?php } ?> ><?=$item_name?></a>
<?php } ?>
</div>