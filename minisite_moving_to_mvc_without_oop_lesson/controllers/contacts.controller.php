<?php

function index(){
    // Подключаем шаблон
    // TODO: сделать константу VIEWS_PATH
    ob_start();
    include "views/contacts/index.html";
    $html = ob_get_clean();

    // Возвращаем готовый HTML код обратно в index.php
    return $html;
}