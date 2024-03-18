// SALVA LISTA
// ======================================================================================================================== //
function salvarItens() {
    localStorage.setItem('itens', JSON.stringify(itens));
}

function carregarItens() {
    const itensString = localStorage.getItem('itens');
    if (itensString) {
        itens = JSON.parse(itensString);
        atualizarLista();
        verificarScroll(); 
    }
}

function verificarScroll() {
    const listaItens = document.getElementById('listaItens');
    if (listaItens.children.length >= 3) {
        listaItens.classList.add('scroll');
    } else {
        listaItens.classList.remove('scroll');
    }
}

function adicionarItem() {
    const novoItem = document.getElementById('novoItemInput').value;
    if (novoItem.trim() !== '') {
        itens.push(novoItem);
        salvarItens();
        atualizarLista();
        verificarScroll(); 
        document.getElementById('novoItemInput').value = '';
        $('#addNaoEsquecer').modal('hide');
    }
}

function atualizarLista() {
    const listaItens = document.getElementById('listaItens');
    listaItens.innerHTML = '';
    if (itens.length === 0) {
        listaItens.innerHTML = '<li>Nenhum item adicionado ainda.</li>';
    } else {
        itens.forEach(item => {
            const li = document.createElement('li');
            li.textContent = item;
            listaItens.appendChild(li);
        });
    }
}

let itens = [];
document.getElementById('adicionarItem').addEventListener('click', adicionarItem);
carregarItens();
// ======================================================================================================================== //

// SALVA TREINOS
// ======================================================================================================================== //
function salvarTreinos() {
    sessionStorage.setItem('treinos', JSON.stringify(treinos));
}

function carregarTreinos() {
    const treinosString = sessionStorage.getItem('treinos');
    if (treinosString) {
        treinos = JSON.parse(treinosString);
        atualizarListaTreinos();
    }
}

function adicionarTreino() {
    const começa = document.getElementById('comecaInput').value;
    const termina = document.getElementById('terminaInput').value;
    const descricao = document.getElementById('descricaoInput').value;

    if (começa.trim() !== '' && termina.trim() !== '' && descricao.trim() !== '') {
        const novoTreino = {
            começa: começa,
            termina: termina,
            descricao: descricao
        };
        treinos.push(novoTreino);
        salvarTreinos();
        atualizarListaTreinos();
        $('#addTreinos').modal('hide');
    }
}

function atualizarListaTreinos() {
    const listaTreinos = document.getElementById('listaTreinos');
    listaTreinos.innerHTML = '';
    if (treinos.length === 0) {
        listaTreinos.innerHTML = '<li>Nenhum treino adicionado ainda.</li>';
    } else {
        treinos.forEach(treino => {
            const li = document.createElement('li');
            li.innerHTML = `<small>${treino.começa}</small> - <small>${treino.termina}</small> ${treino.descricao}`;
            listaTreinos.appendChild(li);
        });
    }
}

let treinos = [];

document.getElementById('adicionarTreino').addEventListener('click', adicionarTreino);
carregarTreinos();
// ======================================================================================================================== //

// SALVA ROTINA
// ======================================================================================================================== //
function salvarRotinas() {
    sessionStorage.setItem('rotinas', JSON.stringify(rotinas));
}

function carregarRotinas() {
    const rotinasString = sessionStorage.getItem('rotinas');
    if (rotinasString) {
        rotinas = JSON.parse(rotinasString);
        atualizarListaRotinas();
    }
}

function adicionarRotina() {
    const comeca = document.getElementById('comecaRotinaInput').value;
    const termina = document.getElementById('terminaRotinaInput').value;
    const descricao = document.getElementById('descricaoRotinaInput').value;

    if (comeca.trim() !== '' && termina.trim() !== '' && descricao.trim() !== '') {
        const novaRotina = {
            comeca: comeca,
            termina: termina,
            descricao: descricao
        };
        rotinas.push(novaRotina);
        salvarRotinas();
        atualizarListaRotinas();
        $('#addRotina').modal('hide'); 
    }
}

function atualizarListaRotinas() {
    const listaRotinas = document.getElementById('listaRotinas');
    listaRotinas.innerHTML = '';
    if (rotinas.length === 0) {
        listaRotinas.innerHTML = '<li>Nenhuma rotina adicionada ainda.</li>';
    } else {
        rotinas.forEach(rotina => {
            const li = document.createElement('li');
            li.innerHTML = `<small>${rotina.comeca}</small> - <small>${rotina.termina}</small> ${rotina.descricao}`;
            listaRotinas.appendChild(li);
        });
    }
}

