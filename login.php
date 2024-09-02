<?php
include 'db.php';
session_start();

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE phone='$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            header("Location: profile.php");
            exit();
        } else {
            $error_message = "Неправильный пароль!";
        }
    } else {
        $error_message = "Пользователь с таким телефоном не найден!";
    }
}
?>


<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Жемчужина Востока</title>
		<link rel="shortcut icon" href="./img/tab.ico" />
		<link rel="stylesheet" href="./style.css" />
		<link rel="stylesheet" href="./style1.css" />
	</head>
	<body>
		<main>
			<img id="background" src="./img/texture.png" />
			<section class="window">
				<h1>ВОЙТИ</h1>
                <div class="offer">
                    <h2>Впервые на сайте?</h2>
                    <a id="sus" href="register.php"><h2 >Зарегистрироваться</h2> </a>
                </div>
                
				<form method="POST" action="login.php">
					<input
						type="text"
						name="phone"
						placeholder="Телефон"
						required /><br />
					<input
						type="password"
						name="password"
						placeholder="Пароль"
						required /><br />
				</form>
				<button type="submit" id="logout1"><h2>ВОЙТИ</h2></button>

				<button id="logout">
					<a href="index.php"><h2>На главную</h2></a>
				</button>
			</section>
		</main>
	</body>
	<script src="./script.js"></script>
</html>
