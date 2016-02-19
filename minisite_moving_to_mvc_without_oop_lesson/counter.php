<?php
// Изначально считаем, что это первая загрузка

// Первый вариант
/*$counter = 0;
if ( isset($_COOKIE['counter']) ){ // Кука уже стояла раньше?
	$counter = (int)$_COOKIE['counter'];
} */
// Второй вариант - тернарный оператор
$counter = isset($_COOKIE['counter']) ? (int)$_COOKIE['counter'] : 0;


// Пользователь загрузил страницу, увеличиваем
$counter++;
// Перезаписываем Cookie, ставим срок жизни - 5 секунд
setcookie('counter', $counter, time()+5); // 1970-01-01

echo "Вы зашли на страницу {$counter} раз";