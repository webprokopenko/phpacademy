<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 12:27 PM
 * Буферизация вывода
 * Требуется начать генерировать вывод до того, как вы завершили отправку заго-
ловков или cookie.
 * Вызовите функцию ob_start() в начале страницы и функцию ob_end_flush()
в конце. После этого вы сможете чередовать команды, генерирующие вывод,
с командами, отправляющими заголовки. Вывод не будет отправлен до вызова
ob_end_flush():
 */
ob_start(); ?>
I haven't decided if I want to send a cookie yet.
<?php setcookie('heron','great blue'); ?>
    Yes, sending that cookie was the right decision.
<?php
ob_end_flush();
/**
 * Функции ob_start() может передаваться имя функции обратного вызова для
обработки выходного буфера. Данная возможность может быть полезна для за-
ключительной обработки всего контента страницы (например, сокрытия адресов
электронной почты от роботов, собирающих адреса). Пример:
<?php
function mangle_email($s) {
return preg_replace('/([^@\s]+)@([-a-z0-9]+\.)+[a-z]{2,}/is',
'<$1@...>',
$s);
}
ob_start('mangle_email');
?>
I would not like spam sent to ronald@example.com!
<?php
ob_end_flush();
Функция mangle_email() преобразует вывод к следующему виду:
I would not like spam sent to <ronald@...>!
Конфигурационная директива output_buffering включает буферизацию вывода
для всех страниц:
output_buffering = On
Директива output_handler назначает функцию обратного вызова для обработки
выходного буфера для всех страниц:
output_handler=mangle_email
Выполнение output_handler автоматически включает output_buffering в состо-
яние on.
 */