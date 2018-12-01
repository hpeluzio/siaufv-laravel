<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinicursoTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('minicurso', function (Blueprint $table) {
      $table->increments('id');

      $table->string('nome');
      $table->integer('vagas');
      $table->integer('sala_id')->unsigned();
      $table->integer('ano_id')->unsigned();

      $table->foreign('ano_id')->references('id')->on('ano')->cascade();
      $table->foreign('sala_id')->references('id')->on('sala');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('minicurso');
  }
}
