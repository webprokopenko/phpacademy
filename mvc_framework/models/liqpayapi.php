<?php

/**
 * Class LiqPayAPI
 * Класс для онлайн оплат через LiqPay
 * Документация по API: https://www.liqpay.com/ru/doc/checkout
 */
class LiqPayAPI extends Model{

    // TODO: это надо выносить в конфиг! Но тут для удобства просто оставил
    // Получить можно в личном кабинете LiqPay
    const PUBLIC_KEY = '***';
    const PRIVATE_KEY = '******';

    // Получение подписи
    public static function getSign($data, $private_key){
        return base64_encode(sha1($private_key.$data.$private_key, 1));
    }

    // Сюда приходит запрос от банка
    public static function callback($request){
        $bank_sign = $request['signature'];
        $data = (array)json_decode(base64_decode($request['data']));

        // Получаем подпись, чтобы свериться с подписью банка
        $cash_sign = self::getSign($request['data'], self::PRIVATE_KEY);

        if($bank_sign != $cash_sign){
            file_put_contents(ROOT.DS.'webroot'.DS.'test'.DS.'callback.html', "Неверная подпись");
        } else {
            if($data['status'] == 'sandbox' || $data['status'] == 'success'){
                file_put_contents(ROOT.DS.'webroot'.DS.'test'.DS.'callback.html', "Счет клиента {$data['customer']} пополнен на {$data['amount']} {$data['currency']}");
            }

            die('OK');
        }
    }

    // Получаем HTML код виджета
    public static function getWidget(){

        $data = array(
            'version' => 3,
            'public_key' => self::PUBLIC_KEY,
            'action' => 'pay',
            'amount' => rand(10,1000), // TODO: сумма к оплате
            'currency' => 'UAH',
            'order_id' => 'Тут номер вашего заказа, уникальный '.uniqid(),
            'language' => 'ru',
            'description' => 'Покупка в магазине - это тест!',
            'customer' => 'test@test.com',
            'server_url' => 'http://ВАШ_ДОМЕН_ИЛИ_IP/liqpay/callback',
            'result_url' => 'http://ВАШ_ДОМЕН_ИЛИ_IP/liqpay/return',
            'sandbox' => 1, // TODO: это - тестовый режим
        );

        $cash_data = base64_encode(json_encode($data));
        $cash_sign = self::getSign($cash_data, self::PRIVATE_KEY);

        $html = '<div id="liqpay_checkout"></div>
                 <script>
                     window.LiqPayCheckoutCallback = function() {
                         LiqPayCheckout.init({
                             data: "'.$cash_data.'",
                             signature: "'.$cash_sign.'",
                             embedTo: "#liqpay_checkout",
                             mode: "embed" // embed || popup
                         }).on("liqpay.callback", function(data){
                             console.log(data.status);
                             console.log(data);
                         }).on("liqpay.ready", function(data){
                             // ready
                         }).on("liqpay.close", function(data){
                             // close
                         });
                     };
                 </script>
                 <script src="//static.liqpay.com/libjs/checkout.js" async></script>
        ';

        return $html;
    }

}