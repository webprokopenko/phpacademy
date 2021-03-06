<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 12:39 PM
 * Перенаправление
мобильных браузеров
 * Требуется перенаправить браузер для мобильного или планшетного устройства
на альтернативный сайт или альтернативный контент, оптимизированный для
устройства.
 */
$browser = get_browser();
if ($browser->ismobilebrowser) {
// Вывод контента для мобильных устройств
} else {
// Вывод контента для настольных устройств
}
/**
 * Функция get_browser() проверяет переменную окружения (заданную веб-
сервером) и сравнивает ее с браузерами, перечисленными во внешнем файле
описания браузеров. Из-за проблем, связанных с лицензированием, файл описа-
ния браузеров не входит в поставку PHP. Одним из источников служит сайт
Browscap (http://browscap.org/); загрузите с него файл php_browscap.ini.
После загрузки файла необходимо сообщить PHP его местонахождение; для
этого следует указать в конфигурационной директиве browscap путь к файлу.
Если вы используете PHP в режиме CGI, включите директиву в файл php.ini:
browscap=/usr/local/lib/php_browscap.ini
После того как устройство будет идентифицировано как мобильное, запрос пере-
направляется на версию сайта или на страницу, оптимизированную для мобиль-
ных устройств:
header('Location: http://m.example.com/');
Также существует упрощенное решение — вместо вызова get_browser() вы мо-
жете разобрать $_SERVER['HTTP_USER_AGENT'] самостоятельно.
 */