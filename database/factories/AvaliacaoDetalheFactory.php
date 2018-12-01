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
$factory->define(App\AvaliacaoDetalhe::class, function (Faker\Generator $faker) {
  return [
    'trabalho_id' => \App\Trabalho::all()->random()->id,
    'avaliador1_id' => \App\Avaliador::all()->random()->id,
    'avaliador2_id' => \App\Avaliador::all()->random()->id,
    'avaliacao_id' => \App\Avaliacao::all()->random()->id,
  ];
});
