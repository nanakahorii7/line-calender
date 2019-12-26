<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ccc9f8d582.js" crossorigin="anonymous"></script>
    <title>新規追加</title>
</head>
<body>
    @include('commons.header')

<a href="{{ route('friends.create') }}">
   新規投稿 
</a>
    <div class="container">
	<div class="row">
        <div class="col-md-6">
    		<h2>Search</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <form action="{{ route('friends.search') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" class="form-control input-lg" placeholder="Buscar" name="search">
                        <span class="input-group-btn" style="position:relative;top:-38px;right:-192px;">
                            <button class="btn btn-info " type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                    </form>
                    </span>
                </div>
            </div>
        </div>
	</div>
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
	</div>

    @include('commons.footer')
</body>
</html>