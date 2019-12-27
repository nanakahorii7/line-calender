	    <div class="container mt-4">
	    <div class="card mb-4">
	        <div class="card-header mb-2">
	           {{ $friend->name }}
	        </div>
	        <div class="card-body">
	            <p class="card-text">
	            {{ $friend->memo }} 
	            </p>
	        </div>
	        <div class="card-footer">
	            <span class="mr-2">
	                投稿日時 {{ $friend->created_at }} 
	            </span>
	        </div>
	        
	        <div class="mt-4 text-right">
	            <a class="btn btn-primary" href="{{ route('friends.edit',['friend' => $friend])}}">
	                編集
	            </a>
	            
	            <form
	            style="display: inline-block;"
	            method = "POST"
	            action ="{{route('friends.destroy',['friend' => $friend])}}"
	            >
	                {{csrf_field()}}
	                {{ method_field ('DELETE')}}
	            </form>
	            <button class="btn btn-dander">削除</button>
	            
	        </div>
	    </div>
	</div>