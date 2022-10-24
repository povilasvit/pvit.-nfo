<!DOCTYPE html>
<html>
<head>
<title>Linvity: Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Google Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
<!-- Swipper.js -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<!-- Main CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


</head>
<body>
	<main>
		<div class="header">
			<nav>
				<div class="navi">
					<a class="nav navActive">E-Parduotuvė</a>
					<a class="nav navActive">Kontaktai</a>
					@if(Auth::user())
						<a href="{{route('orders.index')}}" class="navAdmin nav navActive">Admin</a>
					@endif
					@if(Cart::count() > 0)
						<a href="{{route('cart')}}#container" class="nav navActive naviIcon">
							<div class="navIcon"><img src="{{asset('images/icons/icons8-shopping-bag-48.png')}}"></div>
							<span class="navBagItemsCount">{{Cart::count()}}</span>
						</a>
					@else
						<a href="" class="nav navActive naviIcon" style="display:none">
							<div class="navIcon"><img src="{{asset('images/icons/icons8-shopping-bag-48.png')}}"></div>
							<span class="navBagItemsCount">{{Cart::count()}}</span>
						</a>
					@endif	
				</div>
				<div class="hamburgerNav">
					<div class="hamburger">
						<span class="line lineA"></span>
						<span class="line lineB"></span>
						<span class="line lineC"></span>
					</div>
					<div class="hamburgerMenu">
						<ul>
							@foreach($categories as $category)
								<li class="menuItem"><a href="{{route('webcategory', $category->id)}}">{{$category->name}}</a></li>
							@endforeach
						</ul>
					</div>	
				</div>
			</nav> 
			<div class="mainCarousel">
				<img class="imgMainCarousel activeCarousel" loading="lazy" src="{{asset('images/main_carousel/jewellery-g87695a112_640.jpg')}}">
				<img class="imgMainCarousel" loading="lazy" src="{{asset('images/main_carousel/buddhism-g8d392a75f_640.jpg')}}">
				<img class="imgMainCarousel" loading="lazy" src="{{asset('images/main_carousel/beads-g524005b2a_1280.jpg')}}">
				<img class="imgMainCarousel" loading="lazy" src="{{asset('images/main_carousel/glass-g05d61d989_1920.jpg')}}">
				<img class="imgMainCarousel" loading="lazy" src="{{asset('images/main_carousel/beads-g9c5b635ec_1280.jpg')}}">
			</div>
			<div class="navText">
				<div class="navTextH">Rankų darbo papuošalai</div>			
				@if(request()->routeIs('frontHome') || request()->routeIs('webcategory') || request()->routeIs('allProducts')|| request()->routeIs('singleProduct')) 
				  <div class="goToShop"><p>Eiti į Parduotuvę</p>
				  	<div class="goToShopB"><i class="downArrow fa-solid fa-angles-down"></i></div>
				  </div>				
				@else
					<a href="{{ route('frontHome')}}" class="agoToShop">
						<div class="goToShop"><p>Eiti  Parduotuvę</p>
							<div class="goToShopC"></div>
						</div>
					</a>	
				@endif
		
							
			</div>
		</div>
		
		@yield('content') 


		<div class="contactContainer">
			<div class="contactText">Parašykite Mums</div>
			<form action="{{ route('contact.us.store') }}" method="POST" class="contactForm" id="coctactUsForm">
				@csrf
				<div class="messageInput">
					<label for="name">Vardas</label>
					<input class="messageIt" type="text" id="contactUsName" name="name" value="{{ old('name') }}">
					<div id="contactNameError" class="errorContact"></div>
					<div id="contactNameValid" class="errorContact"></div>
				</div>
				<div class="messageInput">
					<label for="mail">El. paštas</label>
					<input class="messageIt" type="text" id="contactUsMail" name="email" value="{{ old('email') }}">
					<div id="contactMailError" class="errorContact"></div>
					<div id="contactMailValid" class="errorContact"></div>
				</div>
				<div class="messageInput">
					<label for="message">Jūsų žinutė</label>
					<textarea name="message" id="contactUsMessage">{{ old('message') }}</textarea>
					<div id="contactMessageError" class="errorContact"></div>
				</div>
				<div class="contactBtn">
					<button id="contactBtnSend">Siųsti  <i class="fa-regular fa-paper-plane"></i></button>				
				</div>	
			</form>
		</div> <!-- contactContainer -->
		@if(Cart::count() > 0)
			<div class="shoppingCart">
				<a href="{{route('cart')}}#container" class="innerCircle">
					<img src="/images/icons/icons8-shopping-bag-48().png">
				</a>
				<span class="shoppingCartCount">{{Cart::count()}}</span>
			</div> 
		@else 
			<div class="shoppingCart" style="visibility:hidden">
				<a href="" class="innerCircle">
					<img src="/images/icons/icons8-shopping-bag-48().png">
				</a>
				<span class="shoppingCartCount">{{Cart::count()}}</span>
			</div> 
		@endif

		<footer>
			<div class="footerPrimary">
				<div class="section">
					<div><h3>Asortimentas</h3></div>
						<div><a href="{{route('allProducts')}}#container">Visos Prekės</a></div>

						@foreach($categories as $category)
							<div><a href="{{route('webcategory', $category->id)}}#container">{{$category->name}}</a></div>
						@endforeach
				</div>
				<div class="section2">
					<div><h3>Nuorodos</h3></div>
					{{-- <a href="someotherpage.html#somelocation">Go to somelocation on someotherpage</a> --}}
					<div><a href="{{route('shipping')}}#container">Prekių Pristatymas</a></div>
					<div><a href="{{route('return_and_replacement')}}#container">Prekių Grąžinimas</a></div>
					<div><a href="{{route('privacy')}}#container">Prekių Pristatymas</a></div>
				</div>
				<div class="section3">
					<div><h3>Kontaktai</h3></div>
					<div><a href=""><i class="fas fa-phone"></i> +37028918</a></div>
					<div><a href=""><i class="fas fa-envelope-square"></i> info@linvity.com</a></div>
					<div><a href=""><i class="fab fa-facebook-f"></i> Linvity Facebook</a></div>
					<div><a href=""><i class="fab fa-instagram"></i> Linvity Instagramk</a></div>
				</div>
			</div>
		</footer>


	</main>
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	{{-- jquery for stripe --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script
	<!-- Initialize Swiper -->
	<script>
	  var swiper = new Swiper(".mySwiper", {
	    slidesPerView: 1,
	    spaceBetween: 30,
	    loop: true,
	    pagination: {
	      el: ".swiper-pagination",
	      clickable: true,
	    },
	    navigation: {
	      nextEl: ".swiper-button-next",
	      prevEl: ".swiper-button-prev",
	    },
	  });
	</script>
	<script src="{{asset('js/main.js')}}"></script>
	@yield('pageScript')
</body>
</html>