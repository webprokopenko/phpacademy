<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 24.04.2017
 * Time: 8:59 AM
 */
// speed = s:t;
$s = 13;
$t = 1;
$speedKmH = $s / $t;
$speedMsH = ($s * 1000) / ($t * 3600);

echo "Скорость автомобиля на участе составила: $speedKmH Км/ч ($speedMsH) М/c";