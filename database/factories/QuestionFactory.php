<?php

$factory->define(App\Question::class, function (Faker\Generator $faker) {
    return [
        "text" => $faker->name,
        "picture" => $faker->name,
    ];
});
