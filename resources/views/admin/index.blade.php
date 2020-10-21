@extends('dashboard-template')
@section('profile')
<div class="info">
    <a href="#" class="d-block" onclick="loadViewInSelectContent('{{route('admin.profile')}}')">Alexander
        Pierce</a>
</div>
@endsection
    
@section('nav-items')
<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.home')}}')">
        <i class="nav-icon fas fa-home"></i>
        <p>
            inicio

        </p>
    </a>

</li>

<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.clientes')}}')">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Clientes
        </p>
    </a>
</li>

<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.integracao')}}')">
        <i class="fas fa-check"></i>
        <p>
            Integrações
        </p>
    </a>
</li>

<li class="nav-item ">
    <a href="#" class="nav-link has-treeview">
        <i class="nav-icon ion ion-bag"></i>
        <p>
            Transações
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.transacao.efetivada')}}')">
          <i class="far fa-circle nav-icon text-success"></i>
          <p>Efetivadas</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.transacao.cancelada')}}')">
          <i class="far fa-circle nav-icon text-danger"></i>
          <p>Canceladas</p>
        </a>
      </li>
    </ul>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.saldo')}}')">
        <i class="nav-icon fas fa-money-bill-alt"></i>
        <p>
            Saldo
        </p>
    </a>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.transferencia')}}')">
        <i class="nav-icon fas fa-exchange-alt"></i>
        <p>
            Transferencias

        </p>
    </a>

</li>
<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.trocas')}}')">
        <i class="nav-icon fas fa-sync-alt"></i>
        <p>
            Trocas
        </p>
    </a>

</li>
<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('admin.support.home')}}')">
        <i class="nav-icon fas fa-headset"></i>
        <p>
            Suporte
        </p>
    </a>
</li>
@endsection  

@section('content')
    @include('admin.home')
@endsection