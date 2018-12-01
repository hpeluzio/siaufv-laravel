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
$factory->define(App\Trabalho::class, function (Faker\Generator $faker) {
  return [
    'id' => rand(1, 100000),
    'nome' => $faker->name,
    'orientador' => $faker->name,
    'modalidade' => $faker->name,
    'area' => $faker->name,
    'ano_id' => \App\Ano::all()->random()->id,
  ];
});
