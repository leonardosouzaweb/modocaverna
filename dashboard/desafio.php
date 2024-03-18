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
                            <button data-bs-toggle="modal" data-bs-target="#modalDesafio">Criar desafio Caverna</button>
                        </div>
                        <div>
                            <p>Como funciona?</p>
                        </div>
                    </div>

                    <div class="content">
                        <div>
                            <div class="meComprometo">
                                <span>Me comprometo a abdicar de:</span>
                                <img src="../assets/images/icons/icEmpty.svg">
                            </div>
                            <div class="naoFalhar">
                                <span>Não posso falhar:</span>
                                <img src="../assets/images/icons/icEmpty.svg">
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
                                <span>Como foi seu dia hoje?</span>
                                <h1>13 de março de 2024</h1>
                                <hr>
                                <div class="buttons">
                                    <button id="positiveButton" class="positive">Marcar como positivo</button>
                                    <button id="negativeButton" class="negative">Marcar como negativo</button>
                                </div>
                                <textarea name="" id="" class="form-control" placeholder="Gostaria de registrar o motivo da sua avaliação? (Opcional)"></textarea>
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
</body>
</html>