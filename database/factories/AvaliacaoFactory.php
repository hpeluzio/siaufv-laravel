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
$factory->define(App\Avaliacao::class, function (Faker\Generator $faker) {
  $horarios = array_keys(trans('constant.horarios'));
  $datas = ['2017-07-29', '2017-07-30', '2017-08-01', '2017-08-02', '2017-08-03'];

  $dados['id'] = rand(1, 100000);
  $dados['horario'] = $horarios[array_rand($horarios)];
  $dados['data'] = $datas[array_rand($datas)];
  $dados['tipo'] = rand(1, 2);
  if ($dados['tipo'] == 1)
    $dados['sala_id'] = \App\Sala::all()->random()->id;
  $dados['avaliador_id'] = \App\Avaliador::all()->random()->id;
  $dados['ano_id'] = \App\Ano::all()->random()->id;

  return $dados;
});
