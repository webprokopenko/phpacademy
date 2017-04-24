<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 24.04.2017
 * Time: 8:39 AM
 */
$name = "Иван";
$age = 30;
echo "Меня зовут $name";
echo "Мне $age лет";
if ($age >= 18 && $age <= 59 )
{
    echo "Вам еще работать и работать";
}
elseif($age > 59)
{
    echo "Вам пора на пенсию";
}
elseif($age > 0 && $age <=17)
{
    echo "Вам еще рано работать";
}
elseif(!is_int($age) or $age<0)
{
    echo "Неизвестный возраст";
}