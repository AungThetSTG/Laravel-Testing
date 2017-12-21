<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
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

    public static function generateVerificationCode(){
        return str_random(40);
    }

    public function Teacher(){
        $this->hasOne('App\Teacher');
    }

}
