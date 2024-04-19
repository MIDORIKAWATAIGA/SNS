<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        
        return view('posts.index');
    }

    public function followerList(){
        return view('follows.followerList');
    }

    public function followList(){
        return view('follows.followList');
    }
}
