@extends('layouts')

@section('content')
	<main>
	    <div class="container py-5">
            <div>
                <h1>詳細検索</h1>
            </div>
            {!! Form::open(['route' => 'friends.search', 'method' => 'get']) !!}
            <div class="form-group">
                {!! Form::label('date', 'Date:') !!}
                {!! Form::date('date', '{{ $friend->date }}', ['class'=>'form-control', 'placeholder'=>'指定なし']) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('name', 'Your name:') !!}
                {!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Taro Yamada']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category', 'Category:') !!}
                {!! Form::select('category', $category, ['class'=>'form-control', 'placeholder'=>'指定なし']) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('memo', 'キーワード検索:') !!}
                {!! Form::textarea('memo', '',['class'=>'form-control']) !!}
            </div>
    
            <div>
                 {!! Form::submit('Search', ['class' => 'btn btn-primary btn-block center-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-sm-8">
            <div class="text-center my-4">
                <h3 class="p-2">検索結果</h3>
            </div>
            <div class="container">
            @if(!empty($data))
                <div class="my-2 p-0">
                    <div class="row border-bottom text-center">
                        <div class="col-sm-4">
                            <p>Date</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Name</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Image</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Category</p>
                        </div>
                        <div class="col-sm-4">
                            <p>Memo</p>
                        </div>
                    </div>
                </div>
                @foreach($data as $friend)
                    <div class="row py-2 border-botttom text-center">
                        <div class="col-sm-4">
                                {{ $friend->date }}
                        </div>
                        <div class="col-sm-4">
                                {{ $friend->name }}
                        </div>
                        <div class="col-sm-4">
                                {{ $friend->category }}
                        </div>
                        <div class="col-sm-4">
                                {{ $friend->memo }}
                        </div>                        
                    </div>
                @endforeach
            </div>
            {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
        @endif
	</main>
@endsection('content')
