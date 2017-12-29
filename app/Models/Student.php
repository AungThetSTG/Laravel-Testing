<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    
    public function login(){
        return $this->hasOne('App\Login');
    }

}
