<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 24.04.2017
 * Time: 9:22 AM
 */
$a = 2;
$b = 0;
$operator = '/';
if ($operator == '/' && ($b==0))
    $result = "На 0 делить нельзя";
else{
    switch ($operator)
    {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        case '%':
            $result = $a % $b;
            break;
    }
}

echo $a . $operator. $b .'='. $result;