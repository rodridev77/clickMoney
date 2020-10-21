<div class="container-fluid troca">
    <div class="row">
        <div class="col-sm-6 solicitacao-troca">
            <div class="header-solicitacao-troca">
                Solicitação de Trocas
            </div>
            <div class="troca-container">
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input readonly type="text" value="Alexander Pierce" class="form-control"
                                id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ID Maquina</label>
                            <input readonly type="text" value="123456" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Motivo</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Descrição"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Solicitar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-6 historico-troca">
            <div class="header-historico-troca">
                Histórico de Trocas
            </div>
            <div class="troca-container">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th style="">#id maquina</th>
                            <th>data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123456.</td>
                            <td>14/10/2020</td>
                        </tr>
                        <tr>
                            <td>123456.</td>
                            <td>14/10/2020</td>
                        </tr>
                        <tr>
                            <td>123456.</td>
                            <td>14/10/2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
