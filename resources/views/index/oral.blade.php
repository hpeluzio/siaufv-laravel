@extends('layouts.index')

@section('content')
  <table class="ui table responsive" width="100%" id="table">
    <thead>
    <tr>
      <th>{{trans('field.avaliacao.data')}}</th>
      <th>{{trans('field.avaliacao.horario')}}</th>
      <th>{{trans('field.avaliacao.avaliador_id')}}</th>
      <th>{{trans('field.avaliador.instituto')}}</th>
      <th>{{trans('field.avaliacao.sala_id')}}</th>
      <th>{{trans('field.avaliacao.ano_id')}}</th>
      <th width="20%">Operações</th>
    </tr>
    </thead>
  </table>
@endsection

@push('scripts')
  <script>
    $(function () {
      $('#table').DataTable({
        columns: [
          {data: 'data', name: 'data'},
          {data: 'horario', name: 'horario'},
          {data: 'avaliador.nome', name: 'avaliador_id'},
          {data: 'avaliador.instituto', name: 'avaliador.instituto'},
          {data: 'sala.nome', name: 'sala.nome'},
          {data: 'ano.nome', name: 'ano.nome'},
          {data: 'action', name: 'action'}
        ]
      })
    })
  </script>
@endpush