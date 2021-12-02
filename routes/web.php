<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

Route::get('/home', function () {
    return view('welcome');
});

//Route::get('','UsuariosController@index');
Route::get('', [UsuariosController::class, 'index']);
Route::post('/usuario', [UsuariosController::class, 'store']);
Route::get('/usuario/add', [UsuariosController::class, 'create']);
Route::get('/usuario/{id}', [UsuariosController::class, 'show']);
Route::put('/usuario/{id}', [UsuariosController::class, 'update']);
Route::delete('/usuario/{id}', [UsuariosController::class, 'destroy']);
Route::get('/usuario/{id}/edit', [UsuariosController::class, 'edit']);




Route::resource('usuario','App\Http\Controllers\UsuariosController');
