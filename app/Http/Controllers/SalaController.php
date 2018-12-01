<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalaRequest;
use App\Sala;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class SalaController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'sala';
    $this->dados['field'] = 'field.' . $this->dados['rota'];
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Sala::all();

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
      ->with('titulo', 'Inclusão de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1));
  }

  public function store (SalaRequest $request) {
    $sala = New Sala();
    $sala->create($request->all());

    if ($request->get('incluir'))
      $rota = $this->dados['rota'] . '.index';
    else if ($request->get('incluir-novo'))
      $rota = $this->dados['rota'] . '.create';

    return redirect()->route($rota)->with('mensagem', 'Registro incluído com sucesso!');
  }

  public function edit ($id) {
    $update = Sala::find($id);

    if (!$update)
      abort(404);

    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('update', $update)
      ->with('titulo', 'Edição de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1));
  }

  public function update (SalaRequest $request, $id) {
    $update = Sala::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
    $city = Sala::find($id);
    $city->delete();

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}