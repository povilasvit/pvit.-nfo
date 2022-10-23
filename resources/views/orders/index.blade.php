@extends('layouts/admin')

@section('name')

	Orders

@endsection	


@section('content')


@if(count($orders)>0)

<div class="dropdown mb-3">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Order By
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{-- {{route('date_asc')}} --}}">Date Ascending</a>
    <a class="dropdown-item" href="{{-- {{route('date_desc')}} --}}">Date Descending</a>
  </div>
</div>

	<table class="table table-hover col-9">

			<thead>
				<tr>
					<th>Order Number</th>
					<th>Date</th>
					<th></th>
					<th class="text-center">Status</th>
				</tr>
			</thead>
			<tbody>
		@foreach($orders as $order)
			@if($order->status == 1)
				<tr>
					<td class="text-center">{{$order->order_number}}</td>
					<td class="">{{$order->created_at}}</td>
					<td class="">
						<a href="{{ route('orders.edit', $order->order_number) }}" type="button" class="btn btn-dark btn-sm">Info</a>
					</td>
					<td class="bg-success text-center">Completed</td>
				</tr>
			@elseif($order->status == 0)
				<tr>
					<td class="align-middle text-center">{{$order->order_number}}</td>
					<td>{{$order->created_at}}</td>
					<td>
						<a href="{{ route('orders.edit', $order->order_number) }}" type="button" class="btn btn-dark btn-sm">Info</a>
					</td>
					<td class="bg-danger text-center">Uncompleted</td>
				</tr>
			@endif
			</tbody>
		
		@endforeach

{{-- {{ $orders->links() }} --}}
	</table>
 @else 

		<h1 class="text-center">No Order Yet</h1>

	

	@endif

		




@endsection
