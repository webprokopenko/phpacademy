<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 26.04.2017
 * Time: 2:46 PM
 * <p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
        пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
        2, 3, т. е. 6.</p>
        По желанию можете сделать проверку на корректность введения данных пользователем.
    <p>24. Вам нужно разработать программу, которая считала бы количество вхождений
        какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
        442158755745 встречается 4 раза.</p>
    <p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
        найти максимальное и минимальное значение и поменять их местами.</p>
    <p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
        Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
        индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
        индекс.</p>
    <p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. <br><br>
    Пример результата:<br>
    <table><tr><td style='background-color:blue'>2033</td><td style='background-color:brown'>11696</td><td style='background-color:green'>712</td><td style='background-color:yellow'>32583</td><td style='background-color:red'>157</td></tr><tr><td style='background-color:gray'>25694</td><td style='background-color:red'>19724</td><td style='background-color:brown'>18487</td><td style='background-color:brown'>8462</td><td style='background-color:red'>4412</td></tr><tr><td style='background-color:gray'>4673</td><td style='background-color:gray'>14450</td><td style='background-color:maroon'>16748</td><td style='background-color:gray'>3505</td><td style='background-color:maroon'>5299</td></tr><tr><td style='background-color:red'>16873</td><td style='background-color:gray'>21370</td><td style='background-color:green'>22482</td><td style='background-color:red'>28576</td><td style='background-color:blue'>26060</td></tr><tr><td style='background-color:yellow'>28955</td><td style='background-color:gray'>8804</td><td style='background-color:gray'>26825</td><td style='background-color:red'>31471</td><td style='background-color:blue'>22283</td></tr></table>
</p>
<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>
 */
$ch = 123;
settype($ch,'string');
var_dump($ch);
$sum = 0;
for ($i=0;$i<=strlen($ch)-1;$i++){
    $sum+=$ch[$i];
}
echo $sum;

$ch = 442158755745;
$z = 5;
$count=0;
settype($ch,'string');
for ($i=0;$i<=strlen($ch)-1;$i++){
    if ($ch[$i]==$z)
        $count++;
}
echo $count;
/**
 * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.
 */
$arr = array();
for ($i=0;$i<50;$i++)
{
    $arr[$i] = rand(1,100);
}
var_dump($arr);
$sum_par=0; #Сумма парных чисел
$sum_n_par=0; #Сумма непарных чисел
$arr_par = array(); #Массив с парными элементами
$arr_n_par = array(); #Массив с не парными элементами
foreach ($arr as $key => $item) {
    if (($key%2 ===0) && ($key!=0)){
        echo "<br>".$key;
        $sum_par+=$item;
        $arr_par[$key] = $item;
    } else{
        $sum_n_par+=$item;
        $arr_n_par[$key] = $item;
    }
}



