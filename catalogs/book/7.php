<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 11:09 AM
 * Удаление файла
 */
$file = '/tmp/junk.txt';
unlink($file) or die ("can't delete $file: $php_errormsg");

/**
 * Функция unlink() может удалять только те файлы, которые разрешено удалять
пользователю процесса PHP. Если у вас возникнут трудности с unlink(), про-
верьте разрешения файла и способ запуска PHP.
 */