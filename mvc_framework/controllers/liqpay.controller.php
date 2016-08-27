<?php

class LiqpayController extends Controller{

    // Здесь выводим виджет
    public function pay(){
        echo LiqPayAPI::getWidget();
        exit;
    }

    // Сюда приходит запрос от банка
    public function callback(){
        LiqPayAPI::callback($_POST);
        exit;
    }

}