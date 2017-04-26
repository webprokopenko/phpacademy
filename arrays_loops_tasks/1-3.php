<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 26.04.2017
 * Time: 12:25 PM
 *  <p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
    <p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</p>
    <p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
 */
$arr = array('html', 'css', 'php', 'js', 'jq');
foreach ($arr as $ar)
    echo $ar."<br>";
$arr1 = array(1, 20, 15, 17, 24, 35);
$sum1 = 0;
foreach ($arr1 as $ar1) {
    $sum1+=$ar1;
}
echo "<br>".$sum1;
$arr2 = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($arr2 as $ar2) {
    $result+=($ar2**2);
}
echo "<br>".$result;