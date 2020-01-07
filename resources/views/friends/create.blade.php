@extends('layouts')

@section('content')
    <main>
        @if(count($errors) > 0)
        <ul class="bg-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form class = "p-5" style = "width:80%;" method="POST" action="{{ route('friends.store')}}" name="friend">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" value="{{old('date')}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Taro Yamada" value={{old('name')}}>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value={{old('image')}}>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option value="1">Work</option>
                <option value="2">School</option>
                <option value="3">Club</option>
                <option value="4">Hobby</option>
                <option value="5">Leisure</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Memo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="memo" value={{old('memo')></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary text-right">Add</button>
            </div>
        </form>
    </main>
@endsection('content')