<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 9:00 AM
 */
/**
 * Использование элементов форм с множественным выбором
 */
?>
<input type="checkbox" name="boroughs[]" value="bronx"> The Bronx
<input type="checkbox" name="boroughs[]" value="brooklyn"> Brooklyn
<input type="checkbox" name="boroughs[]" value="manhattan"> Manhattan
<input type="checkbox" name="boroughs[]" value="queens"> Queens
<input type="checkbox" name="boroughs[]" value="statenisland"> Staten Island
<?php
    print 'I love ' . join(' and ', $_POST['boroughs']) . '!';
/**
 * Создание раскрывающихся меню на основании текущей даты
 */
$options = array();

$when = new DateTime();

// Вывод дней одной недели
for ($i = 0; $i < 7; ++$i) {
    $options[$when->getTimestamp()] = $when->format("D, F j, Y");
    $when->modify("+1 day");
}
foreach ($options as $value => $label) {
    print "<option value='$value'>$label</option>\n";
}