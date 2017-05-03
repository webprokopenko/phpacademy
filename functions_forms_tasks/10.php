<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 03.05.2017
 * Time: 2:27 PM
 */
/**
 * <p>10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.</p>
 */
function count_unique_words($str){
    $words = explode(' ',$str);
    $unique = 0;

    for ($i=0;$i<count($words);$i++){
        for ($j=0;$j<count($words);$j++){
            if ($words[$i] == $words[$j] && ($i != $j)){}
                //echo $words[$i]." = ".$words[$j]."<br>";
            else
                echo "Unique :". $words[$i];
        }
        echo "<br>";
    }
    return $unique;
}
count_unique_words('test string test');
