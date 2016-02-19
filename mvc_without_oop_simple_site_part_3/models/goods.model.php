<?php

function getGoodsList(){
    $goods_list = array(
        '1' => array(
            'name' => 'Ноутбук HP',
            'price' => 2569.00,
            'photo' => 'http://www.login.com.br/Login_Files/images/Acessorios/Netbook-notebook/Notebook-HP-G42-431BR_3.jpg',
        ),
        '2' => array(
            'name' => 'Ноутбук Acer',
            'price' => 5680.00,
            'photo' => 'http://i.mlcdn.com.br/1500x1500/notebook-acer-aspire-e1-intel-core-i3-1-7-ghz4gb-500gb-windows-8-led-15-6-34-hdmi-135213800.jpg',
        ),
        '3' => array(
            'name' => 'Ноутбук Dell',
            'price' => 5680.00,
            'photo' => 'http://i1.zst.com.br/images/notebook-dell-vostro-5000-intel-core-i7-4500u-8gb-de-ram-hd-500-gb-led-14-touchscreen-geforce-gt-740m-windows-8-vostro-5470-photo23295400-12-14-2e.jpg',
        ),
    );
    return $goods_list;
}