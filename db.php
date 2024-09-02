<?php
$servername = "localhost";
$username = "root"; // замените на ваше имя пользователя
$password = ""; // замените на ваш пароль, если он установлен
$dbname = "dish"; // замените на имя вашей базы данных

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
