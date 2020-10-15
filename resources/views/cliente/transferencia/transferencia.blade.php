<div class="row">
    <div class="small-box bg-success col-md-12">
        <div class="inner">
            <p>Saldo atual</p>
            <h3>R$ 100<sup style="font-size: 20px">,00</sup></h3>
        </div>
        <div class="icon">
            <i class="fas fa-2x fa-money-bill-alt"></i>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Transferir</h3>
            </div>
            <div class="card-body">
                <button class="btn btn-info my-2" onclick="loadViewInSelectContent('{{route('transferencia.historico')}}')">Historico</button>
                <button class="btn btn-info my-2" onclick="loadSupportForm();">Nova Conta</button>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="cpf/cnpj">Selecionar Conta</label>
                                            <select name="" id="" class="custom-select">
                                                <option value="">Fulano 123456</option>
                                                <option value="">Fulano 123456</option>
                                                <option value="">Fulano 123456</option>
                                                <option value="">Fulano 123456</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="valor">Valor</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">R$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="0,00" id="valor">
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
<div class="modal fade" id="create-support-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header support-title-bar">
                <h5 class="modal-title">Cadastro de Conta</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container" id="edit-modal-content">
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
                                    <div class="form-group col-md-12">
                                        <label for="valor">Numero da Conta</label>
                                        <input type="text" class="form-control" id="valor">
                                    </div>
                                    <button class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
