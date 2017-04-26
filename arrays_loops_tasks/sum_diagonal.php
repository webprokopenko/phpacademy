<?php
/**
 * Задача: Необходимо посчитать сумму по диагонали слева на право в
 * много мерном массиве
 *      1 2 4
 *      4 5 6
 *      7 8 9
 */
$arrays = array( array(1, 2, 5),
                 array(4, 5, 6),
                 array(7, 8, 9));
$sum = $arrays[0][0] + $arrays[1][1] + $arrays[2][2];
$sumRev = $arrays[0][2] + $arrays[1][1] + $arrays[2][0];
echo $sum; PHP_EOL;
echo $sumRev;
$sumMainDiag = 0;
for ($i=0;$i<=count($arrays)-1;$i++){
    for ($j=0;$j<=count($arrays[$i])-1;$j++)
    {
        if ($i == $j)
            $sumMainDiag+=$arrays[$i][$j];
    }

}
echo $sumMainDiag;
$sumSubDiag = 0;
$count = count($arrays)-1;
for ($i=0;$i<=$count;$i++)
{
    $sumSubDiag+=$arrays[$i][($count-$i)];
}
echo "<br><b>".$sumSubDiag;
//foreach ($arrays as $array) {
//    echo "<br>";
//    foreach ($array as $item) {
//        echo $item;
//    }
//}
//echo "<br>";
//$i=0;
//$suma = 0;
//while ($i < count($arrays))
//{
//    $suma+=$arrays[$i][$i];
//    $i++;
//}
//echo $suma;
//$j=count($arrays)-1;
//$sum_rez = 0;
//while ($j>0)
//{
//    $sum_rez+=$arrays[$j][$j];
//    echo "<br>".$arrays[$j][$j];
//    $j--;
//}
//
//echo $sum_rez;
