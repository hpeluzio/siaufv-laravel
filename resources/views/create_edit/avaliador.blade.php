@extends('layouts.create_edit')

@section('inclusao_edicao')

  @if(isset($update))
    {{ Form::model($update, ['route' => [$rota.'.update', $update->id], 'method' => 'put', 'class' => 'ui form']) }}
  @else
    {{ Form::open(['route' => $rota.'.store', 'method' => 'post', 'class' => 'ui form']) }}
  @endif

  <div class="two fields">
    <div class="field {{ $errors->has('matricula') ? 'error' : '' }}">
      {{ Form::label('matricula', trans('field.avaliador.matricula')) }}
      {{ Form::text('matricula') }}
    </div>

    <div class="field {{ $errors->has('nome') ? 'error' : '' }}">
      {{ Form::label('nome', trans('field.avaliador.nome')) }}
      {{ Form::text('nome') }}
    </div>
  </div>

  <div class="four fields">
    <div class="field {{ $errors->has('curso') ? 'error' : '' }}">
      {{ Form::label('curso', trans('field.avaliador.curso')) }}
      {{ Form::select('curso', $cursos , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('instituto') ? 'error' : '' }}">
      {{ Form::label('instituto', trans('field.avaliador.instituto')) }}
      {{ Form::select('instituto', $institutos , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('email') ? 'error' : '' }}">
      {{ Form::label('email', trans('field.avaliador.email')) }}
      {{ Form::email('email') }}
    </div>

    <div class="field {{ $errors->has('ano_id') ? 'error' : '' }}">
      {{ Form::label('ano_id', trans('field.avaliador.ano_id')) }}
      {{ Form::select('ano_id', $anos , \HipsterJazzbo\Landlord\Facades\Landlord::getTenants()['ano_id'] , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>
  </div>

@endsection
