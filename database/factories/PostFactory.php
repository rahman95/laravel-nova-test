<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'subtitle' => $faker->sentence,
        'body' => $faker->paragraph,
        'published_on' => $faker->dateTime
    ];
});
