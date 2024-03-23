document.addEventListener("DOMContentLoaded", function() {
    function getMonthName(month) {
        const months = [
            "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
        ];
        return months[month];
    }

    function formatDay(day) {
        return day < 10 ? '0' + day : day;
    }

    const dataAtual = new Date();
    const dataFormatada = formatDay(dataAtual.getDate()) + ' de ' + getMonthName(dataAtual.getMonth()) + ' de ' + dataAtual.getFullYear();
    document.getElementById('dateNow').innerText = dataFormatada;

    function updateMarking(clickedDay, isPositive) {
        const clickedElement = document.getElementById('day' + clickedDay);

        if (!clickedElement.classList.contains('positiveCheck') && !clickedElement.classList.contains('negativeCheck')) {
            clickedElement.classList.remove('positiveCheck', 'negativeCheck');

            localStorage.setItem('day' + clickedDay, isPositive ? '+1' : '-1');

            if (isPositive) {
                clickedElement.classList.add('positiveCheck');
                clickedElement.querySelector('span').innerText = '+1';
                document.getElementById('positiveButton').classList.add('active');
                document.getElementById('negativeButton').classList.remove('active');
            } else {
                clickedElement.classList.add('negativeCheck');
                clickedElement.querySelector('span').innerText = '-1';
                document.getElementById('negativeButton').classList.add('active');
                document.getElementById('positiveButton').classList.remove('active');
            }
        }
    }

    function loadMarkings() {
        for (let i = 0; i < 60; i++) {
            const mark = localStorage.getItem('day' + i);
            if (mark) {
                const element = document.getElementById('day' + i);
                element.querySelector('span').innerText = mark;
                element.classList.add(mark.charAt(0) === '+' ? 'positiveCheck' : 'negativeCheck');
            }
        }
    }

    function loadActiveButtonState() {
        const activeButton = localStorage.getItem('activeButton');
        if (activeButton) {
            document.getElementById(activeButton).classList.add('active');
        }
    }

    loadMarkings();
    loadActiveButtonState();
    document.getElementById('positiveButton').addEventListener('click', function() {
        updateMarking(0, true);
        localStorage.setItem('activeButton', 'positiveButton');
    });

    document.getElementById('negativeButton').addEventListener('click', function() {
        updateMarking(0, false);
        localStorage.setItem('activeButton', 'negativeButton');
    });

    const comecarButton = document.getElementById('btnComecar');

    comecarButton.addEventListener('click', function() {
        const selectDiv = document.querySelector('.select');
        selectDiv.style.display = 'none';

        const desafioOptions = document.querySelector('.desafioOptions');
        desafioOptions.style.display = 'block';

        const steps = document.querySelectorAll('.desafioOptions > div');
        for (let i = 0; i < steps.length; i++) {
            if (steps[i].classList.contains('step1')) {
                steps[i].style.display = 'block';
            } else {
                steps[i].style.display = 'none';
            }
        }
    });

    const nextButtons = document.querySelectorAll('.next');
    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.parentElement.parentElement;
            const nextStep = currentStep.nextElementSibling;

            currentStep.style.display = 'none';

            if (nextStep) {
                nextStep.style.display = 'block';
            } else {
                const modal = document.getElementById('modalDesafio');
                const bootstrapModal = bootstrap.Modal.getInstance(modal);
                bootstrapModal.hide();
            }
        });
    });

    const backButtons = document.querySelectorAll('.back');
    backButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.parentElement.parentElement;
            const previousStep = currentStep.previousElementSibling;

            currentStep.style.display = 'none';
            previousStep.style.display = 'block';
        });
    });

    function removeFilterClasses() {
        const filteredElements = document.querySelectorAll('.filter');

        filteredElements.forEach(element => {
            element.classList.remove('filter');
        });
    }

    const modalDesafio = document.getElementById('modalDesafio');
    modalDesafio.addEventListener('hidden.bs.modal', function () {
        if (!localStorage.getItem('desafioIniciado')) {
            removeFilterClasses();
        }
    });

    const comecarDesafioButton = document.querySelector('.iniciarDesafio');

    function iniciarDesafio() {
        localStorage.setItem('desafioIniciado', true);
        removeFilterClasses();

        // Exibir a div activeDay
        const activeDayDiv = document.querySelector('.activeDay');
        activeDayDiv.style.display = '';

        // Marcar no localStorage que a div activeDay foi exibida junto com o desafio iniciado
        localStorage.setItem('activeDayShown', true);
    }

    comecarDesafioButton.addEventListener('click', function() {
        const modal = document.getElementById('modalDesafio');
        const bootstrapModal = bootstrap.Modal.getInstance(modal);
        bootstrapModal.hide();
        iniciarDesafio();
        window.location.reload();
    });

    window.onload = function() {
        const desafioIniciadoLocal = localStorage.getItem('desafioIniciado');
        if (desafioIniciadoLocal) {
            removeFilterClasses();
        }
    };

    function verificarDesafioIniciado() {
        const desafioIniciadoLocal = localStorage.getItem('desafioIniciado');
        const activeDayShown = localStorage.getItem('activeDayShown');
        
        if (desafioIniciadoLocal && activeDayShown) {
            const activeDayDiv = document.querySelector('.activeDay');
            activeDayDiv.style.display = '';
        }
    }

    verificarDesafioIniciado();

    const desafioIniciado = localStorage.getItem('desafioIniciado');

    if (desafioIniciado === 'true') {
    // Se o desafio estiver iniciado, esconder o botão "Criar Desafio Caverna" e mostrar o botão "Desafio Ativado"
    const btnCriarDesafio = document.querySelector('.buttonDesafio');
    const btnDesafioAtivado = document.querySelector('.buttonActive');

    btnCriarDesafio.style.display = 'none';
    btnDesafioAtivado.style.display = '';
    }

