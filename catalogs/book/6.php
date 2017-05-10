<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 11:09 AM
 * Получение компонентов имени файла
 */
$full_name = '/usr/local/php/php.ini';
$base = basename($full_name); // $base содержит "php.ini"
$dir = dirname($full_name); // $dir содержит "/usr/local/php"

$info = pathinfo('/usr/local/php/php.ini');

// $info['dirname'] содержит "/usr/local/php"
// $info['basename'] содержит "php.ini"
// $info['extension'] содержит "ini"