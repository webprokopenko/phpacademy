<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 11:10 AM
 * Обработка всех файлов в каталоге
 * Требуется перебрать все файлы в каталоге. Например, вы хотите создать на фор-
ме поле <select/> со списком всех файлов в каталоге.
 */
echo "<select name='file'>\n";
foreach (new DirectoryIterator(__DIR__.'/') as $file) {
    echo '<option>' . htmlentities($file) . "</option>\n";
}
echo '</select>';

echo "<select name='file'>\n";

foreach (new DirectoryIterator(__DIR__.DIRECTORY_SEPARATOR) as $file) {
    if (! $file->isDot()) {
        echo '<option>' . htmlentities($file) . "</option>\n";
    }
}
echo '</select>';
/**
 * Информационные методы объекта DirectoryIterator
 * Имя метода Возвращаемое значение Пример
    isDir() Элемент является каталогом? false
    isDot() Элемент является. или ..? false
    isFile() Элемент является обычным файлом? true
    isLink() Элемент является ссылкой? false
    isReadable() Элемент доступен для чтения? true
    isWritable() Элемент доступен для записи? true
    isExecutable() Элемент доступен для исполнения? false
    getATime() Время последнего обращения к элементу 1144509622
    getCTime() Время создания элемента 1144509600
    getMTime() Время последнего изменения элемента 1144509620
    getFilename() Имя файла (без начального пути) eggplant.png
    getPathname() Полное имя элемента /usr/local/images/eggplant.png
    getPath() Путь элемента /usr/local/images
    getGroup() Идентификатор группы элемента 500
    getOwner() Идентификатор владельца элемента 1000
    getPerms() Разрешения элемента (в восьмеричной записи)16895
    getSize() Размер элемента 328742
    getType() Тип элемента (dir, file, link и т. д.) file
    getInode() Номер индексного узла элемента 28720
 */