// Função para atualizar o contador
function atualizarContador() {
    // Horário limite para manter a div activeDay visível (19:00)
    const limiteHora = 19;
    const limiteMinuto = 0;
    const limiteSegundo = 0;

    const agora = new Date();
    const horaAtual = agora.getHours();
    const minutoAtual = agora.getMinutes();
    const segundoAtual = agora.getSeconds();

    let horasRestantes, minutosRestantes, segundosRestantes;

    // Verifica se ainda não é após o horário limite
    if (horaAtual < limiteHora || (horaAtual === limiteHora && minutoAtual < limiteMinuto)) {
        horasRestantes = limiteHora - horaAtual - 1;
        minutosRestantes = 59 - minutoAtual;
        segundosRestantes = 59 - segundoAtual;
    } else {
        // Se já passou do horário limite, calcular tempo restante até as 23:59
        horasRestantes = 23 - horaAtual + limiteHora;
        minutosRestantes = 59 - minutoAtual;
        segundosRestantes = 59 - segundoAtual;
    }

    // Corrigir minutos e segundos negativos
    if (minutosRestantes < 0) {
        minutosRestantes += 60;
    }
    if (segundosRestantes < 0) {
        segundosRestantes += 60;
    }

    // Formata os números para dois dígitos com zero à esquerda
    const horasFormatadas = formatarNumero(horasRestantes);
    const minutosFormatados = formatarNumero(minutosRestantes);
    const segundosFormatados = formatarNumero(segundosRestantes);

    // Atualiza o contador na div activeDay
    const contador = document.querySelector('.activeDay h3');
    contador.textContent = `${horasFormatadas}:${minutosFormatados}:${segundosFormatados}`;

    // Atualiza o contador a cada segundo
    setTimeout(atualizarContador, 1000);
}


// Função para formatar números menores que 10 com um zero à esquerda
function formatarNumero(numero) {
    return numero < 10 ? '0' + numero : numero;
}

// Chamada da função para iniciar o contador
atualizarContador();

// Função para atualizar a visibilidade da div activeDay
function atualizarVisibilidade() {
    const agora = new Date();
    const horaAtual = agora.getHours();

    const activeDayDiv = document.querySelector('.activeDay');

    // Se for antes das 19h ou após as 23:59, mostrar a div activeDay
    if (horaAtual < 19 || horaAtual >= 0 && horaAtual < 4) {
        activeDayDiv.style.display = '';
    } else {
        activeDayDiv.style.display = 'none';
    }

    // Se for 23:59, agendar a próxima atualização para o próximo minuto
    if (horaAtual === 23 && agora.getMinutes() === 59) {
        setTimeout(atualizarVisibilidade, 60000); // Atualiza a cada minuto
    } else {
        // Caso contrário, agendar a próxima atualização para o próximo segundo
        setTimeout(atualizarVisibilidade, 1000); // Atualiza a cada segundo
    }
}

// Chamada da função para iniciar a atualização da visibilidade
atualizarVisibilidade();

