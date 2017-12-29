<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Login;
use App\Models\Teacher;
use App\Services\ObjCreator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $activeUser = Auth::user()->role === 'admin' ? : $user->{$user->role};
        $teacher = Teacher::paginate(2);
        return view($user->role, ['user'=>$activeUser, 'teacher'=>$teacher]);
        //return $teacher;
    }
}
