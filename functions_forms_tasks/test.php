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

