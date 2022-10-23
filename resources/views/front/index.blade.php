@extends('layouts/front')

@section('content')

	<div class="shopCateoryContainer">
		@include('includes.errors2')
		<h3 class="categoryHeader">Pasirinkite Grupę</h3>	
		<div class="categoryWrapper categoryApear">
			<a href="{{route('allProducts')}}" class="mainPageCategory">
				<div class="categoryImg" ><img loading="lazy" src="images/categories/galvos-lankeliai-600x600.jpg"></div>
				<div class="categoryText"><h3>Visos Prekės</h3></div>					
			</a>
			@foreach($categories as $category)
				<a href="{{route('webcategory', $category->id)}}" class="mainPageCategory">
					<div class="categoryImg"><img loading="lazy" src="images/categories/{{$category->path}}"></div>
					<div class="categoryText"><h3>{{$category->name}}</h3></div>
				</a>
			@endforeach
		</div> <!-- categoryWrapper -->
	</div> <!-- shopCateoryContainer -->

@endsection

@section('pageScript')

	<script src="{{asset('js/categories.js')}}"></script>
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