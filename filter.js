document.addEventListener('DOMContentLoaded', function () {
	const checkbox = document.getElementById('hot-checkbox')
	const contentDiv = document.getElementById('static')

	function loadProducts() {
		const url = checkbox.checked ? 'hot_dishes.php' : 'all_dishes.php'
		fetch(url)
			.then(response => response.text())
			.then(data => {
				contentDiv.innerHTML = data
			})
			.catch(error => console.error('Error loading products:', error))
	}

	// Загрузить продукты при начальной загрузке страницы
	loadProducts()

	// Загрузить продукты при изменении состояния чекбокса
	checkbox.addEventListener('change', loadProducts)
})
