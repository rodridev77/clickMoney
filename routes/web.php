<?php

use Illuminate\Support\Facades\Route;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

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

Route::group(['prefix' => 'cliente/dash'], function () {

    Route::get("transferencias",function(){
        return view('cliente.tranferencia.transferencia');
    })->name("cliente.transferencia");
    
    Route::get("troca",function(){
        return view('cliente.trocas.troca');
    })->name("cliente.trocas");

    Route::get('saldo', function () {
        return view("cliente.saldo");
    })->name('cliente.saldo');

    Route::get('/', function () {
        return view('cliente.index');
    });
    Route::get('/adminlte', function () {
        return view('AdminLTE.index');
    });

    Route::get('profile', function () {
        return view('cliente.profile.profile');
    })->name("profile");
    
    Route::get('transacoes/canceladas', function () {
        return view('cliente.transacoes.Canceladas');
    })->name("transacao.cancelada");
    
    Route::get('transacoes/efetivadas', function () {
        return view('cliente.transacoes.Efetivadas');
    })->name("transacao.efetivada");
    
    Route::get('home', function () {
        return view("cliente.home");
    })->name("cliente.home");

    // support routes client
    Route::get('support', function () {
        return view("support.home");
    })->name("support.home");
    
    Route::get('support/show', function () {
        return view("support.show");
    })->name("support.show");
    
    Route::get('support/closed-calls', function () {
        return view("support.closed-calls");
    })->name("support.closed-calls");
    
    Route::get('support/show-closed', function () {
        return view("support.show-closed");
    })->name("support.show-closed");

    Route::get('transferencia/historico/show', function () {
        return view("transferencia.historico");
    })->name("transferencia.historico");

    Route::get('transferencia/extrato/show', function () {
        return view("transferencia.extrato");
    })->name("transferencia.extrato");

});