function adicionarItemAbdicar(textoItem, isSugestao) {
    const ulItensAdicionados = document.querySelector(".itensAdicionadosAbdicar ul");
    const li = document.createElement("li");
    li.textContent = textoItem; // Utiliza o texto do item em vez do ID

    // Adicionando um elemento de imagem (ícone de lixeira) para remover o item
    const removerIcone = document.createElement("img");
    removerIcone.src = "icone-lixeira.png"; // Substitua "icone-lixeira.png" pelo caminho correto do seu ícone
    removerIcone.alt = "Remover";
    removerIcone.classList.add("removerItem"); // Adicione uma classe para os ícones de remoção

    // Adicionando evento de clique para remover o item quando o ícone for clicado
    removerIcone.addEventListener("click", () => {
        ulItensAdicionados.removeChild(li); // Remove o item da lista
    
        // Remove o item do localStorage
        let itensAdicionados = JSON.parse(localStorage.getItem("itensAdicionadosAbdicar")) || [];
        itensAdicionados = itensAdicionados.filter((i) => i !== textoItem);
        localStorage.setItem("itensAdicionadosAbdicar", JSON.stringify(itensAdicionados));
    
        // Remover as classes "adicionado" e "active" de todos os elementos <li> na lista de sugestões
        const sugestoes = document.querySelectorAll(".sugestoesAbdicar ul li");
        sugestoes.forEach((sugestao) => {
            sugestao.classList.remove("adicionado", "active");
        });
    });

    li.appendChild(removerIcone); // Adiciona o ícone de remoção ao lado do item
    ulItensAdicionados.appendChild(li);

    // Salvando no localStorage
    let itensAdicionados = JSON.parse(localStorage.getItem("itensAdicionadosAbdicar")) || [];
    itensAdicionados.push(textoItem);
    localStorage.setItem("itensAdicionadosAbdicar", JSON.stringify(itensAdicionados));
}

// Selecionando o botão e a lista de sugestões
const btnAdicionar = document.getElementById("btnAdicionarAbdicar");
const sugestoesAbdicar = document.querySelectorAll(".sugestoesAbdicar ul li");

// Adicionando evento de clique para cada item de sugestão
sugestoesAbdicar.forEach((sugestao) => {
    sugestao.addEventListener("click", () => {
        if (!sugestao.classList.contains("adicionado")) {
            sugestao.classList.add("adicionado", "active"); // Adiciona a classe "adicionado" e "active" para indicar que o item foi adicionado
            const itemAdicionado = sugestao.textContent; // Alteração aqui para pegar o texto do item clicado
            adicionarItemAbdicar(itemAdicionado, true); // Passando true para indicar que o item foi adicionado a partir das sugestões
        }
    });
});

// Adicionando evento de clique para o botão "Adicionar"
btnAdicionar.addEventListener("click", () => {
    const inputAbdicar = document.getElementById("inputAbdicar");
    const novoItem = inputAbdicar.value.trim();
    if (novoItem !== "") {
        adicionarItemAbdicar(novoItem, false); // Passando false para indicar que o item foi adicionado manualmente
        inputAbdicar.value = ""; // Limpa o campo de entrada após adicionar
    }
});

function adicionarItemFalhar(textoItem, isSugestao) {
    const ulItensAdicionados = document.querySelector(".itensAdicionadosFalhas ul");
    const li = document.createElement("li");
    li.textContent = textoItem; // Utiliza o texto do item em vez do ID

    // Adicionando um elemento de imagem (ícone de lixeira) para remover o item
    const removerIcone = document.createElement("img");
    removerIcone.src = "icone-lixeira.png"; // Substitua "icone-lixeira.png" pelo caminho correto do seu ícone
    removerIcone.alt = "Remover";
    removerIcone.classList.add("removerItem"); // Adicione uma classe para os ícones de remoção

    // Adicionando evento de clique para remover o item quando o ícone for clicado
    removerIcone.addEventListener("click", () => {
        ulItensAdicionados.removeChild(li); // Remove o item da lista
    
        // Remove o item do localStorage
        let itensAdicionados = JSON.parse(localStorage.getItem("itensAdicionadosFalhar")) || [];
        itensAdicionados = itensAdicionados.filter((i) => i !== textoItem);
        localStorage.setItem("itensAdicionadosFalhar", JSON.stringify(itensAdicionados));
    
        // Remover as classes "adicionado" e "active" de todos os elementos <li> na lista de sugestões
        const sugestoes = document.querySelectorAll(".sugestoesFalhas ul li");
        sugestoes.forEach((sugestao) => {
            sugestao.classList.remove("adicionado", "active");
        });
    });

    li.appendChild(removerIcone); // Adiciona o ícone de remoção ao lado do item
    ulItensAdicionados.appendChild(li);

    // Salvando no localStorage
    let itensAdicionados = JSON.parse(localStorage.getItem("itensAdicionadosFalhar")) || [];
    itensAdicionados.push(textoItem);
    localStorage.setItem("itensAdicionadosFalhar", JSON.stringify(itensAdicionados));
}

