<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Solicitação de Troca</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input readonly type="text" value="Alexander Pierce" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ID Maquina</label>
                        <input readonly type="text" value="123456" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Motivo</label>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Descrição"></textarea>
                          </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Solicitar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Histórico de trocas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
                <div class="card-body">
                    <table class="table text-center">
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
