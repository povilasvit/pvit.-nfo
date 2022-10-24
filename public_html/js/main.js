'use strict';

// ********************** Main Carousel *********************************
const mainCarousel = document.querySelectorAll('.imgMainCarousel');

let activePicture = 0;

function carousel(){
 if(activePicture < mainCarousel.length - 1){
	activePicture++;
	setActivePicture();
} else {
	activePicture = 0;
	setActivePicture();
	}
}

function setActivePicture(){
	mainCarousel.forEach(picture=>{
		picture.classList.remove('activeCarousel');
		mainCarousel[activePicture].classList.add('activeCarousel');
	});
}

setInterval('carousel()',10000);

// ********************** Main Carousel *********************************
// ********************** Go to Shop Button Hover *********************************

const goToShop = document.querySelector('.goToShop');
const goToShopB = document.querySelector('.goToShopB');
const arrowDown = document.querySelector('.downArrow'); 

if(goToShopB != null){
	if(window.innerWidth > 1200){
		goToShop.addEventListener('mouseenter', function(){
			goToShopB.classList.add('goToShopBMove');
			setTimeout(arrowOpacity, 100);
		});
		goToShop.addEventListener('mouseleave', function(){
			goToShopB.classList.remove('goToShopBMove');
			arrowDown.style.opacity = 0;
		});
	}
}

function arrowOpacity(){
	arrowDown.style.opacity = 1;
}

// ********************** Go to Shop Button Hover *********************************
// ********************** Shopping Cart *********************************

	//Shopping cart circle appear
const shoppingCart = document.querySelector('.shoppingCart');
let screenHeight = window.screen.height;
let cartPosition = window.pageYOffset;

window.addEventListener('scroll', function(){
	cartPosition = window.pageYOffset;
	if(screenHeight * 0.2 > cartPosition){
		shoppingCart.style.display = 'none';
		shoppingCart.style.opacity = 0;
	} else {
		cartAppear();
		setTimeout(cartOpacity, 100);
	}
});

function cartAppear(){
	shoppingCart.style.display = 'flex';
}
function cartDisappear(){
	shoppingCart.style.display = 'none';
}
function cartOpacity(){
	shoppingCart.style.opacity = 1;
}




// ********************** Shopping Cart *********************************
// ********************** Nav Active-Hover  *****************************

const navItems = document.querySelectorAll('.nav');

navItems[0].addEventListener('mouseenter', function(){
	navItems[1].classList.remove('navActive');
	navItems[2].classList.remove('navActive');
}); 
navItems[0].addEventListener('mouseleave', function(){
	navItems[1].classList.add('navActive');
	navItems[2].classList.add('navActive');
}); 

 navItems[1].addEventListener('mouseenter', function(){
	navItems[0].classList.remove('navActive');
	navItems[2].classList.remove('navActive');
}); 
navItems[1].addEventListener('mouseleave', function(){
	navItems[0].classList.add('navActive');
	navItems[2].classList.add('navActive');
});

navItems[2].addEventListener('mouseenter', function(){
	navItems[0].classList.remove('navActive');
	navItems[1].classList.remove('navActive');
}); 
navItems[2].addEventListener('mouseleave', function(){
	navItems[0].classList.add('navActive');
	navItems[1].classList.add('navActive');
});


// ********************** Nav Active-Hover  *****************************
// ********************** Hamburger Click  *****************************

const hamburger = document.querySelector('.hamburger');
const hamburgerMenu = document.querySelector('.hamburgerMenu');
const lineB = document.querySelector('.lineB');
const lineA = document.querySelector('.lineA');
const lineC = document.querySelector('.lineC');


hamburger.addEventListener('click', function(){
	lineB.classList.toggle('lineBTransformed');
	lineA.classList.toggle('lineATransformed');
	lineC.classList.toggle('lineCTransformed');
	hamburgerMenu.classList.toggle('hamburgerMenuTr');
});


// ********************** Hamburger Click  *****************************
// ********************** Scroll to Shop  *******************************

const btn = document.querySelector('.goToShop');
const shopContainer = document.querySelector('.shopCategoryContainer');

