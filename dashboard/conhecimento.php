<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modo Caverna | Desafio</title>
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- GLOBAL CSS -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="wrapper">
            <div class="heading">
                <div class="container">
                    <div class="logo">
                        <a href="./"><img src="../assets/images/logo.svg"></a>
                    </div>
                    <div class="menu">
                    <?php include_once '../includes/menu.php'; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="defaultPage">
                    <div class="infoPage">
                        <h1>Conheça minha lista de sugestões de leitura e vídeos</h1>
                        <p>Os livros e vídeos que mais impactaram a minha vida e que certamente te ajudarão no seu processo.</p>
                        
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="livros-tab" data-bs-toggle="tab" data-bs-target="#livros-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Livros</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Cursos</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="podcasts-tab" data-bs-toggle="tab" data-bs-target="#podcasts-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Podcasts</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="livros-tab-pane" role="tabpanel" aria-labelledby="livros-tab" tabindex="0">
                                <div class="livros">
                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cursos-tab-pane" role="tabpanel" aria-labelledby="cursos-tab" tabindex="0">
                            <div class="livros">
                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="podcasts-tab-pane" role="tabpanel" aria-labelledby="podcasts-tab" tabindex="0">
                            <div class="livros">
                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>

                                    <div>
                                        <img src="../assets/images/livros/livro1.png">
                                        <span>Nome do Livro</span>
                                    </div>
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
</body>
</html>