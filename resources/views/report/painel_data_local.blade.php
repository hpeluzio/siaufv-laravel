@extends('layouts.report')

@section('conteudo')
    <h1>{{$titulo}}</h1>
    <table style="width:100%">
        <thead>
        {{--<tr>--}}
        {{--<th colspan="3">Trabalho</th>--}}
        {{--<th colspan="6">Avaliação</th>--}}
        {{--</tr>--}}
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>1º Autor</th>
            <th>Instituto</th>
            <th>Orientador</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Local</th>
        </tr>
        </thead>
        <tbody>
        @foreach($avaliacoes as $item)
            <tr>
                <td>{{$item->trabalho->id}}</td>
                <td>{{$item->trabalho->nome}}</td>
                <td>{{$item->trabalho->autores[0]->nome ?? 'Sem autor'}}</td>
                <td>{{$item->avaliacao->avaliador->instituto}}</td>
                <td>{{$item->trabalho->orientador}}</td>
                <td>{{$item->avaliacao->data}}</td>
                <td>{{$item->avaliacao->horario}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
