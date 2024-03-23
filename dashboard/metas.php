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
                        <h1>Metas</h1>
                        <div class="metasHead">
                            <span>🎯 Objetivo Pricipal</span>
                            <p>Preciso estar preparado para as oportunidades que surgirão esse ano.</p>
                        </div>

                        <div class="contentMetas">
                            <div>
                                <span>❓Como? O que preciso fazer?</span>
                                <ul>
                                    <li>1. Me conectar com Deus</li>
                                    <li>2. Focar mais em mim e evitar comparações</li>
                                    <li>3. Confiar no meu potencial</li>
                                    <li>4. Melhorar a auto estima</li>
                                    <li>5. Melhorar a minha ambiência</li>
                                    <li>6. Conhecer pessoas novas</li>
                                    <li>7. Me manter em movimento</li>
                                    <li>8. Investir em conhecimento</li>
                                    <li>9. Ativar o Modo Caverna</li>
                                </ul>
                            </div>

                            <div>
                                <span>❤️ Quadro dos sonhos</span>
                                <div class="itens">
                                    <div class="boxImage" onclick="uploadImage(this)">
                                        <img src="../assets/images/icons/icImage.svg" alt="Upload Image">
                                    </div>
                                    <div class="boxImage" onclick="uploadImage(this)">
                                        <img src="../assets/images/icons/icImage.svg" alt="Upload Image">
                                    </div>
                                    <div class="boxImage" onclick="uploadImage(this)">
                                        <img src="../assets/images/icons/icImage.svg" alt="Upload Image">
                                    </div>
                                    <div class="boxImage" onclick="uploadImage(this)">
                                        <img src="../assets/images/icons/icImage.svg" alt="Upload Image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="metasEdit mb-5">
                            <div>
                                <span>✅ Metas - 01 de Janeiro a 30 de Junho</span>
                                <p>1. Saúde</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="1">

                                <p>2. Conhecimento Aplicável</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="2">

                                <p>3. Finanças</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="3">

                                <p>4. Conquistas Pessoais [Experiências]</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="4">

                                <p>5. Conquistas Materiais</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="5">

                                <p>6. Habilidades e Hobby</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="6">

                                <p>7. Negócios/Profissional</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="7">
                            </div>
                            <div>
                                <span>✅ Metas - 01 de Julho a 31 de Dezembro</span>
                                <p>1. Saúde</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="8">

                                <p>2. Conhecimento Aplicável</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="9">

                                <p>3. Finanças</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="10">

                                <p>4. Conquistas Pessoais [Experiências]</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="11">

                                <p>5. Conquistas Materiais</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="12">

                                <p>6. Habilidades e Hobby</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="13">

                                <p>7. Negócios/Profissional</p>
                                <input type="text" placeholder="Digite sua meta" class="form-control" data-index="14">
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