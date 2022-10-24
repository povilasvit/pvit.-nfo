@extends('layouts/front')

@section('content')
		@if(Cart::content()->count() > 0)

		<div class="shopCateoryContainer" id="container">
			<form 
				action="{{route('charge')}}" 
				method="post"
				role="form"
				class="require-validation paymentFormValdation"
				data-cc-on-file="false"
				data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
				id="payment-form">
				@csrf
					<div class="checkoutWrapper">
						<div class="basket">
							<h4>Jūsų Pirkinių Krepšelis</h4>
							@foreach(Cart::content() as $product)
								<div class="basketItem">
									<a href="{{route('cartDelete', $product->rowId)}}"><i class="fas fa-times"></i></a>
									<div class="productPhoto"><img src='/images/products/{{$product->options->image}}'></div>
									<div class="productNameCheckout">{{$product->name}}</div>
									<div class="productQty">
										<div class="maxQty">{{$product->options->inStock}}</div>
										<div class="maxQtyError">Maks. {{$product->options->inStock}} vnt.</div>
										<div class="prQty">
											<a href="{{route('cartDsc', ['id' => $product->rowId, 'qty' => $product->qty])}}"><i class="fas fa-minus"></i></a>
											<div class="cartItemQty">{{$product->qty}}</div>
											<a href="{{route('cartIncr', ['id' => $product->rowId, 'qty' => $product->qty])}}" class="cartIncr"><i class="fas fa-plus"></i></a>					
										</div>
									</div>
									<div class="productCheckoutPrice">{{$product->price}} Eur</div>
									<div class="productTotalPrice">{{$product->price * $product->qty}} Eur</div>
								</div>
							@endforeach		
							<div class="total">
								<input id="cartPrice" type="hidden" value="{{number_format(Cart::initial(), 0)}}">				
								<input id="shippingPrice" type="hidden" value="5">				
								<input id="totalPrice" type="hidden" value="">				
								<div>Pristatymas: <span class="deliveryPrice">5 Eur</span></div>						
								<div>Viso: <span class="lastPrice">{{number_format(Cart::initial(), 0)}} Eur</span></div>								
							</div>
						</div>
						<div class="addressSection">
							<div class="address">
							<h3>Pristatymas</h3>
								<div class="addressForm">
									<div class="formInput formDrop">
										<label for="delivery" class="addressInputLabel"><span class="inputName"><i class="fa-regular fa-circle-right"></i> Pristatymo būdas</span></label>
										<select  name="delivery_id" id="delivery_id" class="formSelect">
											@foreach($delivery as $dlvr)
												<option value="{{$dlvr->id}} {{$dlvr->price}}">
													{{$dlvr->name}}
												</option>
											@endforeach
										</select>		
									</div>
									<div class="formInput">
										<label for="name" class="addressInputLabel"><span class="inputName"><i class="fa-regular fa-user"></i> Vardas Pavardė</span></label>
										<input id="checkoutName"  type="text" name="name">
										<div id="checkoutNameError" class="errorCart errorCartFont"></div>
										<div id="checkoutNameValid" class="errorCart"></div>
									</div>
									<div class="formInputDuoble">
										<div class="formInput">
											<label for="phone" class="addressInputLabel"><span class="inputName"><i class="fas fa-mobile-alt"></i> Telefonas</span></label>
											<input id="checkoutPhone" type="text" name="phone">							
											<div id="checkoutPhoneError" class="errorCart errorCartFont"></div>
											<div id="checkoutPhoneValid" class="errorCart"></div>
										</div>
										<div class="formInput">
											<label for="email" class="addressInputLabel"><span class="inputName"><i class="far fa-envelope"></i> E-paštas</span></label>
											<input id="checkoutMail" type="text" name="email">
											<div id="checkoutMailError" class="errorCart errorCartFont"></div>
											<div id="checkoutMailValid" class="errorCart"></div>
										</div>
									</div>
									<div class="formInputDuoble">
										<div class="formInput">
											<label for="address" class="addressInputLabel"><span class="inputName"><i class="fas fa-map-marker-alt"></i> Adresas</span></label>
											<input id="checkoutAddress" type="text" name="address">
											<div id="checkoutAddressError" class="errorCart errorCartFont"></div>
											<div id="checkoutAddressValid" class="errorCart"></div>
										</div>
										<div class="formInput">
											<label for="address2" class="addressInputLabel"><span class="inputName"><i class="fas fa-map-marker-alt"></i>  2-as Adresas</span></label>
											<input id="address2" type="text" name="address2">
										</div>
									</div>
									<div class="formInput">
										<label for="dsc" class="addressInputLabel"><span class="inputName"><i class="far fa-edit"></i>  Žinutė</span></label>
										<textarea id="note" name="note"></textarea>
									</div>
									<div class="formBtn">
										<a href="{{route('frontHome')}}" class="btnAddress btnAddressBack"><i class="fas fa-chevron-left"></i> Grįžti į El.Parduotuvę</a>								
										<a class="btnAddress btnAddressForward" id="btnAddressForwardBtn">Toliau (1/2) <i class="fas fa-chevron-right"></i></a>								
									</div>								
								</div>
							</div>
						<div class="payment">
							<h3>Mokėjimo informacija</h3>
							<div class="paymentForm">
									<div class="formInput">
										<label for="cartNumber" class="addressInputLabel">
											<i class="fa-regular fa-credit-card"></i>
											<span class="inputName"> Kortelės Numeris</span>
										</label>
										<input id="cartNumber" type="text" name="cartNumber" class="card-number" placeholder="">
										<div id="cartNumberError" class="errorCart errorCartFont">{{-- pvz.: 4242424242424242 --}}</div>
									</div>
									<div class="formInput">
										<label for="address" class="addressInputLabel">
											<i class="fa-regular fa-user"></i>
											<span class="inputName"> Kortelės Savininko Vardas Pavardė</span>
										</label>
										<input id="ownerName" type="text" name="ownerName" placeholder="">
										<div id="cartOwnerError" class="errorCart errorCartFont"></div>
									</div>
									<div class="formInputTriple">
										<div class="formInput">
											<label for="address" class="addressInputLabel"><span class="inputName"> Kortelės Galiojimo Laikas</span></label>
											<div class="formInputCard">										
												<input id="cartExpMonth" type="text" name="cardMonth" class="card-expiry-month" placeholder="pvz.: 12">
												<div id="expMonth" class="errorCart errorCartFont"></div>
												<input id="cartExpYear" type="text" name="cardYear" class="card-expiry-year" placeholder="pvz.: 2025">
												<div id="expYear" class="errorCart errorCartFont"></div>
											</div>
										</div>
										<div class="formInput">
											<label for="cvc" class="addressInputLabel"><span class="inputName"> Saugos Skaičius</span></label>
											<input id="cartCvc" type="text" name="cvc" class="card-cvc" placeholder="">
											<div id="cartCvcError" class="errorCart errorCartFont"></div>
										</div>
									</div>
									<div class="formBtn">
										<a class="btnAddress btnAddressBack btnPaymentBack"><i class="fas fa-chevron-left"> </i>Atgal</a>								
										<button class="btnAddress btnAddressForward btnBuy">Pirkti<i class="fas fa-chevron-right"></i></button>	
									</div>								
								</div>
							</div>
						</div>


					</div> <!-- checkoutWrapper -->

			</form>	
		</div> <!-- shopCateoryContainer -->
		@else
				<h3 class="emptybasketH3">Jūsų Pirkinių Krepšelis Tuščias</h3>
		@endif
