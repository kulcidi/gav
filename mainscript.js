// // public/script.js
// document.addEventListener('DOMContentLoaded', function () {
// 	fetch('/products')
// 		.then(response => response.json())
// 		.then(products => {
// 			const container = document.querySelector('.catalogue-main1')

// 			products.forEach(product => {
// 				// Создание элемента column
// 				const column = document.createElement('div')
// 				column.classList.add('column')

// 				// Создание внутренней структуры
// 				column.innerHTML = `
//           <div class="content">
//             <div class="image" id="imagef">
//               <img src="${product.image_url}" alt="${product.name}">
//             </div>
//             <p id="name">${product.name}</p>
//             <h3 id="weight">${product.weight}</h3>
//             <h3 id="decribe">${product.description}</h3>
//             <div class="column_buy">
//               <h4 id="coast">$${product.price}</h4>
//               <button id="basket" class="btn">
//                 <img id="normalbasker" src="./img/buy.svg" alt="" />
//               </button>
//             </div>
//           </div>
//         `

// 				// Добавление элемента column в контейнер
// 				container.appendChild(column)
// 			})
// 		})
// 		.catch(error => console.error('Ошибка при получении продуктов:', error))
// })
