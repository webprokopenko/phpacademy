<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 27.04.2017
 * Time: 8:07 AM
 */
/**
 * sort($array, $flag); — одна из самых простых и востребованных функций.
 * Позволяет отсортировать массив по возрастанию на php с учетом значений элементов,
 * т.е. они будут расположены от меньшего значения к большему.
 * В качестве параметров принимает переменную массива и один из флагов сортировки,
 * который позволяет изменить поведение сортировки.
 *  SORT_REGULAR – элементы сравниваются без изменения типов
    SORT_NUMERIC – элементы сравниваются как числа
    SORT_STRING – элементы сравниваются как строки
    SORT_LOCALE_STRING – строковое сравнение, но с учетом текущей локали.
    SORT_NATURAL – строковое сравнение элементов, учитывая их естественный порядок (как у natsort)
    SORT_FLAG_CASE – сортировка элементов массива php без учёта регистра (можно объединять с SORT_STRING или SORT_NATURAL
 */
$cars = array('acura','Toyota', 'Mazda', 'Mitsubishi','BMW','ACURA','Acura',21,22,3);
$arr = array(1,21,56,87,49,10,76);
$arr_files = array('test1.php','test13.php','test3.php','test15.php');

array_walk($cars, function (&$value, $key) {
    //if (is_string($value))
        $value = strtolower($value);
});
sort($cars,SORT_REGULAR); # Регулярная сортировка
sort($arr);  # Регулярная сортировка
print_r($cars);
echo "<br>";
print_r($arr);

sort($arr_files,SORT_NATURAL); #Натуральная сортировка
echo "<br>";
print_r($arr_files);
echo "<br>";
/**
 * rsort($array, $flag); — функция, являющаяся антагонистом sort.
 * Антагонистом, потому что она производит сортировку массива таким же образом,
 * только не по возрастанию, а по убыванию, т.е. первыми будут идти
 * элементы массива php с самыми большими значениями.
    В неё можно также передавать два параметра: сам массив и флаг сортировки и она,
 * как и sort, больше подходит для одномерных массивов.
 */
rsort($arr); #обратная сортировка
print_r($arr);
rsort($arr_files,SORT_NATURAL); #Обратная сортировка с флагами как у sort
echo "<br>";
print_r($arr_files);
/**
 * asort($array, $flag); — функция php для сортировки массива по значению,
 * механизм работы которой также очень похож на sort.
    За тем лишь исключением, что она позволяет производить сортировку массива php
 * по значению его элементов с сохранением связи «ключ — значение».
    Таким образом, данная функция отлично подходит для сортировки ассоциативных массивов php,
 * т.е. структур, где данная связь логична и важна.
    Элементы будут расположены по возрастанию, т.к. она позволяет производить
 * сортировку ассоциативного массива php по значению c сохранением ключей.
 */
$simple_arr = array('key1'=>'value1','key2'=>'value2','key4'=>'value4','key3'=>'value3');
echo "<br>";
print_r($simple_arr);
sort($simple_arr);
echo "<br>";
print_r($simple_arr);
$simple_arr = array('key1'=>'value11.php','key2'=>'value22.php','key4'=>'value44.php','key3'=>'value33.php','key6'=>'value1.php');
echo "<br>";
asort($simple_arr,SORT_STRING); #Сортировка с сохранением значения ключа - как sort
print_r($simple_arr);
/**
 * arsort($array, $flag); — еще одна функция php для сортировки массива по значению. Антагонист asort.
Работает по тому же принципу, что и упомянутая функция, только сортировка массива php в данном случае будет по убыванию.
 * Также является отличным вариантом при сортировке ассоциативных массивов php.
 */
$simple_arr = array('key1'=>'value11.php','key2'=>'value22.php','key4'=>'value44.php','key3'=>'value33.php','key6'=>'value1.php');
arsort($simple_arr);
echo "<br>";
print_r($simple_arr);
/**
 * natsort($array); — данная функция вносит разнообразие в семейку sort-подобных решений, т.к. механизм её работы в корне отличается от них.
 * У natsort есть всего один-единственный входной параметр – это сортируемый массив,
 * значения которого будут расположены в порядке, привычном для человека. Т
 * акой алгоритм носит название «natural ordering», что по-русски означает «естественный порядок»
 */
$simple_arr = array(0=>'student5',1=>'student4',2=>'student3',3=>'student54',4=>'student22');
asort($simple_arr,SORT_NATURAL); #эквивалентна natsort
echo "<br>";
print_r($simple_arr);
$simple_arr = array(0=>'student5',1=>'student4',2=>'student3',3=>'student54',4=>'student22');
natsort($simple_arr); #Натуральная сортировка с сохранением ключа
echo "<br>";
print_r($simple_arr);
/**
 * shuffle($array); — замечательная и очень полезная функция, с помощью которой можно перемешать массив php и разместить его элементы в случайном порядке.
    Очень удобно, когда нужно расположить товары Интернет-магазина в категории или на другой странице в случайном порядке или при переходе на
   сайт-визитку показывать пользователям различные блоки информации каждый раз в разной последовательности.
    При этом связь «ключ-значение» не сохраняется.
 */
