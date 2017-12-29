<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Login;

class TeacherController extends Controller
{
    //

    public function index(){
        return "index";
    }

    public function create(){
        return view('teacher.create');
    }

    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required | email | unique:logins',
            'password' => 'required | confirmed'
        ]);

        $teacher = Teacher::create([
            'name'      => request('name'),
            'login_id'  => Login::create(request(['email', 'password']))->id
        ]);

        session()->flash('message', 'Successfully Saved!');

        return view('teacher.create');
    }

}
