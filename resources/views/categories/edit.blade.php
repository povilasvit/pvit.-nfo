@extends('layouts/admin')

@section('name')

	Categories Update

@endsection	

@section('content')

	<div class="container">
		<div class="row d-flex bd-highlight mb-3">
		<div class="col-4 mr-auto p-2 bd-highlight">

			<form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="_method" value="PUT">	
				<div class="form-group">
					<label for="name">Category</label>
					<input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
				</div>
				<div class="form-group">
					<label for="file">Category Image</label><br>
					<img class="img-thumbnail mb-3" src="/images/categories/{{$category->path}}">
					<input type="file" name="file">
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-success form-control">Update Category</button>
				</div>

			</form>

		</div>

		</div>
		</div>
	</div>

@endsection