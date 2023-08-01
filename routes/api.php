<?php

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

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/tres', [ExercicioTresController::class, 'mediaAritmetica']);

Route::post('exercicio/quatro', [ExercicioQuatrooController::class, 'verificarNumero']);

Route::post('exercicio/cinco', [ExercicioCincoController::class, 'verificacao']);

Route::post('exercicio/seis', [ExercicioSeisController::class, 'idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/oito', [ExercicioOitoController::class, 'tabuada']);

Route::post('exercicio/nove', [ExercicioNoveController::class, 'divisao']);