<?php

use App\Http\Controllers\ContactListController;
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

//index
Route::resource('/contacts', ContactListController::class);

//create
//Route::post('create',[ContactListController::class,'create']);

//store
//Route::post('store',[ContactListController::class,'store']);
