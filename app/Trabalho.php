<?php

namespace App;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;

class Trabalho extends Model {
  use BelongsToTenants;
  public $incrementing = false;
  protected $table = 'trabalho';
  protected $fillable = [
    'id',
    'nome',
    'orientador',
    'modalidade',
    'area',
    'ano_id'
  ];

  public function paineis () {
    return $this->hasMany(Painel::class);
  }

  public function avaliacoesDetalhe () {
    return $this->hasMany(AvaliacaoDetalhe::class);
  }

  public function autores () {
    return $this->hasMany(TrabalhoAutor::class);
  }

  public function orais () {
    return $this->hasMany(Avaliacao::class);
  }

  public function ano () {
    return $this->belongsTo(Ano::class);
  }
}
