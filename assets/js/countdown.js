document.addEventListener("DOMContentLoaded", function() {
    const btnSaveConfig = document.getElementById('btnSaveConfig');
    const inputs = document.querySelectorAll('#configPomodoro input');
    let interval; // Variável para armazenar o intervalo do temporizador
    let segundosRestantes = 0;

    // Função para verificar se todos os inputs estão preenchidos
    function checkInputs() {
        return Array.from(inputs).every(input => input.value.trim() !== '');
    }

    // Função para habilitar ou desabilitar o botão "Salvar configurações"
    function toggleSaveButton() {
        btnSaveConfig.disabled = !checkInputs();
    }

    // Adicionando ouvintes de eventos aos inputs para verificar quando eles mudam
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            toggleSaveButton();
        });
    });

    // Adicionando ouvinte de evento ao botão "Salvar configurações"
    btnSaveConfig.addEventListener('click', function() {
        // Salvando os valores no localStorage
        const configValues = {};
        inputs.forEach(input => {
            configValues[input.getAttribute('data-key')] = input.value.trim();
        });
        localStorage.setItem('pomodoroConfig', JSON.stringify(configValues));

        // Fechando a modal
        const modal = document.getElementById('configPomodoro');
        bootstrap.Modal.getInstance(modal).hide();
    });

    // Função para atualizar o timer com base no tipo selecionado
    function updateTimerValues(flowType) {
        const configValues = JSON.parse(localStorage.getItem('pomodoroConfig'));
        if (configValues && (flowType === 'Produtividade' || flowType === 'Estudos')) {
            const timerValue = configValues[flowType.toLowerCase()];
            const timerElement = document.getElementById('timer');
            // Verifica se o temporizador já está em execução
            if (timerElement.textContent.trim() === '00:00') {
                iniciarTemporizador(timerValue);
            }
        }
    }

    // Adicionando ouvinte de eventos aos botões de flow
    document.querySelectorAll('.flowSelect button').forEach(button => {
        button.addEventListener('click', function() {
            // Remover todas as classes "active" dos botões de flow
            document.querySelectorAll('.flowSelect button').forEach(btn => {
                btn.classList.remove('activeProdutividade', 'activeEstudos');
            });
            // Adicionar a classe correta ao botão clicado
            const flowType = this.textContent.trim();
            if (flowType === 'Produtividade') {
                this.classList.add('activeProdutividade');
            } else if (flowType === 'Estudos') {
                this.classList.add('activeEstudos');
            }
            // Atualizar os valores do timer
            updateTimerValues(flowType);
        });
    });

    // Adicionando ouvinte de eventos aos botões de intervalo
    document.querySelectorAll('.setInterval button').forEach(button => {
        button.addEventListener('click', function() {
            // Remover a classe "active" de todos os botões de intervalo
            document.querySelectorAll('.setInterval button').forEach(btn => {
                btn.classList.remove('active');
            });
            // Adicionar a classe "active" ao botão clicado
            this.classList.add('active');
        });
    });

    // Função para obter os segundos restantes do temporizador
    function obterSegundosRestantes() {
        const timerElement = document.getElementById('timer');
        const timerSplit = timerElement.textContent.split(":");
        const minutos = parseInt(timerSplit[0]);
        const segundos = parseInt(timerSplit[1]);
        return minutos * 60 + segundos;
    }
    

    // Adicionando ouvinte de eventos ao botão "Iniciar"
    document.getElementById('playButton').addEventListener('click', function() {
        const flowType = document.querySelector('.flowSelect button.active');
        if (flowType && (flowType.textContent.trim() === 'Produtividade' || flowType.textContent.trim() === 'Estudos')) {
            const configValues = JSON.parse(localStorage.getItem('pomodoroConfig'));
            if (configValues) {
                const timerValue = configValues[flowType.textContent.trim().toLowerCase()];
                let segundosSalvos = localStorage.getItem('segundosRestantes');
    
                // Se houver segundos salvos, inicie o temporizador com esse valor
                if (segundosSalvos) {
                    iniciarTemporizador(segundosSalvos);
                    localStorage.removeItem('segundosRestantes'); // Remova os segundos salvos após iniciá-los
                } else {
                    iniciarTemporizador(timerValue);
                }
            }
        }
    });

    // Função para iniciar o temporizador com um determinado valor em minutos
    function iniciarTemporizador(valorMinutos) {
        let segundosTotais = valorMinutos * 60;
        let minutos = Math.floor(segundosTotais / 60);
        let segundos = segundosTotais % 60;

        const timerElement = document.getElementById('timer');

        interval = setInterval(() => {
            if (segundos === 0) {
                if (minutos === 0) {
                    clearInterval(interval);
                    // Aqui você pode adicionar qualquer lógica adicional após o término do temporizador
                    console.log('Temporizador encerrado');
                    return;
                } else {
                    minutos--;
                    segundos = 59;
                }
            } else {
                segundos--;
            }

            timerElement.textContent = `${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
        }, 1000);
    }

    // Adicionando ouvinte de eventos ao botão "Pausar"
    document.getElementById('pauseButton').addEventListener('click', function() {
        clearInterval(interval); // Pausa o temporizador
        segundosRestantes = obterSegundosRestantes(); // Armazena os segundos restantes
    
        // Salvando os segundos restantes no localStorage
        localStorage.setItem('segundosRestantes', segundosRestantes);
    
        // Removendo o intervalo para garantir que não haja conflito ao iniciar novamente
        clearInterval(interval);
    });

    document.getElementById('resetButton').addEventListener('click', function() {
        clearInterval(interval); // Pára o temporizador
        const configValues = JSON.parse(localStorage.getItem('pomodoroConfig'));
        const flowType = document.querySelector('.flowSelect button.active');
        if (configValues && flowType && (flowType.textContent.trim() === 'Produtividade' || flowType.textContent.trim() === 'Estudos')) {
            const timerValue = configValues[flowType.textContent.trim().toLowerCase()];
            const timerElement = document.getElementById('timer');
            timerElement.textContent = `${timerValue.toString().padStart(2, '0')}:00`; // Reinicia o temporizador
            segundosRestantes = 0; // Reinicia os segundos restantes
        }
    });
});

