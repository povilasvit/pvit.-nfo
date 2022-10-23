@extends('layouts/admin');

@section('name')

	Create Product

@endsection

@section('content')

@include('includes.errors')


	<div class="col-9 ml-5">
		<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="category">Category</label>
				<select name="category_id" id="category_id" class="form-control col-6">
					@foreach($categories as $category)
						<option value="{{$category->id}}">
							{{$category->name}}
						</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="discount">Discount</label>
				<select name="discount_id" id="discount_id" class="form-control col-6">
					@foreach($discounts as $discount)
						<option value="{{$discount->id}}">
							{{$discount->name}}
						</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="name">Product Name</label>
				<input type="text" name="name" id="name" class="form-control col-6" value="{{old('name')}}" placeholder="Enter Product Name">
			</div>
			<div class="form-group">
				<label for="inStock">Products in Stock</label>
				<input type="text" name="inStock" id="inStock" class="form-control col-6" value="{{old('inStock')}}" placeholder="Enter Product Quantity">
			</div>
			<div class="form-group">
				<label for="price">Product Price</label>
				<input type="text" name="price" id="price" class="form-control col-6" value="{{old('price')}}" placeholder="Enter Product Price">
			</div>			
			<div class="form-group">
				<label for="description">Product Description</label>
				<textarea name="description" class="form-control" cols="5" rows="5">{{old('description')}}</textarea>
			</div>
			<div class="form-group">
				<input id="content" type="hidden" name="content" value="{{old('content')}}">
				<trix-editor input="content"></trix-editor>
			</div>
			<div class="form-group">
				<label for="file">1st Image</label><br>
				<input type="file" name="file">
			</div>
			<div class="form-group">
				<label for="file">2nd Image</label><br>
				<input type="file" name="file2">
			</div>
			<div class="form-group">
				<label for="file">3rd Image</label><br>
				<input type="file" name="file3">
			</div>				
			<div class="form-group">
				<button type="submit" class="btn btn-info form-control col-6">Add Product</button>
			</div>
		</form>		
	</div>



@endsection
@section('trixScript')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>
@endsection