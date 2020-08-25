<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Quality;
use Faker\Generator as Faker;

$factory->define(Quality::class, function (Faker $faker) {
    return [
        'size' => $faker->randomElement(['SHD','HD','mp4','3gp'])
    ];
});
