<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 8:29 AM
 */
/**
 Предотвращение межсайтовых сценарных атак
 * Требуется организовать безопасный вывод данных, введенных пользователем,
на странице HTML. Например, вы хотите разрешить пользователю добавлять
комментарии к сообщениям в блоге, не беспокоясь о том, что содержащийся
в комментарии код JavaScript или разметка HTML создаст проблемы.
 */
$html = "<a href='fletch.html'>Stew's favorite movie.</a>\n";
print htmlspecialchars($html); // Двойные кавычки
print htmlspecialchars($html, ENT_QUOTES); // Одиночные и двойные кавычки
print htmlspecialchars($html, ENT_NOQUOTES); // Ни то, ни другое