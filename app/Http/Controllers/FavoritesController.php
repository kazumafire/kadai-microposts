<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id) {
        //$micropost = \App\Micropost::findOrFail($id);
        //\Auth::user()->favorite($micropost);
        //認証済みユーザーがidの投稿をいいねする
        \Auth::user()->favorite($id);
         return back();
    }
    
     public function destroy($id) {
        //  $micropost = \App\Micropost::findOrFail($id);
        //   \Auth::user()->unfavorite($micropost);
        //認証済みユーザーがidの投稿を取り消す
        \Auth::user()->unfavorite($id);
       
        return back();
     }
}
