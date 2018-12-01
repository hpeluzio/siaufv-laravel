<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinicursoMinistrante extends Model {
  protected $table = 'minicurso_ministrante';
  protected $fillable = [
    'id',
    'nome',
  ];

  public function minicurso () {
    return $this->belongsTo(Minicurso::class);
  }
}
