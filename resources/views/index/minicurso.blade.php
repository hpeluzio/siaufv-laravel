@extends('layouts.index')

@section('content')
  <table class="ui table responsive" width="100%" id="table">
    <thead>
    <tr>
      <th>{{trans('field.minicurso.nome')}}</th>
      <th>{{trans('field.minicurso.sala_id')}}</th>
      <th>{{trans('field.minicurso.ano_id')}}</th>
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
          {data: 'nome', name: 'nome'},
          {data: 'nome', name: 'nome'},
          {data: 'ano.nome', name: 'ano.nome'},
          {data: 'action', name: 'action'}
        ]
      })
    })
  </script>
@endpush