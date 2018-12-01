<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Avaliador;
use App\Http\Requests\AvaliadorRequest;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class AvaliadorController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'avaliador';
    $this->dados['field'] = 'field.' . $this->dados['rota'];
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Avaliador::with('ano')->get();

      return Datatables::of($data)
        ->addColumn('action', function ($data) {
          return view('layouts.index-buttons', $this->dados)
            ->with('data', $data)
            ->with('button',
              ' <a target="_blank" href="' . route('relatorio.avaliacao.por_avaliador', $data['id']) . '" class="ui icon button blue">  ' .
              '     <i class="file text icon"></i> ' .
              ' </a> ')
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
      ->with('titulo', 'Inclusão de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1))
      ->with('cursos', Avaliador::pluck('curso', 'curso')->unique())
      ->with('institutos', Avaliador::pluck('instituto', 'instituto')->unique())
      ->with('anos', Ano::pluck('nome', 'id'));
  }

  public function store (AvaliadorRequest $request) {
    $avaliador = New Avaliador();
    $avaliador->create($request->all());

    if ($request->get('incluir'))
      $rota = $this->dados['rota'] . '.index';
    else if ($request->get('incluir-novo'))
      $rota = $this->dados['rota'] . '.create';

    return redirect()->route($rota)->with('mensagem', 'Registro incluído com sucesso!');
  }

  public function edit ($id) {
    $update = Avaliador::find($id);

    if (!$update)
      abort(404);

    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('update', $update)
      ->with('titulo', 'Edição de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1))
      ->with('cursos', Avaliador::pluck('curso', 'curso')->unique())
      ->with('institutos', Avaliador::pluck('instituto', 'instituto')->unique())
      ->with('anos', Ano::pluck('nome', 'id'));
  }

  public function update (AvaliadorRequest $request, $id) {
    $update = Avaliador::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
    $city = Avaliador::find($id);
    $city->delete();

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}