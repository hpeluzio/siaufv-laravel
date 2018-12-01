<?php

namespace App;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model {
  use BelongsToTenants;

  protected $table = 'avaliacao';
  protected $fillable = [
    'id',
    'data',
    'horario',
    'tipo',
    'sala_id',
    'avaliador_id',
    'ano_id'
  ];

  public function sala () {
    return $this->belongsTo(Sala::class);
  }

  public function ano () {
    return $this->belongsTo(Ano::class);
  }

  public function avaliador () {
    return $this->belongsTo(Avaliador::class);
  }

  public function detalhes () {
    return $this->hasMany(AvaliacaoDetalhe::class);
  }
}
