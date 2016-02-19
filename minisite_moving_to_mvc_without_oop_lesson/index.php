<?php
/**
 * Будут такие контроллеры:
 * Товары(products): просмотр всех (index), просмотр одного товара (view), поиск (search)
 * Страницы(pages): просмотр всех (index), просмотр одной страницы (view)
 * Контакты(contacts): просмотр контактной формы (index)
 *
 */
// Контроллер по умолчанию
$controller = 'pages';
// Экшн (действие, функция по умолчанию)
$action = 'index';

// 1. Получаем контроллер
if ( isset($_GET['controller']) && trim($_GET['controller']) ){
	$controller = $_GET['controller'];
}
// 2. Получаем экшн (действие)
if ( isset($_GET['action']) && trim($_GET['action']) ){
	$action = $_GET['action'];
}

// Формируем путь и подключаем контроллер
include 'controllers'.DIRECTORY_SEPARATOR.$controller.'.controller.php';

// Вызвать функцию, название которой хранится в переменной $action
// call_user_func($action);
// $action();
$content = call_user_func($action); // В переменной $content будет готовый HTML код


	require_once "lib.php";
	$arr = array('red', 'green', 'blue', 'yellow', 'orange');
	$rand_key = array_rand($arr);
	$color = $arr[$rand_key];
?>

<h1>Главное меню</h1><br>
	<a href="/">Главная</a>
	<a href="/?act=about">О компании</a>
	<a href="/?act=products">Товары</a>
	<a href="/?act=contact">Контакты</a>
<br>

<?php
	// Выводим контент!
	echo $content;
?>


<?php 
	/*$filename = 'main.php';
	if ( isset($_GET['act']) ){
		$filename = $_GET['act'].'.php';
	}
	
	$filename = 'pages' . DIRECTORY_SEPARATOR . $filename;
	
	//include_once($filename);
	//include_once $filename;
	require $filename;*/
?>

<br>
<h1>Подвал сайта</h1>


























