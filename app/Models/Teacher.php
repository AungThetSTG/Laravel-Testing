<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Login;
use Illuminate\Support\Facades\Log;

class Teacher extends Authenticatable
{
    protected $fillable = [
        'name',
        'login_id'
    ];

    public function login(){
        return $this->belongsTo('App\Models\Login');
    }

    public static function createObj(array $data){

        return Teacher::create([
            'name'      => $data['name'],
            'login_id'  => Login::create($data)->id
        ]);
    }

}
