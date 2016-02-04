<?php
/**
 * Created by PhpStorm.
 * User: PHP Academy
 * Date: 04.02.2016
 * Time: 19:41
 */

$data = file_get_contents('serialize.dat');
$arr = unserialize($data);

echo "<pre>";
print_r($arr);