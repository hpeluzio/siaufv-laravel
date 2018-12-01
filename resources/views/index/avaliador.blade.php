@extends('layouts.index')

@section('content')
  <table class="ui table responsive" width="100%" id="table">
    <thead>
    <tr>
      <th>{{trans('field.avaliador.matricula')}}</th>
      <th>{{trans('field.avaliador.nome')}}</th>
      <th>{{trans('field.avaliador.curso')}}</th>
      <th>{{trans('field.avaliador.instituto')}}</th>
      <th>{{trans('field.avaliador.email')}}</th>
      <th>{{trans('field.avaliador.ano_id')}}</th>
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
          {data: 'matricula', name: 'matricula'},
          {data: 'nome', name: 'nome'},
          {data: 'curso', name: 'curso'},
          {data: 'instituto', name: 'instituto'},
          {data: 'email', name: 'email'},
          {data: 'ano.nome', name: 'ano.nome'},
          {data: 'action', name: 'action'}
        ]
      })
    })
  </script>
@endpush