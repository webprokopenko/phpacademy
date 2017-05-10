<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 05.05.2017
 * Time: 12:08 PM
 */
function &array_find_value($needle,&$haystack){
    foreach ($haystack as $key => $value) {
        if ($needle == $value)
            return $haystack[$key];
    }
}
function array_find_val($needle,$haystack){
    foreach ($haystack as $key => $item) {
        if ($needle == $item)
            return $haystack[$key];
    }
}

$arr = array(1,2,3,4,5);
$var = array_find_value(3,$arr);
echo $var;
$var = 14;
var_dump($arr);
echo $var;