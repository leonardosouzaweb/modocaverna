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
                    <div class="conteudoPage">
                        <h1>Treino e Alimentação</h1>
                        
                        <div class="treinos">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-segunda-tab" data-bs-toggle="tab" data-bs-target="#nav-segunda" type="button" role="tab" aria-controls="nav-segunda" aria-selected="true">Segunda-feira</button>
                                    <button class="nav-link" id="nav-terca-tab" data-bs-toggle="tab" data-bs-target="#nav-terca" type="button" role="tab" aria-controls="nav-terca" aria-selected="false">Terça-Feira</button>
                                    <button class="nav-link" id="nav-quarta-tab" data-bs-toggle="tab" data-bs-target="#nav-quarta" type="button" role="tab" aria-controls="nav-quarta" aria-selected="false">Quarta-feira</button>
                                    <button class="nav-link" id="nav-quinta-tab" data-bs-toggle="tab" data-bs-target="#nav-quinta" type="button" role="tab" aria-controls="nav-quinta" aria-selected="false">Quinta-feira</button>
                                    <button class="nav-link" id="nav-sexta-tab" data-bs-toggle="tab" data-bs-target="#nav-sexta" type="button" role="tab" aria-controls="nav-sexta" aria-selected="false">Sexta-feira</button>
                                    <button class="nav-link" id="nav-sabado-tab" data-bs-toggle="tab" data-bs-target="#nav-sabado" type="button" role="tab" aria-controls="nav-sabado" aria-selected="false">Sábado</button>
                                    <button class="nav-link" id="nav-domingo-tab" data-bs-toggle="tab" data-bs-target="#nav-domingo" type="button" role="tab" aria-controls="nav-domingo" aria-selected="false">Domingo</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-segunda" role="tabpanel" aria-labelledby="nav-segunda-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 1 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 2 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-terca" role="tabpanel" aria-labelledby="nav-terca-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 3 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 4 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-quarta" role="tabpanel" aria-labelledby="nav-quarta-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 5 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 6 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-quinta" role="tabpanel" aria-labelledby="nav-quinta-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 7 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 8 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-sexta" role="tabpanel" aria-labelledby="nav-sexta-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 9 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 10 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-sabado" role="tabpanel" aria-labelledby="nav-sabado-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 11 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 12 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-domingo" role="tabpanel" aria-labelledby="nav-domingo-tab" tabindex="0">
                                <div class="treinoInfo">
                                    <div class="card">
                                        <h4>Treino 14 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Boxe</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: --</small>
                                    </div>

                                    <div class="card">
                                        <h4>Treino 15 <button>Editar</button></h4>
                                        <hr>
                                        <h6>Musculação</h6>
                                        <small>⏰ Horario: 6:00 às 07:00</small>
                                        <small>🏋️‍♂️ Ficha de Treino: Musculação D Costas</small>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- COMPRAS -->
                        <h1>Dieta e Suplementação</h1>
                        <div class="dieta">
                            <div>
                                <div class="title">
                                    <img src="../assets/images/icons/icCheckList.svg">
                                    <span>Refeições</span>
                                </div>

                                <div class="minCard">
                                    <h6>Refeição 1 - Café da manhã</h6>
                                    <small>07:00</small>
                                </div>

                                <div class="minCard">
                                    <h6>Refeição 2 - Suplementação</h6>
                                    <small>07:00</small>
                                </div>

                                <div class="minCard">
                                    <h6>Refeição 3 - Almoço</h6>
                                    <small>07:00</small>
                                </div>

                                <div class="minCard">
                                    <h6>Refeição 4 - Lanche da Tarde</h6>
                                    <small>07:00</small>
                                </div>

                                <div class="minCard">
                                    <h6>Refeição 5 - Última do dia</h6>
                                    <small>07:00</small>
                                </div>
                            </div>

                            <div>
                                <div class="title">
                                    <img src="../assets/images/icons/icCheckList.svg">
                                    <span>Lista de Compras</span>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">Frango</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">Pão</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">Brócolis</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                    <label class="form-check-label" for="flexCheckDefault4">Espinafre</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">Tomate</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                    <label class="form-check-label" for="flexCheckDefault6">Rúcula</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                    <label class="form-check-label" for="flexCheckDefault7">Leite</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                    <label class="form-check-label" for="flexCheckDefault8">Requeijão</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                    <label class="form-check-label" for="flexCheckDefault9">Manteiga</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                                    <label class="form-check-label" for="flexCheckDefault10">Queijo</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                    <label class="form-check-label" for="flexCheckDefault11">Batata doce</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                    <label class="form-check-label" for="flexCheckDefault12">Arroz</label>
                                </div>

                            </div>

                            <div>
                                <div class="title">
                                    <img src="../assets/images/icons/icCheckList.svg">
                                    <span>Suplementos</span>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
                                    <label class="form-check-label" for="flexCheckDefault13">Cave Focus</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
                                    <label class="form-check-label" for="flexCheckDefault14">Whey Protein</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
                                    <label class="form-check-label" for="flexCheckDefault15">Creatina</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16">
                                    <label class="form-check-label" for="flexCheckDefault16">Vevance</label>
                                </div>

                                <img src="../assets/images/cookbook.png" class="cook">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('.form-control');

        inputs.forEach(input => {
            const index = input.getAttribute('data-index');
            const savedValue = localStorage.getItem(`meta_${index}`);
            if (savedValue) {
                input.value = savedValue;
            }
        });

        inputs.forEach(input => {
            input.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    const index = input.getAttribute('data-index');
                    const value = input.value.trim();
                    
                    if (value !== '') {
                        localStorage.setItem(`meta_${index}`, value);
                    } else {
                        localStorage.removeItem(`meta_${index}`);
                    }
                }
            });
        });
    });
    </script>

    <script>
        function uploadImage(element) {
            var input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';

            input.click();

            input.onchange = function(event) {
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var uploadedImage = document.createElement('img');
                    uploadedImage.src = e.target.result;
                    uploadedImage.classList.add('uploadedImage', 'imagemCusto');

                    var imageId = 'uploadedImage_' + Date.now(); 
                    uploadedImage.id = imageId;

                    element.innerHTML = '';
                    element.appendChild(uploadedImage);
                    localStorage.setItem(imageId, e.target.result);
                };

                reader.readAsDataURL(file);
            };
        }

        window.onload = function() {
            for (var i = 1; i <= 4; i++) {
                var uploadedImageSrc = localStorage.getItem('uploadedImage_boxImage_' + i);
                if (uploadedImageSrc) {
                    var uploadedImage = document.createElement('img');
                    uploadedImage.src = uploadedImageSrc;
                    uploadedImage.classList.add('uploadedImage', 'imagemCusto');
                    document.getElementById('boxImage_' + i).appendChild(uploadedImage);
                }
            }
        };
    </script>
</body>
</html>