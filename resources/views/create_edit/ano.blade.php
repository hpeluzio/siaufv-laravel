@extends('layouts.create_edit')

@section('inclusao_edicao')

  @if(isset($update))
    {{ Form::model($update, ['route' => [$rota.'.update', $update->id], 'method' => 'put', 'class' => 'ui form']) }}
  @else
    {{ Form::open(['route' => $rota.'.store', 'method' => 'post', 'class' => 'ui form']) }}
  @endif

  <div class="field {{ $errors->has('nome') ? 'error' : '' }}">
    {{ Form::label('nome', trans('field.ano.nome')) }}
    {{ Form::text('nome') }}
  </div>

@endsection
