<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 25.04.2017
 * Time: 2:06 PM
 */
/**
 * Числовые массивыы
 */
$fruits = array('Apples', 'Bananas', 'Cantaloupes', 'Dates');

$fruits[1] = 'Apples';
$fruits[1] = 'Bananas';
$fruits[2] = 'Cantaloupes';
$fruits[3] = 'Dates';

$fruits[] = 'Apples';
$fruits[16] = 'Bananas';
$fruits[] = 'Cantaloupes';
$fruits[] = 'Dates';
echo count($fruits);
$keys = array_keys($fruits);

for ($i=0;$i<=(count($fruits)-1);$i++){
    echo "key: ".$keys[$i]." value: ".$fruits[$i]."<br>";
}
/**
 * Ассоциативные массивы
 */
$fruits['red'] = 'Apples';
$fruits['yellow'] = 'Bananas';
$fruits['beige'] = 'Cantaloupes';
$fruits['brown'] = 'Dates';

foreach ($fruits as $color=>$fruit) {
        print "$fruit are $color<br>";
}
/**
 * Определение массива с индексом отличным от 0
 */
$fruits = array();
$fruits[-1]         = 'Apples';
$fruits[]           = 'Bananas';
$fruits[16]         = 'Cantaloupes';
$fruits['fruits']   = 'Dates';
$fruits[]           =  'Pineapple';

foreach ($fruits as $key=>$fruit) {
    echo $key." => ".$fruit."<br>" ;
}
/**
 * Инициализация массива диапазоном целых чисел
 */
$cards = range(1,52,2);
print_r($cards);
/**
 * Перебор элементов массива
 */
reset($cards);
while (list($key,$value) = each($cards))
{
    echo $key." => ".$value."<br>" ;
}
var_dump(each($cards));
for (reset($fruits); $key = key($fruits); next($fruits)) {
    echo "<br>".$fruits[$key];
}
/**
 * Проверка является ли данные массивом
 */
if (is_array($cards)){
    //Код с циклом
} else{
    //Код для обычного (скалярного) значения
}
/**
 * Преобразование всех переменных в массив
 */
$var = 123;
settype($var,'array');
var_dump($var);
/**
 * Преобразование всех слов в массиве к нижнему регистру
 */
$lc = array_map('strtolower',$fruits);
var_dump($lc);
/**
 * Удаление элементов из массива
 */
unset($lc[-1],$lc['fruits']);
var_dump($lc);
/**
 * Посчитать количество элементов в массиве
 */
echo count($lc);
/**
 * Извлечение элементов из массива
 */
echo "<br>";
array_shift($lc);# удаление первого элемента массива
print_r($lc);
array_pop($lc);# удаление последнего элемента массива
echo "<br>";
print_r($lc);

$fruits = array();
$fruits[-1]         = 'Apples';
$fruits[]           = 'Bananas';
$fruits[16]         = 'Cantaloupes';
$fruits['fruits']   = 'Dates';
$fruits[]           =  'Pineapple';
echo "<br>";
$fruit = (array_values($fruits)); #Проиндексировать массив, сделать числовым, удалить пропущенные элементы
print_r($fruit);
array_splice($fruits, 2, 1); #Удалить 3-й элемент массива
print_r($fruits);
/**
 * Изменение размера массива
 */
$fruits = array();
$fruits[]           = 'Apples';
$fruits[]           = 'Bananas';
$fruits[]           = 'Cantaloupes';
$fruits[]           = 'Dates';
$fruits[]           =  'Pineapple';
echo "<br>";
echo count($fruits);
$fruits = array_pad($fruits,7,''); #Увеличение размера массива в данном случае на 2
echo "<br>";
echo count($fruits);
print_r($fruits);
echo "<br>";
$fruits = array_splice($fruits,2); #Усечение массива в данном случае удалит все кроме первых двух
print_r($fruits);
$fruits = array_splice($fruits,-1); #Удаление последнего элемента эквивалентно array_pop();
$fruits = array();
$fruits[]           = 'Apples';
$fruits[]           = 'Bananas';
$fruits[]           = 'Cantaloupes';
$fruits[]           = 'Dates';
$fruits[]           =  'Pineapple';
$fruits = array_pad($fruits,-10,''); #Увеличение массива до 10 символов. Существующие данные поместить в конец
echo "<br>";
print_r($fruits);
echo "<br>";
/**
 * Слияние массивов
 */
