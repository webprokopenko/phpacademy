<?php
/**
 * Обращение к подстрокам.
 *
 * Требуется узнать содержит ли строка заданную подстроку,
 * например проверить, содержит ли адрес электронной почты знак @
 * На практике не нужно использовать для определения email
 */
$email = "test@php.com";
if (strpos($email,'@') === false)
    print 'There was no @ in the e-mail address!';
else
    print strpos($email,'@');
/**
 * Выделение подстрок
 * Осудествляется функцией substr();
 */
echo substr($email,0,-1);
echo "<br>";
echo substr($email,2);
echo "<br>";
echo substr($email,-10,5);
/**
 * Замена подстрок
 * Требуется заменить подстроку другой строкой, например
 * скрыть все цифры номера кредитной карты, кроме четырех
 * последних перед выводом
 */
$old_string = '4444 1111 2222 3333';
$new_string = 'XXXX XXXX XXXX';
echo "<br>";
print substr_replace($old_string,$new_string,0,strlen($old_string)-5);

/**
 * Обработка строки по одному байту
 */
$test_string = "This weekend I'm going shopping for a pet chicken.";
$vowels = 0;
for ($i=0,$j=strlen($test_string);$i<$j;$i++)
{
    echo "<br>".$test_string[$i];
}
/**
 * Обратная перестановка строки по словам или байтам
 * Требуется переставить в обратном порядке байты в строке.
 * Для этого есть функция strrev() для полученя обратной перестановки строки по байтам
 */
$str = "This is not a palindrome.";
print strrev($str);
echo "<br>";
/**
 *Обратная перестановка строки по словам
 */
$words = explode(' ',$str);
$words = array_reverse($words);
print implode(' ',$words);
echo "<br>";
/**
 * Генерирование случайной строки
 *
 * Требуется сгенерировать случайную строку
 */
function str_rand($length = 32, $characters = '0123456789abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    if (!is_int($length) or $length < 0)
        return false;
    $characters_length = strlen($characters)-1;
    $string = '';
    for ($i = $length; $i > 0; $i--)
    {
        $string .=$characters[mt_rand(0,$characters_length)];
    }
    return $string;
}
echo "<br>";
print str_rand(1);
echo "<br>";
/**
 * Управление регистром символов
 */
$str = "This is not a palindrome.";
print ucfirst($str); #Первое слово первая буква к верхнему регистру
echo "<br>";
print ucwords($str); #Все слова первая буква к верхнему регистру
echo "<br>";
print strtoupper($str); #Все слова к верхнему регистру
echo "<br>";
print strtolower($str); #Все слова к нижнему регистру
echo "<br>";
/**
 * Удаление начальных или конечных пропусков в строке
 */
print ltrim($str); #Удаляет пропуск вначале строки
echo "<br>";
print rtrim($str); #Удаляет пропуск вконце строки
echo "<br>";
print trim($str);  #Удаляет вначале и в конце
echo "<br>";

print ltrim('10 PRINT A$',' 0..9');# удаляет цифры и пробелы из начала строки
echo "<br>";
print rtrim('SELECT * FROM turtles;',';');# удаляет ; с конца строки
echo "<br>";

/**
 * Генерирование данных, разделенных запятыми.
 * Требуется отформатировать данные в виде списка значений, разделенных запятыми (CSV)
 * чтобы их можно было импортировать в электронную таблицу или базу данных
 */

$sales = array( array('Notheast','2005-01-01','2005-02-01',12.54),
                array('Notheast','2005-01-01','2005-02-01',546.33),
                array('Southeast','2005-01-01','2005-02-01',98.76),
                array('Southeast','2005-01-01','2005-02-01',24.81));
$filename = './files/sales.csv';
$fh = fopen($filename,'w') or die("Can't open $filename");
foreach ($sales as $sale_line) {
    (fputcsv($fh, $sale_line));
}
fclose($fh) or die("Can't close $filename");
/**
 * Разбор данных, разделенных запятыми
 */
$fp = fopen($filename,'r') or die("Can't open $filename");
print "<table>\n";
while ($csv_line = fgetcsv($fp)){
    print "<tr>";
    for ($i=0, $j = count($csv_line); $i<$j; $i++)
    {
        print '<td>'.htmlentities($csv_line[$i]).'</td>';
    }
    print "</tr>";
}
print "<table>\n";
fclose($fp) or die("can't close file");


echo "<br>";
echo mb_internal_encoding();
$str = "Привет у Вас все получится";
echo substr($str,0,-1);
echo "<br>";
echo mb_detect_encoding(substr($str,0,-1));
echo "<br>";
echo mb_substr($str,0,-1,'UTF-8'); #Выделение строки с указание кодировки необходимо для русского языка
echo "<br>";


