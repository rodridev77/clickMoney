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
    return view('cliente.index');
});

Route::get('dash/cliente/transacoes/canceladas', function () {
    return view('cliente.transacoes.Canceladas');
})->name("transacao.cancelada");

Route::get('dash/cliente/transacoes/efetivadas', function () {
    return view('cliente.transacoes.Efetivadas');
})->name("transacao.efetivada");

Route::get('dash/cliente/home', function () {
    return view("cliente.home");
})->name("cliente.home");
