<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Services\ObjCreator;

class Login extends ObjCreator 
{
    use Notifiable;

    const VERIFIED_USER     = 1;
    const UNVERIFIED_USER   = 0;

    const TEACHER           = 'teacher';
    const STUDENT           = 'student';

    protected $fillable = [
        'email',
        'password',
        'verified',
        'verification_token',
        'role'
    ];
    protected $hidden = [
        'password', 
        'remember_token',
        'verification_token',
    ];

    public function createObj(array $array){
        $this::create($array);
    }

    public static function generateVerificationCode(){
        return str_random(40);
    }

    public function Teacher(){
        return $this->hasOne('App\Teacher');
    }

    public function Student(){
        return $this->hasOne('App\Student');
    }

}
