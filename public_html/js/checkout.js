'use strict';

// ********************** Checkout address disappear, payment appear *********************************

	const address = document.querySelector('.address');
	const payment = document.querySelector('.payment');
	const btnAddressForward = document.querySelector('.btnAddressForward');
	const btnPaymentBack = document.querySelector('.btnPaymentBack');
	
	btnAddressForward.addEventListener('click', function(){
	let checkoutNameErrorMessage1 = [];
	let checkoutPhoneErrorMessage1 = [];
	let checkoutMailErrorMessage1 = [];
	let checkoutAddressErrorMessage1 = [];
		if(checkoutName.value === '' || checkoutName.value == null){
			checkoutNameErrorMessage1.push('* Įveskite Vardą ir Pavardę');
			checkoutNameError.innerHTML = checkoutNameErrorMessage1;
		}
		if(checkoutPhone.value === '' || checkoutPhone.value == null){
			checkoutPhoneErrorMessage1.push('* Įveskite Telefono Numerį');
			checkoutPhoneError.innerHTML = checkoutPhoneErrorMessage1;
		}
		if(checkoutAddress.value === '' || checkoutAddress.value == null){
			checkoutAddressErrorMessage1.push('* Įveskite Adresą');
			checkoutAddressError.innerHTML = checkoutAddressErrorMessage1;
		}
		if(checkoutMail.value === '' || checkoutMail.value == null){
			checkoutMailErrorMessage1.push('* Įveskite E.Pašto Adresą');
			checkoutMailError.innerHTML = checkoutMailErrorMessage1;
		}

		else{

		address.style.opacity = 0;
		setTimeout(addressDisplayNone, 500);
		setTimeout(paymentDisplay, 500);
		setTimeout(paymentOpacity, 500);
		}
	});
	btnPaymentBack.addEventListener('click', function(){
		payment.style.opacity = 0;
		setTimeout(paymentDisplayNone, 500);
		setTimeout(addressDisplay, 500);
		setTimeout(addressOpacity, 500);
	});

	function addressDisplayNone(){
		address.style.display = 'none';
	}
	function paymentDisplay(){
		payment.style.display = 'flex';
	}
	function paymentOpacity() {
		payment.style.opacity = 1;
	}

	function paymentDisplayNone() {
		payment.style.display = 'none';
	}
	function addressOpacity() {
		address.style.opacity = 1;
	}
	function addressDisplay() {
		address.style.display = 'block';
	}


// ********************** Checkout address disappear, payment appear *********************************
// ********************** CheckOut Validation  *******************************

const checkoutForm = document.getElementById('payment-form');
const btnAddressForwardBtn = document.getElementById('btnAddressForwardBtn');

const checkoutName = document.getElementById('checkoutName');
const checkoutNameError = document.getElementById('checkoutNameError');
const checkoutNameValid = document.getElementById('checkoutNameValid');
const checkoutPhone = document.getElementById('checkoutPhone');
const checkoutPhoneError = document.getElementById('checkoutPhoneError');
const checkoutPhoneValid = document.getElementById('checkoutPhoneValid');
const checkoutMail = document.getElementById('checkoutMail');
const checkoutMailError = document.getElementById('checkoutMailError');
const checkoutMailValid = document.getElementById('checkoutMailValid');
const checkoutAddress = document.getElementById('checkoutAddress');
const checkoutAddressError = document.getElementById('checkoutAddressError');
const checkoutAddressValid = document.getElementById('checkoutAddressValid');


checkoutForm.addEventListener('keyup', function(e){
let checkoutNameErrorMessage = [];
let checkoutNameIsValid = [];
let checkoutPhoneErrorMessage = [];
let checkoutPhoneIsValid = [];
let checkoutPhoneValue = checkoutPhone.value;
let checkoutMailErrorMessage = [];
let checkoutMailIsValid = [];
let checkoutMailValue = checkoutMail.value;
let checkoutAddressErrorMessage = [];
let checkoutAddressIsValid = [];

	//name validation
	if(checkoutName.value === '' || checkoutName.value == null){
		checkoutNameErrorMessage.push('* Įveskite Vardą ir Pavardę!');
	}
	if(checkoutName.value.length > 0 && checkoutName.value.length < 3){
		checkoutNameErrorMessage.push('* Įveskite Vardą ir Pavardę!');
	}
	if(checkoutName.value.length > 2){
		checkoutNameIsValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
	}
	checkoutNameError.innerHTML = checkoutNameErrorMessage;
	checkoutNameValid.innerHTML = checkoutNameIsValid;

	//phone validation
	if(checkoutPhone.value === '' || checkoutPhone.value == null){
		checkoutPhoneErrorMessage.push('* Įveskite Telefono Numerį!');
	} else if(!checkoutPhoneValue.match(/^[0-9]{9}$/)){
		checkoutPhoneErrorMessage.push('* pvz.: 869912345');
	} 
	if(checkoutPhoneValue.match(/^[0-9]{9}$/)){
		checkoutPhoneIsValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
	}     

	checkoutPhoneError.innerHTML = checkoutPhoneErrorMessage;
	checkoutPhoneValid.innerHTML = checkoutPhoneIsValid;

	//email validation
	if(checkoutMail.value.length > 0 && !checkoutMail.value.match(/\S+@\S+\.\S+/)){
		checkoutMailErrorMessage.push('* Neteisingas E.Pašto Formatas!');	
	} else if(checkoutMail.value.length == 0 || checkoutMail.value == null){
		checkoutMailErrorMessage.push('* Įveskite E.Pašto Adresą!');
	} 
	if(checkoutMailValue.match(/\S+@\S+\.\S+/)){
		checkoutMailIsValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
	}

	checkoutMailError.innerHTML = checkoutMailErrorMessage;
	checkoutMailValid.innerHTML = checkoutMailIsValid;

	//Address validation
	if(checkoutAddress.value === '' || checkoutAddress.value == null){
		checkoutAddressErrorMessage.push('* Įveskite Adresą!');
	}
	if(checkoutAddress.value.length > 0 && checkoutAddress.value.length < 3){
		checkoutAddressErrorMessage.push('* Įveskite Adresą!');
	}
	if(checkoutAddress.value.length > 2){
		checkoutAddressIsValid.push('<i style="color:var(--btnsuccess)" class="fa-solid fa-circle-chevron-down"></i>');
	}
	checkoutAddressError.innerHTML = checkoutAddressErrorMessage;
	checkoutAddressValid.innerHTML = checkoutAddressIsValid;

});
// ********************** CheckOut Validation  *******************************
// ********************** Payment Validation  ********************************

