<?php
use App\Login;
use Faker\Generator as Faker;

$factory->define(Login::class, function (Faker $faker) {
    static $password;

    return [
        'email'             => $faker->unique()->safeEmail,
        'password'          => $password ? : $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
        'verified'          => $verified = $faker->randomElement(
                                                    [
                                                        Login::VERIFIED_USER,
                                                        Login::UNVERIFIED_USER
                                                    ]
                                                ),
        'verification_token'=> $verified == Login::VERIFIED_USER ? null : Login::generateVerificationCode(),
        'role'              => $faker->randomElement([Login::TEACHER, Login::STUDENT]),
    ];
});
