<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ URL::asset('favicon.png') }}" type="image/png">
  <title>{{$titulo or config('app.name', 'Simpósio de Integração Acadêmica')}}</title>

  <link rel="stylesheet" href="{{ URL::asset('css/helper.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('includes/node_modules/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('includes/node_modules/animate.css/animate.min.css') }}">
  <link rel="stylesheet"
        href="{{ URL::asset('includes/others/datatable/DataTables-1.10.15/css/dataTables.semanticui.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('includes/others/Semantic-UI-CSS-master/semantic.css') }}">

  <script type="text/javascript" src="{{ URL::asset('includes/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('includes/node_modules/tether/dist/js/tether.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('includes/others/datatable/datatables.min.js') }}"></script>
  <script type="text/javascript"
          src="{{ URL::asset('includes/others/datatable/DataTables-1.10.15/js/dataTables.semanticui.min.js') }}"></script>
  <script type="text/javascript"
          src="{{ URL::asset('includes/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('includes/others/date.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('includes/others/Semantic-UI-CSS-master/semantic.js') }}"></script>
</head>

<style>
  .pusher {
    min-height: 100%;
    position: relative;
  }

  footer {
    position: absolute;
    width: 100%;
    bottom: 0px;
    background-color: #c6ad54;
    padding: 5px;
    text-align: center
  }

  a, a:hover {
    color: inherit;
    text-decoration: underline;
  }
</style>
<body>
<div class="ui sidebar inverted labeled icon vertical menu">
  <div class="item">
    <div class="header">Tabelas Auxiliares</div>
    <div class="menu">
      <a class="item" href="{{route('ano.index')}}">
        <i class="{{trans('table.ano.icone')}} icon"></i> {{trans_choice('table.ano.titulo', 2)}}
      </a>

      <a class="item" href="{{route('sala.index')}}">
        <i class="{{trans('table.sala.icone')}} icon"></i> {{trans_choice('table.sala.titulo', 2)}}
      </a>

      <a class="item" href="{{route('avaliador.index')}}">
        <i class="{{trans('table.avaliador.icone')}} icon"></i> {{trans_choice('table.avaliador.titulo', 2)}}
      </a>

      <a class="item" href="{{route('trabalho.index')}}">
        <i class="{{trans('table.trabalho.icone')}} icon"></i> {{trans_choice('table.trabalho.titulo', 2)}}
      </a>
    </div>
  </div>
  <div class="item">
    <div class="header">Lançamentos</div>
    <div class="menu">
      <a class="item" href="{{route('minicurso.index')}}">
        <i class="{{trans('table.minicurso.icone')}} icon"></i> {{trans_choice('table.minicurso.titulo', 2)}}
      </a>

      <a class="item" href="{{route('painel.index')}}">
        <i class="{{trans('table.painel.icone')}} icon"></i> {{trans_choice('table.painel.titulo', 2)}}
      </a>

      <a class="item" href="{{route('oral.index')}}">
        <i class="{{trans('table.oral.icone')}} icon"></i> {{trans_choice('table.oral.titulo', 2)}}
      </a>
    </div>
  </div>
  <div class="item">
    <div class="header"><i class="{{trans('table.relatorio.icone')}} icon"></i> Relatórios</div>

    <div class="menu">
      <a target="_blank" class="item" href="{{route('relatorio.avaliacao.por_sala')}}">
        {{trans('table.relatorio.avaliacao_por_sala')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.avaliacao.por_horario')}}">
        {{trans('table.relatorio.avaliacao_por_horario')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.avaliacao.por_painel', 'all')}}">
        {{trans('table.relatorio.avaliacao_por_painel')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.avaliador.por_instituto', 'all')}}">
        {{trans('table.relatorio.avaliador_por_instituto')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.avaliacao.orientação', 'all')}}">
        {{trans('table.relatorio.orientacao_para_avaliacao')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.apresentacao.oral', 'all')}}">
        {{trans('table.relatorio.apresentacao_oral')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.oral_data_local')}}">
        {{trans('table.relatorio.oral_data_local')}}
      </a>
      
      <a target="_blank" class="item" href="{{route('relatorio.painel_data_local')}}">
        {{trans('table.relatorio.painel_data_local')}}
      </a>     
      
      <a target="_blank" class="item" href="{{route('relatorio.oral_avaliador_instituto')}}">
        {{trans('table.relatorio.oral_avaliador_instituto')}}
      </a> 
      
      <a target="_blank" class="item" href="{{route('relatorio.painel_avaliador_instituto')}}">
        {{trans('table.relatorio.painel_avaliador_instituto')}}
      </a>

      <a target="_blank" class="item" href="{{route('relatorio.avaliacao_por_instituto')}}">
        {{trans('table.relatorio.avaliacao_por_instituto')}}
      </a>
    </div>
  </div>
</div>
<div class="pusher">
  <div class="ui red attached huge secondary inverted menu">
    <a class="item" onclick="sidenav()">
      <i class="sidebar icon"></i>
      Menu
    </a>

    <a class="item" href="{{route('home')}}">
      Pagina Inicial
    </a>

    <div class="ui dropdown item">
      {{\App\Ano::find(\Illuminate\Support\Facades\Auth::user()->ano_selecionado)->nome }}
      {{--{{\App\Ano::find(\Illuminate\Support\Facades\Auth::user()->)->get('nome') or 'Ano'}}--}}
      <i class="dropdown icon"></i>
      <div class="menu">
        @foreach (\App\Ano::all() as $ano)
          <a class="item" href="{{route('home.change_ano', $ano->id)}}">{{$ano->nome}}</a>
        @endforeach
      </div>
    </div>

    <div class="right menu">
      <div class="ui right dropdown item">
        {{ Auth::user()->name }}
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item" onclick="document.getElementById('logout-form').submit()">Sair</div>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="ui grid">
    <div class="fourteen wide column centered">
      <div class="ui fluid card">
        <div class="content">
          @yield('conteudo')
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <footer>© {{date("Y")}} - Sistema desenvolvido por <a
      href="mailto:jack.rsantana@gmail.com?subject=Sistema de Gerenciamento do SIA">Jackson Santana</a> e
    <a href="mailto:profpedromoises@gmail.com?subject=Sistema de Gerenciamento do SIA">Pedro Sousa</a>
  </footer>
</div>
@stack('scripts')
<script>
  $(function () {
    $('.decimal').mask('000.000.000.000.000,00', {reverse: true})
  })

  $('.ui.dropdown').dropdown()

  function sidenav () {
    $('.ui.sidebar')
      .sidebar('toggle')
  }
</script>

</body>
</html>