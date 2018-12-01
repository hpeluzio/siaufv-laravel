<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoDetalheTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('avaliacao_detalhe', function (Blueprint $table) {
      $table->increments('id');

      $table->integer('trabalho_id')->unsigned();
      $table->integer('avaliador1_id')->unsigned();
      $table->integer('avaliador2_id')->unsigned();
      $table->integer('avaliacao_id')->unsigned();

      $table->foreign('trabalho_id')->references('id')->on('trabalho');
      $table->foreign('avaliador1_id')->references('id')->on('avaliador');
      $table->foreign('avaliador2_id')->references('id')->on('avaliador');
      $table->foreign('avaliacao_id')->references('id')->on('avaliacao')->onDelete('cascade');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('avaliacao_detalhe');
  }
}
