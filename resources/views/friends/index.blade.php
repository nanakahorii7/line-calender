@extends('layouts')

@section('content')

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
	            {{ $friend->name }}
	        </div>
	        <div class="card-body">
	            <p class="card-text">
	            {{ $friend->body }}
	            </p>
	            <a class="card-link" href="{{route('friends.show',['friend' => $friend])}}">
	               詳細をみる
	           </a>
	        </div>
	        <div class="card-footer">
	            <span class="mr-2">
	                投稿日時
	            </span>
	        </div>
	        
	    </div>
	   @endforeach
	</div>
<script type="text/javascript">

myDate = new Date();
myWeekTbl = new Array("日","月","火","水","木","金","土");
myMonthTbl= new Array(31,28,31,30,31,30,31,31,30,31,30,31);	// 月テーブル定義
myYear = myDate.getFullYear();	// 年を取得
if (((myYear%4)==0 && (myYear%100)!=0) || (myYear%400)==0){	// うるう年だったら...
myMonthTbl[1] = 29;	// 　２月を２９日とする
}	
myMonth = myDate.getMonth();	// 月を取得(0月～11月)
myToday = myDate.getDate();	// 今日の'日'を退避
myDate.setDate(1);	// 日付を'１日'に変えて、
myWeek = myDate.getDay();	// 　'１日'の曜日を取得
myTblLine = Math.ceil((myWeek+myMonthTbl[myMonth])/7);	// カレンダーの行数
myTable = new Array(7*myTblLine);	// 表のセル数分定義
 	
for(i=0; i<7*myTblLine; i++) myTable[i]="　";	// myTableを掃除する
for(i=0; i<myMonthTbl[myMonth]; i++)myTable[i+myWeek]=i+1;	// 日付を埋め込む
 	
// ***********************	
//      カレンダーの表示	
// ***********************	
document.write("<table border='1'>");	// 表の作成開始
document.write("<tr><td colspan='7' bgcolor='#7fffd4'>");	// 見出し行セット
document.write("<strong>",myYear, "年", (myMonth+1), "月カレンダー</strong>");	
document.write("</td></tr>");	
 	
document.write("<tr>");	// 曜日見出しセット
for(i=0; i<7; i++){	// 一行(１週間)ループ
document.write("<td align='center' ");	
if(i==0)document.write("bgcolor='#fa8072'>");	// 日曜のセルの色
else document.write("bgcolor='#ffebcd'>");	// 月～土のセルの色
document.write("<strong>",myWeekTbl[i],"</strong>");	// '日'から'土'の表示
document.write("</td>");	
}	
document.write("</tr>");	
 	
for(i=0; i<myTblLine; i++){	// 表の「行」のループ
document.write("<tr>");	// 行の開始
for(j=0; j<7; j++){	// 表の「列」のループ
document.write("<td align='center' ");	// 列(セル)の作成
myDat = myTable[j+(i*7)];	// 書きこむ内容の取得
if (myDat==myToday)document.write("bgcolor='#00ffff'>");	// 今日のセルの色
else if(j==0) document.write("bgcolor='#ffb6c1'>");	// 日曜のセルの色
else document.write("bgcolor='#ffffe0'>");	// 平日のセルの色
document.write("<strong>",myDat,"</strong>");	// 日付セット
document.write("</td>");	// 列(セル)の終わり
}	
document.write("</tr>");	// 行の終わり
}	
document.write("</table>");	// 表の終わり
// --></script>

	</div>
@endsection('content')