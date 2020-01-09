@extends('layouts')

@section('content')

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            {{ $friend->image}}
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    {{ $friend->name }}
                </h2>

            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
                {{ $categories[$friend->category] }}
            </p>
            <p class="lead mt-4"><img src="{{ asset('storage/img' . $friend->image) }}" alt="image"></p>
        </div>
        <div class="mt-4 text-right">
            <a class="btn btn-primary" href="{{ route('friends.edit',['friend' => $friend,'categories'=>$categories]) }}">Edit</a>
            <form 
                style="display: inline-block;"
                method="POST"
                action="{{route('friends.destroy',['friend'=>$friend])}}"
                >
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        
    </div>
</div>
@endsection('content')