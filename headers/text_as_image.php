<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 11:03 PM
 */
// Создание изображения 100*30
$im = imagecreate(100, 30);

// Белый фон, синий текст
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Надпись в левом верхнем углу
imagestring($im, 5, 0, 0, 'Hello world!', $textcolor);

// Вывод изображения
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
