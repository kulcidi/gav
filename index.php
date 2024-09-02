<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Жемчужина Востока</title>
		<link rel="shortcut icon" href="./img/tab.ico" />
		<link rel="stylesheet" href="./style.css" />
		<link rel="stylesheet" href="./slider.css" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css" />
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

			<aside id="filterrSidebar" class="filterr"></aside>
			<div id="shorter" id="left">
				<h1>НАСТОЯЩАЯ <br />КИТАЙСКАЯ КУХНЯ</h1>
			</div>
		</main>
		<section id="splide" class="splide" aria-label="Splide Basic HTML Example">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<img src="./img/swipe1.png" alt="" />
						<div class="splide__slidetext">
							<h1>Сет "Харбин" - 3 кг китайской кухни за 3540₽</h1>
							<h3>Отличный выбор для 3-5 человек</h3>
						</div>
					</li>
					<li class="splide__slide">
						<img src="./img/swipe2.png" alt="" />
						<div class="splide__slidetext">
							<h1>Принимаем заказы ежедневно с 11:00 до 23:00</h1>
							<h3>Минимальный размер заказа - 1000 рублей</h3>
						</div>
					</li>
					<li class="splide__slide">
						<img src="./img/swipe3.png" alt="" />
						<div class="splide__slidetext">
							<h1>1 кг бизнес-ланча за 300₽</h1>
							<h3>С 12:00 до 15:00 От 5 штук</h3>
						</div>
					</li>
					<li class="splide__slide">
						<img src="./img/swipe4.png" alt="" />
						<div class="splide__slidetext">
							<h1>Скидка 5% на самовывоз</h1>
							<h3>По адресу г. Чита, ул. Евгения Гаюсана 25А</h3>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<main>
			<div id="shorter"><h1>ПОПУЛЯРНЫЕ СЕТЫ</h1></div>
			<div id="set" class="catalogue-main">
				<div class="column">
					<div class="content">
						<div class="image" id="image1"></div>
						<p id="name">Сет "Харбин"</p>
						<h3 id="weight">Вес: 3кг</h3>
						<h3 id="decribe">
							Мясо веревочкой,<br />
							Гобаожоу<br />
							Жаренные баклажаны<br />
							Китайский салат<br />
							Картофель-фри<br />
							Рис с яйцом<br />
							Пампушки 2шт.
						</h3>
						<div class="column_buy">
							<h4 id="coast">3 540₽</h4>
							<button id="basket" class="btn">
								<img id="normalbasker" src="./img/buy.svg" alt="" />
							</button>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="content">
						<div class="image" id="image3"></div>
						<p id="name">Сет "Пекин"</p>
						<h3 id="weight">Вес: 5кг</h3>
						<h3 id="decribe">
							Мясо веревочкой 2шт.<br />
							Гобаожоу<br />
							Хрустящие крылышки<br />
							Мясное жаркое с картофелем<br />
							Китайский салат<br />
							Салат из сельдерея с кешью<br />
							Пикантный салат из древесных грибов<br />
							Рис с овощами 2шт.<br />
							Пампушки 6шт.
						</h3>
						<div class="column_buy">
							<h4 id="coast">6 070₽</h4>
							<button id="basket" class="btn">
								<img id="normalbasker" src="./img/buy.svg" alt="" />
							</button>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="content">
						<div class="image" id="image2"></div>
						<p id="name">Сет "Далянь"</p>
						<h3 id="weight">Вес:3кг</h3>
						<h3 id="decribe">
							Хрустящие крылышки<br />
							Свинина с креветками в пивном соусе<br />
							Баклажаны с картофелем<br />
							Крахмальная лапша с мясом<br />
							Салат из языка
						</h3>
						<div class="column_buy">
							<h4 id="coast">4 050₽</h4>
							<button id="basket" class="btn">
								<img id="normalbasker" src="./img/buy.svg" alt="" />
							</button>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="content">
						<div class="image" id="image4"></div>
						<p id="name">Сет "Шанхай"</p>
						<h3 id="weight">Вес: 5кг</h3>
						<h3 id="decribe">
							Гобаожоу<br />
							Говядина на доске<br />
							Свинина с креветками в пивном соусе<br />
							Бастурма<br />
							Жареные баклажаны<br />
							Китайский салат<br />
							Мясо-овощной салат<br />
							Рис с яйцом 2шт.
						</h3>
						<div class="column_buy">
							<h4 id="coast">6 700₽</h4>
							<button id="basket" class="btn">
								<img id="normalbasker" src="./img/buy.svg" alt="" />
							</button>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="content">
						<div class="image" id="image5"></div>
						<p id="name">Сет "Циндао"</p>
						<h3 id="weight">Вес: 2кг</h3>
						<h3 id="decribe">
							Кусочки свинины с перцем<br />
							Свинина с побегами чеснока<br />
							Крахмальная лапша с мясом<br />
							Картофель жареный в сметане<br />
							Пампушки 2шт.
						</h3>
						<div class="column_buy">
							<h4 id="coast">2 630₽</h4>
							<button id="basket" class="btn">
								<img id="normalbasker" src="./img/buy.svg" alt="" />
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="linkie"><a id="a" href="./menu.html">ПЕРЕЙТИ В МЕНЮ</a></div> -->
		</main>
		<div class="placeandtime">
			<main class="placeandtime1">
				<h2>
					АДРЕС: ЧИТА, ЕВГЕНИЯ ГАЮСАНА 25а <br />ТЕЛЕФОН: 71-18-18<br /><br />РАБОТАЕМ:
					Пятница, суббота - С 11:00 ДО 24:00<br />С Воскресенья по четверг - С
					11:00 ДО 23:00
				</h2>
			</main>
		</div>
		<main>
			<img id="be" src="./img/Frame.svg" alt="" />
			<!-- <div class="archieve">
				<div class="archieve-part">
					<img src="./svg/time.svg" alt="" />
					<div><h2>Доставка за 60 минут</h2></div>
					<div><h3>доставка на мжк, северный, октябрьский - 40 минут.</h3></div>
				</div>
				<div class="archieve-part">
					<img src="./svg/house.svg" alt="" />
					<h2>настоящие китайские повара</h2>
					<h3>шеф-повар ли из провинции хэйлунцзян.</h3>
				</div>
				<div class="archieve-part">
					<img src="./svg/boat.svg" alt="" />
					<h2>скидка 5% на самовывоз</h2>
					<h3>Ваш заказ — наша забота. Забирайте быстрее и экономьте.</h3>
				</div>
			</div> -->
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
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
	<script>
		const splide = new Splide('.splide', {
			type: 'loop',
			autoplay: true,
			interval: 3000, // Интервал между слайдами (в миллисекундах)
			pauseOnHover: false, // Отключение паузы при наведении мыши
			resetProgress: false, // Сбросить таймер, когда пользователь взаимодействует с слайдером
			speed: 300,
		})

		splide.mount()
	</script>
	<script src="./script.js"></script>
</html>
