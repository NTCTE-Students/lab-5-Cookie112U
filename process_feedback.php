<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $errors = [];

    if (empty($name)) {
        $errors[] = "Имя обязательно";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Некорректный email";
    }

    if (strlen($message) < 10) {
        $errors[] = "Сообщение должно содержать минимум 10 символов";
    }

    if (empty($errors)) {
        print("<h1>Сообщение отправлено!</h1>");
    } else {
        foreach ($errors as $error) {
            print("<p style='color: red;'>$error</p>");
        }
    }
}
?>
