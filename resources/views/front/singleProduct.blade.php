@extends('layouts/front')

@section('content')


	
		<div class="shopCateoryContainer">
			<div class="productSingleWrapper">

				<div class="productSingle">
					<div class="productCarousel swiper mySwiper">
					  <div class="swiper-wrapper">
						    <div class="swiper-slide"><img class="singleProductCarousel singleCarouselLeftImg swiper-slide" src="/images/products/{{$product->path}}"></div>
						    <div class="swiper-slide"><img class="singleProductCarousel singleCarouselActiveImg swiper-slide" src="/images/products/{{$product->path2}}"></div>
						    <div class="swiper-slide"><img class="singleProductCarousel singleCarouselRighrImg swiper-slide" src="/images/products/{{$product->path3}}"></div>
						   </div>
					  <div class="swiper-button-next productCarouselArrow right"></div>
					  <div class="swiper-button-prev productCarouselArrow left"></div>
					  <div class="singleCarouselDots swiper-pagination dots"></div>
					</div>
					
					<div class="productInfo">
						<div class="productInfoSectionName">
							<h3>{{$product->category->name}}</h3>
							<h2>{{$product->name}}</h2>
						</div>
						<div class="productInfoSectionDsc">							
							<div class="dsc1">{{$product->description}}</div>
							<div class="dsc2">{!!$product->content!!}</div>
						</div>
						@if($product->discount->value !== 0)
							<div class="productPrice singlePrice">
								<span class="higherPrice">{{$product->price}}</span>
								<span class="higherPrice2 higherPrice2Single">-</span> {{$product->lastPrice}}
								<span class="eur">Eur</span>
							</div>
						@else
							<div class="productPrice singlePrice">								
								{{$product->lastPrice}}
								<span class="eur">Eur</span>
							</div>
						@endif
						<div class="singlePrBtn">
							<form action="{{route('cartAdd')}}" method="POST" class="addSingleProduct">
								@csrf
								<div class="maxQty">{{$product->inStock}}</div>
								@if($cartItems->contains('id', $product->id))
									@foreach($cartItems->where('id', $product->id) as $i)
										<p class="productsCartItemQty">{{$i->qty}}</p>
									@endforeach	
								@else
									<p class="productsCartItemQty productsLimitError">0</p>									
								@endif	
								<div class="maxQtyError productsLimitError">Jūsų krepšelyje jau yra maksimalus šios prekės kiekis!</div>
								<input type="hidden" name="qty" value='1'>
								<input type="hidden" name="product_id" value='{{$product->id}}'>
								<button class="btnAddToBasket singleProductBtn">
									<i class="fasIcon fas fa-shopping-basket"></i>
									<p class="btnAddToBasketPar">Pridėti į Krepšelį</p>
								</button>								
							</form>
							<a href="{{route('frontHome')}}" class="btnProductMore singleMoreBtn">
								<i class="fa-solid fa-chevron-left"></i>
								<p class="singleMoreBtnBackP"> Grįžti į Parduotuvę</p>
							</a>							
						</div>	

					</div>	
				</div>
			</div> <!-- productSingleWrapper -->


		</div> <!-- shopCateoryContainer -->

@endsection
@section('pageScript')

	<script src="{{asset('js/single_product.js')}}"></script>
	<script>
	    document.addEventListener("DOMContentLoaded", function(event) { 
	        var scrollpos = localStorage.getItem('scrollpos');
	        if (scrollpos) window.scrollTo(0, scrollpos);
	    });

	    window.onbeforeunload = function(e) {
	        localStorage.setItem('scrollpos', window.scrollY);
	    };
	</script>
	
@endsection


 




