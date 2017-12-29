<?php
/**
 * Created by PhpStorm.
 * User: aungthetwin
 * Date: 2017/12/27
 * Time: 22:26
 */

use \App\Services\LoginService;
use \App\Models\Teacher;

class StudentRepository implements LoginService{

    public function create(array $array)
    {
        Student::create([
            'name' => 'student',
            'login_id' => Login::create([
                'role' => $array['role'],
                'email' => $array['email'],
                'password' => bcrypt('secret'),
            ])->id
        ]);
    }


}