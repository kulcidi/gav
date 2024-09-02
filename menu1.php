<?php
include 'db.php'; // Подключаемся к базе данных

$sql = "SELECT name, category, price, weight, description, image_url FROM dish";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Выводим данные каждой строки
    while($row = $result->fetch_assoc()) {
        echo "<div class='dish'>";
        echo "<h2>" . $row["name"] . "</h2>";
        echo "<p>Категория: " . $row["category"] . "</p>";
        echo "<p>Цена: " . $row["price"] . " руб.</p>";
        echo "<p>Вес: " . $row["weight"] . " кг</p>";
        echo "<p>Описание: " . $row["description"] . "</p>";
        echo "<img src='" . $row["image_url"] . "' alt='" . $row["name"] . "'>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close(); // Закрываем соединение с базой данных
?>
