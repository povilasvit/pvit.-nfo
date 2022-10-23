@extends('layouts/admin')

@section('name')

	Discounts Update

@endsection	

@section('content')

	<div class="container">
		<div class="row d-flex bd-highlight mb-3">
		<div class="col-4 mr-auto p-2 bd-highlight">

			<form action="{{route('discounts.update', $discount->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="_method" value="PUT">	
				<div class="form-group">
					<label for="name">Discount</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$discount->name}}">
				</div>
				<div class="form-group">
					<label for="name">Discount's Value</label>
					<input type="text" name="value" id="name" class="form-control" value="{{$discount->value}}">
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-success form-control">Update Discount</button>
				</div>

			</form>

		</div>

		</div>
		</div>
	</div>

@endsection