let rotinas = [];

document.getElementById('adicionarRotina').addEventListener('click', adicionarRotina);
carregarRotinas();
// ======================================================================================================================== //

// LISTA COMPROMISSO
// ======================================================================================================================== //
function salvarCompromissos() {
    sessionStorage.setItem('compromissos', JSON.stringify(compromissos));
}

function carregarCompromissos() {
    const compromissosString = sessionStorage.getItem('compromissos');
    if (compromissosString) {
        compromissos = JSON.parse(compromissosString);
        atualizarListaCompromissos();
    }
}

function adicionarCompromisso() {
    const comeca = document.getElementById('comecaCompromissoInput').value;
    const termina = document.getElementById('terminaCompromissoInput').value;
    const descricao = document.getElementById('descricaoCompromissoInput').value;

    if (comeca.trim() !== '' && termina.trim() !== '' && descricao.trim() !== '') {
        const novoCompromisso = {
            comeca: comeca,
            termina: termina,
            descricao: descricao
        };
        compromissos.push(novoCompromisso);
        salvarCompromissos();
        atualizarListaCompromissos();

        // Verificar se há 4 ou mais itens para habilitar a classe scroll
        if (compromissos.length >= 4) {
            document.getElementById('listaCompromissos').classList.add('scroll');
        }

        $('#addCompromisso').modal('hide'); 
    }
}

function atualizarListaCompromissos() {
    const listaCompromissos = document.getElementById('listaCompromissos');
    if (!listaCompromissos.classList.contains('scroll') && compromissos.length >= 4) {
        listaCompromissos.classList.add('scroll');
    }
    listaCompromissos.innerHTML = '';
    if (compromissos.length === 0) {
        listaCompromissos.innerHTML = '<li>Nenhum compromisso adicionado ainda.</li>';
    } else {
        compromissos.forEach(compromisso => {
            const li = document.createElement('li');
            li.innerHTML = `<small>${compromisso.comeca}</small> - <small>${compromisso.termina}</small> ${compromisso.descricao}`;
            listaCompromissos.appendChild(li);
        });
    }
}

let compromissos = [];

document.getElementById('adicionarCompromisso').addEventListener('click', adicionarCompromisso);
carregarCompromissos();
// ======================================================================================================================== //

// LISTA REFEICOES
// ======================================================================================================================== //
function salvarRefeicoes() {
    sessionStorage.setItem('refeicoes', JSON.stringify(refeicoes));
}

function carregarRefeicoes() {
    const refeicoesString = sessionStorage.getItem('refeicoes');
    if (refeicoesString) {
        refeicoes = JSON.parse(refeicoesString);
        atualizarListaRefeicoes();
    }
}

function adicionarRefeicao() {
    const horario = document.getElementById('horarioRefeicao').value;
    const descricao = document.getElementById('descricaoRefeicaoInput').value;

    if (horario.trim() !== '' && descricao.trim() !== '') {
        const novaRefeicao = {
            horario: horario,
            descricao: descricao
        };
        refeicoes.push(novaRefeicao);
        salvarRefeicoes();
        atualizarListaRefeicoes();
        $('#addRefeicao').modal('hide'); 
    }
}


function atualizarListaRefeicoes() {
    const listaRefeicoes = document.getElementById('listaRefeicoes');
    listaRefeicoes.innerHTML = '';
    if (refeicoes.length === 0) {
        listaRefeicoes.innerHTML = '<li>Nenhuma refeição adicionada ainda.</li>';
    } else {
        refeicoes.forEach(refeicao => {
            const li = document.createElement('li');
            li.innerHTML = `<small>${refeicao.horario}</small> - ${refeicao.descricao}`;
            listaRefeicoes.appendChild(li);
        });
    }
}

let refeicoes = [];
document.getElementById('adicionarRefeicao').addEventListener('click', adicionarRefeicao);

carregarRefeicoes();
// ======================================================================================================================== //

// LISTA OBJETIVOS
// ======================================================================================================================== //
function salvarObjetivosDia() {
    sessionStorage.setItem('objetivosDia', JSON.stringify(objetivosDia));
}

