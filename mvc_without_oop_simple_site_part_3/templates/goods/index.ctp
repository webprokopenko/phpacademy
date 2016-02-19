<h1>Наши товары:</h1>

<div class="goods-list clearfix">

<?php foreach($data['goods'] as $id => $item){ ?>

    <div class="product-item">
        <span class="product-name"><?=$item['name']?></span><br/>
        <div style="height:210px;">
            <img src="<?=$item['photo']?>" width="200" />
        </div>
        <br/> Цена: <?=$item['price']?> грн.<br/>
        <input type="button" onclick="alert('Товар добавлен в корзину!');" class="buy-button" value="Купить" />
    </div>

<?php } ?>

</div>