// Selecionando o botão e a lista de sugestões de falhas
const btnAdicionarFalhar = document.getElementById("btnAdicionarFalhar");
const sugestoesFalhas = document.querySelectorAll(".sugestoesFalhas ul li");

// Adicionando evento de clique para cada item de sugestão de falhas
sugestoesFalhas.forEach((sugestao) => {
    sugestao.addEventListener("click", () => {
        if (!sugestao.classList.contains("adicionado")) {
            sugestao.classList.add("adicionado", "active"); // Adiciona a classe "adicionado" e "active" para indicar que o item foi adicionado
            const itemAdicionado = sugestao.textContent; // Alteração aqui para pegar o texto do item clicado
            adicionarItemFalhar(itemAdicionado, true); // Passando true para indicar que o item foi adicionado a partir das sugestões
        }
    });
});

// Adicionando evento de clique para o botão "Adicionar" de falhas
btnAdicionarFalhar.addEventListener("click", () => {
    const inputFalhar = document.getElementById("inputFalhar");
    const novoItem = inputFalhar.value.trim();
    if (novoItem !== "") {
        adicionarItemFalhar(novoItem, false); // Passando false para indicar que o item foi adicionado manualmente
        inputFalhar.value = ""; // Limpa o campo de entrada após adicionar
    }
});


const textareaMensagem = document.querySelector(".step3 textarea");
const btnIniciarDesafio = document.querySelector(".step3 .iniciarDesafio");

// Desabilitar o botão de iniciar desafio por padrão
btnIniciarDesafio.disabled = true;

// Verificar se há conteúdo na área de texto e habilitar o botão de iniciar desafio conforme necessário
textareaMensagem.addEventListener("input", () => {
    const mensagem = textareaMensagem.value.trim();
    if (mensagem.length > 0) {
        btnIniciarDesafio.disabled = false;
    } else {
        btnIniciarDesafio.disabled = true;
    }

    // Salvando no localStorage
    localStorage.setItem("mensagemDesafio", mensagem);
});

// Adicionando evento de clique para o botão "Iniciar Desafio"
btnIniciarDesafio.addEventListener("click", () => {
    // Aqui você pode adicionar a lógica para iniciar o desafio
    // Por exemplo: window.location.href = "pagina-do-desafio.html";
});

// Recuperando os itens salvos no localStorage
const itensAbdicar = JSON.parse(localStorage.getItem("itensAdicionadosAbdicar")) || [];
const itensFalhar = JSON.parse(localStorage.getItem("itensAdicionadosFalhar")) || [];

// Selecionando as listas onde os itens serão exibidos
const listaAbdicar = document.querySelector(".meComprometo ul");
const listaFalhar = document.querySelector(".naoFalhar ul");

// Função para adicionar os itens às listas HTML
function adicionarItensLista(itens, lista) {
    lista.innerHTML = ""; // Limpa a lista para evitar duplicatas

    itens.forEach((item) => {
        const li = document.createElement("li");
        li.textContent = item;
        lista.appendChild(li);
    });
}

// Adicionando os itens às listas correspondentes
adicionarItensLista(itensAbdicar, listaAbdicar);
adicionarItensLista(itensFalhar, listaFalhar);

function calcularDataDesafio() {
    const dataAtual = new Date();
    const diaInicio = dataAtual.getDate();
    const mesInicio = dataAtual.getMonth() + 1; // Adicionando 1 porque os meses começam do zero (janeiro é 0)
    const anoInicio = dataAtual.getFullYear();

    const dataFinal = new Date(anoInicio, mesInicio, diaInicio);
    dataFinal.setMonth(dataFinal.getMonth() + 1); // Adicionando um mês à data de início

    const diaFinal = dataFinal.getDate();
    const mesFinal = dataFinal.getMonth();
    const anoFinal = dataFinal.getFullYear();

    const inicioDesafio = `${formatDay(diaInicio)}/${formatDay(mesInicio)}/${anoInicio}`;
    const finalDesafio = `${formatDay(diaFinal)}/${formatDay(mesFinal)}/${anoFinal}`;

    return { inicioDesafio, finalDesafio };
}

function formatDay(day) {
    return day < 10 ? '0' + day : day;
}

// Chamando a função para calcular as datas do desafio
const datasDesafio = calcularDataDesafio();

// Exibindo as datas no elemento HTML
document.getElementById('inicioDesafio').innerText = `Inicio: ${datasDesafio.inicioDesafio} - Finaliza em: ${datasDesafio.finalDesafio}`;


});