let lastScrollTop = 0
const header = document.querySelector('.header2')

window.addEventListener('scroll', function () {
	let scrollTop = window.pageYOffset || document.documentElement.scrollTop

	if (scrollTop < lastScrollTop) {
		// Прокрутка вверх
		header.style.top = '0'
	} else {
		// Прокрутка вниз
		header.style.top = '-100px' // Скрыть шапку (значение -100px можно менять в зависимости от высоты шапки)
	}

	lastScrollTop = scrollTop <= 0 ? 0 : scrollTop // Для защиты от отрицательных значений
})
document.addEventListener('DOMContentLoaded', function () {
	const shorter = document.getElementById('shorter')

	function adjustMargin() {
		if (window.matchMedia('(max-width: 1466px)').matches) {
			shorter.style.marginTop = '70px'
		} else {
			shorter.style.marginTop = '' // Reset margin when screen is larger
		}
	}

	// Apply margin adjustment on page load
	adjustMargin()

	// Apply margin adjustment on window resize
	window.addEventListener('resize', adjustMargin)
})

document.querySelectorAll('.btn').forEach(button => {
	button.addEventListener('click', function () {
		// Удаляем активное состояние со всех кнопок
		document
			.querySelectorAll('.btn')
			.forEach(btn => btn.classList.remove('active'))

		// Добавляем активное состояние на нажатую кнопку
		this.classList.add('active')

		// Применяем эффект scale только к нажатой кнопке
		this.style.transform = 'scale(0.7)'

		// Возвращаем нормальный размер кнопки после задержки
		setTimeout(() => {
			this.style.transform = 'scale(1)'
		}, 200)
	})
})

document.getElementById('button1').onclick = function () {
	window.open('https://vk.com/gemchugina_vostoka_chita', '_blank')
}

document.getElementById('button2').onclick = function () {
	window.open(
		'https://www.youtube.com/channel/UChKeJhZhELTs1Zpzse-rStA/videos',
		'_blank'
	)
}

// Функция для навигации по ссылкам
function navigateTo(url) {
	window.location.href = url
}

// Привязка событий к элементам в header1
document.getElementById('menu-link').addEventListener('click', function () {
	navigateTo('menu.php') // Укажите правильный путь к странице
})

document.getElementById('lunch-link').addEventListener('click', function () {
	navigateTo('lunch.php') // Укажите правильный путь к странице
})

document.getElementById('delivery-link').addEventListener('click', function () {
	navigateTo('delivery.php') // Укажите правильный путь к странице
})

document.getElementById('reviews-link').addEventListener('click', function () {
	navigateTo('reviews.php') // Укажите правильный путь к странице
})

// Привязка событий ко всем элементам <h2> в aside
document.querySelectorAll('#side-menu h2').forEach(function (element) {
	element.addEventListener('click', function () {
		const url = element.getAttribute('data-url')
		navigateTo(url)
	})
})

// Функция для навигации по ссылкам
function navigateTo(url) {
	window.location.href = url
}

// Переход по клику на логотип
document.getElementById('logo-small').addEventListener('click', function () {
	navigateTo('index.php') // Переход на главную страницу
})

// Переход по клику на логотип
document.getElementById('logo-big').addEventListener('click', function () {
	navigateTo('index.php') // Переход на главную страницу
})

// Переход по клику на иконку корзины
document.getElementById('basket-icon2').addEventListener('click', function () {
	navigateTo('basket.php') // Переход на страницу корзины
})

// Переход по клику на иконку корзины
document.getElementById('basket-icon1').addEventListener('click', function () {
	navigateTo('basket.php') // Переход на страницу корзины
})
// Переход по клику на иконку корзины
document.getElementById('profile-icon1').addEventListener('click', function () {
	navigateTo('profile.php') // Переход на страницу корзины
})

document
	.querySelectorAll('input[type="checkbox"].check')
	.forEach(function (checkbox) {
		checkbox.addEventListener('change', function () {
			if (this.checked) {
				document
					.querySelectorAll('input[type="checkbox"].check')
					.forEach(function (otherCheckbox) {
						if (otherCheckbox !== checkbox) {
							otherCheckbox.checked = false
						}
					})
			}
		})
	})

// Получаем ссылку на боковое меню
const asideMenu = document.getElementById('side-menu')

// Получаем ссылку на кнопку меню
const menuButton = document.getElementById('menu-toggle')

// Добавляем обработчик события клика на кнопку меню
menuButton.addEventListener('click', event => {
	event.stopPropagation() // Остановка распространения события, чтобы оно не дошло до документа
	asideMenu.classList.toggle('menu-active')
})

// Добавляем обработчик события клика на документ
document.addEventListener('click', event => {
	// Если клик был выполнен вне бокового меню и кнопки меню, то закрываем меню
	if (!asideMenu.contains(event.target) && event.target !== menuButton) {
		asideMenu.classList.remove('menu-active')
	}
})
document.querySelectorAll('.btn').forEach(button => {
	button.addEventListener('click', function () {
		// Удаляем активное состояние со всех кнопок
		document
			.querySelectorAll('.btn')
			.forEach(btn => btn.classList.remove('active'))

		// Добавляем активное состояние на нажатую кнопку
		this.classList.add('active')

		// Применяем эффект scale только к нажатой кнопке
		this.style.transform = 'scale(0.7)'

		// Возвращаем нормальный размер кнопки после задержки
		setTimeout(() => {
			this.style.transform = 'scale(1)'
		}, 200)
	})
})
