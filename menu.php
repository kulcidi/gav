<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Жемчужина Востока</title>
		<link rel="shortcut icon" href="./img/tab.ico" />
		<link rel="stylesheet" href="./style.css" />
		<link rel="stylesheet" href="./catalogue.css" />
	</head>
	<body>
		<img id="background" src="./img/texture.png" />
		<main>
			<header class="header1">
				<div>
					<img id="logo-big" src="./img/LOGO.png" alt="Logo" />
					<nav id="header1-nav1">
						<h3 id="menu-link">МЕНЮ</h3>
						<img class="dot" src="./svg/dot.svg" />
						<h3 id="lunch-link">БИЗНЕС-ЛАНЧИ</h3>
						<img class="dot" src="./svg/dot.svg" />
						<h3 id="delivery-link">ДОСТАВКА И ОПЛАТА</h3>
						<img class="dot" src="./svg/dot.svg" />
						<h3 id="reviews-link">ОТЗЫВЫ</h3>
					</nav>
					<nav id="header1-nav2">
						<button>
							<img id="basket-icon1" src="./svg/basket1.svg" alt="Basket" />
						</button>
					</nav>
					<nav id="header1-nav2">
						<button>
							<img id="profile-icon1" src="./svg/profile.svg" alt="Profile" />
						</button>
					</nav>
				</div>
			</header>

			<div class="header2">
				<button id="menu-toggle">
					<img src="./svg/burger.svg" alt="Menu Toggle" />
				</button>
				<img id="logo-small" src="./img/LOGO.png" alt="Logo" />
				<img id="basket-icon2" src="./svg/basket.svg" alt="Basket" />
			</div>

			<aside id="side-menu" class="menu">
				<h2 data-url="menu.php">МЕНЮ</h2>
				<h2 data-url="lunch.php">БИЗНЕС-ЛАНЧИ</h2>
				<h2 data-url="delivery.html">ДОСТАВКА И ОПЛАТА</h2>
				<h2 data-url="reviews.php">ОТЗЫВЫ</h2>
				<h2 data-url="profile.php">ПРОФИЛЬ</h2>
			</aside>

			<aside id="filterrSidebar" class="filterr">
				<h2 data-index="set">СЕТЫ</h2>
				<h2 data-index="hot">ГОРЯЧЕЕ</h2>
				<h2 data-index="salad">САЛАТЫ</h2>
				<h2 data-index="add">ГАРНИРЫ</h2>
				<h2 data-index="lunch">БИЗНЕС-ЛАНЧИ</h2>
				<h2 data-index="pie">ОСЕТИНСКИЕ ПИРОГИ</h2>
				<h2 data-index="grill">ГРИЛЬ</h2>
				<h2 data-index="kids">ДЛЯ ДЕТЕЙ</h2>
				<h2 data-index="drink">НАПИТКИ</h2>
			</aside>

			<div id="shorter"></div>
			<div class="buka">
				<button id="filterrButton"><h2>КАТЕГОРИЯ</h2></button>
			</div>
			<div class="catalogue">
				<div class="right" id="side">
					<h2>китайская кухня</h2>
					<div class="filter">
						<div class="checkbox" data-index="set">
							<input
								type="checkbox"
								id="check1"
								name="category"
								class="check" />
							<label for="check1" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>СЕТЫ</span>
							</label>
						</div>

						<div class="checkbox" data-index="hot">
							<input
								type="checkbox"
								id="check2"
								name="category"
								class="check" />
							<label for="check2" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>ГОРЯЧЕЕ</span>
							</label>
						</div>

						<div class="checkbox" data-index="salad">
							<input
								type="checkbox"
								id="check3"
								name="category"
								class="check" />
							<label for="check3" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>САЛАТЫ</span>
							</label>
						</div>

						<div class="checkbox" data-index="seafood">
							<input
								type="checkbox"
								id="check4"
								name="category"
								class="check" />
							<label for="check4" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>МОРЕПРОДУКТЫ</span>
							</label>
						</div>

						<div class="checkbox" data-index="add">
							<input
								type="checkbox"
								id="check5"
								name="category"
								class="check" />
							<label for="check5" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>ГАРНИРЫ</span>
							</label>
						</div>

						<div class="checkbox" data-index="lunch">
							<input
								type="checkbox"
								id="check6"
								name="category"
								class="check" />
							<label for="check6" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>БИЗНЕС-ЛАНЧИ</span>
							</label>
						</div>
					</div>

					<h2>ПРОЧЕЕ</h2>

					<div class="filter">
						<div class="checkbox" data-index="pie">
							<input
								type="checkbox"
								id="check7"
								name="category"
								class="check" />
							<label for="check7" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>ПИРОГИ</span>
							</label>
						</div>

						<div class="checkbox" data-index="grill">
							<input
								type="checkbox"
								id="check8"
								name="category"
								class="check" />
							<label for="check8" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>ГРИЛЬ</span>
							</label>
						</div>

						<div class="checkbox" data-index="kids">
							<input
								type="checkbox"
								id="check9"
								name="category"
								class="check" />
							<label for="check9" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>ДЛЯ ДЕТЕЙ</span>
							</label>
						</div>

						<div class="checkbox" data-index="drink">
							<input
								type="checkbox"
								id="check10"
								name="category"
								class="check" />
							<label for="check10" class="label">
								<svg width="43" height="43" viewbox="0 0 90 90">
									<rect
										x="30"
										y="20"
										width="50"
										height="50"
										stroke="black"
										fill="none" />
									<g transform="translate(0,-952.36218)">
										<path
											d="m 13,983 c 33,6 40,26 55,48"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
										<path
											d="M 75,970 C 51,981 34,1014 25,1031"
											stroke="black"
											stroke-width="3"
											class="path1"
											fill="none" />
									</g>
								</svg>
								<span>НАПИТКИ</span>
							</label>
						</div>
					</div>
				</div>
				<div class="left">
					<?php
