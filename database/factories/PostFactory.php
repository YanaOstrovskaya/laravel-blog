<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
