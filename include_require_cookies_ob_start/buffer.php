<?php

// Вычисление списка ТОП новостей - тяжелая операция, длительная
// не хочу это делать дважды
ob_start();
echo "ТОП Новости<br>";
$news_block = ob_get_clean();

echo "Заголовок<br>";
echo $news_block;
echo "КОНТЕНТ, основное содержимое <br>";
echo "Футер сайта<br>";
echo $news_block;