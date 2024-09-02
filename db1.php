<?php
$servername = "localhost";
$username = "root"; // Замените на имя пользователя для вашей БД
$password = ""; // Замените на пароль для вашей БД
$dbname = "dish"; // Замените на имя вашей БД

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
