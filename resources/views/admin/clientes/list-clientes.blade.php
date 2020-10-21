<div class="container-fluid troca">
    <div class="row" style="margin-left: -15px; margin-right:-15px">
        <div class="col-sm-12">
            <div class="header-solicitacao-troca">
                Clientes Cadastrados
            </div>
        </div>
    </div>

    <div class="row filtro-efetivas" style="background-color: #fff;">
        <div class="col-sm-6 search-efetivas">
            <form autocomplete="off" id="delete-search">
                @csrf
                <div class="form-group">
                    <label style="color: rgba(1,1,1,.7);">Busca:</label>
                    <div class="input-group form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" name="code"
                            placeholder="Pesquise pelo ID ou nome do cliente..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="input-group-text red lighten-3" id="basic-text1"><i
                                    class="fas fa-search text-grey" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row table-responsive">
        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead>
                <tr style="color: rgba(1,1,1,.7);">
                    <th>ID</th>
                    <th>Nome do Cliente</th>
                    <th>CPF/CNPJ</th>
                    <th style="">Dados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente A</td>
                    <td>000.000.000-00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('admin.cliente.profile')}}')">Ver mais</a></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente B</td>
                    <td>000.000.000-00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('admin.cliente.profile')}}')">Ver mais</a></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente C</td>
                    <td>000.000.000-00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('admin.cliente.profile')}}')">Ver mais</a></td>
                </tr>
                <tr>
                    <td>$jh4jh12hC3@s*</td>
                    <td>Cliente D</td>
                    <td>000.000.000-00</td>
                    <td><a href="#" onclick="loadViewInSelectContent('{{route('admin.cliente.profile')}}')">Ver mais</a></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
