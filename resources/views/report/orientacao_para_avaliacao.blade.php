@extends('layouts.report')

@section('conteudo')
  @foreach($trabalhos as $trabalho)
    <table>
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
          <img src="https://www2.dti.ufv.br/ccs_noticias/files/fotos/phpPsS4ly_28056.jpg" style="margin: 10px" height="100px">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <h3>ORIENTAÇÕES PARA AVALIAÇAO </h3>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <div style="font-size: 10pt"><p>1. As notas deverão ser ranqueadas, ou seja, deve-se evitar a repetição de
              notas
              entre o grupo de
              trabalhos avaliados. </p>
            <p>2. Favor seguir a pontuação indicada em cada item. </p>
            <p>3. Esta ficha deverá ser preenchida, guardada no envelope recebido e devolvida na Secretaria do
              evento após a sessão de avaliação dos trabalhos. </p>
            <p>4. Favor preencher a nota final de cada avaliação no local indicado no envelope. Caso o
              apresentador não tenha comparecido, favor indicar com um hifen (-). </p>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <h3>AVALIAÇÃO DO PAINEL</h3>
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
          <span><strong>NOME DO AVALIADOR:</strong></span>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <span><strong>MATRÍCULA UFV DO AVALIADOR:</strong></span>
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
        <td colspan="2" align="center">
          <h3>ITENS PARA AVALIAÇÃO - 100 PONTOS</h3>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <h4 style="text-align: left"><strong>A) APRESENTAÇÃO E DOMÍNIO DO CONTEÚDO - VALOR: 80 PONTOS</strong></h4>
        </td>
      </tr>
      <tr>
        <td width="80%">Contexto e justificativa (20 pontos)</td>
        <td>
          <h4>
            ( &nbsp; &nbsp; &nbsp;) pontos
          </h4>
        </td>
      </tr>
      <tr>
        <td width="80%">Objetivos e métodos (20 pontos)</td>
        <td>
          <h4>
            ( &nbsp; &nbsp; &nbsp;) pontos
          </h4>
        </td>
      </tr>
      <tr>
        <td width="80%">Resultados/ações desenvolvidas (20
          pontos)
        </td>
        <td>
          <h4>
            ( &nbsp; &nbsp; &nbsp;) pontos
          </h4>
        </td>
      </tr>
      <tr>
        <td width="80%">Contexto e justificativa (20 pontos)</td>
        <td>
          <h4>
            ( &nbsp; &nbsp; &nbsp;) pontos
          </h4>
        </td>
      </tr>
      <tr>
        <td>
          <h4 style="text-align: left"><strong>B) QUALIDADE DO PAINEL - VALOR: 20 PONTOS</strong></h4>
        <td>
          <h4>
            ( &nbsp; &nbsp; &nbsp;) pontos
          </h4>
        </td>
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
    <h4 style="text-align: center; margin-top: 50px">
      _________________________________________________________________________</h4>
    <h4 style="text-align: center">Assinatura do Avaliador</h4>
    @if( $loop->last != 1)
      <pagebreak>
    @endif
  @endforeach
@endsection
