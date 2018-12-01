@extends('layouts.index')

@section('content')
  <table class="ui table responsive" width="100%" id="table">
    <thead>
    <tr>
      <th>{{trans('field.ano.nome')}}</th>
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
          {data: 'action', name: 'action'}
        ]
      })
    })
  </script>
@endpush