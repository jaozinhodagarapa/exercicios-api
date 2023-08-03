<?php

use App\Http\Controllers\ExercicioCinco;
use App\Http\Controllers\ExercicioDois;
use App\Http\Controllers\ExercicioOito;
use App\Http\Controllers\ExercicioQuatro;
use App\Http\Controllers\ExercicioSeis;
use App\Http\Controllers\ExercicioSete;
use App\Http\Controllers\ExercicioTres;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', [ExercicioUm::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDois::class, 'retornarMaior']);

Route::post('exercicio/tres', [ExercicioTres::class, 'mediaAritmetica']);

Route::post('exercicio/quatro', [ExercicioQuatro::class, 'verificarNumero']);

Route::post('exercicio/cinco', [ExercicioCinco::class, 'verificacao']);

Route::post('exercicio/seis', [ExercicioSeis::class, 'idade']);

Route::get('exercicio/sete', [ExercicioSete::class, 'exibirNumeros']);

Route::post('exercicio/oito', [ExercicioOito::class, 'tabuada']);

Route::post('exercicio/nove', [ExercicioNoveController::class, 'divisao']);