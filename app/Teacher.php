<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function Login(){
        $this->belongsTo('App\Login');
    }
}
