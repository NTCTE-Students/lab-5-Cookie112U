<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print("<p style='color: red;'>Некорректный email</p>");
    } else {
        print("<h1>Вы успешно подписаны!</h1>");
    }
}
?>
