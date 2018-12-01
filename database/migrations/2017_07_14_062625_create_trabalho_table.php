<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhoTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('trabalho', function (Blueprint $table) {
      $table->increments('id');

      $table->string('nome');
      $table->string('orientador');
      $table->string('modalidade');
      $table->string('area');
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
    Schema::dropIfExists('trabalho');
  }
}
