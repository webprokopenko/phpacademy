<?php

require_once "init.php";

// TODO: создать функцию verify и вынести туда код ниже

if ( isset($_GET['code']) ){
    $code = mysqli_escape_string($link, $_GET['code']);

    $sql = "
        update users
           set verification_hash = NULL
           where verification_hash = '{$code}'
    ";

    if ( mysqli_query($link, $sql) ){
        echo "Вы успешно активировали свою запись!";
    }
}
?>
<br>
<br>
<a href="login.php">Войти</a>
