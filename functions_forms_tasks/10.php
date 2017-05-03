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
    $result_array = array();

    foreach ($words as $key1 => $word1) {
        foreach ($words as $key2 => $word2) {
            if ($word1 == $word2){
                if (!isset($result_array[$word1]))
                    $result_array[$word1]=1;
                else
                    $result_array[$word1]++;

                unset($words[$key2]);
            }
        }
    }

    foreach ($result_array as $item) {
        if ($item == 1)
            $unique++;
    }
    return $unique;
}
$ar2 = count_unique_words('test1 string test test1 test test test string1 task tost');
print_r($ar2);
