<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 24.04.2017
 * Time: 9:39 AM
 */
$a = 3;
$b = 5;
echo max($a,$b);
echo "<br>";
//
$a = '78';
$b = 78;
if ($a == $b)
    echo "Равны";
else
    echo "Не равны";
echo "<br>";
if ($a === $b)
    echo "Эквивалентны";
else
    echo "Не эквивалентны";

echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
$bool = (bool) 20;
var_dump($bool);
echo "<br>";
$bool = (bool) 0;
var_dump($bool);
echo "<br>";
$bool = (bool) -20;
var_dump($bool);

echo "this is echo";
printf("this is printf");
print_r("this is print_r");

// Комментарий
/** Комментарий */
# Комментарий
echo "<br>";
?>
<?="HI LIKE AS ECHO";
define('DAY_COUNT',7);
const MONTH_COUNT = 12;