$simple_arr = array(0=>'student5',1=>'student4',2=>'student3',3=>'student54',4=>'student22');
shuffle($simple_arr);
echo "<br>";
print_r($simple_arr);
/**
 * Рассмотренные нами ранее функции являются достаточно простыми и механизм их работы понятен.
 * В качестве параметра передаётся массив, содержимое которого нужно отсортировать по значениям его элементов,
 * а также флаг, который может изменить поведение сортировки (без него спокойно можно обойтись).
usort($array, ‘function’); — функция php сортировки многомерного массива по нужному полю.
Позволяет сделать сортировку элементов массива php без сохранения связи «ключ-значение» в
 * соответствии с пользовательской функцией, имя которой передаётся в качестве второго параметра при вызове usort.
 */

$complex_arr = array();
$complex_arr[] = array('id'=>32);
$complex_arr[] = array('id'=>11);
$complex_arr[] = array('id'=>27);

function myCamp($a,$b)
{
    if ($a['id'] == $b['id'])
        return 0;
    return $a['id'] > $b['id'] ? 1 : -1;
}
usort($complex_arr,'myCamp');
echo "<br>";
print_r($complex_arr);
/**
 * uasort - тоже самое что и usort - только с сохранением значения ключей
 */
$complex_arr = array();
$complex_arr[] = array('id'=>32);
$complex_arr[] = array('id'=>11);
$complex_arr[] = array('id'=>27);
uasort($complex_arr,'myCamp');
echo "<br>";
print_r($complex_arr);
/**
 * Сортировка строковых ключей
 * trcasecmp — Бинарно-безопасное сравнение строк без учета регистра
 */
$complex_arr = array();
$complex_arr[] = array('name'=>'string32');
$complex_arr[] = array('name'=>'string11');
$complex_arr[] = array('name'=>'string31');
function myCmp2($a,$b)
{
    if (strcasecmp($a['name'], $b['name']) == 0) return 0;
    return strcasecmp($a['name'], $b['name']) > 0 ? 1 : -1;
}
uasort($complex_arr,'myCmp2');
echo "<br>";
print_r($complex_arr);
/**
 * usort по убыванию
 */
$complex_arr = array();
$complex_arr[] = array('id'=>32);
$complex_arr[] = array('id'=>11);
$complex_arr[] = array('id'=>27);

function myCamp2($a,$b)
{
    if ($a['id'] == $b['id'])
        return 0;
    if ($a['id']<$b['id'])
        return 1;
    else
        return -1;

}
usort($complex_arr,'myCamp2');
echo "<br>";
print_r($complex_arr);
/**
 * Функции php для сортировки массива по ключу
 * ksort($array, $flag); — функция является аналогом asort,
 * только упорядочивание элементов в массиве будет происходить
 * не по значениям, а по ключам.
 */
$arr = array(2=>11,0=>18,1=>21);
ksort($arr);
echo "<br>";
print_r($arr);
/**
 * krsort($array, $flag); — ещё одна функция php для сортировки массива по ключу, очень похожая на предыдущую.
    Единственное отличие заключается в том, что она производит сортировку массива php по убыванию.
 * То есть, она является антагонистом ksort, как и rsort для sort.
 */
$arr = array(2=>11,0=>18,1=>21);
krsort($arr);
echo "<br>";
print_r($arr);
/**
 * uksort($array, ‘function’); — аналог упомянутой ранее функции php для сортировки массива по ключу — usort.
Работает по тому же принципу: сохраняет отношение «ключ-значение» и сортировка массива php производится
 * в соответствии с пользовательской функцией, имя которой передаётся вторым параметром. Первый параметр неизменный – это сортируемый массив.
Отличие от usort заключается в том, что сортировка происходит по ключам элементов.
 */
$complex_arr = array();
$complex_arr[2] = array('c'=>'ivan');
$complex_arr[3] = array('a'=>'igor');
$complex_arr[4] = array('b'=>'maria');
function arrCamp($a,$b){
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}
echo "<br>";
print_r($complex_arr);

uksort($complex_arr,'arrCamp');
echo "<br>";
print_r($complex_arr);

$complex_arr = array();
$complex_arr[2] = array(3=>'ivan');
$complex_arr[3] = array(2=>'igor');
$complex_arr[4] = array('maria');


uksort($complex_arr,'arrCamp');
echo "<br>";
print_r($complex_arr);