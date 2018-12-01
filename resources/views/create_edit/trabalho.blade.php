@extends('layouts.create_edit')

@section('inclusao_edicao')

  @if(isset($update))
    {{ Form::model($update, ['route' => [$rota.'.update', $update->id], 'method' => 'put', 'class' => 'ui form']) }}
  @else
    {{ Form::open(['route' => $rota.'.store', 'method' => 'post', 'class' => 'ui form']) }}
  @endif

  <div class="four fields">
    <div class="two wide field {{ $errors->has('id') ? 'error' : '' }}">
      {{ Form::label('id', trans('field.trabalho.id')) }}
      {{ Form::number('id') }}
    </div>

    <div class="six wide field {{ $errors->has('nome') ? 'error' : '' }}">
      {{ Form::label('nome', trans('field.trabalho.nome')) }}
      {{ Form::text('nome') }}
    </div>

    <div class="eight wide field {{ $errors->has('orientador') ? 'error' : '' }}">
      {{ Form::label('orientador', trans('field.trabalho.orientador')) }}
      {{ Form::select('orientador', $orientadores , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>
  </div>

  <div class="three fields">
    <div class="field {{ $errors->has('modalidade') ? 'error' : '' }}">
      {{ Form::label('modalidade', trans('field.trabalho.modalidade')) }}
      {{ Form::select('modalidade', $modalidades , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('area') ? 'error' : '' }}">
      {{ Form::label('area', trans('field.trabalho.area')) }}
      {{ Form::select('area', $areas , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('ano_id') ? 'error' : '' }}">
      {{ Form::label('ano_id', trans('field.avaliador.ano_id')) }}
      {{ Form::select('ano_id', $anos , \HipsterJazzbo\Landlord\Facades\Landlord::getTenants()['ano_id'] , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>
  </div>

  <div class="ui green card fluid" id="autores">
    <div class="content">
      <h3 class="ui header"><i
          class="{{trans('table.trabalho_autor.icone')}} icon"></i>{{trans_choice('table.trabalho_autor.titulo', 2)}}
      </h3>
      <div class="two fields">
        <div class="fourteen wide field">
          {{ Form::label('autor_nome', trans('field.trabalho.autor.nome')) }}
          {{ Form::text('autor_nome') }}
        </div>

        <div class="four wide field">
          <button type="button" class="ui primary fluid button m-t-md" onclick="addAutor()">
            Incluir
          </button>
        </div>
      </div>

      <table class="ui tablet stackable table" id="table_autor">
        <thead>
        <tr>
          <th>{{trans('field.trabalho.autor.nome')}}</th>
          <th width="10%">Operações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($autores as $index => $value)
          <tr>
            <td><input type="hidden" name="autores[{{$index}}][nome]" value="{{$value->nome}}">{{$value->nome}}</td>
            <td>
              <div class="negative ui button" onclick="delItem(this)">Excluir</div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
