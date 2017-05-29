<?php
	require_once "lib.php";
	$arr = array('red', 'green', 'blue', 'yellow', 'orange');
	$rand_key = array_rand($arr);
	$color = $arr[$rand_key];
?>
<h1>Главное меню</h1><br>
	<a href="index.php">Главная</a>
	<a href="index.php?act=about">О компании</a>
	<a href="index.php?act=products">Товары</a>
	<a href="index.php?act=contact">Контакты</a>
<br>

<?php 
	$filename = 'main.php';
	if ( isset($_GET['act']) ){
		$filename = $_GET['act'].'.php';
	}
	//include_once($filename);
	//include_once $filename;
	require $filename;
?>

<br>
<h1>Подвал сайта</h1>