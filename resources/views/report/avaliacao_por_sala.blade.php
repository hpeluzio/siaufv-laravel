@extends('layouts.report')

@section('conteudo')
  <h1>{{trans('table.relatorio.avaliacao_por_sala')}}</h1>
  <table style="width:100%">
    <thead>
    <tr>
      <th colspan="3">Trabalho</th>
      <th colspan="6">Avaliação</th>
    </tr>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Orientador</th>
      <th>Dia</th>
      <th>Horario</th>
      <th>Presidente</th>
      <th>Avaliador 1</th>
      <th>Avaliador 2</th>
      <th>Sala</th>
    </tr>
    </thead>
    <tbody>
    @foreach($avaliacoes as $avaliacao)
      <tr>
        <td>{{$avaliacao->trabalho_id}}</td>
        <td>{{$avaliacao->trabalho_nome}}</td>
        <td>{{$avaliacao->trabalho_orientador}}</td>
        <td>{{\Carbon\Carbon::parse($avaliacao->avaliacao_data)->format('d/m/Y')}}</td>
        <td>{{$avaliacao->avaliacao_horario}}</td>
        <td>{{$avaliacao->presidente_nome}}</td>
        <td>{{$avaliacao->avaliador1_nome}}</td>
        <td>{{$avaliacao->avaliador2_nome}}</td>
        <td>{{$avaliacao->sala_nome}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
