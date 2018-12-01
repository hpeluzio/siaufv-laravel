<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Avaliacao;
use App\AvaliacaoDetalhe;
use App\Avaliador;
use App\Http\Requests\OralRequest;
use App\Sala;
use App\Trabalho;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class OralController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'oral';
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Avaliacao::with(['sala',
        'avaliador',
        'ano'
      ])->where('tipo', 1)->get();

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
      ->with('titulo', 'Inclusão de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1))
      ->with('avaliadores', Avaliador::pluck('nome', 'id'))
      ->with('horarios', trans('constant.horarios'))
      ->with('trabalhos', Trabalho::get(['nome', 'id',]))
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('salas', Sala::pluck('nome', 'id'))
      ->with('detalhes', collect());
  }

  public function store (OralRequest $request) {
    $request->request->add(['tipo' => 1]);

    $oral = New Avaliacao();
    $oral = $oral->create($request->all());
    if ($request->detalhes)
      $oral->detalhes()->createMany($request->detalhes);

    if ($request->get('incluir'))
      $rota = $this->dados['rota'] . '.index';
    else if ($request->get('incluir-novo'))
      $rota = $this->dados['rota'] . '.create';

    return redirect()->route($rota)->with('mensagem', 'Registro incluído com sucesso!');
  }

  public function edit ($id) {
    $update = Avaliacao::find($id);

    if (!$update)
      abort(404);

    return view('create_edit.' . $this->dados['rota'], $this->dados)
      ->with('update', $update)
      ->with('titulo', 'Edição de ' . trans_choice('table.' . $this->dados['rota'] . '.titulo', 1))
      ->with('avaliadores', Avaliador::pluck('nome', 'id'))
      ->with('horarios', trans('constant.horarios'))
      ->with('trabalhos', Trabalho::get(['nome', 'id']))
      ->with('salas', Sala::pluck('nome', 'id'))
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('detalhes', AvaliacaoDetalhe::with(['avaliador1',
        'avaliador2',
        'trabalho',
      ])->where('avaliacao_id', $id)->get());
  }

  public function update (OralRequest $request, $id) {
    $request->request->add(['tipo' => 1]);

    $update = Avaliacao::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());
    $update->detalhes()->delete();
    if ($request->detalhes)
      $update->detalhes()->createMany($request->detalhes);

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
    Avaliacao::find($id)->delete();

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}