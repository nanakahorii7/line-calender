@extends('layouts')

@section('content')

<!--<a href="{{ route('friends.create') }}">-->
<!--   新規投稿 -->
<!--</a>-->
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
                                <i class="fas fa-search">Search</i>
                            </button>
                    	</span>
                    </form>
                </div>
            </div>
        </div>
	</div>
	<!--    <div class="container mt-4">-->
	<!--    @foreach($friends as $friend)-->
	<!--    <div class="card mb-4">-->
	<!--        <div class="card-header mb-2">-->
	<!--            {{ $friend->name }}-->
	<!--        </div>-->
	<!--        <div class="card-body">-->
	<!--            <p class="card-text">-->
	<!--            {{ $friend->body }}-->
	<!--            </p>-->
	<!--            <a class="card-link" href="{{route('friends.show',['friend' => $friend])}}">-->
	<!--               詳細をみる-->
	<!--           </a>-->
	<!--        </div>-->
	<!--        <div class="card-footer">-->
	<!--            <span class="mr-2">-->
	<!--                投稿日時-->
	<!--            </span>-->
	<!--        </div>-->
	        
	<!--    </div>-->
	<!--   @endforeach-->
	<!--</div>-->
	<div id ='app'>
		<v-calender :attributes='attrs' is-expanded></v-calender>
	</div>
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src='https://unpkg.com/v-calendar'></script>
	<script>
	/*global Vue*/
		new Vue({
			el:'#app',
			data: {
				attrs: [
					{
						key: 'today',
						highlight: {
							backgroundColor: '#ff8080',
						},
						dates: new Date(),
						popover: {
							label: 'メッセージを表示できます',
						},
					}
					
				],
			}
			
		});

	</script>
	</div>
@endsection('content')