@extends('layouts.index')

@section('content')
  <table class="ui table responsive" width="100%" id="table">
    <thead>
    <tr>
      <th>{{trans('field.trabalho.id'      )}}</th>
      <th>{{trans('field.trabalho.nome'      )}}</th>
      <th>{{trans('field.trabalho.orientador')}}</th>
      <th>{{trans('field.trabalho.modalidade')}}</th>
      <th>{{trans('field.trabalho.area'      )}}</th>
      <th>{{trans('field.trabalho.ano_id'      )}}</th>
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
          {data: 'id', name: 'id'},
          {data: 'nome', name: 'nome'},
          {data: 'orientador', name: 'orientador'},
          {data: 'modalidade', name: 'modalidade'},
          {data: 'area', name: 'area'},
          {data: 'ano.nome', name: 'ano.nome'},
          {data: 'action', name: 'action'}
        ]
      })
    })
  </script>
@endpush