$fruits = array();
$fruits[]           = 'Apples';
$fruits[]           = 'Bananas';
$fruits[]           = 'Cantaloupes';
$fruits[]           = 'Dates';
$fruits[]           =  'Pineapple';

$vegetables[]       = 'Tomato';
$vegetables[]       = 'Cucumber';
$vegetables[]       = 'Potatoes';
$vegetables[]       = 'Bow';
$vegetables[]       = 'Carrots';

$garden = array_merge($fruits,$vegetables); #Слияние массивов
echo "<br>";
print_r($garden);
$garden2 = array_merge($fruits,array('Tomato','Cucumber'));
echo "<br>";
print_r($garden2);

$fruits2 = array();
$fruits2[-10]         = 'Apples';
$fruits2[]           = 'Bananas';
$fruits2[16]         = 'Cantaloupes';
$fruits2['fruits']   = 'Dates';
$fruits2[]           =  'Pineapple';
echo "<br>";
print_r($fruits2);
echo "<br>";
$garden3 = array_merge($fruits,$fruits2); #Кроме слияния еще нормализует, т.е. индексирует в нормальный вид
print_r($garden3);
$lc = array('a', 'b'=>'B');
$uc = array('A', 'b'=>'b');
$ac = array_merge($lc,$uc); #B удалена посокольку в именованом списке есть индекс b
echo "<br>";
print_r($ac);
$bc = $lc + $uc;
echo "<br>";
var_dump($bc);
/**
 * Преобразование массива в строку
 */
$string = join(', ',$fruits2); #Преобразует массив в строку разделенную запятыми
echo "<br>";
var_dump($string);
$str='';
foreach ($fruits2 as $key=>$item) {
    $str.=",$item ";
}
$str = substr($str,1);
echo "<br>";
echo $str;
/**
 * Проверка присутствия ключа в массиве
 */
$fruits = array();
$fruits[]           = 'Apples';
$fruits[]           = 'Bananas';
$fruits[]           = 'Cantaloupes';
$fruits[]           = 'Dates';
$fruits[]           =  'Pineapple';
$fruits[]           =  null;
var_dump(array_key_exists(-1,$fruits)); #Проверка присутствия ключа
var_dump(isset($fruits[5])); #В случае если поле рано null вернет false
/**
 * Проверка присутствия элемента в массиве
 */
echo "<br>";
var_dump(in_array('Apples',$fruits)); #Проверка присутствия Apples в массиве
echo "<br>";
var_dump(in_array(null,$fruits)); #Проверка присутствия null в массиве
$array = array(1,'2','three');
var_dump(in_array(1,$array));
echo "<br>";
var_dump(in_array(2,$array));
var_dump(in_array(2,$array,true));#Cтрогое сравнение по типу

$a = (int) 'three';
var_dump($a);
/**
 * Определение позиции значения в массиве
 */
$position = array_search(null,$fruits);
echo "<br>";
var_dump($position);
echo $fruits[$position];
/**
 * Поиск элементов, удовлетворяющих некоторому условию
 */
$movies = array();
$movies[]           = 500;
$movies[]           = 300;
$movies[]           = 200;
$movies[]           = 891;
$movies[]           = 800;
$movies[]           = null;
echo "<br>";
foreach ($movies as $key => $movie) {
    if ($movie >= 500)
        echo $key."=>".$movie."<br>";
}
/**
 * Поиск элемента с наибольшим или наименьшим значением
 */
$largest = max($movies);
$smallest = min($movies);
/**
 * Перестановка в обратном порядке
 */
