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
            <a class="nav-link" href="#" id="pendente"
                style="" onclick="loadViewInSelectContent('{{route('admin.support.home')}}')">Pendentes <span
                    class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#" id="finalizado" style="color: #007bff; border-bottom: 2px solid #007bff;">Finalizados <span class="sr-only">(current)</span></a>
        </li>
    </ul>
</nav>

<div class="container-fluid list-items-call finished-item">
    <div class="row">
        <div class="col-sm-3 client-id">
            <div class="text">Fulano Tal</div>
            <div class="status finished">Encerrado</div>
        </div>
        <div class="col-sm-3 call-subject">
            Troca de máquina
        </div>
        <div class="col-sm-2 call-time">
            2 dias
        </div>
        <div class="col-sm-2 view-call">
            <a href="#" onclick="loadViewInSelectContent('{{route('admin.support.show-closed')}}')">Ver Chamado</a>
        </div>
        <div class="col-sm-2 view-call">
            <a href="#">Excluir</a>
        </div>
    </div>
</div>

<div class="container-fluid list-items-call finished-item">
    <div class="row">
        <div class="col-sm-3 client-id">
            <div class="text">Sicrano Tal</div>
            <div class="status finished">Encerrado</div>
        </div>
        <div class="col-sm-3 call-subject">
            Solicitar reparo
        </div>
        <div class="col-sm-2 call-time">
            20 dias
        </div>
        <div class="col-sm-2 view-call">
            <a href="#" onclick="loadViewInSelectContent('{{route('support.show-closed')}}')">Ver Chamado</a>
        </div>
        <div class="col-sm-2 view-call">
            <a href="#">Excluir</a>
        </div>
    </div>
</div>
