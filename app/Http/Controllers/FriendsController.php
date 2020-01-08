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
        return view('friends.create');
    }
    
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:20',
            ]);
            
        //
        //dd($request->all());

        $friend = Friend::create($request->all());

        //return redirect('friends/show');
        return redirect()->route('friends.show',['id'=>$friend->id]);
    }

    public function show($friend_id) {
        $friend = Friend::findOrFail($friend_id);
       
                
                
        return view('friends.show', ['friend' => $friend,'categories'=>$this->categories()]);
    }
    
    public function edit($friend_id) {
    $friend = Friend::findOrFail($friend_id);
    return view('friends.edit', ['friend' => $friend, 'categories'=>$this->categories()]);
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
       $query = Friend::query();

       $search1 = $request->input('date');
       $search2 = $request->input('name');
       $search3 = $request->input('category');
       $search4 = $request->input('memo');

      if ($request->has('date') && $search1 != ('指定なし')) {
          $query->where('date', $search1)->get();
      }

        if ($request->has('name') && $search2 != ('指定なし')) {
          $query->where('name','like', '%'.$search2.'%')->get();
      }
        if ($request->has('category') && $search3 != ('指定なし')) {
          $query->where('category', $search3)->get();
      }
        if ($request->has('memo') && $search4 != ('指定なし')) {
          $query->where('memo', 'like', '%'.$search4.'%')->get();
      }

        $data = $query->paginate(10);
        
        
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
        return [
            1=>'Work',
            2=>'School',
            3=>'Club',
            4=>'Hobby',
            5=>'Leisure',
       ];
    }

}
