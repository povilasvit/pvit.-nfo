@extends('layouts/admin')

@section('name')

	Products

@endsection	


@section('content')

<div class="mb-3">
	<a class="badge badge-secondary" href="{{route('products.index')}}">All</a>
		@foreach($categories as $category)
			<a class="badge badge-secondary" href="{{route('products.category', $category->id)}}">{{$category->name}}</a>
		@endforeach		
</div>

@if(count($products)>0)

	<table style="font-size: 0.75rem;" class="table table-hover">

			<thead>
				<tr>
					<th scope="col">#</th>
					<th >1st picture</th>					
					<th >Category</th>
					<th >Name</th>
					<th >Product in Stock</th>
					<th >Price (Eur)</th>
					<th >Discount</th>
					<th >Last Price</th>
					<th ></th>	
					<th ></th>	
					<th ></th>	
				</tr>
			</thead>
			<tbody>
		@foreach($products as $product)
				<tr>
					<th class="align-middle">{{$product->id}}</th>
					<td class="align-middle"><img style="height: 10vh;" class="img-thumbnail" src="/images/products/{{$product->path}}"></td>				
					<td class="align-middle">{{$product->category->name}}</td>
					<td class="align-middle">{{$product->name}}</td>
					<td class="align-middle">{{$product->inStock}}</td>
					<td class="align-middle">{{$product->price}}</td>
					<td class="align-middle">{{$product->discount->name}}</td>			
					<td class="align-middle">{{$product->lastPrice}}</td>
					<td class="align-middle"><a href="{{route('singleProduct', $product->slug)}}" type="button" class="btn btn-info btn-sm">View</ba></td>
					<td class="align-middle"><a href="{{ route('products.edit', $product->slug) }}" type="button" class="btn btn-success btn-sm">Edit</a></td>
					<td class="align-middle">
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>											
					</td>
				</tr>
			</tbody>
		@endforeach
	</table>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete It?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
	        <form action="{{route('products.destroy', $product->slug)}}" method="POST">
	        	@csrf
	        	<input type="hidden" name="_method" value="DELETE">
	        	<button type="submit" class="btn btn-danger">Yes, Delete</button>
	        </form>	
	      </div>
	    </div>
	  </div>
	</div>
			{{ $products->links() }}

 @else 

		<h1 class="text-center">No Products created</h1>

	

	@endif
		




@endsection