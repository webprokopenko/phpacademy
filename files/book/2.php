<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 10:07 AM
 *Следующий пример

работает со строками длиной до 256 байт:
 */
while (! feof($fh)) {
    $s = fgets($fh,256);
}
fclose($fh) or die($php_errormsg);