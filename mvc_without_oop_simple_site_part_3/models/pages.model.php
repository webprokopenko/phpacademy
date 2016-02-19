<?php

/**
 * Получаем текст для вывода на странице
 */
function getPageTextByAlias($alias){
    $path = PAGES_DATA_PATH."/{$alias}.html";
    if ( file_exists($path) ){
        return file_get_contents($path);
    }

    return false;
}

function getContactForm(){

}