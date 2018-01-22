<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'    => $faker->sentence,
        'body'     => $faker->paragraph,
        'user_id'  => $faker->randomDigitNotNull,
        'category' => $faker->word,
    ];
});
