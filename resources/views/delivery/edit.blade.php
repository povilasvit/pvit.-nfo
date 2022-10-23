@extends('layouts/admin')

@section('name')

	Delivery Update

@endsection	

@section('content')

	<div class="container">
		<div class="row d-flex bd-highlight mb-3">
		<div class="col-4 mr-auto p-2 bd-highlight">

			<form action="{{route('delivery.update', $delivery->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="_method" value="PUT">	
				<div class="form-group">
					<label for="name">Delivery</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$delivery->name}}">
				</div>
				<div class="form-group">
					<label for="name">Price</label>
					<input type="text" name="price" id="price" class="form-control" value="{{$delivery->price}}">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success form-control">Update Delivery</button>
				</div>
			</form>
		</div>

		</div>
		</div>
	</div>

@endsection