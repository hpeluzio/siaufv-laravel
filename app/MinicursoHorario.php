<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinicursoHorario extends Model {
  protected $table = 'minicurso_horario';
  protected $fillable = [
    'id',
    'inicio',
    'fim',
  ];

  public function minicurso () {
    return $this->belongsTo(Minicurso::class);
  }
}
