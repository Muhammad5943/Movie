<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Year;
use Faker\Generator as Faker;

$factory->define(Year::class, function (Faker $faker) {
    return [
        'year' =>$faker->randomElement(['2009','2011','2012','2015','2018','2019','2020'])
    ];
});
