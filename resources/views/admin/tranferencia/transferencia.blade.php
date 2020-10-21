<div class="container-fluid historico">
    <div class="row">
        <div class="col-sm-12 historico-title">
            <h2>Solicitação de Transferência</h2>
        </div>
    </div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Data Solicitação</th>
                <th scope="col">Cliente</th>
                <th scope="col">Valor</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>25/04/2020</td>
                <td>Fulano Tal</td>
                <td>R$ 500,00</td>
                <td class="detalhes">
                    <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.pedido')}}')">Ver detalhes</a>
                </td>
            </tr>
            <tr>
                <td>30/04/2020</td>
                <td>Sicrano Tal</td>
                <td>R$ 300,00</td>
                <td class="detalhes">
                    <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.pedido')}}')">Ver detalhes</a>
                </td>
            </tr>
            <tr>
                <td>21/07/2020</td>
                <td>Beltrano Tal</td>
                <td>R$ 250,00</td>
                <td class="detalhes">
                    <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.pedido')}}')">Ver detalhes</a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>