{!! $button or '' !!}

<a href="{{$rota}}/{{$data->id}}/edit" id="bt_edt" class="ui icon button yellow">
  <i class="icon write"></i>
</a>

<form action="{{$rota}}/{{$data->id}}" method="post" style="display: inline">
  {{ csrf_field() }}
  {{ Form::hidden('_method', 'DELETE') }}

  <button type="submit" id="bt_del" class="ui icon button red"
          onclick="return confirm('Tem certeza que deseja excluir este item?')">
    <i class="icon trash"></i>
  </button>
</form>
