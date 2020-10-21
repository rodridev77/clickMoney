<div class="row">
    <div class="col-sm-12">
        <a href="#" onclick="loadViewInSelectContent('{{route('admin.transacao.cancelada')}}')">
            <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span style="margin-left:5px">voltar</span>
        </a>
    </div>
</div>
<br>
<div class="container-fluid container-canceladas">
    <div class="row">
        <div class="col-sm-12">
            <div class="header-menu-canceladas">
                Historico de Vendas Canceladas
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
                            placeholder="Pesquise pelo ID" aria-label="Search">
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
                <tr>
                    <th scope="col">ID venda</th>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    {{-- <th scope="col"></th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123456</td>
                    <td>25/04/2020</td>
                    <td>Sofá</td>
                    <td>R$ 500,00</td>
                    
                </tr>
                <tr>
                    <td>123456</td>
                    <td>30/04/2020</td>
                    <td>Mesa</td>
                    <td>R$ 300,00</td>
                    
                </tr>
                <tr>
                    <td>123456</td>
                    <td>21/07/2020</td>
                    <td>Colchão</td>
                    <td>R$ 250,00</td>
                    
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
