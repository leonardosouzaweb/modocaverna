document.addEventListener("DOMContentLoaded", function() {
    var adicionarBtn = document.getElementById("adicionarRitualNoturno");
    var salvarBtn = document.getElementById("salvarRitualNoturno");
    
    adicionarBtn.addEventListener("click", function() {
        var comecaInput = document.getElementById("comecaRitualNoturnoInput").value;
        var terminaInput = document.getElementById("terminaRitualNoturnoInput").value;
        var descricaoInput = document.getElementById("descricaoRitualNoturnoInput").value;

        if (comecaInput && terminaInput && descricaoInput) {
            var listItem = "<li>" + descricaoInput + "</li>";
            document.getElementById("ritualAddListNoturno").innerHTML += listItem;

            var item = comecaInput + "|" + terminaInput + "|" + descricaoInput;
            var itemsSalvos = localStorage.getItem("ritualNoturno");
            if (itemsSalvos) {
                itemsSalvos += ";" + item;
            } else {
                itemsSalvos = item;
            }
            localStorage.setItem("ritualNoturno", itemsSalvos);
        }
    });

    salvarBtn.addEventListener("click", function() {
        // Fecha a modal
        var modal = document.getElementById("modalRitualNoturno");
        var modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();

        // Recarrega a página após salvar
        window.location.reload();
    });

    // Carrega os dados salvos quando a página é carregada
    function carregarDadosSalvos() {
        var itemsSalvos = localStorage.getItem("ritualNoturno");
        if (itemsSalvos) {
            var ritualBlockAddNoturno = document.querySelector(".ritualBlockAddNoturno");
            var items = itemsSalvos.split(";");
            var [comeca, termina] = items[0].split("|"); // Obter o horário de início e término do primeiro item
            var spanElement = document.createElement("span");
            spanElement.textContent = `⏰ ${comeca} às ${termina}`;
            ritualBlockAddNoturno.appendChild(spanElement);
            var ulElement = document.createElement("ul");

            for (var i = 0; i < items.length; i++) {
                var [comeca, termina, descricao] = items[i].split("|");
                var liElement = document.createElement("li");
                liElement.textContent = descricao;
                ulElement.appendChild(liElement);
            }

            ritualBlockAddNoturno.appendChild(ulElement);
        }
    }

    carregarDadosSalvos(); // Chama a função para carregar os dados salvos ao carregar a página
});
