<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Services\ObjCreator;

class Student extends ObjCreator
{
    public function createObj(array $array){
        $this::create($array);
    }
    
    public function Login(){
        return $this->hasOne('App\Login');
    }
}
