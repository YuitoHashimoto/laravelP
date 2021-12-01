<?php

namespace Database\Factories;

use app\Models\Work;
use Faker\Generator as Faker;


$factory->define(Work::class, function(Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->realText
    ];
});