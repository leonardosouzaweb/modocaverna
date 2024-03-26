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
                <div class="defaultPage2">
                    <div class="conhecimento">
                         <img src="../assets/images/banners/banner-livros.png">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-lista-tab" data-bs-toggle="tab" data-bs-target="#nav-lista" type="button" role="tab" aria-controls="nav-lista" aria-selected="true">Lista de Desejos</button>
                                    <button class="nav-link" id="nav-biblioteca-tab" data-bs-toggle="tab" data-bs-target="#nav-biblioteca" type="button" role="tab" aria-controls="nav-biblioteca" aria-selected="false">Minha Biblioteca</button>
                                    <button class="nav-link" id="nav-andamento-tab" data-bs-toggle="tab" data-bs-target="#nav-andamento" type="button" role="tab" aria-controls="nav-andamento" aria-selected="false">Em Andamento</button>
                                    <button class="nav-link" id="nav-concluido-tab" data-bs-toggle="tab" data-bs-target="#nav-concluido" type="button" role="tab" aria-controls="nav-concluido" aria-selected="false">Concluidos</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-lista" role="tabpanel" aria-labelledby="nav-lista-tab" tabindex="0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Categoria</th>
                                            <th>Onde comprar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bíblia King James 1611</td>
                                            <td><span class="badge bg-primary">Desenvolvimento Pessoal</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>

                                        <tr>
                                            <td>Café com Deus Pai</td>
                                            <td><span class="badge bg-primary">Desenvolvimento Pessoal</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>

                                        <tr>
                                            <td>O Almanaque de Naval</td>
                                            <td><span class="badge bg-success">Negocios</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>

                                        <tr>
                                            <td>O Homem Mais Rico da Babilônia</td>
                                            <td><span class="badge bg-warning">Finanças</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>

                                        <tr>
                                            <td>A psicologia financeira</td>
                                            <td><span class="badge bg-secondary">Psicologia</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-biblioteca" role="tabpanel" aria-labelledby="nav-biblioteca-tab" tabindex="0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Categoria</th>
                                            <th>Onde comprar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bíblia King James 1611</td>
                                            <td><span class="badge bg-primary">Desenvolvimento Pessoal</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>

                                        <tr>
                                            <td>Café com Deus Pai</td>
                                            <td><span class="badge bg-primary">Desenvolvimento Pessoal</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>

                                        <tr>
                                            <td>O Almanaque de Naval</td>
                                            <td><span class="badge bg-success">Negocios</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-andamento" role="tabpanel" aria-labelledby="nav-andamento-tab" tabindex="0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Categoria</th>
                                            <th>Onde comprar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bíblia King James 1611</td>
                                            <td><span class="badge bg-primary">Desenvolvimento Pessoal</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-concluido" role="tabpanel" aria-labelledby="nav-concluido-tab" tabindex="0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Categoria</th>
                                            <th>Onde comprar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bíblia King James 1611</td>
                                            <td><span class="badge bg-primary">Desenvolvimento Pessoal</span></td>
                                            <td>🔗 https://amzn.to/3SD24OZ</td>
                                            <td>✅ Concluido</td>
                                        </tr>
                                    </tbody>
                                </table>
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