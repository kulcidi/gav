<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Жемчужина Востока</title>
		<link rel="shortcut icon" href="./img/tab.ico" />
		<link rel="stylesheet" href="./style.css" />
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
		</main>
		<div id="shorter"></div>
		<main>
			<section class="deliv">
				<h1>УСЛОВИЯ ДОСТАВКИ</h1>
				<div class="deliv_info">
					<h4>
						• Ваш заказ начнут готовить сразу же после подтверждения оператором
					</h4>
					<h4>
						• Заказ оформляется как на текущее время, так и на удобное для Вас
					</h4>
					<h4>• Минимальный размер заказа - 1000 рублей</h4>
					<h4>
						• Вы так же можете забрать свой заказ самостоятельно по адресу ул.
						Евгения Гаюсана 25А
					</h4>
				</div>
				<img id="be" src="./img/Frame1.svg" alt="" />
				<h1>СТОИМОСТЬ ДОСТАВКИ</h1>
				<div class="deliv-grid">
					<article>
						<h2>БЕСПЛАТНАЯ ДОСТАВКА</h2>
						<div class="deliv_info">
							<h4>•Центр города</h4>
							<h4>•Каштак</h4>
							<h4>•Солнечный</h4>
							<h4>•Витимский</h4>
							<h4>•Трактовая</h4>
						</div>
					</article>
					<article>
						<h2>ПЛАТНАЯ ДОСТАВКА</h2>
						<div class="deliv_info">
							<h4>•Смоленка - 200 рублей</h4>
							<h4>•КСК - 200 рублей</h4>
							<h4>•ГРЭС - 250 рублей</h4>
							<h4>•Большой остров - 200 рублей</h4>
							<h4>•Сосновый бор - 200 рублей</h4>
							<h4>•Антипиха - 200 рубле</h4>
							<h4>•Песчанка - 250 рублей</h4>
							<h4>•Черновские - 450 рублей</h4>
							<h4>•Атамановка - 450 рублей</h4>
						</div>
					</article>
				</div>
			</section>
		</main>
		<footer>
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
</html>
