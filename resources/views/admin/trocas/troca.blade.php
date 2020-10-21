<div class="container-fluid troca">
    <div class="row">
        <div class="col-sm-6 solicitacao-troca">
            <div class="header-solicitacao-troca">
                Solicitação de Trocas
            </div>
            <div class="troca-container">
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Data Solicitação</th>
                            <th scope="col">#ID Máquina</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25/04/2020</td>
                            <td>0000762</td>
                            <td class="detalhes">
                                <a href="#" onclick="loadViewInSelectContent('{{route('admin.trocas.extrato')}}')">Ver
                                    detalhes</a>
                            </td>
                        </tr>
                        <tr>
                            <td>30/04/2020</td>
                            <td>0000872</td>
                            <td class="detalhes">
                                <a href="#" onclick="loadViewInSelectContent('{{route('admin.trocas.extrato')}}')">Ver
                                    detalhes</a>
                            </td>
                        </tr>
                        <tr>
                            <td>21/07/2020</td>
                            <td>0000187</td>
                            <td class="detalhes">
                                <a href="#" onclick="loadViewInSelectContent('{{route('admin.trocas.extrato')}}')">Ver
                                    detalhes</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="col-sm-6 historico-troca">
            <div class="header-historico-troca">
                Histórico de Trocas
            </div>
            <div class="troca-container">
                <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>#id maquina</th>
                            <th>data</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123456.</td>
                            <td>14/10/2020</td>
                            <td>Pendente</td>
                        </tr>
                        <tr>
                            <td>123456.</td>
                            <td>14/10/2020</td>
                            <td>Concluido</td>
                        </tr>
                        <tr>
                            <td>123456.</td>
                            <td>14/10/2020</td>
                            <td>concluido</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>