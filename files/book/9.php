<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 10:45 AM
 * Обработка каждого слова в файле
Прочитайте каждую строку функцией fgets(), разделите строки на слова и об-
работайте каждое слово:
 */
$fh = fopen('great-american-novel.txt','r') or die($php_errormsg);
while (! feof($fh)) {
    if ($s = fgets($fh)) {
        $words = preg_split('/\s+/',$s,-1,PREG_SPLIT_NO_EMPTY);
            // Обработка слов
    }
}
fclose($fh) or die($php_errormsg);
#В следующем примере вычисляется средняя длина слова в файле:
if ($fh = fopen('great-american-novel.txt','r')) {
    while (! feof($fh)) {
        if ($s = fgets($fh)) {
            $words = preg_split('/\s+/',$s,-1,PREG_SPLIT_NO_EMPTY);
            foreach ($words as $word) {
                $word_count++;
                $word_length += strlen($word);
            }
        }
    }
}
print sprintf("The average word length over %d words is %.02f characters.", $word_count, $word_length/$word_count);