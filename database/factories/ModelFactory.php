<?php

use App\Login;
use App\Teacher;
use App\Student;

use Faker\Generator as Faker;

$factory->define(Login::class, function (Faker $faker) {
    return [
        'email'                 => $faker->email,
        'password'              => bcrypt('secret'),
        'verified'              => $faker->randomElement([Login::VERIFIED_USER, Login::UNVERIFIED_USER]),
        'verification_token'    => Login::generateVerificationCode(),
        'remember_token'        => str_random(10),
    ];
});

$factory->define(Teacher::class, function(Faker $faker) {
    return [
        'name'          => $faker->name,
        'login_id'      => function(){
            return factory(Login::class)->create()->id;
        }
    ];
});

$factory->define(Student::class, function(Faker $faker){
    return [
        'name'      => $faker->name,
        'login_id'  => function(){
            return factory(Login::class)->create()->id;
        }
    ];
});

?>