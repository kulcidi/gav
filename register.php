<?php
include 'db.php';

$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Проверяем, существует ли пользователь с таким же номером телефона
    $sql_check = "SELECT * FROM user WHERE phone='$phone'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        $error_message = "Пользователь с таким номером телефона уже существует!";
    } else {
        $sql = "INSERT INTO user (username, phone, password) VALUES ('$username', '$phone', '$password')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Регистрация прошла успешно! Переход на страницу входа...";
            header("refresh:3;url=login.php"); // Перенаправление через 3 секунды
            exit();
        } else {
            $error_message = "Ошибка регистрации: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Жемчужина Востока - Регистрация</title>
    <link rel="shortcut icon" href="./img/tab.ico" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./style1.css" />
</head>
<body>
    <main>
        <img id="background" src="./img/texture.png" />
        <section class="window">
            <h1>РЕГИСТРАЦИЯ</h1> 
            <?php if (!empty($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <?php if (!empty($success_message)): ?>
                <p style="color: green;"><?php echo $success_message; ?></p>
            <?php endif; ?>
            <div class="offer">
                <h2>Уже есть аккаунт?</h2>
                <a id="sus" href="login.php"><h2>Войти</h2></a>
            </div>

           

            <form method="POST" action="register.php">
                <input type="text" name="username" placeholder="Имя пользователя" required /><br />
                <input type="text" name="phone" placeholder="Телефон" required /><br />
                <input type="password" name="password" placeholder="Пароль" required /><br />
                <button type="submit" id="logout1"><h2>Зарегистрироваться</h2></button>
            </form>

            <button id="logout">
                <a href="index.php"><h2>На главную</h2></a>
            </button>
        </section>
    </main>
</body>
<script src="./script.js"></script>
</html>
