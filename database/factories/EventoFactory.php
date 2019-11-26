<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'fecha' => now(),
      'email_verified_at' => now(),
      'ubicacion'=> $faker->numberBetween(1,7)
    ];
});
