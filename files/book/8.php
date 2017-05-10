<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 10:41 AM
 */
/**
 * Подсчет строк, абзацев или записей в файле
 * Для подсчета строк в файле используйте функцию fgets():
 */
$lines = 0;
if ($fh = fopen('orders.txt','r')) {
    while (! feof($fh)) {
        if (fgets($fh)) {
            $lines++;
        }
    }
}
print $lines;
/**
 * Так как функция fgets() читает строки одну за одной, для подсчета строк до-
статочно подсчитать количество вызовов перед достижением конца файла.
Чтобы подсчитать абзацы, увеличивайте счетчик только при чтении пустой
строки:
 */
$paragraphs = 0;

if ($fh = fopen('great-american-novel.txt','r')) {
    while (! feof($fh)) {
        $s = fgets($fh);
        if (("\n" == $s) || ("\r\n" == $s)) {
            $paragraphs++;
        }
    }
}
print $paragraphs;