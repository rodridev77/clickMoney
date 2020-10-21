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
                    <th>Nome do Cliente</th>
                    <th>Valor Total de Vendas(R$)</th>
                    <th style="width: 40px">Vendas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente A</td>
                    <td>250,00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('transacao.vendas.efetivadas')}}')">Ver mais</a></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente B</td>
                    <td>200,00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('transacao.vendas.efetivadas')}}')">Ver mais</a></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente C</td>
                    <td>340,00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('transacao.vendas.efetivadas')}}')">Ver mais</a></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente D</td>
                    <td>400,00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('transacao.vendas.efetivadas')}}')">Ver mais</a></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
