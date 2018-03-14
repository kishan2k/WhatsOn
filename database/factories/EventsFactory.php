<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shared\Events::class, function (Faker $faker) {
    return [
        'categoryID' => $faker->numberBetween($min = 1, $max = 2),
        'organizerID' => 1,
        'addressID' => 1,
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'slug' => $faker->slug,
        'source' => $faker->word,
        'body' => $faker->text($maxNbChars = 450) ,
        'cost' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 150),
        'start' => '2018-03-6 15:00:00',
        'end' => '2018-03-6 18:00:00',
        'isVisible' => true,
        'isPublic' => true,
        'image_url' => 'http://via.placeholder.com/350x500'
    ];
});

