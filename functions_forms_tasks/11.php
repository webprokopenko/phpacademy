<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 03.05.2017
 * Time: 2:58 PM
 */
/**
 * <p>11. Написать функцию, которая в качестве аргумента принимает строку,
 *
 *и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</p>
 */
mb_internal_encoding("UTF-8");
function mb_ucfirst(&$text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}

function to_upper($str){
    $arr = explode('.',$str);
    $array = array_map('mb_ucfirst',$arr);
    var_dump($array);
}
$str = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
to_upper($str);
