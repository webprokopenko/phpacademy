<?php
/**
 * Created by PhpStorm.
 * User: PHP Academy
 * Date: 04.02.2016
 * Time: 19:22
 */

define('DS', DIRECTORY_SEPARATOR);

echo "<pre>";
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
print_r($_FILES);


$dir = __DIR__ . DS . 'uploads' ;
if ( !is_dir($dir) ){
    mkdir($dir);
}


if ( $_FILES && isset($_FILES['photo']) ){
    // Для одного файла, если только один
    //move_uploaded_file($_FILES['photo']['tmp_name'], $dir . DIRECTORY_SEPARATOR . $_FILES['photo']['name']);

    foreach($_FILES['photo']['tmp_name'] as $key => $tmp_name){
        move_uploaded_file($tmp_name, $dir . DS . $_FILES['photo']['name'][$key]);
    }
}

die;




function saveForm($data, $serialize = 0){
    if ( !$serialize ){
        $str = '';
        foreach ($data as $key => $value) {
            $str .= "{$key}={$value}" . PHP_EOL;
        }
        file_put_contents('forms.dat', $str, FILE_APPEND);
    } else {
        $str = serialize($data);
        file_put_contents('serialize.dat', $str);
    }
}



if ( $_GET ){
    if ( !isset($_POST['agree']) ){
        die('Вы не согласились');
    }

    echo "Привет, ".$_POST['name'];

    saveForm($_GET);
} else {
    echo "Пустой";
}