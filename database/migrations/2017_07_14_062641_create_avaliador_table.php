<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliadorTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('avaliador', function (Blueprint $table) {
      $table->increments('id');

      $table->string('matricula');
      $table->string('nome');
      $table->string('curso');
      $table->string('instituto');
      $table->string('email');
      $table->integer('ano_id')->unsigned();

      $table->foreign('ano_id')->references('id')->on('ano')->cascade();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('avaliador');
  }
}