const btnBuy = document.querySelector('.btnBuy');
const cartNumber = document.getElementById('cartNumber');
const cartNumberError = document.getElementById('cartNumberError');
const cartName = document.getElementById('ownerName');
const cartNameError = document.getElementById('cartOwnerError');
const cartCvc = document.getElementById('cartCvc');
const cartCvcError = document.getElementById('cartCvcError');
const cartExpMonth = document.getElementById('cartExpMonth');
const cartExpMonthError = document.getElementById('expMonth');
const cartExpYear = document.getElementById('cartExpYear');
const cartExpYearError = document.getElementById('expYear');



btnBuy.addEventListener('click', function(){

	let cartNumberMessage = [];
	let cartNumberValue = cartNumber.value;
	let cartNameMessage = [];
	let cartDateMonthMessage = [];
	let cartDateYearMessage = [];
	let cartCvcMessage = [];
	let cartCvcValue = cartCvc.value;
	let cartExpMonthMessage = [];
	let cartExpMonthValue = cartExpMonth.value;
	let cartExpYearMessage = [];
	let cartExpYearValue = cartExpMonth.value;

	//Cart number validation 
	if(cartNumber.value === '' || cartNumber.value == null){
		cartNumberMessage.push('* Įveskite Kortelės Numerį');
		} else if(!cartNumberValue.match(/^[0-9]{9}$/) && !cartNumberValue.length == 16){
		cartNumberMessage.push('* Įveskite 16 Skaitmenų Kortelės Numerį!');
	} 		
		cartNumberError.innerHTML = cartNumberMessage;

	//Cart Name Validation
	if(cartName.value === '' || cartName.value == null){
		cartNameMessage.push('* Įveskite Kortelės Savininko Vardą ir Pavardę!');
	}
	cartNameError.innerHTML = cartNameMessage;	
	//CVC validation
	if(cartCvc.value === '' || cartCvc.value == null){
		cartCvcMessage.push('* Įveskite CVC Skaičių!');
		} else if(!cartCvcValue.match(/^[0-9]{9}$/) && !cartCvcValue.length == 3){
		cartCvcMessage.push('* Įveskite CVC Saugos Skaičių!');
	} 		
		cartCvcError.innerHTML = cartCvcMessage;
	//Exp Month validation
	if(cartExpMonth.value === '' || cartExpMonth.value == null){
		cartExpMonthMessage.push('* Įveskite Mėnesį!');
		} else if(!cartExpMonthValue.match(/^[0-9]{9}$/) && !cartExpMonthValue.length == 2){
		cartExpMonthMessage.push('* Įveskite Mėnesį!');
	} 		
		cartExpMonthError.innerHTML = cartExpMonthMessage;	

	//Exp Year validation
	if(cartExpYear.value === '' || cartExpYear.value == null){
		cartExpYearMessage.push('* Įveskite Metus!');
		} else if(!cartExpYearValue.match(/^[0-9]{9}$/) && !cartExpYearValue.length == 4){
		cartExpYearMessage.push('* Įveskite Metus!');
	} 		
		cartExpYearError.innerHTML = cartExpYearMessage;

});


// ********************** Payment Validation  *******************************
// ********************** Shipping change  *********************************

	const deliverySelect = document.getElementById('delivery_id');
	const deliveryPrice = document.querySelector('.deliveryPrice');
	const cartPrice = document.getElementById('cartPrice');
	const shippingPrice = document.getElementById('shippingPrice');
	const totalPrice = document.getElementById('totalPrice');
	const lastPrice = document.querySelector('.lastPrice');

	let cartPrice1 = cartPrice.value;
	let shippingPrice1 = shippingPrice.value;
	let totalPrice1 = parseInt(cartPrice1) + parseInt(shippingPrice1);

	lastPrice.textContent = totalPrice1 + ' Eur';

	deliverySelect.addEventListener('change', function(){
		let dlvr = deliverySelect.value;
		let shP = dlvr.split(' ');
		let totalPr = shP[1];
		let totalPrice1 = parseInt(cartPrice1) + parseInt(totalPr);
		lastPrice.textContent = totalPrice1 + ' Eur';
		deliveryPrice.textContent = parseInt(totalPr) + ' Eur';
	});	

// ********************** Shipping change  *******************************
// ********************** Cart Items Max Limit  **************************
 	const cartIncr = document.querySelectorAll('.cartIncr');
	const maxQty = document.querySelectorAll('.maxQty');
 	const cartItemQty = document.querySelectorAll('.cartItemQty');
	const maxQtyError = document.querySelectorAll('.maxQtyError');

 	cartIncr.forEach(function(element, index) { 
		element.addEventListener('click', function(e){
			if(cartItemQty[index].textContent >= maxQty[index].textContent){
				e.preventDefault();
				maxQtyError[index].classList.add('maxQtyOpacity');
			}
 		});
	});


// ********************** Cart Items Max Limit  ***************************



