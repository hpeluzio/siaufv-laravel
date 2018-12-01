@extends('layouts.master')

@section('conteudo')
  <div class="ui huge header"><i class="{{trans('table.'.$rota.'.icone')}} icon"></i> {{$titulo}}</div>

  <input type="hidden" name="_token" value="{{csrf_token()}}">
  @yield('inclusao_edicao')

  <div class="ui error message"></div>

  @if (!$errors->isEmpty())
    <div class="ui negative message">
      <ul class="list">
        @foreach ($errors->all() as $error)
          <li>{{ $error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if(isset($update))
    <input type="submit" id="editar" name="editar" value="Editar" class="ui primary large button">
    <a href="{{route($rota.'.index')}}" class="ui large button">Cancelar</a>
  @else
    <input type="submit" name="incluir" value="Incluir" class="ui primary large button">
    <input type="submit" name="incluir-novo" value="Incluir e Novo" class="ui large button">
    <a href="{{route($rota.'.index')}}" class="ui large button">Cancelar</a>
  @endif

  {{ Form::close() }}

  <script>
    $(document).ready(function () {
      $('form:first *:input[type!=hidden]:first').focus()
    })
  </script>
  <script type="text/javascript" src="{{ URL::asset('js/'.$rota.'.js') }}"></script>
@endsection