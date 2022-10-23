@if ($message = Session::get('success'))
<div class="strMsgContainer">
	<div class="str stripeS">		
   		<strong>{{ $message }}</strong>
	</div>
</div>
@endif


@if ($message = Session::get('error'))
<div class="strMsgContainer">
	<div class="str stripeF">		
   		<strong>{{ $message }}</strong>
	</div>	
</div>
@endif


@if ($message = Session::get('max'))
<div class="maxQty">
	<p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert"></button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert"></button>	
	Please check the form below for errors
</div>
@endif