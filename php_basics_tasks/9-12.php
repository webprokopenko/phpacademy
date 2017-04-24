<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 24.04.2017
 * Time: 8:48 AM
 */
$day =6;
$day = (int) $day;
switch ($day)
{
    case ($day>=1 && $day<=5):
        echo "Это рабочий день";
        break;

    case ($day>=6 && $day<=7):
        echo "Это выходной день";
        break;

    case ($day<=1 || $day>7):
        echo "Неизвестный день";
        break;
}
