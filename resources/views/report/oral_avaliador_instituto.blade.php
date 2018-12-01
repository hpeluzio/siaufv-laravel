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
            <th>Instituto</th>
            <th>Titulo</th>
            <th>1º Autor</th>
            <th>Orientador</th>
            <th>Avaliador 1</th>
            <th>Avaliador 2</th>
        </tr>
        </thead>
        <tbody>
        @foreach($avaliacoes as $item)
            <tr>
                <td>{{$item->trabalho->id}}</td>
                <td>{{$item->avaliacao->avaliador->instituto}}</td>
                <td>{{$item->trabalho->nome}}</td>
                <td>{{$item->trabalho->autores[0]->nome ?? 'Sem autor'}}</td>
                <td>{{$item->trabalho->orientador}}</td>
                <td>{{$item->avaliador1->nome}}</td>
                <td>{{$item->avaliador2->nome}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
