<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class PostsController extends Controller
{
    //

    public function create(Request $request){
        $post = $request->input('posts');
        $user_id = Auth::user()->id;
        Post::create(['post' => $post, 'user_id' => $user_id]);
        return redirect('/top');
    }

    public function index(){
        $login_id = Auth::user()->id;
        $posts = Post::where('user_id',$login_id)
        ->latest()
        ->get();
        return view('posts.index',['posts' => $posts]);
    }

    public function followerList(){
        return view('follows.followerList');
    }

    public function followList(){
        return view('follows.followList');
    }
}
