<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = trim($_POST['username']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);

    $errors = [];

    if (empty($username)) {
        $errors[] = "Имя пользователя обязательно";
    } elseif (strlen($username) < 4) {
        $errors[] = "Имя пользователя должно содержать минимум 4 символа";
    }

    if (empty($errors)) {
        print("<h1>Бронирование успешно!</h1>");
        print("Имя пользователя: " . htmlspecialchars($username));
        print("<br>" . "Ваша дата бронирования: " . htmlspecialchars($date) . "<br>" . ("Время бронирования: " . htmlspecialchars($time)));
    }

}
?>
