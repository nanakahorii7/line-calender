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
    
    
    
    public function search(Request $request)
    {
        dd($request->search);
        $posts = Friend::where('title',$request->search)->paginate(5);
        
    }


}
