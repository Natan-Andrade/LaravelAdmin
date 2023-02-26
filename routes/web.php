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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produtos');
Route::get('/produtos/novo', [App\Http\Controllers\ProdutoController::class, 'novo']);
Route::get('/produtos/visualizar/{id}', [App\Http\Controllers\ProdutoController::class, 'visualizar']);
Route::get('/produtos/editar/{id}', [App\Http\Controllers\ProdutoController::class, 'editar']);
Route::get('/produtos/deletar/{id}', [App\Http\Controllers\ProdutoController::class, 'deletar']);
Route::get('/produtos/store', [App\Http\Controllers\ProdutoController::class, 'store']);

Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('clientes');
Route::get('/clientes/novo', [App\Http\Controllers\ClienteController::class, 'novo']);
Route::get('/clientes/visualizar/{id}', [App\Http\Controllers\ClienteController::class, 'visualizar']);
Route::get('/clientes/editar/{id}', [App\Http\Controllers\ClienteController::class, 'editar']);
Route::get('/clientes/deletar/{id}', [App\Http\Controllers\ClienteController::class, 'deletar']);
Route::get('/clientes/store', [App\Http\Controllers\ClienteController::class, 'store']);

Route::get('/funcionarios', [App\Http\Controllers\FuncionarioController::class, 'index'])->name('funcionarios');
Route::get('/funcionarios/novo', [App\Http\Controllers\FuncionarioController::class, 'novo']);
Route::get('/funcionarios/visualizar/{id}', [App\Http\Controllers\FuncionarioController::class, 'visualizar']);
Route::get('/funcionarios/editar/{id}', [App\Http\Controllers\FuncionarioController::class, 'editar']);
Route::get('/funcionarios/deletar/{id}', [App\Http\Controllers\FuncionarioController::class, 'deletar']);
Route::get('/funcionarios/store', [App\Http\Controllers\FuncionarioController::class, 'store']);