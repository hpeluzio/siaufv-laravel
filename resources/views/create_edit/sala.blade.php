@extends('layouts.create_edit')

@section('inclusao_edicao')

  @if(isset($update))
    {{ Form::model($update, ['route' => [$rota.'.update', $update->id], 'method' => 'put', 'class' => 'ui form']) }}
  @else
    {{ Form::open(['route' => $rota.'.store', 'method' => 'post', 'class' => 'ui form']) }}
  @endif

  <div class="three fields">
    <div class="field {{ $errors->has('nome') ? 'error' : '' }}">
      {{ Form::label('nome', trans('field.sala.nome')) }}
      {{ Form::text('nome') }}
    </div>

    <div class="field {{ $errors->has('descricao') ? 'error' : '' }}">
      {{ Form::label('descricao', trans('field.sala.descricao')) }}
      {{ Form::text('descricao') }}
    </div>

    <div class="field {{ $errors->has('capacidade') ? 'error' : '' }}">
      {{ Form::label('capacidade', trans('field.sala.capacidade')) }}
      {{ Form::number('capacidade') }}
    </div>
  </div>
@endsection
