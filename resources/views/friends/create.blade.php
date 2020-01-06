@extends('layouts')

@section('content')
    <main>
        <form class = "p-5" style = "width:80%;" method="POST" action="{{ route('friends.store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" value="{{old('date')}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Taro Yamada" value={{old('name')}}>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" value={{old('image')>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" value={{old('category')>
                <option>Work</option>
                <option>School</option>
                <option>Club</option>
                <option>Hobby</option>
                <option>Leisure</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Memo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value={{old('memo')></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary text-right">Add</button>
            </div>
        </form>
    </main>
@endsection('content')