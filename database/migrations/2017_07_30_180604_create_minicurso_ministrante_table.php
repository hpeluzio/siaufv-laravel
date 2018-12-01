<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinicursoMinistranteTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('minicurso_ministrante', function (Blueprint $table) {
      $table->increments('id');

      $table->string('nome');
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
    Schema::dropIfExists('minicurso_ministrante');
  }
}
