<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Http\Requests\AnoRequest;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class AnoController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'ano';
    $this->dados['field'] = 'field.' . $this->dados['rota'];
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Ano::all();

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

  public function store (AnoRequest $request) {
    $ano = New Ano();
    $ano->create($request->all());

    if ($request->get('incluir'))
      $rota = $this->dados['rota'] . '.index';
    else if ($request->get('incluir-novo'))
      $rota = $this->dados['rota'] . '.create';

    return redirect()->route($rota)->with('mensagem', 'Registro incluído com sucesso!');
  }

  public function edit ($id) {
    $update = Ano::find($id);

    if (!$update)
      abort(404);

    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('update', $update)
      ->with('titulo', 'Edição de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1));
  }

  public function update (AnoRequest $request, $id) {
    $update = Ano::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
  if(Ano::all()->count() > 1) {
      $city = Ano::find($id);
      $city->delete();

      $users = User::where('ano_selecionado', $city->id)->update(['ano_selecionado' => Ano::get()->last()->id]);
  }
  
    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}