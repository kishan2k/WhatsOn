<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shared\Events::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'category' => $faker->numberBetween($min = 1, $max = 2),
        'organizer' => 1,
        'source' => $faker->word,
        'body' => $faker->text($maxNbChars = 450) ,
        'cost' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 150),
        'addressID' => 1,
        'isVisible' => true,
        'isPublic' => true,
        'slug' => $faker->slug,
        'start' => '2018-03-6 15:00:00',
        'end' => '2018-03-6 18:00:00',
        'image_url' => 'http://via.placeholder.com/350x500'
    ];
});
