<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 11:52 AM
 * Использование аутентификации HTTP
 * Требуется использовать PHP для защиты частей сайта паролями. Вместо того
чтобы хранить пароли во внешнем файле и поручить аутентификацию веб-
серверу, вы хотите реализовать логику проверки пароля в программе PHP.
 * Суперглобальные переменные $_SERVER['PHP_AUTH_USER'] и $_SERVER['PHP_AUTH_
PW'] содержат имя пользователя и пароль (если они были предоставлены поль-
 * зователем). Чтобы запретить доступ к странице, отправьте заголовок WWW-
Authenticate, идентифицирующий защищенную область как часть ответа с кодом
статуса HTTP 401:
 */

http_response_code(401);
header('WWW-Authenticate: Basic realm="My Website"');
echo "You need to enter a valid username and password.";
exit();

function validate($user, $pass) {
    /* Заменить соответствующей проверкой имени пользователя
    и пароля - например, проверкой по базе данных */
    $users = array('david' => 'fadj&32',
            'adam' => '8HEj838');
    if (isset($users[$user]) && ($users[$user] === $pass)) {
        return true;
    } else {
        return false;
    }
}

if (! validate($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
    http_response_code(401);
    header('WWW-Authenticate: Basic realm="My Website"');
    echo "You need to enter a valid username and password.";
    exit;
}