include 'db.php'; // Подключаемся к базе данных

$sql = "SELECT name, category, price, weight, description, image_url FROM dish";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Для каждой записи создаем новый блок с классом 'column' и добавляем 'data-category'
    while($row = $result->fetch_assoc()) {
        echo "<div class='column' data-category='" . $row['category'] . "'>";
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

$conn->close();
?>

				</div>
			</div>
		</main>
		<footer style="margin-top: 50px">
			<main>
				<div class="column">
					<img src="./img/LOGO.png" alt="" />
				</div>
				<div class="column">
					<h2>КОНТАКТЫ</h2>
					<h3>8 (924) 811-18-18</h3>
				</div>
				<div class="column">
					<h2>О КОМПАНИИ</h2>
					<h3>Юридическая информация</h3>
					<h3>Политика конфиденциальности</h3>
				</div>
				<div class="column">
					<h2>СОЦСЕТИ</h2>
					<div id="gog">
						<button id="button1" class="btn">
							<img id="buty" src="./svg/vk.svg" alt="" />
						</button>
						<button id="button2" class="btn">
							<img id="buty" src="./svg/yt.svg" alt="" />
						</button>
					</div>
				</div>
				<div class="column">
					<h2>©2000-2024</h2>
					<h3 id="fonth3">ОФИЦИАЛЬНЫЙ САЙТ</h3>
				</div>
			</main>
		</footer>
	</body>

	<script src="./script.js"></script>
	<script>
		document
			.getElementById('filterrButton')
			.addEventListener('click', function () {
				const sidebar = document.getElementById('filterrSidebar')
				if (sidebar.classList.contains('filterr-active')) {
					sidebar.classList.remove('filterr-active')
				} else {
					sidebar.classList.add('filterr-active')
				}
			})
		// Добавляем обработчик события клика на документ
		document.addEventListener('click', event => {
			const asideMenu = document.getElementById('filterrSidebar') // Боковое меню
			const menuButton = document.getElementById('filterrButton') // Кнопка для открытия меню

			// Если клик был выполнен вне бокового меню и кнопки меню, то закрываем меню
			if (!asideMenu.contains(event.target) && event.target !== menuButton) {
				asideMenu.classList.remove('filterr-active') // Закрываем меню, убирая класс активности
			}
		})
	</script>
	<script>
    // Функция фильтрации блюд
    function filterDishes() {
        const checkboxes = document.querySelectorAll('.filter .checkbox input[type="checkbox"]');
        const columns = document.querySelectorAll('.left .column');

        // Получаем все выбранные категории
        let selectedCategories = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                // Привязка категории к data-index чекбокса
                const category = checkbox.parentElement.getAttribute('data-index');
                selectedCategories.push(category);
            }
        });

        // Если нет выбранных категорий, показываем все блюда
        if (selectedCategories.length === 0) {
            columns.forEach(column => {
                column.style.display = 'block';
            });
            return;
        }

        // Фильтруем блюда на основе выбранных категорий
        columns.forEach(column => {
            const category = column.getAttribute('data-category');
            if (selectedCategories.includes(category)) {
                column.style.display = 'block';
            } else {
                column.style.display = 'none';
            }
        });
    }

    // Навешиваем событие на каждый чекбокс
    document.querySelectorAll('.filter .checkbox input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', filterDishes);
    });

    // Вызываем фильтрацию при загрузке страницы
    window.addEventListener('load', filterDishes);
</script>

</html>
