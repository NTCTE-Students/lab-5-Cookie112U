<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $errors = [];

    if (strlen($username) < 4) {
        $errors[] = "Имя пользователя должно содержать минимум 4 символа";
    }

    if (empty($password)) {
        $errors[] = "Пароль обязателен";
    }

    if (empty($errors)) {
        print("<h1>Вход выполнен!</h1>");
    } else {
        foreach ($errors as $error) {
            print("<p style='color: red;'>$error</p>");
        }
    }
}
?>
