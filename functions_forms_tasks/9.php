<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 03.05.2017
 * Time: 1:56 PM
 */
/**
 * <p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
 * Ввод текста реализовать с помощью формы.</p>
 */
$string = 'abcdefghiklmnopqrst';

function reverse_string(&$str){
    $str2='';
        for ($i=0;$i<strlen($str);$i++){
            $str2.=$str[strlen($str)-1-$i];
    }
    $str = $str2;
}
reverse_string($string);
echo $string;

print strrev($string); # Встроенная функция php