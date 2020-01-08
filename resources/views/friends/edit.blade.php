@extends('layouts')

@section('content')
    <main>
        <form class = "p-5 w-80" method="POST" action= "{{ route('friends.update' , ['friend' => $friend])}}">
            {{ csrf_field() }}

            {{ method_field('PUT')}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Added Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" value="{{$friend->date}}" name="date">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Taro Yamada" value="{{$friend->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" value="{{$friend->category}}" name="category">
                <option value="1">Work</option>
                <option value="2">School</option>
                <option value="3">Club</option>
                <option value="4">Hobby</option>
                <option value="5">Leisure</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Memo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$friend->memo}}" name="memo">{{$friend->memo}}</textarea>
            </div>

            <div class="text-right">
                <a class="btn btn-secondary" href="{{ route('friends.show', ['friend' => $friend])}}">Cancel</a>
                <button type="submit" class="btn btn-primary text-right">Update</button>
            </div>
        </form>
</main>
@endsection('content')
