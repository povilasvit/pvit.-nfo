'use strict';

// ********************** Product Add to Basket Hover *********************************



//single product
const singleAddtoBasket = document.querySelector('.singleProductBtn');
const singleAddtoBasketIcon = document.querySelector('.fasIcon');
const singleAddtoBasketParagraph = document.querySelector('.btnAddToBasketPar');

singleAddtoBasket.addEventListener('mouseenter', function(){
	singleAddtoBasketIcon.style.transform = 'rotate(360deg)';
	singleAddtoBasketParagraph.style.transform = 'translateX(0.55rem)';
});
singleAddtoBasket.addEventListener('mouseleave', function(){
	singleAddtoBasketIcon.style.transform = 'rotate(-360deg)';
	singleAddtoBasketParagraph.style.transform = 'translateX(0rem)';

});

// ********************** Product Add to Basket Hover *********************************
// ********************** Single Product Back Hover *********************************

const btnBack = document.querySelector('.singleMoreBtn');
const btnParagraph = document.querySelector('.singleMoreBtnBackP');
const btnChevronLeft = document.querySelector('.fa-chevron-left');
 
btnBack.addEventListener('mouseenter', function(){
	btnParagraph.style.transform = 'translateX(0rem)';
	setTimeout(leftChevron, 10);
});
btnBack.addEventListener('mouseleave', function(){
	btnParagraph.style.transform = 'translateX(-0.75rem)';
	btnChevronLeft.style.opacity = 0;
});

function leftChevron(){
	btnChevronLeft.style.opacity = 1;
}

// ********************** Single Product Back Hover *********************************
// ********************** Items Max Limit  **************************
const addSingleProduct = document.querySelector('.addSingleProduct');
const maxQty = document.querySelector('.maxQty');
const productsCartItemQty = document.querySelector('.productsCartItemQty');
const maxQtyError = document.querySelector('.maxQtyError');

console.log(addSingleProduct);
console.log(maxQty.textContent);
console.log(productsCartItemQty.textContent);
console.log(maxQtyError);

addSingleProduct.addEventListener('submit', function(e){
	if(parseInt(productsCartItemQty.textContent) >= parseInt(maxQty.textContent)){
		e.preventDefault();
		maxQtyError.classList.add('maxQtyOpacity');				
	}
});			
	


// ********************** Items Max Limit  ***************************