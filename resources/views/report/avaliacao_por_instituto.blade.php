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
            <th>Avaliador1</th>
            <th>Avaliador2</th>
            <th width="20px">Inst.</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Local</th>
            <th>Sessão</th>
            <th>Trabalhos que serão avaliados</th>
        </tr>
        </thead>
        <tbody>
        @foreach($avaliadores as $key => $item)
            <tr>
                <td rowspan="{{$item->avaliacoes->count() + 1}}">{{$naoorientadores1[$key]->nome }}</td>
                <td rowspan="{{$item->avaliacoes->count() + 1}}">{{$naoorientadores2[$key]->nome}}</td>
                <td rowspan="{{$item->avaliacoes->count() + 1}}">{{$item->instituto}}</td>
                @foreach($item->avaliacoes as $avaliacao)
                    <tr>
                    <td>{{date('d/m/Y', strtotime($avaliacao->data))}}</td>
                    
                    <td>{{date('H:i', strtotime($avaliacao->horario))}}</td>
                   
    
                    <td>{{$avaliacao->sala != '' ? $avaliacao->sala->nome: 'Saguão PVA'}}</td>
                    <td>{{$avaliacao->tipo == 1 ? 'Oral': 'Painel'}}</td>
                    <td>{{$avaliacao->detalhes->pluck('trabalho.id')}}</td>
                    </tr>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
