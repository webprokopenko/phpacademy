<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 8:46 AM
 */
?>
Hello <?= htmlentities($_SESSION['name']) ?>.
You are <?= htmlentities($_SESSION['age']) ?> years old.
Your favorite color is <?= htmlentities($_SESSION['color']) ?>
and your favorite food is <?= htmlentities($_SESSION['food']) ?>.
