<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class PostsController extends Controller
{
    //
    public function index(){


        return view('posts.index');
    }

    public function create(Request $request){
        $post = $request->input('posts');
        $user_id = Auth::user()->id;
        Post::create(['post' => $post, 'user_id' => $user_id]);
        return redirect('/top');
    }

    public function followerList(){
        return view('follows.followerList');
    }

    public function followList(){
        return view('follows.followList');
    }
}
