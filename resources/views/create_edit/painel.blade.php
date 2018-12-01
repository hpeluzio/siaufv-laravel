@extends('layouts.create_edit')

@section('inclusao_edicao')

  @if(isset($update))
    {{ Form::model($update, ['route' => [$rota.'.update', $update->id], 'method' => 'put', 'class' => 'ui form']) }}
  @else
    {{ Form::open(['route' => $rota.'.store', 'method' => 'post', 'class' => 'ui form']) }}
  @endif

  <div class="three fields">
    <div class="field {{ $errors->has('data') ? 'error' : '' }}">
      {{ Form::label('data', trans('field.avaliacao.data')) }}
      {{ Form::date('data') }}
    </div>

    <div class="field {{ $errors->has('horario') ? 'error' : '' }}">
      {{ Form::label('horario', trans('field.avaliacao.horario')) }}
      {{ Form::select('horario', $horarios, null, ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('fim') ? 'error' : '' }}">
      {{ Form::label('fim', trans('field.avaliacao.fim')) }}
      {{ Form::text('fim', null, ['disabled']) }}
    </div>
  </div>

  <div class="two fields">
    <div class="field {{ $errors->has('avaliador_id') ? 'error' : '' }}">
      {{ Form::label('avaliador_id', trans('field.avaliacao.avaliador_id')) }}
      {{ Form::select('avaliador_id', $avaliadores, null, ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('ano_id') ? 'error' : '' }}">
      {{ Form::label('ano_id', trans('field.avaliador.ano_id')) }}
      {{ Form::select('ano_id', $anos , \HipsterJazzbo\Landlord\Facades\Landlord::getTenants()['ano_id'] , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>
  </div>

  @include('create_edit.avaliacao_detalhe')
@endsection
