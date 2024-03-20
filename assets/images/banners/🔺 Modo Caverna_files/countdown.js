document.addEventListener("DOMContentLoaded", function() {
    const timerDisplay = document.getElementById('timer');
    const playButton = document.getElementById('playButton');
    const pauseButton = document.getElementById('pauseButton');
    const resetButton = document.getElementById('resetButton');

    const pomodorosIniciadosDisplay = document.querySelector('.info p:first-of-type');

    let timerInterval;
    let timerRunning = false;
    let timerSeconds = 25 * 60; // 25 minutes
    let pomodorosIniciados = 0;

    function startTimer() {
        timerRunning = true;
        playButton.disabled = true;
        pauseButton.disabled = false;
        resetButton.disabled = false;

        timerInterval = setInterval(() => {
            updateTimerDisplay();
            timerSeconds--;
            if (timerSeconds < 0) {
                clearInterval(timerInterval);
                timerRunning = false;
                playButton.disabled = false;
                pauseButton.disabled = true;
                resetButton.disabled = false;
                pomodorosIniciados++;
                pomodorosIniciadosDisplay.textContent = pomodorosIniciados;
            }
        }, 1000);
    }

    function pauseTimer() {
        clearInterval(timerInterval);
        timerRunning = false;
        playButton.disabled = false;
        pauseButton.disabled = true;
        resetButton.disabled = false;
    }

    function resetTimer() {
        clearInterval(timerInterval);
        timerRunning = false;
        timerSeconds = 25 * 60;
        updateTimerDisplay();
        playButton.disabled = false;
        pauseButton.disabled = true;
        resetButton.disabled = true;
    }

    function updateTimerDisplay() {
        const minutes = Math.floor(timerSeconds / 60);
        const seconds = timerSeconds % 60;
        timerDisplay.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }

    playButton.addEventListener('click', startTimer);
    pauseButton.addEventListener('click', pauseTimer);
    resetButton.addEventListener('click', resetTimer);

    const produtividadeButton = document.getElementById('produtividadeButton');
    const estudosButton = document.getElementById('estudosButton');

    produtividadeButton.addEventListener('click', function() {
        if (!produtividadeButton.classList.contains('activeProdutividade')) {
            timerSeconds = 40 * 60;
            updateTimerDisplay();
            produtividadeButton.classList.add('activeProdutividade');
            estudosButton.classList.remove('activeEstudos');
        }
    });

    estudosButton.addEventListener('click', function() {
        if (!estudosButton.classList.contains('activeEstudos')) {
            timerSeconds = 30 * 60;
            updateTimerDisplay();
            estudosButton.classList.add('activeEstudos');
            produtividadeButton.classList.remove('activeProdutividade');
        }
    });

    const curtoButton = document.getElementById('curtoButton');
    const longoButton = document.getElementById('longoButton');

    curtoButton.addEventListener('click', function() {
        if (!curtoButton.classList.contains('activeIntervalo')) {
            iniciarContadorIntervalo(5 * 60);
            curtoButton.classList.add('activeIntervalo');
            longoButton.classList.remove('activeIntervalo');
        }
    });

    longoButton.addEventListener('click', function() {
        if (!longoButton.classList.contains('activeIntervalo')) {
            iniciarContadorIntervalo(10 * 60);
            longoButton.classList.add('activeIntervalo');
            curtoButton.classList.remove('activeIntervalo');
        }
    });

    let intervaloContador;

    function iniciarContadorIntervalo(tempoTotal) {
        clearInterval(intervaloContador);
        intervaloContador = setInterval(() => {
            tempoTotal--;
            if (tempoTotal <= 0) {
                clearInterval(intervaloContador);
                console.log("Intervalo finalizado");
            }
        }, 1000);
    }

    // Seleciona o input do switch
    var switchInput = document.getElementById('switch-flat');

    // Seleciona a modal
    var modalFlow = new bootstrap.Modal(document.getElementById('modalFlow'), {});

    // Adiciona um evento de mudança ao input do switch
    switchInput.addEventListener('change', function() {
        // Verifica se o switch está marcado (ativado)
        if (this.checked) {
            // Se estiver marcado, abre a modal
            modalFlow.show();
        } else {
            // Se não estiver marcado, fecha a modal
            modalFlow.hide();
        }
    });
        
    // Seleciona o span que exibirá o status do Flow
    var flowStatusSpan = document.getElementById('flowStatus');

    // Adiciona um evento de mudança ao input do switch
    switchInput.addEventListener('change', function() {
        // Verifica se o switch está marcado (ativado)
        if (this.checked) {
            // Se estiver marcado, exibe "Flow Ativado"
            flowStatusSpan.textContent = 'Flow Ativado';
            // Remove todas as classes .filter
            removeFilterClasses();
        } else {
            // Se não estiver marcado, exibe "Flow Desativado"
            flowStatusSpan.textContent = 'Flow Desativado';
            // Restaura todas as classes .filter
            restoreFilterClasses();
        }
    });

    // Função para remover todas as classes .filter
    function removeFilterClasses() {
        var elements = document.querySelectorAll('.filter');
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.remove('filter');
        }
    }

    // Função para restaurar todas as classes .filter
    function restoreFilterClasses() {
        var elements = document.querySelectorAll('[data-filter-class]');
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add('filter');
        }
    }
});