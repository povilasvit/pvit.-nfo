@extends('layouts/admin')

@section('name')

	Discounts

@endsection	

@section('content')

@include('includes.errors')

	<div class="container">
		<div class="row d-flex bd-highlight mb-3">
		<div class="col-4 mr-auto p-2 bd-highlight">

			<form action="{{route('discounts.store')}}" method="POST">
			@csrf				
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control" placeholder="Enter Discount Name">
				</div>
				<div class="form-group">
					<input type="text" name="value" id="value" class="form-control" placeholder="Enter Discount Value">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info form-control">Add Discount</button>
				</div>
			</form>

		</div>

		<div class="col-6 p-2 bd-highlight">

			@if(count($discounts)>0)

				<ul class="list-group">				
						@foreach($discounts as $discount)
							<li class="list-group-item d-flex bd-highlight">
								<div class="mr-auto p-2 bd-highlight">{{$discount->name}}</div>
								<div class="p-2 bd-highlight ml-4">
									<a href="{{route('discounts.edit', $discount->id)}}" type="button" class="btn btn-success btn-sm">Edit</a>
								</div>
								<div class="p-2 bd-highlight">
									<button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>						
								</div>
							</li>
						@endforeach
				</ul>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
				        <form action="{{route('discounts.destroy', $discount->id)}}" method="POST">
				        	@csrf
				        	<input type="hidden" name="_method" value="DELETE">
				        	<button type="submit" class="btn btn-danger">Yes, Delete</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
			@else
			
				<h3 class="">No discounts created yet</h3>	

			@endif
		</div>

		</div>
		</div>
	</div>

@endsection