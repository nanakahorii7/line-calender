<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    public function index() {
        $friends = Friend::orderBy('created_at','desc')->get();
        return view('friends.index',['friends'=> $friends]);
    }
    
    
    public function create() {
        // $friend->image = $request->image->storeAs('public/img', $time.'_'.Auth::friend()->id . '.jpg');
        return view('friends.create');
    }
    
    public function upload(Request $request)
    {
       

       
    }
    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:20',
            'image' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
            ]);
            
            
        $image = '';
        if ($request->file('image')->isValid()) {
           $filename = $request->file('image')->store('public/img');

           $image = basename($filename);
        } else {
             return redirect()
                 ->back()
                 ->withInput()
                 ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
        
        $friend = Friend::create([
            'date'=>$request->date,
            'name'=>$request->name,
            'image'=>$image,
            'category'=>$request->category,
            'memo'=>$request->memo
        ]);

        return redirect()->route('friends.show',['id'=>$friend->id]);
    }

    public function show($friend_id) {
        $friend = Friend::findOrFail($friend_id);
        return view('friends.show', ['friend' => $friend,'categories'=>$this->categories()]);
    }
    
    public function edit($friend_id) {
    $friend = Friend::findOrFail($friend_id);
    return view('friends.edit', ['friend' => $friend, 'categories'=>$this->categories() ,'image'=>$this->images()]);
    }

    public function update($friend_id, Request $request) {
    $request->validate([
        //'created_at' => 'required',
        'name' => 'required|max:20',
        ]);
        $friend = Friend::findOrFail($friend_id);
        $friend->fill($request->all())->save();
        return redirect()->route('friends.show',['id'=>$friend->id]);
    }
    
    public function destroy($friend_id) {
        
        $friend = Friend::findOrFail($friend_id);
        $friend->delete();
    
        return redirect()->route('top');
    }

    public function search(Request $request)
    {
       

       $search1 = $request->input('date');
       $search2 = $request->input('name');
       $search3 = $request->input('category');
       $search4 = $request->input('memo');
       
       $data = null;
       
       if ($search1 || $search2 || $search3 || $search4){
           $query = Friend::query();
            $query->where(function($query) use ($search1, $search2, $search3, $search4 ){
               //$query->where('date', $search1)
               
               if ($search1 && $search1 != ('指定なし')) {
                   $query->where('date', $search1);
               }
               
               if ($search2 && $search2 != ('指定なし')) {
                   $query->orwhere('name', 'Like', "%{$search2}%");
               }
    
               if ($search3 && $search3 != ('指定なし')) {
                   $query->orwhere('category', $search3);
               }
               
               if ($search4 && $search4 != ('指定なし')) {
                   $query->orwhere('memo', 'Like', "%{$search4}%");
               }
               
           });
           
            $data = $query->paginate(5);
       }

        
        
        return view('friends.search', [
            'data' => $data,
            'categories' => $this->categories()
            ]);

    }
    
    public function list() {
        $friends = Friend::get();
        
       
        return view('friends.list', compact('friends'));
    }
    
    
    private function categories(){
        $categories = [
            1=>'Work',
            2=>'School',
            3=>'Club',
            4=>'Hobby',
            5=>'Leisure',
       ];
       return $categories;
    }
    
}
