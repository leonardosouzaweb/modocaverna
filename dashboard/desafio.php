<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🔺 Modo Caverna</title>
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- GLOBAL CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="wrapper">
            <div class="heading">
                <div class="container">
                    <div class="logo">
                        <img src="../assets/images/logo.svg">
                    </div>
                    <div class="menu">
                    <?php include_once '../includes/menu.php'; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="desafio">
                    <div class="top">
                        <div>
                            <button data-bs-toggle="modal" data-bs-target="#modalDesafio"><img src="../assets/images/icons/icDesafio.svg"> Criar desafio Caverna</button>
                        </div>
                        <div>
                            <p>Como funciona?</p>
                        </div>
                    </div>

                    <div class="content">
                        <div>
                            <div class="meComprometo">
                                <span>Me comprometo a abdicar de:</span>
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="naoFalhar">
                                <span>Não posso falhar:</span>
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <div class="desafioBox">
                                <div class="title">
                                    <div>
                                        <span>Desafio Express</span>
                                        <p>Inicio: 00/00/2024 - Finaliza em: 00/00/2024</p>
                                    </div>

                                    <div>
                                        <span>Meta</span>
                                        <div class="progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="days">
                                    <?php
                                    for ($i = 0; $i < 60; $i++) {
                                        if ($i < 30) {
                                            echo '<div id="day' . $i . '"><span>0</span></div>';
                                        } else {
                                            echo '<div id="day' . $i . '" class="disabled"><span>0</span></div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div class="diaHoje">
                                <div class="hidden">
                                    <span>Como foi seu dia hoje?</span>
                                    <h1>13 de março de 2024</h1>
                                    <hr>
                                    <div class="buttons">
                                        <button id="positiveButton" class="positive">Marcar como positivo</button>
                                        <button id="negativeButton" class="negative">Marcar como negativo</button>
                                    </div>
                                    <textarea name="" id="" class="form-control" placeholder="Gostaria de registrar o motivo da sua avaliação? (Opcional)"></textarea>
                                </div>
                                <div class="activeDay">
                                    <span>Sua avaliação de hoje ficará disponível em:</span>
                                    <div class="hourTilt">
                                        <img src="../assets/images/icons/icHour.svg">
                                        <h3>00:00:00</h3>
                                    </div>
                                    <small>Depois que sua avaliação estiver disponível, você tem <br>até às 23:59 para fazer o registro do seu dia.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODALS -->
    <div class="globalModals">
        <?php include_once '../modals/desafio.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/functions.js"></script>
    <script src="../assets/js/timer.js"></script>
    <script>
        $(document).ready(function() {
            $('#btnComecar').click(function() {
                $('.select').hide();
                $('.desafioOptions').show();
            });

            $("#btnAdicionarAbdicar").click(function() {
                var newItem = $("#inputAbdicar").val();
                if (newItem !== "") {
                    $(".itensAdicionadosAbdicar ul").append("<li>" + newItem + "</li>");
                    $("#inputAbdicar").val(""); // Limpa o campo de entrada
                    saveItems("itensAbdicar"); // Salva os itens da seção "Me comprometo a abdicar de:" em localStorage
                }
            });

            $(".sugestoesAbdicar ul li").click(function() {
                var selectedItem = $(this).text();
                if (!$(".itensAdicionadosAbdicar ul").find("li:contains(" + selectedItem + ")").length) {
                    $(".itensAdicionadosAbdicar ul").append("<li>" + selectedItem + "</li>");
                    $(this).addClass("active"); // Aplica a classe active ao item selecionado
                    saveItems("itensAbdicar"); // Salva os itens da seção "Me comprometo a abdicar de:" em localStorage
                }
            });

            // Lógica para a seção "Não posso falhar"
            $("#btnAdicionarFalhar").click(function() {
                var newItem = $("#inputFalhar").val();
                if (newItem !== "") {
                    $(".itensAdicionadosFalhas ul").append("<li>" + newItem + "</li>");
                    $("#inputFalhar").val(""); // Limpa o campo de entrada
                    saveItems("itensFalhar"); // Salva os itens da seção "Não posso falhar" em localStorage
                }
            });

            $(".sugestoesFalhas ul li").click(function() {
                var selectedItem = $(this).text();
                if (!$(".itensAdicionadosFalhas ul").find("li:contains(" + selectedItem + ")").length) {
                    $(".itensAdicionadosFalhas ul").append("<li>" + selectedItem + "</li>");
                    $(this).addClass("active"); // Aplica a classe active ao item selecionado
                    saveItems("itensFalhar"); // Salva os itens da seção "Não posso falhar" em localStorage
                }
            });

            function saveItems(key) {
                var items = [];
                if (key === "itensAbdicar") {
                    $(".itensAdicionadosAbdicar ul li").each(function() {
                        items.push($(this).text());
                    });
                } else if (key === "itensFalhar") {
                    $(".itensAdicionadosFalhas ul li").each(function() {
                        items.push($(this).text());
                    });
                }
                localStorage.setItem(key, JSON.stringify(items));
            }

            function loadItems(key) {
                var items = JSON.parse(localStorage.getItem(key));
                if (items) {
                    if (key === "itensAbdicar") {
                        items.forEach(function(item) {
                            $(".itensAdicionadosAbdicar ul").append("<li>" + item + "</li>");
                        });
                    } else if (key === "itensFalhar") {
                        items.forEach(function(item) {
                            $(".itensAdicionadosFalhas ul").append("<li>" + item + "</li>");
                        });
                    }
                }
            }

            loadItems("itensAbdicar");
            loadItems("itensFalhar");

            function displaySavedItems() {
                var itensAbdicar = JSON.parse(localStorage.getItem("itensAbdicar"));
                var itensFalhar = JSON.parse(localStorage.getItem("itensFalhar"));

                // Exibir os itens da seção "Me comprometo a abdicar de:"
                if (itensAbdicar && itensAbdicar.length > 0) {
                    $(".meComprometo ul").empty(); // Limpar a lista existente
                    itensAbdicar.forEach(function(item) {
                        $(".meComprometo ul").append("<li>" + item + "</li>");
                    });
                }

                // Exibir os itens da seção "Não posso falhar"
                if (itensFalhar && itensFalhar.length > 0) {
                    $(".naoFalhar ul").empty(); // Limpar a lista existente
                    itensFalhar.forEach(function(item) {
                        $(".naoFalhar ul").append("<li>" + item + "</li>");
                    });
                }

                // Esconder a imagem se houver itens na lista
                $(".meComprometo .container img").toggle(!$(".meComprometo ul").is(":empty"));
                $(".naoFalhar .container img").toggle(!$(".naoFalhar ul").is(":empty"));
            }

            // Chamada da função para exibir os itens salvos ao clicar no botão "Começar desafio"
            $(".success").click(function() {
                displaySavedItems();
                $('#modalDesafio').modal('hide'); // Fecha a modal manualmente
            });

            // Carregar os itens salvos do localStorage ao carregar a página
            $(document).ready(function() {
                displaySavedItems();
            });
        });
    </script>
</body>
</html>