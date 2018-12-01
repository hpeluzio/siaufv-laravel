<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create('sala', function (Blueprint $table) {
      $table->increments('id');

      $table->string('nome', 10);
      $table->string('descricao');
      $table->integer('capacidade');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
    Schema::dropIfExists('sala');
  }
}
