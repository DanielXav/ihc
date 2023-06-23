<?php

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

Route::get('/', function () {
    //return redirect('/clientes');
    return view('welcome');
});

Route::resource('/clientes', \App\Http\Controllers\ClientesController::class)
    ->except(['show']);

Route::resource('/eventos', \App\Http\Controllers\EventosController::class)
    ->except(['show']);




