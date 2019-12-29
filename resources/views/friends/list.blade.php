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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td><img src="image/face1.png" alt="" class="icon-face"></td>
                <td>School</td>
                <td>日本経済の授業であった</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td><img src="image/face2.png" alt="" class="icon-face"></td>
                <td>Club</td>
                <td>サッカー部のメンバー</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td><img src="image/face3.png" alt="" class="icon-face"></td>
                <td>Work</td>
                <td>カフェのバイトメン</td>
              </tr>
            </tbody>
        </table>
    </main>










@endsection('content')