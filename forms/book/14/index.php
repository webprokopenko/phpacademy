<?php
/**
 * Created by PhpStorm.
 * User: 0311
 * Date: 10.05.2017
 * Time: 8:52 AM
 */
// Тестовые данные для раскрывающегося меню
$flavors = array('Vanilla','Chocolate','Rhinoceros');
// Настройка пустых значений по умолчанию при отсутствии выбранного варианта
$defaults = array('name' => '',
    'age' => '',
    'flavor' => array());
foreach ($flavors as $flavor) {
    $defaults['flavor'][$flavor] = '';
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $errors = array();
    include __DIR__ . '/show-form.php';
} else {
// Запрос относится к типу POST, проверить данные на форме
    $errors = validate_form();
    if (count($errors)) {
// Если обнаружены ошибки, повторно отобразить форму
// с сообщениями об ошибках, сохранив значения по умолчанию
        if (isset($_POST['name'])) { $defaults['name'] = $_POST['name']; }
        if (isset($_POST['age'])) { $defaults['age'] = "checked='checked'"; }
        foreach ($flavors as $flavor) {
            if (isset($_POST['flavor']) && ($_POST['flavor'] == $flavor)) {
                $defaults['flavor'][$flavor] = "selected='selected'";
            }
        }
        include __DIR__ . '/show-form.php';
    } else {
// Данные формы проверены, вывести сообщение для пользователя.
// Вероятно, в реальном приложении будет выполнено
// перенаправление или включен другой файл для отображения.
        print 'The form is submitted!';
    }
}
function validate_form() {
    global $flavors;
// Изначально ошибки отсутствуют
    $errors = array();
// Имя обязательно для заполнения, должно содержать не менее трех символов
    if (! (isset($_POST['name']) && (strlen($_POST['name']) > 3))) {
        $errors['name'] = 'Enter a name of at least 3 letters';
    }
    if (isset($_POST['age']) && ($_POST['age'] != '1')) {
        $errors['age'] = 'Invalid age checkbox value.';
    }
// Выбор из меню не обязателен, но если значение отправлено,
// оно должно присутствовать в $flavors
    if (isset($_POST['flavor']) && (! in_array($_POST['flavor'], $flavors))) {
        $errors['flavor'] = 'Choose a valid flavor.';
    }
    return $errors;
}