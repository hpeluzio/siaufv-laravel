@extends('layouts.report')

@section('conteudo')
  <h1>{{trans('table.relatorio.avaliacao_por_painel')}}</h1>
  @foreach($avaliacoes as $avaliacao)
    <table style="width:100%">
      <thead>
      <tr>
        <th>{{trans('field.avaliacao.data')}}
          : {{\Carbon\Carbon::parse($avaliacao->avaliacao_data)->format('d/m/Y')}}</th>
        <th>{{trans('field.avaliacao.horario')}}: {{$avaliacao->horario}}</th>
        <th>{{trans('field.avaliacao.fim')}}
          : {{\Carbon\Carbon::parse($avaliacao->horario)->addMinute(100)->format('H:m:s') }}</th>
      </tr>
      <tr>
        <th>{{trans('field.avaliacao.avaliador_id')}}: {{$avaliacao->avaliador->nome}}</th>
        <th colspan="2">{{trans('field.avaliador.instituto')}}: {{$avaliacao->avaliador->instituto}}</th>
      </tr>
      </thead>
    </table>
    <table style="width:100%">
      <thead>

      <tr>
        <th colspan="5"><h3>{{trans_choice('table.avaliacao_detalhe.titulo', 2)}}</h3></th>
      </tr>
      <tr>
        <th width="15%">{{trans('field.trabalho.id')}}</th>
        <th>{{trans('field.trabalho.nome')}}</th>
        <th>{{trans('field.avaliacao.detalhe.avaliador1_id')}}</th>
        <th>{{trans('field.avaliacao.detalhe.avaliador2_id')}}</th>
        <th>{{trans('field.trabalho.orientador')}}</th>
      </tr>
      </thead>
      <tbody>
      @foreach($avaliacao->detalhes as $detalhe)
        <tr>
          <td>{{$detalhe->trabalho_id}}</td>
          <td>{{$detalhe->trabalho->nome}}</td>
          <td>{{$detalhe->avaliador1->nome}}</td>
          <td>{{$detalhe->avaliador2->nome}}</td>
          <td>{{$detalhe->trabalho->orientador}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <br><br>
  @endforeach
@endsection
