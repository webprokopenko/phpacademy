<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 11:04 AM
 * Чтение и запись временных меток
    Требуется узнать время последнего обращения или изменения файла или же
    обновить временную метку обращения или изменения; например, вы хотите,
    чтобы на каждой странице сайта выводилась дата ее последней модификации.
 */
$last_access = fileatime('larry.php');
$last_modification = filemtime('moe.php');
$last_change = filectime('curly.php');

touch('shemp.php'); // Время изменения заменяется текущим временем
touch('joe.php',$timestamp); // Время изменения заменяется на $timestamp

print "Last Modified: ".strftime('%c',filemtime($_SERVER['SCRIPT_FILENAME']));
