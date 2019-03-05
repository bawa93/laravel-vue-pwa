<?php

use Faker\Generator as Faker;

$factory->define(\App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(30),
        'info' => $faker->realText(200),
        'image' => $faker->imageUrl()
    ];
});
