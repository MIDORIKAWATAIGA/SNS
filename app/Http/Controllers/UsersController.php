<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function search(Request $request){
        // dd($request);
        $keyword = $request -> input('keyword');
        if(!empty($keyword)) {
        $users = User::where('username', 'like', '%' . $keyword . '%')->get();
        $search_word = '検索ワード' . $keyword ;
        } else {
        // 検索キーワードがない場合は、全てのユーザーを取得してビューに渡す
        $users = User::all();
        $search_word = "";
    }
        return view('users.search',compact('users','search_word'));
    }
}
