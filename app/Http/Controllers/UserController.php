<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('index', compact('users'));
    }

    function show(User $user){
        return view('post', array('posts'=> $user->posts));
        //return $user->posts;
    }
}
