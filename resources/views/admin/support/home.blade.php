<div class="container-fluid header-menu">
    <div class="row">
        <div class="col-sm-12">
            <div class="header-menu-box">
                <div class="list-call">
                    Lista de Chamados
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav mr-auto navbar-box">
        <li class="nav-item active">
            <a class="nav-link active" href="#" id="pendente" style="color: #007bff; border-bottom: 2px solid #007bff;">Pendentes <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="finalizado" onclick="loadViewInSelectContent('{{route('admin.support.closed-calls')}}')">Finalizados <span class="sr-only">(current)</span></a>
        </li>
    </ul>
</nav>

<div class="container-fluid list-items-call closed-item">
    <div class="row">
        <div class="col-sm-3 client-id">
            <div class="text">Fulano Tal</div>
            <div class="status closed">Concluido</div>
        </div>
        <div class="col-sm-3 call-subject">
            Troca de máquina
        </div>
        <div class="col-sm-3 call-time">
            21 horas
        </div>
        <div class="col-sm-3 view-call">
            <a href="#" onclick="loadViewInSelectContent('{{route('admin.support.show')}}')">Ver Chamado</a>
        </div>
    </div>
</div>

<div class="container-fluid list-items-call opened-item">
    <div class="row">
        <div class="col-sm-3 client-id">
            <div class="text">Sicrano Tal</div>
            <div class="status opened">Aberto</div>
        </div>
        <div class="col-sm-3 call-subject">
            Solicitar reparo
        </div>
        <div class="col-sm-3 call-time">
            21 horas
        </div>
        <div class="col-sm-3 view-call">
            <a href="#" onclick="loadViewInSelectContent('{{route('admin.support.show')}}')">Ver Chamado</a>
        </div>
    </div>
</div>