@endsection

@section('pageScript')

	<script src='js/checkout.js'></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript">
	      $(function() {
	    var $form = $(".require-validation");
	    $('form.require-validation').bind('submit', function(e) {
	        var $form = $(".require-validation"),
	            inputSelector = ['input[type=email]', 'input[type=password]',
	                'input[type=text]', 'input[type=file]',
	                'textarea'
	            ].join(', '),
	            $inputs = $form.find('.required').find(inputSelector),
	            $errorMessage = $form.find('div.error'),
	            valid = true;
	        $errorMessage.addClass('hide');
	        $('.has-error').removeClass('has-error');
	        $inputs.each(function(i, el) {
	            var $input = $(el);
	            if ($input.val() === '') {
	                $input.parent().addClass('has-error');
	                $errorMessage.removeClass('hide');
	                e.preventDefault();
	            }
	        });
	        if (!$form.data('cc-on-file')) {
	            e.preventDefault();
	            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
	            Stripe.createToken({
	                number: $('.card-number').val(),
	                cvc: $('.card-cvc').val(),
	                exp_month: $('.card-expiry-month').val(),
	                exp_year: $('.card-expiry-year').val()
	            }, stripeResponseHandler);
	        }
	    });
	    function stripeResponseHandler(status, response) {
	        if (response.error) {
	            $('.error')
	                .removeClass('hide')
	                .find('.alert')
	                .text(response.error.message);
	        } else {
	            /* token contains id, last4, and card type */
	            var token = response['id'];
	            $form.find('input[type=text]').empty();
	            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
	            $form.get(0).submit();
	        }
	    }
	});
	</script>

@endsection