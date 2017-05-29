<?php
require_once 'CondimentDecorator.php';
require_once 'Beverage.php';
require_once 'Espresso.php';
require_once 'HouseBlend.php';
require_once 'Mocha.php';
require_once 'Soy.php';

ini_set('display_errors', '1');

$espresso1 = new Espresso();
$espresso1 = new Mocha($espresso1);
$espresso1 = new Soy($espresso1);
echo $espresso1->getDescription();
echo "<br>";
echo $espresso1->cost();