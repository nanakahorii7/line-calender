@extends('layouts')

@section('content')
	<main>
        <form class = "p-5" style = "width:80%;">
            <div>
                <h1>詳細検索</h1>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Taro Yamada">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Work</option>
                <option>School</option>
                <option>Club</option>
                <option>Hobby</option>
                <option>Leisure</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">キーワード検索</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
            </div>

            <div class="text-right">
                    <button type="submit" class="btn btn-primary text-right">Search</button>
            </div>
        </form>
	</main>
@endsection('content')
