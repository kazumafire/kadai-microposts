<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    //ユーザーをフォローするアクション
    public function store($id){
        //認証済みユーザーがidのユーザーをフォローする
        \Auth::user()->follow($id);
        //前のURLへリダイレクトさせる
        return back();
    }
    
    //ユーザーをアンフォローするアクション
    public function destroy($id){
        //証済みユーザーがidのユーザーをアンフォローする
        \Auth::user()->unfollow($id);
        //前のURLへリダイレクトさせる
        return back();
    }
}
