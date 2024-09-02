<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, phone, password) VALUES ('$username', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="register.php">
    <input type="text" name="username" placeholder="Имя пользователя" required><br>
    <input type="text" name="phone" placeholder="Телефон" required><br>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <button type="submit">Зарегистрироваться</button>
</form>

</body>
</html>