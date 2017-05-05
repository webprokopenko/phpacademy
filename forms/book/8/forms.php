<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 05.05.2017
 * Time: 10:00 AM
 */
/**
 * Проверка ввода на форме: флажки
 * Задача: Требуется убедиться в том, что в отправленных данных установлены только
 * действительные флажки
 */
$value = 'yes';
?>
<input type="checkbox" name="subscribe" value="yes"/> Subscribe?
<?php
if (filter_has_var(INPUT_POST,'subscribe')){
    //Значение отправлено и оно действительно
    if ($_POST['subscribe'] == $value)
        $subscribed = true;
    else{
        //Значение отправлено но оно не действительно
        $subscribed = false;
        print "Invalid checkbox vslue submitted.";
    }
} else{
    //Значение н еотправлено
    $subscribed = false;
}
if ($subscribed){
    print "You are subscribed.";
} else{
    print "You are not subscribed";
}

//Проверка группы флажков
// Построение группы флажков
$choices = array('eggs'=>'Eggs Benedict','toast'=>'Buttered Toast with Jam','coffee'=>"Piping Hot Coffee");
foreach ($choices as $key => $choice) {
    echo "<input type='checkbox' name='food[]' value='$key'> $choice <br>";
}
//Последующая проверка отправленных флажков
// array_intersect - (Вычисляет схождение массивов) Возвращает массив, содержащий все значения array1, которые существуют во всех переданных аргументах.
// array_keys  - Возвращает массив со всеми ключами array.
if (array_intersect($_POST['food'],array_keys($choices)) != $_POST['food']){
    echo "You myst select only valid choices.";
}
/**
 * Чтобы код PHP правильно обрабатывал значения нескольких выделенных флаж-
ков, атрибут name флажков должен завершаться парой квадратных скобок [],
 * Эти множественные значения форматируются в $_POST
 * как массив. Так как для флажков в листинге 9.14 используется имя food[], элемент
$_POST['food'] содержит массив значений установленных флажков.
Функция array_intersect() находит все элементы $_POST['food'], которые также
присутствуют в array_keys($choices). Иначе говоря, она фильтрует отправленные
варианты ($_POST['food']), пропуская только приемлемые значения — ключи из
массива $choices. Если все значения из $_POST['food'] являются приемлемыми,
то результат array_intersect($_POST['food'], array_keys($choices)) представ-
ляет собой немодифицированную копию $_POST['food']. Итак, если результат не
равен $_POST['food'], значит, были отправлены недействительные значения.
Для флажков действуют те же проблемы со значениями по умолчанию, что и для
переключателей.
 */