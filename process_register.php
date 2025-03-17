<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $errors = [];

    if (empty($username)) {
        $errors[] = "Имя пользователя обязательно";
    } elseif (strlen($username) < 4) {
        $errors[] = "Имя пользователя должно содержать минимум 4 символа";
    }

    if (empty($password)) {
        $errors[] = "Пароль обязателен";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Пароли не совпадают";
    }

    if (empty($errors)) {
        print("<h1>Регистрация успешна</h1>");
        print("Имя пользователя: " . htmlspecialchars($username));
    } else {
        foreach ($errors as $error) {
            print("<p style='color: red;'>$error</p>");
        }
    }
}
?>
