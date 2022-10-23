@extends('layouts/admin');

@section('name')

	Order Info

@endsection

@section('content')
@foreach($orders as $order)
	@if($order->status == 0)	
		<div class="d-flex justify-content-end"><h4 class="bg-danger">Uncompleted</h4></div>
		@break
	@elseif($order->status == 1)
		<div class="d-flex justify-content-end"><h4 class="bg-success">Completed</h4></div>
		@break
	@endif	
@endforeach
<div class="d-flex mt-3 mb-5">
	<table class="table table-hover col-6">
		<thead>
			<tr>
				<th>Id</th>
				<th>Product Name</th>
				<th>Qty</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
				<tr>					
					<td>{{$order->product_id}}</td>
					<td>{{$order->products->name}}</td>
					<td>{{$order->product_qty}}</td>
				</tr>
			@endforeach	
		</tbody>
	</table>
</div>	
	<h5>Shipping information</h5>
		<div class="mt-3 ml-5">	
			<p>Name: {{$order->name}}</p>
			<p>Email: {{$order->email}}</p>
			<p>Phone: {{$order->phone}}</p>
			<p>Address: {{$order->address}}</p>
			<p>Shipping: {{$order->deliveries->name}}</p>
		</div>					

				
		<form action="{{ route('orders.update', $order->order_number) }}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="PATCH">
			<button class="btn btn-success" name="action" value="completed">Completed</button>
			<button class="btn btn-danger" name="action" value="uncompleted">Uncompleted</button>
		</form>
		

			

@endsection