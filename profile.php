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
            <img src="./svg/prprpr.svg" alt=""></div>
            <?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE id_user='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h1>Имя: " . $row['username'] . "</h1>";
    echo '<div class="tagi">';
    echo "<h2>Телефон: " . $row['phone'] . "</h2>";
    echo "<h2>Пароль: " . $row['password'] . "</h2>"; // Никогда не показывайте пароль в реальных приложениях
    echo '</div>';
}
?>

 <button id="logout1"><a href="index.php"><h2>На главную</h2></a></button>
<form method="POST" action="logout.php">
    <button id="logout"><h2>выйти</h2></button>
</form>
   <section>
		</main>
	</body>
	<script src="./script.js"></script>
</html>
