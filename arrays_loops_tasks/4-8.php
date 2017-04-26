<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 26.04.2017
 * Time: 12:32 PM
 * <p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
        помощью второго — столбец элементов.</p>
        $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    <p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
        цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
        долларов.'.</p>
    <p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
        русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</p>
    <p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
        выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
    <p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
        '­1­2­3­4­5­6­7­8­9­'.
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$item) {
    echo "<br>".$key;
}
foreach ($arr as $key=>$item) {
    echo "<br>".$item;
}
$arr = array();
$arr['Коля'] = 200;
$arr['Вася'] = 300;
$arr['Петя'] = 400;
foreach ($arr as $key=>$item) {
    echo "<br>".$key." - зарплата ".$item." долларов";
}
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$ru = array();
$en = array();
foreach ($arr as $key=>$value) {
    $ru[] = $value;
    $en[] = $key;
}
var_dump($ru);
echo "<br>";
var_dump($ru);

$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $item) {
    if ($item>3 && $item<10){
        echo "<br>".$item;
    }
}

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$str = '';
$count_arr = count($arr);
$arr = array_pad($arr,$count_arr+1,'');
var_dump($arr);
foreach ($arr as $item) {
    $str.="-".$item;
}
echo "<br>".$str;