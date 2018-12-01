<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model {
  protected $table = 'ano';
  protected $fillable = [
    'id',
    'nome',
  ];

  public function avaliadores () {
    return $this->hasMany(Avaliador::class);
  }

  public function avaliacoes () {
    return $this->hasMany(Avaliador::class);
  }

  public function minicursos () {
    return $this->hasMany(Minicurso::class);
  }

  public function trabalhos () {
    return $this->hasMany(Trabalho::class);
  }
}
