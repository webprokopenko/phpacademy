<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 03.05.2017
 * Time: 12:14 PM
 */
/**
 * Рекурсии – пишем аналог функции print_r() и count() с учетом вложенных массивов;
 */
$arr = array(1,3,4,'str',array(2,5,8,'str2'),13,11);

function user_print_r($arg,$str=''){
        foreach ($arg as $key=>$item) {
            if (is_array($item))
            {
                echo "Array( ";
                $str.="Array( ";
                user_print_r($item);
            }
            else
                echo  "[".$key."] =>". $item."<br>";
                $str.="[".$key."] =>". $item."<br>";
        }
        $str.=")";
    return $str;
}

echo "<br>";
echo user_print_r($arr);

function user_count(array $user_arrays){
    static $i=0; # Объяснить на премере статической переменной. что каждый раз если не статическая то заново создается такая переменная

    foreach ($user_arrays as $user_array) {
        if (!is_array($user_array))
            $i++;
        else
            user_count($user_array);
    }
    return $i;
}
$t=0;
echo user_count($arr);



