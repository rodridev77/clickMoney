<section class="col-lg-12 connectedSortable">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Saldo</h3>
            <br>
            <form action="#">
                <div class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Nos ultimos</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Ultimos 3 dias</option>
                        <option value="1">Ultima semana</option>
                        <option value="2">Ultimo Mes</option>
                        <option value="3">Ultimo Ano</option>
                    </select>
                
                    <label for="inicio" class="my-1 mr-2">Inicio</label>
                    <input type="date" name="" id="inicio" class="form-control my-1 mr-sm-2">
                
                    <label for="termino" class="my-1 mr-2">Término</label>
                    <input type="date" name="" id="termino" class="form-control my-1 mr-sm-2">
                    <div class="float-right">
                        <button class="btn btn-primary">buscar</button>
                    </div>
                </div>        
            </form>
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

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                        </span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                            </span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>

                        <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                            </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>