@extends('layouts.create_edit')

@section('inclusao_edicao')

  @if(isset($update))
    {{ Form::model($update, ['route' => [$rota.'.update', $update->id], 'method' => 'put', 'class' => 'ui form']) }}
  @else
    {{ Form::open(['route' => $rota.'.store', 'method' => 'post', 'class' => 'ui form']) }}
  @endif

  <div class="four fields">
    <div class="field {{ $errors->has('nome') ? 'error' : '' }}">
      {{ Form::label('nome', trans('field.minicurso.nome')) }}
      {{ Form::text('nome') }}
    </div>

    <div class="field {{ $errors->has('vagas') ? 'error' : '' }}">
      {{ Form::label('vagas', trans('field.minicurso.vagas')) }}
      {{ Form::number('vagas') }}
    </div>

    <div class="field {{ $errors->has('sala_id') ? 'error' : '' }}">
      {{ Form::label('sala_id', trans('field.minicurso.sala_id')) }}
      {{ Form::select('sala_id', $salas , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>

    <div class="field {{ $errors->has('ano_id') ? 'error' : '' }}">
      {{ Form::label('ano_id', trans('field.avaliador.ano_id')) }}
      {{ Form::select('ano_id', $anos , \HipsterJazzbo\Landlord\Facades\Landlord::getTenants()['ano_id'] , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
    </div>
  </div>
  <div class="ui grid">
    <div class="row" style="margin-bottom: 13px">
      <div class="eight wide column">
        <div class="ui green card fluid" id="ministrantes">
          <div class="content">
            <h3 class="ui header"><i
                class="{{trans('table.minicurso_ministrante.icone')}} icon"></i>{{trans_choice('table.minicurso_ministrante.titulo', 2)}}
            </h3>
            <div class="two fields">
              <div class="fourteen wide field">
                {{ Form::label('ministrante_nome', trans('field.minicurso.ministrante.nome')) }}
                {{ Form::text('ministrante_nome') }}
              </div>

              <div class="four wide field">
                <button type="button" class="ui primary fluid button m-t-md" onclick="addMinistrante()">
                  Incluir
                </button>
              </div>
            </div>

            <table class="ui tablet stackable table" id="table_ministrante">
              <thead>
              <tr>
                <th>{{trans('field.minicurso.ministrante.nome')}}</th>
                <th width="10%">Operações</th>
              </tr>
              </thead>
              <tbody>
              @foreach($ministrantes as $index => $value)
                <tr>
                  <td><input type="hidden" name="ministrantes[{{$index}}][nome]"
                             value="{{$value->nome}}">{{$value->nome}}</td>
                  <td>
                    <div class="negative ui button" onclick="delItem(this)">Excluir</div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="eight wide column">
        <div class="ui green card fluid" id="horarios">
          <div class="content">
            <h3 class="ui header"><i
                class="{{trans('table.minicurso_horario.icone')}} icon"></i>{{trans_choice('table.minicurso_horario.titulo', 2)}}
            </h3>
            <div class="two fields">
              <div class="six wide field">
                {{ Form::label('horario_inicio', trans('field.minicurso.horario.inicio')) }}
                <input type="datetime-local" name="horario_inicio">
              </div>

              <div class="six wide field">
                {{ Form::label('horario_fim', trans('field.minicurso.horario.fim')) }}
                <input type="datetime-local" name="horario_fim">
              </div>

              <div class="four wide field">
                <button type="button" class="ui primary fluid button m-t-md" onclick="addHorario()">
                  Incluir
                </button>
              </div>
            </div>

            <table class="ui tablet stackable table" id="table_horario">
              <thead>
              <tr>
                <th>{{trans('field.minicurso.horario.inicio')}}</th>
                <th>{{trans('field.minicurso.horario.fim')}}</th>
                <th width="10%">Operações</th>
              </tr>
              </thead>
              <tbody>
              @foreach($horarios as $index => $value)
                <tr>
                  <td><input type="hidden" name="horarios[{{$index}}][inicio]"
                             value="{{$value->inicio}}">{{$value->inicio}}</td>
                  <td><input type="hidden" name="horarios[{{$index}}][fim]" value="{{$value->fim}}">{{$value->fim}}</td>
                  <td>
                    <div class="negative ui button" onclick="delItem(this)">Excluir</div>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
