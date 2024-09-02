		  <?php
        include 'db.php'; // Подключаемся к базе данных

        $sql = "SELECT name, category, price, weight, description, image_url FROM dish";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Для каждой записи создаем новый блок с классом 'column'
            while($row = $result->fetch_assoc()) {
                echo "<div class='column'>";
                echo "<div class='content'>";
                echo "<div class='image' id='imagef' style='background-image: url(" . $row['image_url'] . ");'></div>";
                echo "<p id='name'>" . $row['name'] . "</p>";
                echo "<h3 id='weight'>" . $row['weight'] . " гр</h3>";
                echo "<h3 id='decribe'>" . $row['description'] . "</h3>";
                echo "<div class='column_buy'>";
                echo "<h4 id='coast'>" . $row['price'] . " ₽</h4>";
                echo "<button id='basket' class='btn'>";
                echo "<img id='normalbasker' src='./img/buy.svg' alt='Купить' />";
                echo "</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Нет доступных данных</p>";
        }

        $conn->close(); // Закрываем соединение с базой данных
        ?>