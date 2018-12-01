<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabalhoAutor extends Model {
  protected $table = 'trabalho_autor';
  protected $fillable = [
    'id',
    'nome',
  ];

  public function trabalho () {
    return $this->belongsTo(Trabalho::class);
  }
}
