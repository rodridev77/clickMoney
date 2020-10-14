<section class="col-lg-12 connectedSortable">
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Transações Canceladas</h3>

            <div class="card-tools ">
                <form action="#" class="form-inline">
                    <label for="id" class="my-1 mr-2">Id da transação</label>
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
                        <td>Update software</td>

                        <td><span class="badge bg-danger">
                                <i class="fas fa-times fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td><span class="badge bg-danger"> <i class="fas fa-times fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>

                        <td><span class="badge bg-danger"> <i class="fas fa-times fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>

                        <td><span class="badge bg-danger"> <i class="fas fa-times fa-sm"></i>
                            </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>