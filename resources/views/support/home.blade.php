<div class="container-fluid header-menu">
    <div class="row">
        <div class="col-sm-12">
            <div class="header-menu-box">
                <div class="list-call">
                    Lista de Chamados
                </div>
                <div class="new-call">
                    <button class="btn btn-primary" onclick="loadSupportForm();">
                        Abrir Novo Chamado
                    </button>
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
            <a class="nav-link" href="#" id="finalizado" onclick="loadViewInSelectContent('{{route('support.closed-calls')}}')">Finalizados <span class="sr-only">(current)</span></a>
        </li>
    </ul>
</nav>

<div class="container-fluid list-items-call closed-item">
    <div class="row">
        <div class="col-sm-3 client-id">
            <div class="text">#173272</div>
            <div class="status closed">Concluido</div>
        </div>
        <div class="col-sm-3 call-subject">
            Troca de máquina
        </div>
        <div class="col-sm-3 call-time">
            21 horas
        </div>
        <div class="col-sm-3 view-call">
            <a href="#" onclick="loadViewInSelectContent('{{route('support.show')}}')">Ver Chamado</a>
        </div>
    </div>
</div>

<div class="container-fluid list-items-call opened-item">
    <div class="row">
        <div class="col-sm-3 client-id">
            <div class="text">#218954</div>
            <div class="status opened">Aberto</div>
        </div>
        <div class="col-sm-3 call-subject">
            Solicitar reparo
        </div>
        <div class="col-sm-3 call-time">
            21 horas
        </div>
        <div class="col-sm-3 view-call">
            <a href="#" onclick="loadViewInSelectContent('{{route('support.show')}}')">Ver Chamado</a>
        </div>
    </div>
</div>

<div class="modal fade" id="create-support-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header support-title-bar">
                <h5 class="modal-title">Chamado de Suporte</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container" id="edit-modal-content">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 mb-3">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="input-name">Nome: </label>
                                        <input type="text" class="form-control" name="input-name" id="input-name"
                                            required="required" value="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="subject">Motivo: </label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            required="required" value="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="message">Descreva o problema: </label>
                                    <textarea class="form-control" name="message" id="message" required="required"
                                        value=""></textarea>
                                </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>