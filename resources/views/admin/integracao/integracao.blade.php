<div class="container-fluid troca">
    <div class="row">
        <div class="col-sm-7 solicitacao-troca">
            <div class="header-solicitacao-troca">
                Clientes
            </div>
            <div class="troca-container">
                <div class="table-responsive">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>#ID Cliente</th>
                                <th>Nome</th>
                                <th>CPF/CNPJ</th>
                                <th>#ID Máquina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456.</td>
                                <td>Mart Kale</td>
                                <td>001100223-9</td>
                                <td>vazio
                                    <div class="nova-conta">
                                        <a href="#" onclick="loadIntegracaoForm();">editar</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>873624.</td>
                                <td>Rodrigo Lima</td>
                                <td>352783531-1</td>
                                <td>123456
                                    <div class="nova-conta">
                                        <a href="#" onclick="loadIntegracaoForm();">editar</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>762153.</td>
                                <td>Paulo Rey</td>
                                <td>314325412-9</td>
                                <td>432155
                                    <div class="nova-conta">
                                        <a href="#" onclick="loadIntegracaoForm();">editar</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-5 historico-troca">
            <div class="header-historico-troca">
                Máquinas
            </div>
            <div class="troca-container">
                <div class="table-responsive">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>#ID Máquina</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123456.</td>
                                <td>ocupada</td>
                            </tr>
                            <tr>
                                <td>432155.</td>
                                <td>ocupada</td>
                            </tr>
                            <tr>
                                <td>123456.</td>
                                <td>livre</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="create-integracao-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header support-title-bar" style="background-color: rgba(1, 1, 1, .7);">
                <h5 class="modal-title">Integração</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span style="color: #fff">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container" id="edit-modal-content">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 mb-3">
                            <form method="POST">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="input-name">ID Máquina: </label>
                                        <input type="text" class="form-control" name="id-maquina" id="id-maquina"
                                            required="required" value="">
                                    </div>
                                </div>

                                <div class="form-row justify-content-center">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-dark" name="enviar">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>