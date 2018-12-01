<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhoAutorTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('trabalho_autor', function (Blueprint $table) {
      $table->increments('id');

      $table->string('nome');
      $table->integer('trabalho_id')->unsigned();

      $table->foreign('trabalho_id')->references('id')->on('trabalho');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('trabalho_autor');
  }
}
