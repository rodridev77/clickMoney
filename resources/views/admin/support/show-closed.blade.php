<div class="container-fluid" style="margin-top: -10px; margin-bottom:10px;">
    <div class="row">
        <div class="col-sm-12">
            <a href="#" onclick="loadViewInSelectContent('{{route('support.closed-calls')}}')">
                <i class='fas fa-arrow-left' style='font-size:16px;color: rgba(0, 123, 255, .7);'></i><span style="margin-left:5px">voltar</span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid show-call">
    <div class="row header-info">
        <div class="col-sm-6 client-info">
            <div class="row">
                <div class="col-1">
                    <div class="info-photo">
                        <img src="{{ asset('./assets/images/user.jpg') }}" width="40px">
                    </div>
                </div>
                <div class="col-11 client-name">
                    <span style="font-size: 16px; font-weight: 600;">Maria Isabel Joana</span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 call-date">
            <div class="row">
                <div class="col-6 opened-at">
                    Aberto: <span style="color: rgba(1,1,1,.7)">12/10/2010 09:40</span>
                </div>
                <div class="col-6 closed-at">
                    Fechado: <span style="color: rgba(1,1,1,.7)">12/10/2010 13:20</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="color: rgba(1,1,1,.7);">
        <div class="col-sm-12 message-box">
            Olá, <br>
            Preciso de suporte para troca de máquina<br>
            Obrigado.
        </div>
    </div>

    <div class="row" style="color: rgba(1,1,1,.7);">
        <div class="col-sm-12 support-answer">
            <div class="row">
                <div class="col-sm-1">
                    <div class="author">Suporte:</div>
                </div>
                <div class="col-sm-11">
                    Sua troca será efetuada logo que possível, aguarda contato.
                </div>
            </div>
        </div>
        <div class="col-sm-12 me-answer">
            <div class="row">
                <div class="col-sm-1">
                    <div class="author">Eu:</div>
                </div>
                <div class="col-sm-11">
                    Ok, aguardo
                </div>
            </div>
        </div>
        <div class="col-sm-12 support-answer">
            <div class="row">
                <div class="col-sm-1">
                    <div class="author">Suporte:</div>
                </div>
                <div class="col-sm-11">
                    Troca em andamento, aguardar o fim do processo.
                </div>
            </div>
        </div>
        <div class="col-sm-12 me-answer">
            <div class="row">
                <div class="col-sm-1">
                    <div class="author">Eu:</div>
                </div>
                <div class="col-sm-11">
                    Ok, positivo
                </div>
            </div>
        </div>
        <div class="col-sm-12 support-answer">
            <div class="row">
                <div class="col-sm-1">
                    <div class="author">Suporte:</div>
                </div>
                <div class="col-sm-11">
                    Troca efetuada com sucesso.
                </div>
            </div>
        </div>
    </div>
</div>