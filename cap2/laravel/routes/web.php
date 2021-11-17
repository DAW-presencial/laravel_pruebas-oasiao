<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contadorController;
use App\Http\Controllers\agendaController;

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

//[nombreClase :: class, 'funcion'] o __invoke sin corchetes
Route::get('/{visitas?}', [contadorController::class,'contador']); //controller --> contador

//Route::get('/agenda',[agendaController::class,'agenda']);
