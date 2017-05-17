<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 12:03 PM
 * Аутентификация с использованием
cookie
 */
$secret_word = 'if i ate spinach';

if (validate($_POST['username'],$_POST['password'])) {
    setcookie('login', $_POST['username'].','.md5($_POST['username'].$secret_word));
}

/**
 * При использовании аутентификации с cookie приходится выводить собственную
форму ввода учетных данных вроде той, что представлена в листинге 8.6.
 */
?>
<form method="POST" action="login.php">
    Username: <input type="text" name="username"> <br>
    Password: <input type="password" name="password"> <br>
    <input type="submit" value="Log In">
</form>
<?php
/**
 * Для проверки имени пользователя и пароля можно воспользоваться функцией
validate() из листинга 8.1. Единственное различие заключается в том, что этой
функции в качестве учетных данных передаются значения $_POST['username']
и $_POST['password'] вместо $_SERVER['PHP_AUTH_USER'] и $_SERVER['PHP_AUTH_
PW']. Если пароль проходит проверку, сервер отправляет cookie с именем поль-
зователя, хеш-кодом имени пользователя и секретным словом. Хеш-код предот-
вращает фальсификацию посредством отправки cookie с именем пользователя.
 * После того как пользователь пройдет проверку, странице достаточно проверить
действительность отправленного значения cookie для выполнения специальных
операций для этого пользователя. Листинг 8.7 демонстрирует один из способов
решения этой задачи.
 */
unset($username);

if (isset($_COOKIE['login'])) {
    list($c_username, $cookie_hash) = split(',', $_COOKIE['login']);
    if (md5($c_username.$secret_word) == $cookie_hash) {
        $username = $c_username;
    } else {
        print "You have sent a bad cookie.";
    }
}
if (isset($username)) {
    print "Welcome, $username.";
} else {
    print "Welcome, anonymous user.";
}

#Листинг 8.8. Хранение информации подключения в сеансе

if (validate($_POST['username'],$_POST['password'])) {
    $_SESSION['login'] =
        $_POST['username'].','.md5($_POST['username'].$secret_word);
}

#Листинг 8.9. Проверка сеансовой информации

unset($username);
if (isset($_SESSION['login'])) {
    list($c_username,$cookie_hash) = explode(',',$_SESSION['login']);
    if (md5($c_username.$secret_word) == $cookie_hash) {
        $username = $c_username;
    } else {
        print "You have tampered with your session.";
    }
}
/**
 * Одна из опасностей использования сеансовых идентификаторов заключается
в том, что сеансы могут перехватываться. Если Алиса угадает идентификатор
сеанса Боба, она сможет выдать себя за Боба перед веб-сервером. Сеансовый
модуль имеет две необязательные конфигурационные директивы, которые за-
трудняют подбор идентификаторов сеанса. Директива session.entropy_file
содержит путь к устройству или файлу, генерирующему элемент случайности,
например /dev/random или /dev/urandom. Директива session.entropy_length со-
держит количество байтов, читаемых из файла энтропии при создании иденти-
фикатора сеанса.
Как бы вы ни затрудняли подбор идентификаторов сеансов, они могут быть по-
хищены при пересылке в виде простого текста между сервером и браузером поль-
зователя. Базовой аутентификации HTTP также присуща эта проблема. Исполь-
зуйте SSL для защиты от анализа сетевого трафика, как описано в Рецепте 18.13.
 */
 