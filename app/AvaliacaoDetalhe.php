<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoDetalhe extends Model {
  protected $table = 'avaliacao_detalhe';
  protected $fillable = [
    'id',
    'trabalho_id',
    'avaliador1_id',
    'avaliador2_id',
    'avaliacao_id',
  ];

  public function trabalho () {
    return $this->belongsTo(Trabalho::class);
  }

  public function avaliacao () {
    return $this->belongsTo(Avaliacao::class);
  }

  public function avaliador1 () {
    return $this->belongsTo(avaliador::class, 'avaliador1_id');
  }

  public function avaliador2 () {
    return $this->belongsTo(avaliador::class, 'avaliador2_id');
  }
}
