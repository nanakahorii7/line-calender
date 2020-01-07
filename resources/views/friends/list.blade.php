@extends('layouts')

@section('content')
    <main style="width:80%; margin:0 auto;">
        <h1 style="padding: 10px 0 20px 0;">December 7th</h1>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Aicon</th>
                <th scope="col">Category</th>
                <th scope="col">Memo</th>
              </tr>
            </thead>
            <tbody>
              @foreach($friends as $friend)
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td><img src="image/face1.png" alt="" class="icon-face"></td>
                <td>School</td>
                <td>日本経済の授業であった</td>
                <td>
                <a class="card-link" href="{{route('friends.show',['friend' => $friend])}}">詳細を見る</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </main>










@endsection('content')