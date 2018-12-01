<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Http\Requests\MinicursoRequest;
use App\Minicurso;
use App\MinicursoHorario;
use App\MinicursoMinistrante;
use App\Sala;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class MinicursoController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'minicurso';
    $this->dados['field'] = 'field.' . $this->dados['rota'];
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Minicurso::with('ano')->get();

      return Datatables::of($data)
        ->addColumn('action', function ($data) {
          return view('layouts.index-buttons', $this->dados)
            ->with('data', $data)
            ->render();
        })
        ->make(true);
    }
  }

  public function index () {
    return view('index.' . $this->dados['rota'], $this->dados)
      ->with('titulo', 'Consulta de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 2));
  }

  public function create () {
    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('salas', Sala::pluck('nome', 'id'))
      ->with('ministrantes', collect())
      ->with('horarios', collect())
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('titulo', 'Inclusão de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1));
  }

  public function store (MinicursoRequest $request) {
    $minicurso = New Minicurso();
    $minicurso = $minicurso->create($request->all());
    if ($request->ministrantes)
      $minicurso->ministrantes()->createMany($request->ministrantes);
    if ($request->horarios)
      $minicurso->horarios()->createMany($request->horarios);

    if ($request->get('incluir'))
      $rota = $this->dados['rota'] . '.index';
    else if ($request->get('incluir-novo'))
      $rota = $this->dados['rota'] . '.create';

    return redirect()->route($rota)->with('mensagem', 'Registro incluído com sucesso!');
  }

  public function edit ($id) {
    $update = Minicurso::find($id);

    if (!$update)
      abort(404);

    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('update', $update)
      ->with('salas', Sala::pluck('nome', 'id'))
      ->with('ministrantes', MinicursoMinistrante::where('minicurso_id', $id)->get())
      ->with('horarios', MinicursoHorario::where('minicurso_id', $id)->get())
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('titulo', 'Edição de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1));
  }

  public function update (MinicursoRequest $request, $id) {
    $update = Minicurso::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());
    if ($request->ministrantes) {
      $update->ministrantes()->delete();
      $update->ministrantes()->createMany($request->ministrantes);
    }
    if ($request->horarios) {
      $update->horarios()->delete();
      $update->horarios()->createMany($request->horarios);
    }
    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
    $city = Minicurso::find($id);
    $city->delete();

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}