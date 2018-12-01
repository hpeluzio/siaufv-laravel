<div class="ui tiny modal">
  <j4 class="header">
    Tem certeza que deseja adicionar este Avaliador?
  </j4>
  <div class="content" id="conteudo_confirmacao">
  </div>
  <div class="actions">
    <div class="ui negative button">
      Não
    </div>
    <div class="ui positive right labeled icon button">
      Sim
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="ui green card fluid" id="detalhes">
  <div class="content">
    <h3 class="ui header"><i
        class="{{trans('table.avaliacao_detalhe.icone')}} icon"></i>{{trans_choice('table.avaliacao_detalhe.titulo', 2)}}
    </h3>
    <div class="two fields">
      <div class="field">
        {{ Form::label('detalhes_trabalho_id', trans('field.avaliacao.detalhe.trabalho_id')) }}
        <select class="ui search dropdown" name="detalhes_trabalho_id">
          <option value="">Selecione um Item</option>
          @foreach($trabalhos as $trabalho)
            <option value="{{$trabalho->id}}">{{$trabalho->id . ' - ' . $trabalho->nome}}</option>
          @endforeach
        </select>
      </div>

      <div class="field">
        {{ Form::label('detalhes_orientador', trans('field.avaliacao.detalhe.orientador')) }}
        {{ Form::text('detalhes_orientador', null, ['disabled']) }}
      </div>
    </div>

    <div class="two fields">
      <div class="field">
        {{ Form::label('detalhes_avaliador1_id', trans('field.avaliacao.detalhe.avaliador1_id')) }}
        {{ Form::select('detalhes_avaliador1_id', [] , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
      </div>

      <div class="field">
        {{ Form::label('detalhes_avaliador2_id', trans('field.avaliacao.detalhe.avaliador2_id')) }}
        {{ Form::select('detalhes_avaliador2_id', [] , null , ['placeholder' => 'Selecione um Item', 'class' => 'ui search dropdown']) }}
      </div>

      <div class="two wide field">
        <button type="button" class="ui primary fluid button m-t-md" onclick="addDetalhe()">
          Incluir
        </button>
      </div>
    </div>

    <table class="ui tablet stackable table">
      <thead>
      <tr>
        <th>{{trans('field.avaliacao.detalhe.trabalho_id')}}</th>
        <th>{{trans('field.avaliacao.detalhe.orientador')}}</th>
        <th>{{trans('field.avaliacao.detalhe.avaliador1_id')}}</th>
        <th>{{trans('field.avaliacao.detalhe.avaliador2_id')}}</th>
        <th width="10%">Operações</th>
      </tr>
      </thead>
      <tbody>
      @foreach($detalhes as $index => $value)
        <tr>
          <td><input type="hidden" name="detalhes[{{$index}}][trabalho_id]"
                     value="{{$value->trabalho_id}}">{{$value->trabalho_id}}</td>
          <td><input type="hidden" name="detalhes[{{$index}}][orientador]"
                     value="{{$value->trabalho->orientador}}">{{$value->trabalho->orientador}}</td>
          <td><input type="hidden" name="detalhes[{{$index}}][avaliador1_id]"
                     value="{{$value->avaliador1_id}}">{{$value->avaliador1->nome}}</td>
          <td><input type="hidden" name="detalhes[{{$index}}][avaliador2_id]"
                     value="{{$value->avaliador2_id}}">{{$value->avaliador2->nome}}</td>
          <td>
            <div class="negative ui button" onclick="delDetalhe(this)">Excluir</div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
<script>
  var detalhes = $('#detalhes')
  var data = $('[name=data]')
  var horario = $('[name=horario]')
  var fim = $('[name=fim]')
  var sala_id = $('[name=sala_id]')
  var avaliador_id = $('[name=avaliador_id]')

  var detalhes_trabalho_id = detalhes.find('[name=detalhes_trabalho_id]')
  var detalhes_orientador = detalhes.find('[name=detalhes_orientador]')
  var detalhes_avaliador1_id = detalhes.find('[name=detalhes_avaliador1_id]')
  var detalhes_avaliador2_id = detalhes.find('[name=detalhes_avaliador2_id]')

  var codigo = detalhes.find('table tr').length
  var table_detalhe = detalhes.find('.ui.table').DataTable({
    sDom: '',
    columnDefs: [
      {'orderable': false, 'targets': 2}
    ]
  })

  var avaliadores = $('[name=avaliador_id], [name=detalhes_avaliador1_id], [name=detalhes_avaliador2_id]')

  $(function () {
    detalhes.form({
      inline: true,
      fields: {
        detalhes_trabalho_id: 'empty',
        detalhes_orientador: 'empty',
        detalhes_avaliador1_id: 'empty',
        detalhes_avaliador2_id: ['empty', 'different[detalhes_avaliador1_id]']
      }
    })

    data.on('change', function () {
      toggleAvaliadores()
    })

    horario.on('change', function () {
      if (horario.val()) {
        horario_calculado = Date.parse(horario.find(':selected').text(), 'hh:mm').addMinutes(100)

        fim.val(horario_calculado.getHours() + ':' + horario_calculado.getMinutes())
      }

      toggleAvaliadores()
    })

    detalhes_trabalho_id.on('change', function () {
      if (detalhes_trabalho_id.val() != '') {
        $.ajax({
          type: 'GET',
          url: document.location.origin + '/get_orientador',
          dataType: 'json',
          data: {
            'trabalho_id': detalhes_trabalho_id.val()
          },
          success: function (data) {
            detalhes_orientador.val(data.orientador)
          }
        })
      }
    })

    detalhes_trabalho_id.parent('.ui.dropdown').dropdown({
      fullTextSearch: true
    })

    horario.trigger('change')
  })

  function addDetalhe () {
    if (detalhes.form('submit').form('is valid') == false)
      return

    table_detalhe.row.add([
      detalhes_trabalho_id.find(':selected').text() + '<input type="hidden" name="detalhes[' + codigo + '][trabalho_id]" value="' + detalhes_trabalho_id.val() + '">',
      detalhes_orientador.val(),
      detalhes_avaliador1_id.find(':selected').text() + '<input type="hidden" name="detalhes[' + codigo + '][avaliador1_id]" value="' + detalhes_avaliador1_id.val() + '">',
      detalhes_avaliador2_id.find(':selected').text() + '<input type="hidden" name="detalhes[' + codigo + '][avaliador2_id]" value="' + detalhes_avaliador2_id.val() + '">',
      '<td><div class="negative ui button" onclick="delItem(this)">Excluir</div></td>']).draw(false)
    codigo++

    clearFields()
  }

  function clearFields () {
    detalhes_trabalho_id.dropdown('restore defaults')
    detalhes_orientador.val('')
    detalhes_avaliador1_id.dropdown('restore defaults')
    detalhes_avaliador2_id.dropdown('restore defaults')

    detalhes_trabalho_id.focus()
  }

  function delDetalhe (obj) {
    table_detalhe.row($(obj).parents('tr')).remove().draw()
  }

  function toggleAvaliadores () {
    sala_id.parent('.dropdown').addClass('disabled').dropdown('restore defaults')
    avaliadores.parent('.dropdown').addClass('disabled').dropdown('restore defaults')

    var cabecalho_valido = data.val() != '' && horario.val() != null

    if (cabecalho_valido) {
      $.ajax({
        type: 'GET',
        url: document.location.origin + '/get_avaliador',
        dataType: 'json',
        data: {
          'horario': horario.val(),
          'data': data.val(),
          'avaliacao_id': '{{$update->id or null}}'
        },
        success: function (json) {
          avaliadores.empty()
          avaliadores.append($('<option></option>').attr('value', '').text('Selecione um Item'))
          $.each(json, function (key, value) {
            avaliadores.append($('<option></option>').attr('value', key).text(value))
          })
        }
      })

      $.ajax({
        type: 'GET',
        url: document.location.origin + '/get_sala',
        dataType: 'json',
        data: {
          'horario': horario.val(),
          'data': data.val(),
          'avaliacao_id': '{{$update->id or null}}'
        },
        success: function (json) {
          sala_id.empty()
          sala_id.append($('<option></option>').attr('value', '').text('Selecione um Item'))
          $.each(json, function (key, value) {
            sala_id.append($('<option></option>').attr('value', key).text(value))
          })
        }
      })

      avaliadores.parent('.dropdown').removeClass('disabled')
      sala_id.parent('.dropdown').removeClass('disabled')
    } else {
      sala_id.parent('.dropdown').addClass('disabled')
      avaliadores.parent('.dropdown').addClass('disabled')
    }
  }

</script>