<?php

namespace App;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Avaliador extends Model {
  use BelongsToTenants;

  protected $table = 'avaliador';
  protected $fillable = [
    'matricula',
    'nome',
    'curso',
    'instituto',
    'tipo',
    'email',
    'ano_id'
  ];

  public function avaliacoes () {
    return $this->hasMany(Avaliacao::class);
  }

  public function ano () {
    return $this->belongsTo(Ano::class);
  }

  public function scopeAvaliadorDisponivel ($query, $request) {
    $query->whereNotExists(function ($query) use ($request) {
      $query->select(DB::raw(1))
        ->from('avaliacao')
        ->whereRaw('avaliacao.avaliador_id = avaliador.id')
        ->where('avaliacao.data', $request['data'])
        ->where('avaliacao.horario', $request['horario']);

      if ($request['avaliacao_id'])
        $query->where('avaliacao.id', '!=', $request['avaliacao_id']);
    })->whereNotExists(function ($query) use ($request) {
      $query->select(DB::raw(1))
        ->from('avaliacao')
        ->join('avaliacao_detalhe', 'avaliacao_detalhe.avaliacao_id', 'avaliacao.id')
        ->whereRaw('avaliacao_detalhe.avaliador1_id = avaliador.id')
        ->where('avaliacao.data', $request['data'])
        ->where('avaliacao.horario', $request['horario']);

      if ($request['avaliacao_id'])
        $query->where('avaliacao.id', '!=', $request['avaliacao_id']);
    })->whereNotExists(function ($query) use ($request) {
      $query->select(DB::raw(1))
        ->from('avaliacao')
        ->join('avaliacao_detalhe', 'avaliacao_detalhe.avaliacao_id', 'avaliacao.id')
        ->whereRaw('avaliacao_detalhe.avaliador2_id = avaliador.id')
        ->where('avaliacao.data', $request['data'])
        ->where('avaliacao.horario', $request['horario']);

      if ($request['avaliacao_id'])
        $query->where('avaliacao.id', '!=', $request['avaliacao_id']);
    });
  }
}
