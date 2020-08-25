<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'Muhammad Aji Putra',
        'email' => 'muhammad.aji.putra.mp98@gmail.com',
        'password' => bcrypt('123456789'),
    ];
});
