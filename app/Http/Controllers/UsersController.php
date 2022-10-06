<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class UsersController extends Controller
{
    //
    
    public function index(users $user)
    {
        return view('users/index')->with(['users' => $user->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    
    public function follow(users $user)
    {
    return view('users/follow')->with(['user' => $user]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function follower(users $user)
    {
    return view('users/follower')->with(['user' => $user]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}
