@extends('layouts.report')

@section('conteudo')
  <h1>{{trans('table.relatorio.avaliador_por_instituto')}}</h1>
  <table style="width:100%">
    <thead>
    <tr>
      <th>Inst</th>
      <th>{{trans_choice('table.avaliador.titulo', 1)}}</th>
      <th>{{trans('field.avaliacao.data')}}</th>
      <th>{{trans('field.avaliacao.horario')}}</th>
      <th>{{trans('field.avaliacao.sala_id')}}</th>


      <th>Tipo</th>
      <th>ID</th>
    </tr>
    </thead>
    <tbody>
    @foreach($avaliacoes as $avaliacao)
      <tr>
        <!--<td>{{$loop->iteration}}</td>-->
        <td>{{$avaliacao->instituto}}</td>
        <td>{{$avaliacao->avaliador}}</td>
        <td>{{date('d/m', strtotime($avaliacao->dia))}}</td>
        <td>{{date('H:i', strtotime($avaliacao->horario))}}</td>

        date('H:i', strtotime($avaliacao->dia))

        <td>{{$avaliacao->sala != '' ? $avaliacao->sala : 'Saguão PVA'}}</td>
        
        
        <td>{{$avaliacao->tipo == 1 ? 'Oral' : 'Painel' }}</td>
        <td>{{$avaliacao->trabalho_id}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <hr><br>
@endsection
