<?php

require_once "init.php";

// TODO: создать функцию register и вынести туда код ниже

if ( $_POST ){
    if ( $_POST['password'] != $_POST['password2'] ){
        echo "Ваши пароли не совпадают";
    }

    $login = mysqli_escape_string($link, $_POST['login']);
    $password = mysqli_escape_string($link, $_POST['password']);
    $password = md5($password.SECURITY_SALT);


    $sql = "
      insert into users
         set login = '{$login}',
             password = '{$password}',
             role = 'registered',
             is_active = 1,
             verification_hash = uuid()
    ";
    $result = mysqli_query($link, $sql);
    if ( $result === true ){
        echo "Вы успешно зарегистрированы! Проверьте почту, чтобы войти в систему";
    } else {
        echo "Не получилось создать аккаунт! Попробуйте заново!";
    }
}

?>

<form method="post" action="">
    <input type="text" placeholder="Ваш логин" name="login" /><br>
    <input type="password" placeholder="Ваш пароль" name="password" /><br>
    <input type="password" placeholder="Повторите ваш пароль" name="password2" /><br>
    <br> <input type="submit" value="Создать аккаунт" />
</form>
