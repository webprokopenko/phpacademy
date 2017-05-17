<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 5/17/17
 * Time: 11:56 AM
 */
/**
 * Кроме базовой аутентификации, PHP также поддерживает дайджест-аутенти-
фикацию. При базовой аутентификации имена и пароли отправляются в неза-
 * щищенном виде по сети, сминимальной маскировкой в виде кодирования Base64.
При дайджест-аутентификации сам пароль никогда не передается от браузера
к серверу — отправляется только хеш-код пароля вместе с другими значениями.
Тем самым сокращается вероятность перехвата сетевого трафика и его воспро-
изведения атакующей стороной. Повышенная безопасность, обеспечиваемая
дайджест-аутентификацией, означает, что код реализации будет сложнее про-
стого сравнения паролей. В листинге 8.3 представлены функции для реализации
дайджест-аутентификации в соответствии с RFC 2617.
 */
/* Заменить соответствующей проверкой имени пользователя
и пароля - например, проверкой по базе данных */
$users = array('david' => 'fadj&32',
    'adam' => '8HEj838');
$realm = 'My website';
$username = validate_digest($realm, $users);
// При недействительных данных аутентификации управление
// никогда не достигнет этой точки.
print "Hello, " . htmlentities($username);
function validate_digest($realm, $users) {
// Ошибка, если клиент не предоставил дайджест
    if (! isset($_SERVER['PHP_AUTH_DIGEST'])) {
        send_digest($realm);
    }
// Ошибка, если дайджест не удается разобрать
    $username = parse_digest($_SERVER['PHP_AUTH_DIGEST'], $realm, $users);
    if ($username === false) {
        send_digest($realm);
    }
// В дайджесте указано правильное имя пользователя
    return $username;
}
function send_digest($realm) {
    http_response_code(401);
    $nonce = md5(uniqid());
    $opaque = md5($realm);
    header("WWW-Authenticate: Digest realm=\"$realm\" qop=\"auth\" ".
        "nonce=\"$nonce\" opaque=\"$opaque\"");
    echo "You need to enter a valid username and password.";
    exit;
}
function parse_digest($digest, $realm, $users) {
// Необходимо найти в заголовке дайджеста следующие значения:
// username, uri, qop, cnonce, nc и response
    $digest_info = array();
    foreach (array('username','uri','nonce','cnonce','response') as $part) {
// Ограничителем может быть символ ' или " или ничего (для qop и nc)
        if (preg_match('/'.$part.'=([\'"]?)(.*?)\1/', $digest, $match)) {
// Если компонент найден, сохранить его для вычислений
            $digest_info[$part] = $match[2];
        } else {
// Если компонент отсутствует, проверка дайджеста невозможна;
            return false;
        }
    }
// Убедиться в правильности предоставленного значения qop
    if (preg_match('/qop=auth(,|$)/', $digest)) {
        $digest_info['qop'] = 'auth';
    } else {
        return false;
    }
// Убедиться в правильности переданного временного значения
    if (preg_match('/nc=([0-9a-f]{8})(,|$)/', $digest, $match)) {
        $digest_info['nc'] = $match[1];
    } else {
        return false;
    }
// Теперь убедиться в том, что из заголовка дайджеста были извлечены
// все необходимые значения, и выполнить алгоритмические вычисления,
// необходимые для проверки правильности информации.
//
// Эти вычисления описаны в разделах 3.2.2, 3.2.2.1
// и 3.2.2.2 документа RFC 2617.
// Алгоритм MD5
    $A1 = $digest_info['username'] . ':' . $realm . ':' .
        $users[$digest_info['username']];
// qop содержит 'auth'
    $A2 = $_SERVER['REQUEST_METHOD'] . ':' . $digest_info['uri'];
    $request_digest = md5(implode(':', array(md5($A1), $digest_info['nonce'],
        $digest_info['nc'],
        $digest_info['cnonce'], $digest_info['qop'], md5($A2))));
// Отправленные данные соответствуют вычисленным?
    if ($request_digest != $digest_info['response']) {
        return false;
    }
// Все нормально, вернуть имя пользователя
    return $digest_info['username'];
}