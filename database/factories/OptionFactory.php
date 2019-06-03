<?php

$factory->define(App\Option::class, function (Faker\Generator $faker) {
    return [
        "text" => $faker->name,
        "is_correct" => $faker->randomNumber(2),
        "question_id" => $faker->randomNumber(2),
    ];
});
