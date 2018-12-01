<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sala extends Model {

  protected $table = 'sala';
  protected $fillable = [
    'nome',
    'descricao',
    'capacidade',
  ];

  public function apresentacoes () {
    return $this->hasMany(Apresentacao::class);
  }

  public function orais () {
    return $this->hasMany(Avaliacao::class);
  }

  public function scopeSalaDisponivel ($query, $request) {
    $query->whereNotExists(function ($query) use ($request) {
      $query->select(DB::raw(1))
        ->from('avaliacao')
        ->whereRaw('avaliacao.sala_id = sala.id')
        ->where('avaliacao.data', $request['data'])
        ->where('avaliacao.horario', $request['horario']);

      if ($request['avaliacao_id'])
        $query->where('avaliacao.id', '!=', $request['avaliacao_id']);
    });
  }
}
