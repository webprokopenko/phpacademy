<?php

function index(){
    include "models/pages.model.php";
    $pages = getPagesList();

    // Подключаем шаблон
    // TODO: сделать константу VIEWS_PATH
    ob_start();
    include "views/pages/index.html";
    $html = ob_get_clean();

    return $html;
}

function view(){
    echo "Здесь будет один страница!";
}