<?php

use App\Http\Controllers\ContactListController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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





//ContactListController
Route::resource('/contacts', ContactListController::class);


//UsuarioController
Route::resource('/usuarios', UsuarioController::class);


//create
//Route::post('create',[ContactListController::class,'create']);

//store
//Route::post('store',[ContactListController::class,'store']);
