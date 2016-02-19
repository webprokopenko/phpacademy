<?php
foreach($data['goods'] as $id => $item){
?>

    <div>
        Название товара: <?=$item['name']?><br/>
        <img src="<?=$item['photo']?>" width="200" />
        <br/> Цена: <?=$item['price']?> грн.<br/>
    </div>

<?php
}

?>