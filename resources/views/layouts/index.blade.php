@extends('layouts.master')

@section('conteudo')

  <div class="ui equal width stackable grid">
    <div class="row">
      <div class=" column">
        <div class="ui huge header"><i class="{{trans('table.'.$rota.'.icone')}} icon"></i> {{$titulo}}</div>
      </div>
      <div class=" column">
        <div id="table_add">
          <a href="{{route($rota.'.create')}}" class="ui fluid button green">
            <i class="icon plus"></i>
            Adicionar
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="conteudo" class="animated fadeIn">
    @yield('content')
  </div>
@endsection

@push('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/'.$rota.'.js') }}"></script>
  <script>
    $.extend(true, $.fn.dataTable.defaults, {
      bStateSave: true,
      serverSide: true,
      processing: true,
      ajax: '{{route($rota . '.get_data')}}',
      iDisplayLength: 25,
      language: {
        'decimal': ',',
        'emptyTable': 'Nenhum registro encontrado',
        'info': 'Exibindo do _START_ ao _END_ de _TOTAL_ registros',
        'infoEmpty': 'Exibindo do 0 ao 0 de 0 registros',
        'infoFiltered': '(Filtrado a partir de _MAX_ registros)',
        'infoPostFix': '',
        'thousands': '.',
        'lengthMenu': 'Exibir _MENU_ registros',
        'loadingRecords': 'Carregando...',
        'processing': 'Processando...',
        'search': 'Pesquisar',
        'zeroRecords': 'Nenhum registro encontrado',
        'paginate': {
          'first': 'Primeiro',
          'last': 'Último',
          'next': 'Próximo',
          'previous': 'Anterior'
        }
      }
    })
  </script>
@endpush