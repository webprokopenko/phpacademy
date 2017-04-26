<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 26.04.2017
 * Time: 2:21 PM
 * <p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
        месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
    <p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
        выходные дни следует вывести жирным.</p>
    <p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
        текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
    <p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
        рядов, а не 5.<br><br>
        x<br>
        xx<br>
        xxx<br>
        xxxx<br>
        xxxxx</p>
    <p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
        рядов, а не 5.<br><br>
        1<br>
        22<br>
        333<br>
        4444<br>
        55555</p>
    <p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
        xx<br>
        xxxx<br>
        xxxxxx<br>
        xxxxxxxx<br>
        xxxxxxxxxx</p>
 */
$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
$month = 'April';
foreach ($months as $value) {
    if ($month === $value)
        echo "<b>".$month."</b>";
    else
        echo $value;
}
echo "<br>";
$days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',);
$day = 'Saturday';
foreach ($days as $item) {
    if ($item === $day){
        echo "<i>$item</i>";
    } else{
        echo $item;
    }
}
echo "<br>";
$str = '';
for ($i=1;$i<=20;$i++){
    $str.='x';
    echo $str."<br>";
}

for ($i=1;$i<=9;$i++){
    $str='';
    for ($j=0;$j<$i;$j++){
        $str.=$i;
    }
    echo $str."<br>";
}

$x=1;
$str = '';
while ($x<=5)
{
    $str.='xx';
    echo $str."<br>";
    $x++;
}