$array = array('Zero','One','Two');
$reversed = array_reverse($array);
echo "<br>";
print_r($reversed);
for ($i=count($array)-1;$i>=0;$i--)
{
    #В обратном порядке
}
/**
 * Сортировка масива
 * SORT_NUMERIC - числовое сравнение элементов
 * SORT_STRING - строковое сравнение элементов
 * SORT_NATURAL - строковое с учетом цифр
 * SORT_REGULAR - сортировка с сохранением ключа
 */
$states = array('Delaware', 'Pennsylvania', 'New Jersey', 'Danwer');
sort($states, SORT_STRING);
echo "<br>";
print_r($states);
$scores = array(1,10,2,13,41);
sort($scores, SORT_NUMERIC);
echo "<br>";
print_r($scores);
echo "<br>";
$tests = array('test1.php', 'test10.php', 'test11.php', 'test2.php');
natsort($tests); #Натуральная сортировка с учетом цифр в строке
echo "<br>";
print_r($tests);
$tests = array('test1.php', 'test10.php', 'test11.php', 'test2.php');
sort($tests,SORT_NATURAL);
echo "<br>";
print_r($tests);
$tests = array('test1.php', 'test10.php', 'test11.php', 'test2.php');
sort($tests); # по умолчанию как строковое значение
echo "<br>";
print_r($tests);
echo "<br>";
$tests = array('Delaware', 'Pennsylvania', 'New Jersey', 'Danwer');
asort($tests); #обычная сортировка с сохранением ключа (arsort — Сортирует массив в обратном порядке, сохраняя ключи)
echo "<br>";
print_r($tests);
echo "<br>";
array_multisort($tests,$scores); # сортирует 2 массива
//Чтобы отсортировать разные измерения одного массива, передайте элементы
//массива:
$stuff = array('colors' => array('Red', 'White', 'Blue'),
    'cities' => array('Boston', 'New York', 'Chicago'));
array_multisort($stuff['colors'], $stuff['cities']);
print_r($stuff);

$numbers = array(0, 1, 2, 3);
$letters = array('a', 'b', 'c', 'd');
array_multisort($numbers, SORT_NUMERIC, SORT_DESC,
    $letters, SORT_STRING , SORT_DESC);
/**
 * Удаление дубликатов из массива
 */
$unique = array_unique($array);
/**
 * Вычисление объединения, пересечения и разности двух массивов
 */
$a = array();
$b = array();
#Вычисление объединения:
$union = array_unique(array_merge($a, $b));
#Вычисление пересечения:
$intersection = array_intersect($a, $b);
#Вычисление простой разности:
$difference = array_diff($a, $b);
#Вычисление симметричной разности:
$difference = array_merge(array_diff($a, $b), array_diff($b, $a));

$old = array('To', 'be', 'or', 'not', 'to', 'be');
$new = array('To', 'be', 'or', 'whatever');
$difference = array_diff($old, $new);
print_r($difference);

$old = array('To', 'be', 'or', 'not', 'to', 'be');
$new = array('To', 'be', 'or', 'whatever');
$reverse_diff = array_diff($new, $old); # найти уникальные элементы
print_r($reverse_diff);
/**
 * Применение функции к каждому элементу массива
 */
$names = array('firstname' => "Baba",
    'lastname' => "O'Riley");
array_walk($names, function (&$value, $key) {
    $value = strtoupper($value);
});
foreach ($names as $name) {
    print "$name\n";
}
#Для вложенных данных используется функция array_walk_recursive():
$names = array('firstnames' => array("Baba", "Bill"),
    'lastnames' => array("O'Riley", "O'Reilly"));
array_walk_recursive($names, function (&$value, $key) {
    $value = htmlentities($value, ENT_QUOTES);
});
foreach ($names as $nametypes) {
    foreach ($nametypes as $name) {
        print "$name\n";
    }
}
/**
 * Пример использования array_map()
 */
function cube($n)
{
    return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);

print_r($b);
/**
 * Динамическое создание переменных
 */
for ($i=0;$i<5;$i++)
{
    ${'a'.$i} = $i;
}
echo $a2;