btn.addEventListener('click', function(){
	window.scrollTo({
		top: 660,
		behavior: "smooth"
	});
});

navItems[0].addEventListener('click', function(){
	window.scrollTo({
		top: 660,
		behavior: "smooth"
	});
});

// ********************** Scroll to Shop  *******************************
// ********************** Contact Us  Validation  *******************************

const contactUsForm = document.getElementById('coctactUsForm');
const contactUsName = document.getElementById('contactUsName');
const contactUsMail = document.getElementById('contactUsMail');
const contactNameError = document.getElementById('contactNameError');
const contactNameValid = document.getElementById('contactNameValid');
const contactMailError = document.getElementById('contactMailError');
const contactMailValid = document.getElementById('contactMailValid');


contactUsForm.addEventListener('submit', function(e){
	let nameErrorMessage = [];
	let nameValid = [];
	let mailErrorMessage = [];
	let mailValid = [];
	let messageErrorMessage = [];

	//name validation
	if(contactUsName.value === '' || contactUsName.value == null){
		nameErrorMessage.push('Name is required');
	}
	if(contactUsName.value.length > 0 && contactUsName.value.length < 3){
		nameErrorMessage.push('Name is required');
	}
	if(contactUsName.value.length > 2){
		nameValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
	}
	//mail validation
	if(contactUsMail.value.length > 0 && !contactUsMail.value.match(/\S+@\S+\.\S+/)){
		mailErrorMessage.push('Invalid email format');	
		console.log('blogas');
	} else if(contactUsMail.value.length == 0 || contactUsMail.value == null){
		mailErrorMessage.push('Email is required');
	}
	if(contactUsMail.value.match(/\S+@\S+\.\S+/)){
		mailValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
	}
	//Message validation
	if(contactUsMessage.value === '' || contactUsMessage.value == null){
		messageErrorMessage.push('Message is required');
	}
	// prevent from input refresh page
	 if(nameErrorMessage.length > 0){
		e.preventDefault();
		contactNameError.innerHTML = nameErrorMessage;
		contactNameValid.innerHTML = nameValid;
		contactMessageError.innerHTML = messageErrorMessage;	 	
	 }
	 if(mailErrorMessage.length > 0){
	 	e.preventDefault();
	 	contactMailError.innerHTML = mailErrorMessage;
		contactMailValid.innerHTML = mailValid;
	 }
	 if(messageErrorMessage.length > 0){
	 	e.preventDefault();
	 	contactMessageError.innerHTML = messageErrorMessage;
	 }


});

contactUsForm.addEventListener('keyup', function(){
	let nameErrorMessage = [];
	let nameValid = [];
	let mailErrorMessage = [];
	let mailValid = [];
	let messageErrorMessage = [];
	
		//name validation
		if(contactUsName.value === '' || contactUsName.value == null){
			nameErrorMessage.push('Name is required');
		}
		if(contactUsName.value.length > 0 && contactUsName.value.length < 3){
			nameErrorMessage.push('Name is required');
		}
		if(contactUsName.value.length > 2){
			nameValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
		}

		//mail validation
		if(contactUsMail.value.length > 0 && !contactUsMail.value.match(/\S+@\S+\.\S+/)){
			mailErrorMessage.push('Invalid email format');	
		} else if(contactUsMail.value.length == 0 || contactUsMail.value == null){
			mailErrorMessage.push('Email is required');
		}
		if(contactUsMail.value.match(/\S+@\S+\.\S+/)){
			mailValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
		}
		//Message validation
		if(contactUsMessage.value === '' || contactUsMessage.value == null){
			messageErrorMessage.push('Message is required');
		} 
	// e.preventDefault();
	contactNameError.innerHTML = nameErrorMessage;
	contactNameValid.innerHTML = nameValid;
	contactMailError.innerHTML = mailErrorMessage;
	contactMailValid.innerHTML = mailValid;
	contactMessageError.innerHTML = messageErrorMessage;
});
// ********************** Contact Us  Validation  *******************************
