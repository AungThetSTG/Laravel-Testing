<?php

use App\Teacher;
use App\Login;
use Faker\Generator as Faker;

    $factory->define(Teacher::class, function(Faker $faker){
        return [
            'name'          => $faker->name,
            'login_id'      => $faker->randomElement($faker->randomElement((array)Login::all()->where('role', 'teacher')))->id
        ];
    });
?>