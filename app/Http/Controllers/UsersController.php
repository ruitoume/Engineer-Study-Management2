<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class UsersController extends Controller
{
    //
    
    public function index(users $users)//インポートしたPostをインスタンス化して$postとして使用。
    {
    return $users->get();//$postの中身を戻り値にする。
    }
}
