<?php

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

/**
 * Подключаем базовый шаблон
 */
include('templates/index.ctp');

