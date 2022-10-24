@extends('layouts/front')

@section('content')

		<div class="shopCateoryContainer" id="container">
			<h3 class="categoryHeader"></h3>
				<div class="productsWrapper">
					@foreach($products as $product)
						@if($product->inStock > 0)
							@if($product->discount->value !== 0)
								<div class="products">
									<a href="{{route('singleProduct', $product->slug)}}" class="productImg" ><img src="/images/products/{{$product->path}}"></a>
									<a href="{{route('singleProduct', $product->slug)}}" class="productText"><h3>{{$product->name}}</h3></a>
									<div class="productPrice">
										<span class="higherPrice">{{$product->price}}</span>
										<span class="higherPrice2">-</span> {{$product->lastPrice}}
										<span class="eur">Eur</span>
									</div>								
									<div class='btn'>
										<form action="{{route('cartAdd')}}" method="POST" class="addProduct">
										@csrf
											<div class="maxQty">{{$product->inStock}}</div>
												@isset($cartItems)	
													@if($cartItems->contains('id', $product->id))
														@foreach($cartItems->where('id', $product->id) as $i)
															<p class="productsCartItemQty">{{$i->qty}}</p>
														@endforeach	
													@else
														<p class="productsCartItemQty">0</p>
													@endif			
												@endisset	
											<div class="maxQtyError productsLimitError">Jūsų krepšelyje jau yra maksimalus šios prekės kiekis!</div>
											<input type="hidden" name="qty" value='1'>
											<input type="hidden" name="product_id" value='{{$product->id}}'>
											<button class="btnAddToBasket btnAddProducts">
												<i class="fas fa-shopping-basket"></i>
												<p class="btnAddToBasketP">Dėti į Krepšelį</p>
											</button>
										</form>
										<a href="{{route('singleProduct', $product->slug)}}" class="btnProductMore btnProductInfo">
											<p class="btnProductInfoForward">Išsamiau apie prekę</p>
											<i class="fa-solid fa-angle-right"></i>
										</a>
									</div>
								</div>
						
								@else
								<div class="products">
										<a href="{{route('singleProduct', $product->slug)}}" class="productImg" ><img src="/images/products/{{$product->path}}"></a>
										<a href="{{route('singleProduct', $product->slug)}}" class="productText"><h3>{{$product->name}}</h3></a>
										<div class="productPrice">{{$product->lastPrice}}
											<span class="eur">Eur</span>
										</div>
										<div class='btn'>
											<form action="{{route('cartAdd')}}" method="POST" class="addProduct">
											@csrf
												<div class="maxQty">{{$product->inStock}}</div>
													@isset($cartItems)
														@if($cartItems->contains('id', $product->id))
															@foreach($cartItems->where('id', $product->id) as $i)
																<p class="productsCartItemQty">{{$i->qty}}</p>
															@endforeach	
														@else
															<p class="productsCartItemQty">0</p>
														@endif		
													@endisset		
												<div class="maxQtyError productsLimitError">Jūsų krepšelyje jau yra maksimalus šios prekės kiekis!</div>
												<input type="hidden" name="qty" value='1'>
												<input type="hidden" name="product_id" value='{{$product->id}}'>
												<button class="btnAddToBasket btnAddProducts">
													<i class="fas fa-shopping-basket"></i>
													<p class="btnAddToBasketP">Dėti į Krepšelį</p>
												</button>
											</form>
											<a href="{{route('singleProduct', $product->slug)}}" class="btnProductMore btnProductInfo">
												<p class="btnProductInfoForward">Išsamiau apie prekę</p>
												<i class="fa-solid fa-angle-right"></i>
											</a>
										</div>
									
								</div>
							@endif
						@endif						
					@endforeach
				</div> <!-- productsWrapper -->
			
		</div> <!-- shopCateoryContainer -->

@endsection

@section('pageScript')

	<script src="{{asset('js/products.js')}}"></script>
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