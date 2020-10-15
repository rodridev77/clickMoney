<section class="col-lg-12 connectedSortable">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Transações Efetivadas</h3>

            <div class="card-tools ">
                <form action="#" class="form-inline">
                    <label for="id" class="my-1 mr-2">Id da transação</label>
                    <input type="text" name="id" id="id" class="form-control my-1 mr-sm-2">
                    <label for="id" class="my-1 mr-2">Id do cliente</label>
                    <input type="text" name="id" id="id" class="form-control my-1 mr-sm-2">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">#id</th>
                        <th>nome</th>
                        <th style="width: 40px">status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Cliente A</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Cliente B</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                        </span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cliente C</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Cliente D</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                            </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>