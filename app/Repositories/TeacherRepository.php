<?php
/**
 * Created by PhpStorm.
 * User: aungthetwin
 * Date: 2017/12/27
 * Time: 22:26
 */

use \App\Services\LoginService;
use \App\Models\Teacher;

class TeacherRepository implements LoginService{

    public function create(array $array)
    {
        Teacher::create([
            'name' => 'teacher',
            'login_id' => Login::create([
                'role' => $array['role'],
                'email' => $array['email'],
                'password' => bcrypt('secret'),
            ])->id
        ]);
    }


}