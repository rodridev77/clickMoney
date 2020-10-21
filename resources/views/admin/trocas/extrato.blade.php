<div class="container-fluid" style="margin-top: -10px; margin-bottom:10px;">
    <div class="row">
        <div class="col-sm-12">
            <a href="#" onclick="loadViewInSelectContent('{{route('admin.trocas')}}')">
                <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span
                    style="margin-left:5px">voltar</span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="admin-troca-extrato">
        <div class="row">
            <div class="col-sm-12">
                <span class="label-color">Nome:</span> Ricardo Almeira
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <span class="label-color">Data: </span> 10/12/2020
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <span class="label-color">ID Máquina: </span> #124567
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <span class="label-color">Mensagem: </span>Solicito troca de máquina...
            </div>
        </div>

        <div class="row">
            <form>
                <div class="form-row" style="margin: 10px">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="pendente1" name="pendente">
                        <label class="custom-control-label" for="pendente1">Pendente</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="margin-left: 30px">
                        <input type="checkbox" class="custom-control-input" id="concluido1" name="concluido">
                        <label class="custom-control-label" for="concluido1">Concluido</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>