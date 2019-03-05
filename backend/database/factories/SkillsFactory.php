<?php

use Faker\Generator as Faker;

$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(15),
        'info'  => $faker->realText('150'),
        'icon'  => $faker->imageUrl('96',96),
        'stack_type' => $faker->randomElement(['Backend','Frontend'])
    ];
});
