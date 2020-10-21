<div class="container-fluid saldo">
    <div class="row">
        <div class="col-sm-12">
            <div class="header-menu-saldo">
                Transações Efetivadas
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row filtro-efetivas" style="background-color: #fff;">
        <div class="col-sm-6 search-efetivas">
            <form autocomplete="off" id="delete-search">
                @csrf
                <div class="form-group">
                    <label style="color: rgba(1,1,1,.7);">Busca:</label>
                    <div class="input-group form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" name="code"
                            placeholder="Pesquise pelo ID ou nome da empresa..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="input-group-text red lighten-3" id="basic-text1"><i
                                    class="fas fa-search text-grey" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <form>
                <div class="form-group">
                    <label style="color: rgba(1,1,1,.7);">Período:</label>
                    <select class="form-control select-call" style="max-width: 200px;">
                        <option value="">hoje</option>
                        <option value="">3 dias</option>
                        <option value="">semana</option>
                        <option value="">Mês</option>
                        <option value="">Ano</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead>
                <tr style="color: rgba(1,1,1,.7);">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor(R$)</th>
                    <th style="max-width: 10%">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Update software</td>
                    <td>250,00</td>
                    <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                        </span></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Clean database</td>
                    <td>200,00</td>
                    <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                        </span></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cron job running</td>
                    <td>340,00</td>
                    <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                        </span></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Fix and squish bugs</td>
                    <td>400,00</td>
                    <td><span class="badge bg-success"> <i class="fas fa-check fa-sm"></i>
                        </span></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
