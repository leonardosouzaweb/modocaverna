document.addEventListener("DOMContentLoaded", function() {
    var adicionarBtn = document.getElementById("adicionarRitualMatinal");
    var salvarBtn = document.getElementById("salvarRitualMatinal");
    
    adicionarBtn.addEventListener("click", function() {
        var comecaInput = document.getElementById("comecaRitualMatinalInput").value;
        var terminaInput = document.getElementById("terminaRitualMatinalInput").value;
        var descricaoInput = document.getElementById("descricaoRitualMatinalInput").value;

        if (comecaInput && terminaInput && descricaoInput) {
            var listItem = "<li>" + descricaoInput + "</li>";
            document.getElementById("ritualAddListMatinal").innerHTML += listItem;

            var item = comecaInput + "|" + terminaInput + "|" + descricaoInput;
            var itemsSalvos = localStorage.getItem("ritualMatinal");
            if (itemsSalvos) {
                itemsSalvos += ";" + item;
            } else {
                itemsSalvos = item;
            }
            localStorage.setItem("ritualMatinal", itemsSalvos);
        }
    });

    salvarBtn.addEventListener("click", function() {
        // Fecha a modal
        var modal = document.getElementById("modalRitualMatinal");
        var modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();

        // Recarrega a página após salvar
        window.location.reload();
    });

    // Carrega os dados salvos quando a página é carregada
    function carregarDadosSalvos() {
        var itemsSalvos = localStorage.getItem("ritualMatinal");
        if (itemsSalvos) {
            var ritualBlockAddMatinal = document.querySelector(".ritualBlockAddMatinal");
            var items = itemsSalvos.split(";");
            var [comeca, termina] = items[0].split("|"); // Obter o horário de início e término do primeiro item
            var spanElement = document.createElement("span");
            spanElement.textContent = `⏰ ${comeca} às ${termina}`;
            ritualBlockAddMatinal.appendChild(spanElement);
            var ulElement = document.createElement("ul");

            for (var i = 0; i < items.length; i++) {
                var [comeca, termina, descricao] = items[i].split("|");
                var liElement = document.createElement("li");
                liElement.textContent = descricao;
                ulElement.appendChild(liElement);
            }

            ritualBlockAddMatinal.appendChild(ulElement);
        }
    }

    carregarDadosSalvos(); // Chama a função para carregar os dados salvos ao carregar a página
});
