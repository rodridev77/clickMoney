<div class="container">
    <div class="row">
        <div class="col-md-12 small-box" style="background-color: #DCDCDC;">
            <div class="inner" style="background-color: #DCDCDC; padding: 5px auto 5px auto;">
                <p>Saldo atual</p>
                <h3 style="font-size: 22px">R$ 100<sup style="font-size: 14px">,00</sup></h3>
            </div>
            <div class="icon">
                <i class="fas fa-2x fa-money-bill-alt"></i>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="background-color: #DCDCDC;">
                <div class="card-header" style="background-color: #f0dc82; color: rgba(1,1,1,.8); font-weight:600; text-transform:uppercase">
                    <h3 class="card-title">Transferir</h3>
                </div>
                <div class="card-body">
                    <div class="transferencia-link">
                        <div class="trasnferencia-hitorico">
                            <a href="#" onclick="loadViewInSelectContent('{{route('transferencia.historico')}}')">Historico</a>
                        </div>
                        <div class="nova-conta">
                            <a href="#" onclick="loadTransferenciaForm();">Cadastrar Conta</a>
                        </div>
                    </div>
                    <!--<button class="btn btn-info my-2"
                        onclick="loadViewInSelectContent('{{route('transferencia.historico')}}')">Historico</button>
                    <button class="btn btn-info my-2" onclick="loadTransferenciaForm();">Nova Conta</button>!-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="cpf/cnpj" style="color: rgba(1,1,1,.7);">Selecionar Conta</label>
                                                <select name="" id="" class="custom-select">
                                                    <option value="">Fulano 123456</option>
                                                    <option value="">Fulano 123456</option>
                                                    <option value="">Fulano 123456</option>
                                                    <option value="">Fulano 123456</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="valor" style="color: rgba(1,1,1,.7);">Valor</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">R$</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="0,00"
                                                        id="valor">
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Confirmar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="create-transferencia-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header transferencia-title-bar">
                <h5 class="modal-title">Cadastro de Conta</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span style="color: #fff;">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container" id="create-modal-count">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 mb-3">
                            <form action="">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="cpf/cnpj" id="nome" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="cpf/cnpj">cpf/cnpj</label>
                                        <input type="text" name="cpf/cnpj" id="cpf/cnpj" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nome">Banco</label>
                                        <input type="text" name="cpf/cnpj" id="nome" class="form-control">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="nome">Agência</label>
                                        <input type="text" name="cpf/cnpj" id="nome" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nome">Conta</label>
                                        <input type="text" name="cpf/cnpj" id="nome" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button class="btn btn-dark">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>