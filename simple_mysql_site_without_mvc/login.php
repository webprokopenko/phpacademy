<?php
    require_once "init.php";

    session_start();

    if( isset($_SESSION['login']) ){
        header("Location: admin.php");
        exit;
    }

    // TODO: создать функцию login и вынести туда код ниже

    if ( $_POST ){ // TODO: && isset()...
        $login = mysqli_escape_string($link, $_POST['login']);
        $password = mysqli_escape_string($link, $_POST['password']);
        $password = md5($password.SECURITY_SALT);

        $sql = "
          select * from users where login = '{$login}' and password = '{$password}'
        ";
        $result = mysqli_query($link, $sql);
        if( mysqli_num_rows($result) ){

            $user = mysqli_fetch_assoc($result);

            if ( $user['verification_hash'] ){
                echo "Вы не проверили письмо от нас!
                Зайдите на почту и нажмите ссылку
                из нашего письма!";

                die;
            }


//            print_r($user); die;
            $_SESSION['login'] = $user['login'];
            $_SESSION['role'] = $user['role'];

            header("Location: admin.php");
            exit;

        } else {
            echo "Неправильный логин / пароль";
        }
    }

//print_r($_SESSION); die;
?>
<form method="post" action="">
    <input type="text" placeholder="Ваш логин" name="login" /><br>
    <input type="password" placeholder="Ваш пароль" name="password" /><br>
    <br> <input type="submit" value="Войти в систему" />
</form>
<br>
<a href="register.php">Регистрация</a>