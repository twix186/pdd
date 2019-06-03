<?php

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        "date" => $faker->date("Y-m-d", $max = 'now'),
        "title" => $faker->name,
        "text" => $faker->name,
    ];
});
