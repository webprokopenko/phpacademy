<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 05.05.2017
 * Time: 8:57 AM
 */
/**
 * Проверка ввода на форме: переключатели
 * Задача: Требуется убедиться в том, что в группе переключателей выбран действительный переключатель
 */
// Построение набора переключателей
$choices = array('eggs'=>'Eggs Benedict','toast'=>'Buttered Toast with Jam','coffee'=>'Piping Hot Coffee');
foreach ($choices as $key => $choice) {
    echo "<input type='radio' name='food' valud='$key'/> $choice <br>";
}
//Последующая проверка отправленного переключателя
if (! array_key_exists($_POST['food'],$choices)){
    echo "You myst select a valid choice.";
}
//Выделен по умолчанию
// По умолчанию
$defaults['food'] = 'toast';
// Построение набора переключателей
$choices = array('eggs' => 'Eggs Benedict',
    'toast' => 'Buttered Toast with Jam',
    'coffee' => 'Piping Hot Coffee');
foreach ($choices as $key => $choice) {
    echo "<input type='radio' name='food' value='$key'";
    if ($key == $defaults['food']) {
        echo ' checked="checked"';
    }
    echo "/> $choice \n";
}
// Последующая проверка отправленного переключателя
if (! array_key_exists($_POST['food'], $choices)) {
    echo "You must select a valid choice.";
}