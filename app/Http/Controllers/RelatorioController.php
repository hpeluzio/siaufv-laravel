<?php

namespace App\Http\Controllers;

use App\Avaliacao;
use App\AvaliacaoDetalhe;
use App\Avaliador;
use App\Http\Requests\RelatorioRequest;
use App\Relatorio;
use App\Trabalho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

require_once base_path('/vendor/autoload.php');

class RelatorioController extends Controller
{
    private $dados;

    public function OralDataLocal(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.oral_data_local');
        $this->dados['avaliacoes'] = AvaliacaoDetalhe::
        with(['trabalho' => function ($q) {
            $q->orderBy('id');
        }])
            ->with('avaliacao', 'avaliacao.avaliador', 'avaliacao.sala', 'trabalho.autores')
            ->whereHas('avaliacao', function ($query) use ($request) {
                $query->where('tipo', '=', 1);
            })->get();

        $this->dados['avaliacoes'] = $this->dados['avaliacoes']->sortBy('trabalho.id');

        $view = View::make('report.oral_data_local', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf-8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.oral_data_local'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function PainelDataLocal(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.painel_data_local');
        $this->dados['avaliacoes'] = AvaliacaoDetalhe::
        with(['trabalho' => function ($q) {
            $q->orderBy('id');
        }])
            ->with('avaliacao', 'avaliacao.avaliador', 'trabalho.autores')
            ->whereHas('avaliacao', function ($query) use ($request) {
                $query->where('tipo', '=', 2);
            })->get();

        $this->dados['avaliacoes'] = $this->dados['avaliacoes']->sortBy('trabalho.id');

        $view = View::make('report.painel_data_local', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf-8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.painel_data_local'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function OralAvaliadorInstituto(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.oral_avaliador_instituto');
        $this->dados['avaliacoes'] = AvaliacaoDetalhe::
        with(['avaliacao.sala' => function ($q) {
            $q->orderBy('id');
        }])
            ->with('avaliacao', 'avaliacao.avaliador', 'trabalho.autores', 'avaliador1', 'avaliador2')
            ->whereHas('avaliacao', function ($query) use ($request) {
                $query->where('tipo', '=', 1);
            })->get();


        $view = View::make('report.oral_avaliador_instituto', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf-8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.oral_avaliador_instituto'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function PainelAvaliadorInstituto(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.painel_avaliador_instituto');
        $this->dados['avaliacoes'] = AvaliacaoDetalhe::
        with('avaliacao', 'avaliacao.avaliador', 'trabalho.autores', 'avaliador1', 'avaliador2')
            ->join('avaliador','avaliacao_detalhe.avaliador1_id','=','avaliador.id')
            ->whereHas('avaliacao', function ($query) use ($request) {
                $query->where('tipo', '=', 2);
            })
            ->orderBy('instituto')
            ->orderBy('trabalho_id')
            //->orderBy('id')
            ->get();
        
            //dd($this->dados);


        $view = View::make('report.painel_avaliador_instituto', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf-8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.painel_avaliador_instituto'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function AvaliacaoPorInstituto(Request $request)
    {
        $this->dados['titulo'] = "Avaliadores";
        $this->dados['avaliadores'] = Avaliador::
        has('avaliacoes')
        
            ->orderBy('avaliador.instituto')
            //->orderBy('avaliador.nome')
            ->get();
        
            $avaliador1_id = Avaliador::whereId($this->dados['avaliadores'][0]->avaliacoes[0]->detalhes[0]->avaliador1_id)->first();
            $avaliador2_id = Avaliador::whereId($this->dados['avaliadores'][0]->avaliacoes[0]->detalhes[0]->avaliador2_id)->first();

        //dd($this->dados['naoorientadores']);

        $array1  = [];
        $naoorientadores1 = [];
        $array2  = [];
        $naoorientadores2 = [];
        foreach($this->dados['avaliadores'] as $item) 
        {
            //echo $item->avaliacoes[0]->detalhes[0]->avaliador1_id;
            $avaliador1_id = Avaliador::whereId($item->avaliacoes[0]->detalhes[0]->avaliador1_id)->first();
            $avaliador2_id = Avaliador::whereId($item->avaliacoes[0]->detalhes[0]->avaliador2_id)->first();
            $array1 = [$avaliador1_id];
            $naoorientadores1 = array_merge($naoorientadores1, $array1);
            $array2 = [$avaliador2_id];
            $naoorientadores2 = array_merge($naoorientadores2, $array2);
            //$naoorientadores += $array;
        }

        $this->dados['naoorientadores1'] = $naoorientadores1;
        $this->dados['naoorientadores2'] = $naoorientadores2;
        
        //dd($this->dados);
        /////////////////////////////


        $view =  View::make('report.avaliacao_por_instituto', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.avaliacao_por_instituto'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function avaliacaoPorSala(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.avaliacao_por_sala');
        $this->dados['avaliacoes'] = DB::table('avaliacao')
            ->join('avaliacao_detalhe', 'avaliacao_detalhe.avaliacao_id', 'avaliacao.id')
            ->join('trabalho', 'trabalho.id', 'avaliacao_detalhe.trabalho_id')
            ->leftjoin('sala', 'sala.id', 'avaliacao.sala_id')
            ->join('avaliador as presidente', 'presidente.id', 'avaliacao.avaliador_id')
            ->join('avaliador as avaliador1', 'avaliador1.id', 'avaliacao_detalhe.avaliador1_id')
            ->join('avaliador as avaliador2', 'avaliador2.id', 'avaliacao_detalhe.avaliador2_id')
            ->select(['trabalho.id as trabalho_id',
                'trabalho.nome as trabalho_nome',
                'trabalho.orientador as trabalho_orientador',
                'avaliacao.data as avaliacao_data',
                'avaliacao.horario as avaliacao_horario',
                'presidente.nome as presidente_nome',
                'avaliador1.nome as avaliador1_nome',
                'avaliador2.nome as avaliador2_nome',
                'sala.nome as sala_nome',
            ])->where('avaliacao.tipo', 1)
            ->orderBy(
                'sala.id',
                'sala.nome',
                'avaliacao.data',
                'avaliacao.horario',
                'trabalho.nome'
            )
            ->get();

//        return view('report.avaliacao_por_sala', $this->dados);

        $view = View::make('report.avaliacao_por_sala', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.avaliacao_por_sala'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function avaliacaoPorHorario(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.avaliacao_por_horario');
        $this->dados['avaliacoes'] = DB::table('avaliacao')
            ->join('avaliacao_detalhe', 'avaliacao_detalhe.avaliacao_id', 'avaliacao.id')
            ->join('trabalho', 'trabalho.id', 'avaliacao_detalhe.trabalho_id')
            ->leftjoin('sala', 'sala.id', 'avaliacao.sala_id')
            ->join('avaliador as presidente', 'presidente.id', 'avaliacao.avaliador_id')
            ->join('avaliador as avaliador1', 'avaliador1.id', 'avaliacao_detalhe.avaliador1_id')
            ->join('avaliador as avaliador2', 'avaliador2.id', 'avaliacao_detalhe.avaliador2_id')
            ->join('trabalho_autor','trabalho.id', '=', 'trabalho_autor.trabalho_id')
            ->select(['trabalho.id as trabalho_id',
                'trabalho.nome as trabalho_nome',
                'trabalho.orientador as trabalho_orientador',
                'avaliacao.data as avaliacao_data',
                'avaliacao.horario as avaliacao_horario',
                'presidente.nome as presidente_nome',
                'avaliador1.nome as avaliador1_nome',
                'avaliador2.nome as avaliador2_nome',
                'sala.nome as sala_nome',
                'presidente.instituto as instituto',
                'trabalho_autor.nome as trabalho_autor'
            ])->where('avaliacao.tipo', 1)
            ->orderBy('instituto')
            ->orderBy('trabalho_id')
            ->orderBy('avaliacao.data')
            ->orderBy('avaliacao.horario')
            ->orderBy('trabalho.nome')
            ->get();

            

//        return view('report.avaliacao_por_avaliador', $this->dados);

        $view = View::make('report.avaliacao_por_horario', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.avaliacao_por_horario'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function avaliacaoPorAvaliador(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.avaliacao_por_avaliador');
        $this->dados['avaliacoes'] = DB::table('avaliacao')
            ->join('avaliacao_detalhe', 'avaliacao_detalhe.avaliacao_id', 'avaliacao.id')
            ->join('trabalho', 'trabalho.id', 'avaliacao_detalhe.trabalho_id')
            ->leftjoin('sala', 'sala.id', 'avaliacao.sala_id')
            ->join('avaliador as presidente', 'presidente.id', 'avaliacao.avaliador_id')
            ->join('avaliador as avaliador1', 'avaliador1.id', 'avaliacao_detalhe.avaliador1_id')
            ->join('avaliador as avaliador2', 'avaliador2.id', 'avaliacao_detalhe.avaliador2_id')
            ->select(['trabalho.id as trabalho_id',
                'trabalho.nome as trabalho_nome',
                'trabalho.orientador as trabalho_orientador',
                'avaliacao.data as avaliacao_data',
                'avaliacao.horario as avaliacao_horario',
                'presidente.nome as presidente_nome',
                'avaliador1.nome as avaliador1_nome',
                'avaliador2.nome as avaliador2_nome',
                'sala.nome as sala_nome',
                'avaliacao.tipo',
            ])
            ->where(function ($query) use ($request) {
                $query->where('avaliacao.avaliador_id', $request->id)
                    ->orWhere('avaliacao_detalhe.avaliador1_id', $request->id)
                    ->orWhere('avaliacao_detalhe.avaliador2_id', $request->id);
            })
            ->orderBy(
                'avaliacao.tipo',
                'avaliacao.data',
                'avaliacao.horario',
                'presidente.nome',
                'avaliador1.nome',
                'avaliador2.nome',
                'trabalho.nome'
            )
            ->get();

        $this->dados['orais'] = $this->dados['avaliacoes']->where('tipo', 1);
        $this->dados['paineis'] = $this->dados['avaliacoes']->where('tipo', 2);

//        return view('report.avaliacao_por_avaliador', $this->dados);

        $view = View::make('report.avaliacao_por_avaliador', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.avaliacao_por_horario'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function avaliacaoPorPainel(Request $request)
    {
        if ($request->id != 'all') {
            $conditions = ['avaliacao.tipo' => 2,
                'avaliacao.id' => $request->id,
            ];
        } else {
            $conditions = ['avaliacao.tipo' => 2];
        };

        $this->dados['titulo'] = trans('table.relatorio.avaliacao_por_painel');
        $this->dados['avaliacoes'] = Avaliacao::where($conditions)
            ->with('avaliador', 'detalhes', 'detalhes.trabalho', 'detalhes.avaliacao', 'detalhes.avaliador1', 'detalhes.avaliador2')
            ->get();

//        return view('report.avaliacao_por_painel', $this->dados);

        $view = View::make('report.avaliacao_por_painel', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.avaliacao_por_painel'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function avaliadorPorInstituto(Request $request)
    {
        $this->dados['titulo'] = trans('table.relatorio.avaliador_por_instituto');

        if ($request->instituto != 'all') {
            $conditions = "WHERE avp.instituto = '" . $request->instituto . "'";
        } else {
            $conditions = '';
        }

        $ano_selecionado = auth()->user()->ano_selecionado;
        //dd($ano_selecionado);
        
        $this->dados['avaliacoes'] = DB::select("
SELECT
	av.nome as avaliador,
	cast(a.data as date) as dia,
	a.horario as horario,
	s.nome as sala,
	a.tipo as tipo,
    avp.instituto as instituto,
    avd.trabalho_id as trabalho_id
FROM
	avaliacao a
JOIN avaliacao_detalhe avd ON avd.avaliacao_id = a.id
JOIN avaliador av ON av.id = avd.avaliador1_id
JOIN avaliador avp ON avp.id = a.avaliador_id
LEFT JOIN sala s ON s.id = a.sala_id " . $conditions . "
WHERE av.ano_id = " . $ano_selecionado . "

UNION ALL

SELECT
    av.nome,
	cast(a.data as date),
    a.horario,
    s.nome,
    a.tipo,
    avp.instituto,
    avd.trabalho_id as trabalho_id
FROM
    avaliacao a
JOIN avaliacao_detalhe avd ON avd.avaliacao_id = a.id
JOIN avaliador av ON av.id = avd.avaliador2_id
JOIN avaliador avp ON avp.id = a.avaliador_id
LEFT JOIN sala s ON s.id = a.sala_id " . $conditions . "
WHERE av.ano_id = " . $ano_selecionado . "
ORDER BY instituto, avaliador, dia, horario");

//        dd($this->dados);

//        $result = DB::table('avaliacao')
//            ->select(DB::raw('av.nome, avaliacao.\'data\', avaliacao.horario, s.nome, CASE avaliacao.tipo WHEN 1 THEN \'Painel\' WHEN 2 THEN \'Oral\' END, avp.instituto'))
//            ->select(DB::raw('\'data\', horario'))
//            ->join('avaliacao_detalhe avd', 'avd.avaliacao_id = a.id')
//            ->join('avaliador av', 'av.id = avd.avaliador1_id')
//            ->join('avaliador avp', 'avp.id = a.avaliador_id')
//            ->join('sala s' , 's.id = a.sala_id')
//            ->get()->toArray();

//        return view('report.avaliador_por_instituto', $this->dados);

        $view = View::make('report.avaliador_por_instituto', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf-8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.avaliador_por_instituto'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

    public function orientacaoParaAvaliacao(Request $request)
    {
        $conditions = [];
        if ($request->id != 'all') {
            $conditions = ['id' => $request->id];
        }

        $this->dados['titulo'] = trans('table.relatorio.orientacao_para_avaliacao');
        $this->dados['trabalhos'] = Trabalho:: where($conditions)->get();

        // return view('report.orientacao_para_avaliacao', $this->dados);

        $view = View::make('report.orientacao_para_avaliacao', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.orientacao_para_avaliacao'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }


    public function apresentacaoOral(Request $request)
    {
        $conditions = [];
        if ($request->id != 'all') {
            $conditions = ['id' => $request->id];
        }

        $this->dados['titulo'] = trans('table.relatorio.apresentacao_oral');
        $this->dados['trabalhos'] = Trabalho:: where($conditions)->get();

        // return view('report.apresentacao_oral', $this->dados);

        $view = View::make('report.apresentacao_oral', $this->dados);
        $mpdf = new \Mpdf\Mpdf(['utf - 8', 'Letter', 0, '', 5, 5, 5, 5, 5, 5]);
        $mpdf->SetTitle(trans('table.relatorio.apresentacao_oral'));
        $mpdf->WriteHTML($view->render());
        $mpdf->Output();
    }

}