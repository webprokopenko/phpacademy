<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 03.05.2017
 * Time: 11:36 AM
 */

function callables($text=''){
    echo $text."<br>";
}

$res = call_user_func('callables','SEND TEXT IN FUNCTION');
function callables2(){
    $count = func_num_args();
    foreach (func_get_args() as $key => $item) {
        echo "ID Argument: ".$key." Value: ".$item."<br>";
    }
    echo "Count of Arguments: ".$count;
    return $count;
}
$array = array(11=>'test',1=>16,'Key'=>'value');
$count = call_user_func_array('callables2',$array);
