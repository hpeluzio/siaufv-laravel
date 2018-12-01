<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Avaliador::class, function (Faker\Generator $faker) {
  return [
    'matricula' => $faker->name,
    'nome' => $faker->name,
    'curso' => $faker->name,
    'instituto' => $faker->name,
    'email' => $faker->name,
    'ano_id' => \App\Ano::all()->random()->id,
  ];
});
