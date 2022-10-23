@extends('layouts/admin')

@section('name')

	Other Update

@endsection	

@section('content')

	<div class="container">
		<div class="row d-flex bd-highlight mb-3">
		<div class=" mr-auto p-2 bd-highlight">

			<form action="{{route('other.update', $other->id)}}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PUT">	
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$other->name}}">
				</div>
				<div class="form-group">
					<input id="content" type="hidden" name="content" value="{{$other->content}}">
					<trix-editor input="content"></trix-editor>
				</div>
		
				<div class="form-group">
					<button type="submit" class="btn btn-success form-control">Update</button>
				</div>

			</form>

		</div>

		</div>
		</div>
	</div>

@endsection