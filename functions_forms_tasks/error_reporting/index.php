<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 04.05.2017
 * Time: 3:10 PM
 * http://anton.shevchuk.name/php/php-for-beginners-error-handling/
 */
    // включаем отображение всех ошибок, кроме E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 1);

    // наш обработчик ошибок
    function myHandler($level, $message, $file, $line, $context) {
        // в зависимости от типа ошибки формируем заголовок сообщения
        switch ($level) {
            case E_WARNING:
                $type = 'Warning';
                break;
            case E_NOTICE:
                $type = 'Notice';
                break;
            default;
                // это не E_WARNING и не E_NOTICE
                // значит мы прекращаем обработку ошибки
                // далее обработка ложится на сам PHP
                return false;
        }
        // выводим текст ошибки
        echo "<h2>$type: $message</h2>";
        echo "<p><strong>File</strong>: $file:$line</p>";
        echo "<p><strong>Context</strong>: $". join(', $', array_keys($context))."</p>";
        // сообщаем, что мы обработали ошибку, и дальнейшая обработка не требуется
        return true;
    }

    // регистрируем наш обработчик, он будет срабатывать на для всех типов ошибок
    set_error_handler('myHandler', E_ALL);
/**
 *  Данная функция будет срабатывать всегда!
 */
function shutdown() {
    $error = error_get_last();
    if (
        // если в коде была допущена ошибка
        is_array($error) &&
        // и это одна из фатальных ошибок
        in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])
    ) {
        // очищаем буфер вывода (о нём мы ещё поговорим в последующих статьях)
        while (ob_get_level()) {
            ob_end_clean();
        }
        // выводим описание проблемы
        echo "Сервер находится на техническом обслуживании, зайдите позже";
    }
}
register_shutdown_function('shutdown');
