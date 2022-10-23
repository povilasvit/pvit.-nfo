@extends('layouts/admin')

@section('name')

	Delivery

@endsection	

@section('content')

@include('includes.errors')

	<div class="container">
		<div class="row d-flex bd-highlight mb-3">
		<div class="col-4 mr-auto p-2 bd-highlight">

			<form action="{{route('delivery.store')}}" method="POST" enctype="multipart/form-data">
			@csrf				
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
				</div>
				<div class="form-group">
					<input type="text" name="price" id="price" class="form-control" placeholder="Enter Delivery Price">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info form-control">Add Delivery</button>
				</div>
			</form>

		</div>

		<div class="col-6 p-2 bd-highlight">

			@if(count($delivery)>0)

				<ul class="list-group">				
						@foreach($delivery as $dlvr)
							<li class="list-group-item d-flex bd-highlight">
								<div class="mr-auto p-2 bd-highlight">{{$dlvr->name}}</div>
								<div class="mr-auto p-2 bd-highlight">{{$dlvr->price}}</div>
								<div class="p-2 bd-highlight ml-4">
									<a href="{{route('delivery.edit', $dlvr->id)}}" type="button" class="btn btn-success btn-sm">Edit</a>
								</div>
								<div class="p-2 bd-highlight">
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>
								</div>
							</li>
						@endforeach
				</ul>
			@else
			
				<h3 class="">No Deliveries Created Yet</h3>	

			@endif
		</div>

		</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Are You Sure, You Want To Delete It?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
	        <form action="{{route('delivery.destroy', $dlvr->id)}}" method="POST">
	        	@csrf
	        	<input type="hidden" name="_method" value="DELETE">
	        	<button type="submit" class="btn btn-danger">Yes, Delete</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

@endsection