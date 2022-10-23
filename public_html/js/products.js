'use strict';
// ********************** Product Add to Basket Hover *********************************


const btnAddToCart = document.querySelectorAll('.btnAddProducts');
const basketIcon = document.querySelectorAll('.fa-shopping-basket');
const basketP = document.querySelectorAll('.btnAddToBasketP');

for(let i = 0; i <btnAddToCart.length; i++){
	btnAddToCart[i].addEventListener('mouseenter', function(){
		basketP[i].style.transform = 'translateX(0.55rem)';
		basketIcon[i].style.transform = 'rotate(360deg)';
	});
	btnAddToCart[i].addEventListener('mouseleave', function(){
		basketP[i].style.transform = 'translateX(0rem)';
		basketIcon[i].style.transform = 'rotate(-360deg)';
	});
}

// ********************** Products Info Hover *********************************

const btnInfo = document.querySelectorAll('.btnProductInfo');
const forward = document.querySelectorAll('.btnProductInfoForward');
const rigthArrow = document.querySelectorAll('.fa-angle-right');

for(let i = 0; i < btnInfo.length; i++){
	btnInfo[i].addEventListener('mouseenter', function(){
		forward[i].style.transform = 'translateX(0rem)';
		setTimeout(rigthArrowOpacity, 10, i);
	});
	btnInfo[i].addEventListener('mouseleave', function(){
		forward[i].style.transform = 'translateX(0.55rem)';
		rigthArrow[i].style.opacity = 0;		
	});

	function rigthArrowOpacity(i){
		rigthArrow[i].style.opacity = 1;
	}
}

// ********************** Items Max Limit  **************************
 	const addProduct = document.querySelectorAll('.addProduct');
	const maxQty = document.querySelectorAll('.maxQty');
 	const productsCartItemQty = document.querySelectorAll('.productsCartItemQty');
	const maxQtyError = document.querySelectorAll('.maxQtyError');

	// console.log(maxQty);
	// console.log(productsCartItemQty);

		addProduct.forEach(function(element, index) {
			element.addEventListener('submit', function(e){
				if(parseInt(productsCartItemQty[index].textContent) >= parseInt(maxQty[index].textContent)){
					e.preventDefault();
					maxQtyError[index].classList.add('maxQtyOpacity');				
				}
			});			
		});

	// addProduct.forEach(function(element, index) { 
	// 		console.log(parseInt(productsCartItemQty[index].textContent), parseInt(maxQty[index].textContent));
	// 	element.addEventListener('submit', function(e){
	// 		if(parseInt(productsCartItemQty[index].textContent) >= parseInt(maxQty[index].textContent)){
	// 			e.preventDefault();
	// 			maxQtyError[index].classList.add('maxQtyOpacity');				
	// 		}
 // 		});
	// });
	





// ********************** Items Max Limit  ***************************