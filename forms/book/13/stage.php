<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 8:44 AM
 */
/**
 * Работа с многостраничными формами
 */
// Включение сеансов
session_start();
// Определение используемого этапа
if (($_SERVER['REQUEST_METHOD'] == 'GET') || (! isset($_POST['stage']))) {
    $stage = 1;
} else {
    $stage = (int) $_POST['stage'];
}
// Проверяем, что номер этапа не слишком мал и не слишком велик
$stage = max($stage, 1);
$stage = min($stage, 3);
// Сохранение отправленных данных
if ($stage > 1) {
    foreach ($_POST as $key => $value) {
        $_SESSION[$key] = $value;
    }
}
include __DIR__ . "/stage-$stage.php";