@extends('dashboard-template')
@section('nav-items')
<li class="nav-item ">
    <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('cliente.home')}}')">
        <i class="nav-icon fas fa-home"></i>
        <p>
            inicio

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
        <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('transacao.efetivada')}}')">
          <i class="far fa-circle nav-icon text-success"></i>
          <p>Efetivadas</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link" onclick="loadViewInSelectContent('{{route('transacao.cancelada')}}')">
          <i class="far fa-circle nav-icon text-danger"></i>
          <p>Canceladas</p>
        </a>
      </li>
    </ul>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-money-bill-alt"></i>
        <p>
            Saldo

        </p>
    </a>

</li>
<li class="nav-item ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-exchange-alt"></i>
        <p>
            Transferencias

        </p>
    </a>

</li>
<li class="nav-item ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-sync-alt"></i>
        <p>
            Trocas

        </p>
    </a>

</li>
<li class="nav-item ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-headset"></i>
        <p>
            Suporte
        </p>
    </a>
</li>
@endsection  

@section('content')
    @include('cliente.home')
@endsection