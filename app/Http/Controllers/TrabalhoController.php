<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Http\Requests\TrabalhoRequest;
use App\Trabalho;
use App\TrabalhoAutor;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class TrabalhoController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'trabalho';
    $this->dados['field'] = 'field.' . $this->dados['rota'];
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Trabalho::with('ano')->get();

      return Datatables::of($data)
        ->addColumn('action', function ($data) {
          return view('layouts.index-buttons', $this->dados)
            ->with('data', $data)
            ->with('button',
              ' <a data-tooltip="' . trans('table.relatorio.orientacao_para_avaliacao') . '" target="_blank" href="' . route('relatorio.avaliacao.orientação', $data['id']) . '" class="ui icon button orange">  ' .
              '     <i class="file text icon"></i> ' .
              ' </a> ' .
              ' <a data-tooltip="' . trans('table.relatorio.apresentacao_oral') . '" target="_blank" href="' . route('relatorio.apresentacao.oral', $data['id']) . '" class="ui icon button teal">  ' .
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
      ->with('orientadores', Trabalho::pluck('orientador', 'orientador')->unique())
      ->with('autores', collect())
      ->with('modalidades', Trabalho::pluck('modalidade', 'modalidade')->unique())
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('areas', Trabalho::pluck('area', 'area')->unique());
  }

  public function store (TrabalhoRequest $request) {
    $trabalho = New Trabalho();
    $trabalho = $trabalho->create($request->all());
    if ($request->autores)
      $trabalho->autores()->createMany($request->autores);

    if ($request->get('incluir'))
      $rota = $this->dados['rota'] . '.index';
    else if ($request->get('incluir-novo'))
      $rota = $this->dados['rota'] . '.create';

    return redirect()->route($rota)->with('mensagem', 'Registro incluído com sucesso!');
  }

  public function edit ($id) {
    $update = Trabalho::find($id);

    if (!$update)
      abort(404);

    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('update', $update)
      ->with('titulo', 'Edição de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1))
      ->with('orientadores', Trabalho::pluck('orientador', 'orientador')->unique())
      ->with('autores', TrabalhoAutor::where('trabalho_id', $id)->get())
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('modalidades', Trabalho::pluck('modalidade', 'modalidade')->unique())
      ->with('areas', Trabalho::pluck('area', 'area')->unique());
  }

  public function update (TrabalhoRequest $request, $id) {
    $update = Trabalho::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());
    if ($request->autores) {
      $update->autores()->delete();
      $update->autores()->createMany($request->autores);
    }
    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
    $city = Trabalho::find($id);
    $city->delete();

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}