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
                {!! Form::select('category', $categories, ['class'=>'form-control', 'placeholder'=>'指定なし']) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('memo', 'キーワード検索:') !!}
                {!! Form::textarea('memo', '',['class'=>'form-control']) !!}
            </div>
    
            <div>
                 {!! Form::submit('Search', ['class' => 'btn btn-primary btn-block center-block']) !!}
            </div>
            {!! Form::close() !!}
            
            <div class="container">
                <div class="text-center my-4">
                    <h1 class="p-2 text-left">検索結果</h1>
                </div>
                @if(!empty($data))
                <div>
                    <div class="my-2 p-0">
                        <div class="row border-bottom text-center">
                            <div class="col-sm-3">
                                <p>Date</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Name</p>
                            </div>
                            <!--<div class="col-sm-3">-->
                            <!--    <p>Image</p>-->
                            <!--</div>-->
                            <div class="col-sm-3">
                                <p>Category</p>
                            </div>
                            <div class="col-sm-3">
                                <p>Memo</p>
                            </div>
                        </div>
                    </div>
                    @foreach($data as $friend)
                        <div class="row py-2 border-botttom text-center">
                            <div class="col-sm-3">
                                    {{ $friend->date }}
                            </div>
                            <div class="col-sm-3">
                                    {{ $friend->name }}
                            </div>
                            <div class="col-sm-3">
                                    {{ $friend->category }}
                            </div>
                            <div class="col-sm-3">
                                    {{ $friend->memo }}
                            </div>                        
                        </div>
                    @endforeach
                
            <!--{{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}-->
                </div>
                @endif
            </div>
        </div>
	</main>
@endsection('content')
