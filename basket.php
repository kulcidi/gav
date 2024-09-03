<!DOCTYPE html>
<html lang="en" style="height: 100%;">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Жемчужина Востока</title>
		<link rel="shortcut icon" href="./img/tab.ico" />
		<link rel="stylesheet" href="./style.css" />
	</head>
	<body style="height: 100%;">
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
							<?php if (isset($_SESSION['user_id'])): ?>
							<a href="profile.php"
								><img id="profile-icon1" src="./svg/profile.svg" alt="Profile"
							/></a>
							<?php else: ?>
							<a href="login.php"
								><img id="profile-icon1" src="./svg/profile.svg" alt="Profile"
							/></a>
							<?php endif; ?>
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
		</main><div style="  display: flex;
  flex-direction: column;
  height: 100%;">
		<div id="shorter"></div>
		<main style=" flex: 1 0 auto;">
		
		</main>
		<footer style="  flex: 0 0 auto;">
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
		</footer></div>
	</body>
	<script src="./script.js"></script>
</html>
