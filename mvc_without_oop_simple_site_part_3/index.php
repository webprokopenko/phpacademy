<?php

require_once('lib.php');

$_controller = 'pages';
$_action = 'index';

if ( $_GET ){
    if ( isset($_GET['controller']) ){
        $_controller = strtolower($_GET['controller']);
    }
    if ( isset($_GET['action']) ){
        $_action = strtolower($_GET['action']);
    }
}

/**
 * Включаем конфиг файл
 */
include('config.php');

/**
 * Включаем хелпер для меню
 */
include('helpers/menu.helper.php');

/**
 * Данные для шаблона
 */
$data = array();
$data['page_title'] = $site_name;
$data['menu'] = getMenu();


$_controller_path = CONTROLLERS_PATH . '/' . $_controller . '.controller.php';

if ( file_exists($_controller_path) ){
    $d = require_once($_controller_path);
    $data['content'] = call_user_func($_action, $_GET);
} else {
    die('Error');
}



/**
 * Подключаем базовый шаблон
 */
include('templates/index.ctp');

