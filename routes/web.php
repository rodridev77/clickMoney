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



Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/cadastro', function () {
    return view('auth.cadastro');
});

Route::get('/', function () {
    return view('cliente.index',["tituloArea"=>"Area do Cliente"]);
});

Route::group(['prefix' => 'admin/dash'], function () {

    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get("transferencias",function(){
        return view('admin.tranferencia.transferencia');
    })->name("admin.transferencia");

    Route::get("transferencias/pedido",function(){
        return view('admin.tranferencia.pedido');
    })->name("transferencia.pedido");
    
    Route::get("troca",function(){
        return view('admin.trocas.troca');
    })->name("admin.trocas");

    Route::get("troca/extrato",function(){
        return view('admin.trocas.extrato');
    })->name("admin.trocas.extrato");

    Route::get('saldo', function () {
        return view("admin.saldo");
    })->name('admin.saldo');

    Route::get('/', function () {
        return view('admin.index',["tituloArea"=>"Area do Administrador"]);
    });
    Route::get('/adminlte', function () {
        return view('AdminLTE.index');
    });

    Route::get('profile', function () {
        return view('admin.profile.profile');
    })->name("admin.profile");
    
    Route::get('transacoes/canceladas', function () {
        return view('admin.transacoes.Canceladas');
    })->name("admin.transacao.cancelada");
    
    Route::get('transacoes/efetivadas', function () {
        return view('admin.transacoes.Efetivadas');
    })->name("admin.transacao.efetivada");
    
    // novas rotas
    
    Route::get('transacoes/vendas/canceladas', function () {
        return view('admin.transacoes.vendasCanceladas');
    })->name("transacao.vendas.canceladas");
    
    Route::get('transacoes/vendas/efetivadas', function () {
        return view('admin.transacoes.vendas');
    })->name("transacao.vendas.efetivadas");
    
    // ==
    
    
    Route::get('home', function () {
        return view("admin.home");
    })->name("admin.home");

    // support routes admin
    Route::get('support', function () {
        return view("admin.support.home");
    })->name("admin.support.home");
    
    Route::get('support/show', function () {
        return view("admin.support.show");
    })->name("admin.support.show");
    
    Route::get('support/closed-calls', function () {
        return view("admin.support.closed-calls");
    })->name("admin.support.closed-calls");
    
    Route::get('support/show-closed', function () {
        return view("admin.support.show-closed");
    })->name("admin.support.show-closed");

    // support routes extrato admin
    Route::get('transferencia/historico/show', function () {
        return view("admin.transferencia.historico");
    })->name("admin.transferencia.historico");

    Route::get('transferencia/extrato/show', function () {
        return view("admin.transferencia.extrato");
    })->name("admin.transferencia.extrato");
    
    // integracao routes admin
    Route::get('integracao/', function () {
        return view("admin.integracao.integracao");
    })->name("admin.integracao");

    Route::get('transferencia/extrato/show', function () {
        return view("admin.transferencia.extrato");
    })->name("admin.transferencia.extrato");
    
    // clients routes admin
    Route::get('cliente/profile', function () {
        return view('admin.clientes.profile');
    })->name("admin.cliente.profile");      

    Route::get('clientes', function () {
        return view('admin.clientes.list-clientes');
    })->name("admin.clientes");
    
});

Route::group(['prefix' => 'cliente/dash'], function () {

    Route::get("transferencias",function(){
        return view('cliente.transferencia.transferencia');
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

    // support routes extrato client
    Route::get('transferencia/historico/show', function () {
        return view("cliente.transferencia.historico");
    })->name("transferencia.historico");

    Route::get('transferencia/extrato/show', function () {
        return view("cliente.transferencia.extrato");
    })->name("transferencia.extrato");

});