@extends('layouts.report')

@section('conteudo')
    @foreach($trabalhos as $trabalho)
        <table style="width:100%">
            <tbody>
            <tr>
                <td align="center">
                    <h2>
                        UNIVERSIDADE FEDERAL DE VIÇOSA <br>
                        CAMPUS RIO PARANAÍBA <br>
                        SIMPÓSIO DE INTEGRAÇÃO ACADÉMICA - {{date("Y")}}
                    </h2>
                </td>
                <td>
                    <img src="https://www2.dti.ufv.br/ccs_noticias/files/fotos/phpPsS4ly_28056.jpg" style="margin: 10px"
                         height="70px">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h3>APRESENTAÇÃO ORAL</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="font-size: 10pt"><p>1. As notas deverão ser ranqueadas, ou seja, deve-se evitar a
                            repetição de
                            notas
                            entre o grupo de
                            trabalhos avaliados. </p>
                        <p>2. Favor seguir a pontuação indicada em cada item. </p>
                        <p>3. Esta ficha deverá ser preenchida, guardada no envelope recebido e devolvida ao monitor da
                            sala após a
                            sessão de avaliação dos trabalhos. </p>
                        <p>4. Favor preencher a nota final de cada avaliação no local indicado no envelope. Caso o
                            apresentador não tenha comparecido, favor indicar com um hifen (-). </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><strong>ID DO TRABALHO:</strong></span> {{$trabalho->id}}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><strong>TÍTULO DO TRABALHO: </strong></span> {{$trabalho->nome}}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><strong>APRESENTADO POR:</strong></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><strong>NÃO APRESENTADO ( &nbsp; &nbsp; &nbsp;)</strong></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><strong>PRESENÇA DO ORIENTADOR OU JUSTIFICATIVA FORMAL SIM: ( &nbsp; &nbsp; &nbsp;) NÃO ( &nbsp; &nbsp; &nbsp;) </strong></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h3>APRESENTAÇÃO - VALOR: 50 PONTOS</h3>
                </td>
            </tr>
            <tr>
                <td width="80%">Domínio do assunto (20 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Adequação e clareza de linguagem (10 pontos)
                </td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Qualidade dos recursos audiovisuais (10 pontos)
                </td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Utilização do tempo (10 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h3>CONTEÚDO - VALOR: 50 PONTOS</h3>
                </td>
            </tr>
            <tr>
                <td width="80%">Relevância científica e social (10 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Justificativa e objetivos (10 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Adequação da metodologia (10 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Qualidade e abrangência dos resultados apresentados (10 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td width="80%">Originalidade (10 pontos)</td>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 style="text-align: left"><strong>TOTAL DE PONTOS:</strong></h4>
                <td>
                    <h4>
                        ( &nbsp; &nbsp; &nbsp;) pontos
                    </h4>
                </td>
                </td>
            </tr>
            <tr>
                <td colspan="2" height="100px" style="vertical-align: top">
                    <h4 style="text-align:  left">COMENTÁRIOS (Opcional):</h4>
                </td>
            </tr>
            </tbody>
        </table>
        <h4 style="text-align: left">MATRÍCULA UFV DO AVALIADOR: __________________</h4>
        <h4 style="text-align: left">NOME (LEGÍVEL) DO AVALIADOR:
            ___________________________________________________</h4>
        <h4 style="text-align: center; margin-top: 50px">
            _________________________________________________________________________</h4>
        <h4 style="text-align: center">Assinatura do Avaliador</h4>
        @if( $loop->last != 1)
            <pagebreak>
        @endif
    @endforeach

@endsection
