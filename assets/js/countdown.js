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