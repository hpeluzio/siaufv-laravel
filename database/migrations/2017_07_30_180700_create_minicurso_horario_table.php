<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinicursoHorarioTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('minicurso_horario', function (Blueprint $table) {
      $table->increments('id');

      $table->datetime('inicio');
      $table->datetime('fim');
      $table->integer('minicurso_id')->unsigned();

      $table->foreign('minicurso_id')->references('id')->on('minicurso');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('minicurso_horario');
  }
}
