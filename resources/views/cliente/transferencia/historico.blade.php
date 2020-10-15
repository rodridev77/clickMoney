<div class="container-fluid historico">
    <div class="row">
        <div class="col-sm-12">
            <a href="#" onclick="loadViewInSelectContent('{{route('cliente.transferencia')}}')">
                <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span style="margin-left:5px">voltar</span>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 historico-title">
            <h2>Histórico de Transferência</h2>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Data Solicitação</th>
                <th scope="col">Conta</th>
                <th scope="col">Valor</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>25/04/2020</td>
                <td>0000762-1</td>
                <td>R$ 500,00</td>
                <td class="detalhes">
                    <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.extrato')}}')">Ver detalhes</a>
                </td>
            </tr>
            <tr>
                <td>30/04/2020</td>
                <td>0000872-1</td>
                <td>R$ 300,00</td>
                <td class="detalhes">
                    <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.extrato')}}')">Ver detalhes</a>
                </td>
            </tr>
            <tr>
                <td>21/07/2020</td>
                <td>0000187-1</td>
                <td>R$ 250,00</td>
                <td class="detalhes">
                    <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.extrato')}}')">Ver detalhes</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>