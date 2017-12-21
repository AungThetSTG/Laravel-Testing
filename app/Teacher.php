<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable 
{
    protected $fillable = [
        'name',
        'login_id'
    ];

    public function Login(){
        return $this->belongsTo('App\Login');
    }

    // public function createObj(array $array){
    //     return $this::create($array);
    // }
}
