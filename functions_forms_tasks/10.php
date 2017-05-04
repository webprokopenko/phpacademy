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
    $unique2 = 0;
    $result_array = array();

    foreach ($words as $key1 => $word1) {
        foreach ($words as $key2 => $word2) {
            if ($word1 == $word2){
                if (!isset($result_array[$word1]))
                {
                    $result_array[$word1]=1;
                    $unique2++;
                }
                else
                {
                    $result_array[$word1]++;
                    $unique2--;
                }

                unset($words[$key2]);
            }
        }
    }

    foreach ($result_array as $item) {
        if ($item == 1)
            $unique++;
    }
    echo $unique2;
    return $unique;
}
$ar2 = count_unique_words('test1 test2 test3 test4 test4 test5 test5 test6');
print_r($ar2);

