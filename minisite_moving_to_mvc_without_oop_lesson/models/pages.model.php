<?php

function getPagesList(){
    // Абстрагируемся от источника данных
    // TODO: брать этот массив из файла
    $pages = array('О нас', 'Контакты', 'Условия доставки');

    return $pages;
}