<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run () {
    factory(\App\Ano::class, 1)->create();

    factory(App\User::class)->create([
      'name' => 'Jackson Santana',
      'email' => 'jack.rsantana@gmail.com',
    ]);

    factory(App\User::class)->create([
      'name' => 'Pedro Sousa',
      'email' => 'profpedromoises@gmail.com',
    ]);

    factory(App\User::class)->create([
      'name' => 'Fábio André Teixeira',
      'email' => 'fateixeira.ufv@gmail.com',
    ]);

    factory(App\User::class)->create([
      'name' => 'Lais Barbosa Vieira',
      'email' => 'laisbarbosavieira@gmail.com',
      'password' => 'secret',
    ]);

    factory(App\User::class)->create([
      'name' => 'Comissão1',
      'email' => 'comissao1@ufv.com',
    ]);

    factory(App\User::class)->create([
      'name' => 'Comissão2',
      'email' => 'comissao2@ufv.com',
    ]);

    factory(App\User::class)->create([
      'name' => 'Comissão3',
      'email' => 'comissao3@ufv.com',
    ]);

    factory(App\User::class)->create([
      'name' => 'Comissão4',
      'email' => 'comissao4@ufv.com',
    ]);

    // factory(\App\Sala::class, 10)->create();
    // factory(\App\Avaliador::class, 10)->create();
    // factory(\App\Trabalho::class, 10)->create();
    // factory(\App\Avaliacao::class, 20)->create();
    // factory(\App\AvaliacaoDetalhe::class, 100)->create();
  }
}
