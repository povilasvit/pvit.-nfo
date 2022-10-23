@extends('layouts/front')

@section('content')

	<div class="shopCateoryContainer">
		@foreach($others as $other)
			@if($other->name == 'Privacy Policy')
				<div class="other">{!!$other->content!!}</div>
			@endif
		@endforeach
	</div> <!-- shopCateoryContainer -->

@endsection

@section('pageScript')

	<script>
		    document.addEventListener("DOMContentLoaded", function(event) { 
		        var scrollpos = localStorage.getItem('scrollpos');
		        if (scrollpos) window.scrollTo(0, scrollpos);
		    });

		    window.onbeforeunload = function(e) {
		        localStorage.setItem('scrollpos', window.scrollY);
		    };
	</script>
	

@endsection