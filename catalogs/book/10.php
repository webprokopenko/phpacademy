<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 11:16 AM
 * Получение списка файлов по шаблону
 */
class ImageFilter extends FilterIterator {
    public function accept() {
        return preg_match('@\.(gif|jpe?g|png)$@i',$this->current());
    }
}
foreach (new ImageFilter(new DirectoryIterator('/usr/local/images')) as $img) {
    print "<img src='".htmlentities($img)."'/>\n";
}