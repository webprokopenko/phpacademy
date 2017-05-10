<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 10:51 AM
 * Обработка текстовых полей переменной длины
 * Требуется прочитать из файла информацию, состоящую из текстовых полей
с разделителями. Допустим, имеется программа, которая генерирует данные
 в виде строк с полями, разделенными табуляциями; эти данные нужно перенести
в массив.
 */
$delim = '|';

$fh = fopen('books.txt','r') or die("can't open: $php_errormsg");
while (! feof($fh)) {
    $fields = fgetcsv($fh, 1000, $delim);
        // ... Обработка данных ...
    print_r($fields);
}
fclose($fh) or die("can't close: $php_errormsg");
/**
Если строки в файле распознаются некорректно, включите параметр конфигу-
рации auto_detect_line_endings перед открытием файла:
ini_set('auto_detect_line_endings', true);
 */