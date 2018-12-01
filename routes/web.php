<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Trabalho;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware(['auth', 'multiTenancy'])->group(function () {
    Route::get('home/change_ano/{id}', 'HomeController@changeAno')->name('home.change_ano');
    Route::get('minicurso/get_data', 'MinicursoController@getData')->name('minicurso.get_data');
    Route::resource('minicurso', 'MinicursoController');

    Route::get('ano/get_data', 'AnoController@getData')->name('ano.get_data');
    Route::resource('ano', 'AnoController');

    Route::get('sala/get_data', 'SalaController@getData')->name('sala.get_data');
    Route::resource('sala', 'SalaController');

    //Route::get('apresentacao/get_data', 'ApresentacaoController@getData')->name('apresentacao.get_data');
    //Route::resource('apresentacao', 'ApresentacaoController');

    Route::get('avaliador/get_data', 'AvaliadorController@getData')->name('avaliador.get_data');
    Route::resource('avaliador', 'AvaliadorController');

    Route::get('trabalho/get_data', 'TrabalhoController@getData')->name('trabalho.get_data');
    Route::resource('trabalho', 'TrabalhoController');

    Route::get('painel/get_data', 'PainelController@getData')->name('painel.get_data');
    Route::resource('painel', 'PainelController');

    Route::get('oral/get_data', 'OralController@getData')->name('oral.get_data');
    Route::resource('oral', 'OralController');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/get_avaliador', function (Request $request) {
        echo json_encode(\App\Avaliador::avaliadorDisponivel(['data' => $request->data, 'horario' => $request->horario, 'avaliacao_id' => $request->avaliacao_id])->pluck('nome', 'id'));
    });
    Route::get('/get_sala', function (Request $request) {
        echo json_encode(\App\Sala::salaDisponivel(['data' => $request->data, 'horario' => $request->horario, 'avaliacao_id' => $request->avaliacao_id])->pluck('nome', 'id'));
    });

    Route::get('/get_orientador', function (Request $request) {
        echo json_encode(Trabalho::find($request->trabalho_id));
    });

    Route::get('relatorio/avaliacao/por_sala', 'RelatorioController@avaliacaoPorSala')->name('relatorio.avaliacao.por_sala');
    Route::get('relatorio/avaliacao/por_horario', 'RelatorioController@avaliacaoPorHorario')->name('relatorio.avaliacao.por_horario');
    Route::get('relatorio/avaliacao/por_avaliador/{id}', 'RelatorioController@avaliacaoPorAvaliador')->name('relatorio.avaliacao.por_avaliador');
    Route::get('relatorio/avaliacao/por_painel/{id}', 'RelatorioController@avaliacaoPorPainel')->name('relatorio.avaliacao.por_painel');
    Route::get('relatorio/avaliador/por_instituto/{instituto}', 'RelatorioController@avaliadorPorInstituto')->name('relatorio.avaliador.por_instituto');
    Route::get('relatorio/avaliacao/orientação/{id}', 'RelatorioController@orientacaoParaAvaliacao')->name('relatorio.avaliacao.orientação');
    Route::get('relatorio/apresentacao/oral/{id}', 'RelatorioController@apresentacaoOral')->name('relatorio.apresentacao.oral');
    Route::get('relatorio/oraldatalocal', 'RelatorioController@OralDataLocal')->name('relatorio.oral_data_local');
    Route::get('relatorio/paineldatalocal', 'RelatorioController@PainelDataLocal')->name('relatorio.painel_data_local');
    Route::get('relatorio/oralavaliadorinstituto', 'RelatorioController@OralAvaliadorInstituto')->name('relatorio.oral_avaliador_instituto');
    Route::get('relatorio/painelavaliadorinstituto', 'RelatorioController@PainelAvaliadorInstituto')->name('relatorio.painel_avaliador_instituto');
    Route::get('relatorio/avaliacaoporinstituto', 'RelatorioController@AvaliacaoPorInstituto')->name('relatorio.avaliacao_por_instituto');
});