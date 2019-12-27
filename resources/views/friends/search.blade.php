@extends('layouts')

@section('content')
<main>
    <div class="container mt-4">
	    @foreach($friends as $friend)
	    <div class="card mb-4">
	        <div class="card-header mb-2">
	            Name
	        </div>
	        <div class="card-body">
	            <p class="card-text">
	               Memo 
	            </p>
	        </div>
	        <div class="card-footer">
	            <span class="mr-2">
	                投稿日時
	            </span>
	        </div>
	    </div>
	   @endforeach
	</div>
</main>
@endsection('content')
