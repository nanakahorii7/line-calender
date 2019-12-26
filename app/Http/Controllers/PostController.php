<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function search(Request $request)
    {
        dd($request->search);
        $posts = Post::where('title',$request->search)->paginate(5);
        
    }
}