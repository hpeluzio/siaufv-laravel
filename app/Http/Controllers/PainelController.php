<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Avaliacao;
use App\AvaliacaoDetalhe;
use App\Avaliador;
use App\Http\Requests\PainelRequest;
use App\Trabalho;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class PainelController extends Controller {
  private $dados;

  public function __construct () {
    $this->dados['rota'] = 'painel';
  }

  public function getData (Request $request) {
    if ($request->ajax()) {
      $data = Avaliacao::with(['avaliador', 'ano'])->where('tipo', 2)->get();

      return Datatables::of($data)
        ->addColumn('action', function ($data) {
          return view('layouts.index-buttons', $this->dados)
            ->with('data', $data)
            ->with('button',
              ' <a target="_blank" href="' . route('relatorio.avaliacao.por_painel', $data['id']) . '" class="ui icon button blue">  ' .
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
      ->with('horarios', trans('constant.horarios'))
      ->with('avaliadores', Avaliador::pluck('nome', 'id'))
      ->with('trabalhos', Trabalho::get(['nome', 'id']))
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('detalhes', collect());
  }

  public function store (PainelRequest $request) {
    $request->request->add(['tipo' => 2]);

    $painel = New Avaliacao();
    $painel = $painel->create($request->all());
    $painel->detalhes()->createMany($request->detalhes);

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
      ->with('horarios', trans('constant.horarios'))
      ->with('avaliadores', Avaliador::pluck('nome', 'id'))
      ->with('trabalhos', Trabalho::get(['nome', 'id']))
      ->with('anos', Ano::pluck('nome', 'id'))
      ->with('detalhes', AvaliacaoDetalhe::with(['avaliador1',
        'avaliador2',
      ])->where('avaliacao_id', $id)->get());
  }

  public function update (PainelRequest $request, $id) {
    $request->request->add(['tipo' => 2]);

    $update = Avaliacao::find($id);

    if (!$update)
      abort(404);

    $update->update($request->all());
    $update->detalhes()->delete();
    $update->detalhes()->createMany($request->detalhes);

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro editado com sucesso!');
  }

  public function destroy ($id) {
    Avaliacao::find($id)->delete();

    return redirect()->route($this->dados['rota'] . '.index')->with('mensagem', 'Registro excluído com sucesso!');
  }
}