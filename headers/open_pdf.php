<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 12:58 PM
 */
header('Content-Disposition: attachment; filename="test.pdf"');

#2
function showPDF($filename) {
    $pdf=fopen($filename,'r');
    $content=fread($pdf,filesize($filename));
    fclose($pdf);
    header('Content-type: application/pdf');
    print($content);
}

#Диалог загрузки
// Будем передавать PDF
header('Content-Type: application/pdf');
// Который будет называться downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');
// Исходный PDF файл original.pdf
readfile('original.pdf');