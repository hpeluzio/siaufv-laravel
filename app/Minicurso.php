<?php

namespace App;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;

class Minicurso extends Model {
  use BelongsToTenants;

  protected $table = 'minicurso';
  protected $fillable = [
    'nome',
    'vagas',
    'sala_id',
    'ano_id'
  ];

  public function ministrantes () {
    return $this->hasMany(MinicursoMinistrante::class);
  }

  public function horarios () {
    return $this->hasMany(MinicursoHorario::class);
  }

  public function ano () {
    return $this->belongsTo(Ano::class);
  }
}
