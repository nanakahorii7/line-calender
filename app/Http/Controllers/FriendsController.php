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

        Friend::create($request->all());

        return redirect()->route('friends.show');
    }

    public function show($friend_id) {
        $friend = Friend::findOrFail($friend_id);
        return view('friends.show', ['friend' => $friend]);
    }
    
    public function edit($friend_id) {
    $friend = Friend::findOrFail($friend_id);
    return view('friends.show', ['friend' => $friend]);
    }

    public function update($friend_id, Request $request) {
    $params = $request->validate([
        'created_at' => 'required',
        'name' => 'required|max:20',
        ]);
        
        $friend = Friend::findOrFail($friend_id);
        $friend->fill($params)->save();
    
        return redirect()->route('top');
    }
    
    public function destroy($friend_id) {
        
        $friend = Friend::findOrFail($friend_id);
        $friend->delete();
    
        return redirect()->route('top');
    }

    public function search(Request $request)
    {
        return view('friends.search');
        dd($request->search);
        $friends = Friend::where('title',$request->search)->paginate(5);

    }
    
    public function list() {
        $friends = Friend::get();
        
       
        return view('friends.list', compact('friends'));
    }

}
