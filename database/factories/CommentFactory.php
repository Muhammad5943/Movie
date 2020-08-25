<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Guest;
use App\Movie;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'movie_id' => Movie::inRandomOrder()->pluck('id')->first(),
        'guest_id' => Guest::inRandomOrder()->pluck('id')->first(),
        'comment' => 'Saya mencoba membuat movie teater'
    ];
});
