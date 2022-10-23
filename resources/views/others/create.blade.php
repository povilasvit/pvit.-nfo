@extends('layouts/admin');

@section('name')

	Other

@endsection

@section('content')

@include('includes.errors')


	<div class="col-9 ml-5">
		<form action="{{-- {{route('products.store')}} --}}" method="POST">
			@csrf
			<div class="form-group">
					<input id="content" type="hidden" name="content" value="{{old('content')}}">
					<trix-editor input="content"></trix-editor>
			</div>				
			<div class="form-group">
				<button type="submit" class="btn btn-info form-control col-6">Add Shipping Rule</button>
			</div>
		</form>		
	</div>



@endsection