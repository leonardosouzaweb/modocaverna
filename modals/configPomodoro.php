<div class="modal fade" id="configPomodoro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Configuração Pomodoro</h5>
            </div>
            <div class="modal-body">
                <div class="configPomo">
                    <h3>Defina o tempo do flow</h3>
                    <div class="line">
                        <div>
                            <small>Produtividade</small>
                            <input type="text" class="form-control" data-key="produtividade">
                        </div>

                        <div>
                            <small>Estudos</small>
                            <input type="text" class="form-control" data-key="estudos">
                        </div>
                    </div>
                    <h3>Defina o tempo dos intervalos</h3>
                    <div class="line">
                        <div>
                            <small>Curto</small>
                            <input type="text" class="form-control" data-key="intervalo-curto">
                        </div>

                        <div>
                            <small>Longo</small>
                            <input type="text" class="form-control" data-key="intervalo-longo">
                        </div>
                    </div>
                    <button id="btnSaveConfig" disabled>Salvar configurações</button>
                </div>
            </div>
        </div>
    </div>
</div>