function carregarObjetivosDia() {
    const objetivosDiaString = sessionStorage.getItem('objetivosDia');
    if (objetivosDiaString) {
        objetivosDia = JSON.parse(objetivosDiaString);
        atualizarListaObjetivosDia();
        
        // Verificar se há 4 ou mais itens para adicionar a classe customScroll
        if (objetivosDia.length >= 4) {
            document.getElementById('objetivosDia').querySelector('.scroll').classList.add('customScroll');
        }
    }
}

function adicionarObjetivoDia() {
    const descricao = document.getElementById('descricaoObjetivo').value;

    if (descricao.trim() !== '') {
        const novoObjetivoDia = {
            descricao: descricao,
            concluido: false
        };
        objetivosDia.push(novoObjetivoDia);
        salvarObjetivosDia();
        atualizarListaObjetivosDia();

        // Verificar se há 4 ou mais itens para adicionar a classe customScroll
        if (objetivosDia.length >= 4) {
            document.getElementById('objetivosDia').querySelector('.scroll').classList.add('customScroll');
        }

        $('#addObjetivo').modal('hide');
    }
}

function atualizarListaObjetivosDia() {
    const listaObjetivosDia = document.getElementById('objetivosDia').querySelector('.scroll');
    listaObjetivosDia.innerHTML = '';
    if (objetivosDia.length === 0) {
        listaObjetivosDia.innerHTML = '<p>Nenhum objetivo adicionado ainda.</p>';
    } else {
        objetivosDia.forEach(objetivo => {
            const divCheckbox = document.createElement('div');
            divCheckbox.classList.add('form-check');

            const inputCheckbox = document.createElement('input');
            inputCheckbox.classList.add('form-check-input');
            inputCheckbox.type = 'checkbox';
            inputCheckbox.value = '';
            inputCheckbox.id = 'flexCheckDefault_' + Math.random().toString(36).substring(7);
            divCheckbox.appendChild(inputCheckbox);

            const labelCheckbox = document.createElement('label');
            labelCheckbox.classList.add('form-check-label');
            labelCheckbox.setAttribute('for', inputCheckbox.id);
            labelCheckbox.textContent = objetivo.descricao;
            divCheckbox.appendChild(labelCheckbox);

            listaObjetivosDia.appendChild(divCheckbox);
        });
    }
}

let objetivosDia = [];
document.getElementById('adicionarObjetivo').addEventListener('click', adicionarObjetivoDia);
carregarObjetivosDia();
// ======================================================================================================================== //

// LISTA TAREFAS DO DIA
// ======================================================================================================================== //
function salvarTarefas() {
    sessionStorage.setItem('tarefas', JSON.stringify(tarefas));
}

function carregarTarefas() {
    const tarefasString = sessionStorage.getItem('tarefas');
    if (tarefasString) {
        tarefas = JSON.parse(tarefasString);
        atualizarListaTarefas();
    }
}

function adicionarTarefa() {
    const comeca = document.getElementById('comecaTarefasInput').value;
    const termina = document.getElementById('terminaTarefasInput').value;
    const descricao = document.getElementById('descricaoTarefasInput').value;

    if (comeca.trim() !== '' && termina.trim() !== '' && descricao.trim() !== '') {
        const novaTarefa = {
            comeca: comeca,
            termina: termina,
            descricao: descricao
        };
        tarefas.push(novaTarefa);
        salvarTarefas();
        atualizarListaTarefas();

        // Verificar se há 4 ou mais itens para habilitar a classe scroll
        if (tarefas.length >= 4) {
            document.getElementById('listaTarefas').classList.add('scroll');
        }

        $('#addTarefas').modal('hide');
    }
}

function atualizarListaTarefas() {
    const listaTarefas = document.getElementById('listaTarefas');
    if (!listaTarefas.classList.contains('scroll') && tarefas.length >= 4) {
        listaTarefas.classList.add('scroll');
    }
    listaTarefas.innerHTML = '';
    if (tarefas.length === 0) {
        listaTarefas.innerHTML = '<li>Nenhuma tarefa adicionada ainda.</li>';
    } else {
        tarefas.forEach(tarefa => {
            const li = document.createElement('li');
            li.innerHTML = `<small>${tarefa.comeca}</small> - <small>${tarefa.termina}</small> ${tarefa.descricao}`;
            listaTarefas.appendChild(li);
        });
    }
}

let tarefas = [];

document.getElementById('adicionarTarefas').addEventListener('click', adicionarTarefa);
carregarTarefas();

// ======================================================================================================================== //