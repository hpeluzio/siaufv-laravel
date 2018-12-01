<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('avaliacao', function (Blueprint $table) {
      $table->increments('id');

      $table->date('data');
      $table->time('horario');
      $table->integer('tipo');
      $table->integer('sala_id')->nullable()->unsigned();
      $table->integer('avaliador_id')->unsigned();
      $table->integer('ano_id')->unsigned();

      $table->foreign('ano_id')->references('id')->on('ano')->cascade();
      $table->foreign('sala_id')->references('id')->on('sala');
      $table->foreign('avaliador_id')->references('id')->on('avaliador');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('avaliacao');
  }
}
