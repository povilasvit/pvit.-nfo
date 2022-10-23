@extends('layouts/admin')

@section('name')

	Other

@endsection	


@section('content')

<div class="col-6 p-2 bd-highlight">
	<ul class="list-group">	
		@foreach($others as $other)
			<li class="list-group-item d-flex bd-highlight">
				<div class="mr-auto p-2 bd-highlight">{{$other->name}}</div>
				<div class="p-2 bd-highlight ml-4">
					<a href="{{route('other.edit', $other->id)}}" type="button" class="btn btn-success btn-sm">Edit</a>
				</div>
				<div class="p-2 bd-highlight">
					<a href="{{-- {{route('singleProduct', $product->slug)}} --}}" type="button" class="btn btn-info btn-sm">View</a>
				</div>
			</li>		
		@endforeach
	</ul>

{{-- 	<div class="col-4 mr-auto p-2 bd-highlight">

		<form action="{{route('other.store')}}" method="POST">
		@csrf				
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Enter Other Name">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-info form-control">Add Other</button>
			</div>
		</form>

	</div> --}}
</div>
		
@endsection