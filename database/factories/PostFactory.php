<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'body' => $faker->realText(),
        'category_id' => $faker->numberBetween(1, 4),
        'user_id' => $faker->numberBetween(1, 11)
    ];
});
