<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'destination' => $faker -> city,
        'image' => $faker -> imageUrl($width = 640, $height = 480, 'city'),
        'description'=>$faker->sentence,
        'titre' =>$faker->company,
        'prix'=> $faker->numberBetween($min = 100, $max = 300)
    ];
});
