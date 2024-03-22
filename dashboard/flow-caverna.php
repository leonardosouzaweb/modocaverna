<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modo Caverna</title>
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- GLOBAL CSS -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/pomodoro.css" rel="stylesheet">
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
                <div class="flow">
                    <div class="top">
                        <div>
                            <span data-bs-toggle="modal" data-bs-target="#modalFlow">Flow Caverna</span>
                            <p>Faça o Ritual de ativação do Flow Caverna para a  liberação das funcionalidades</p>
                            <div class="switch__container">
                                <input id="switch-flat" class="switch switch--flat" type="checkbox">
                                <label for="switch-flat"></label>
                                <span id="flowStatus">Desativado</span>
                            </div>

                            <div class="links filter" data-filter-class>
                                <div class="title">
                                    <img src="../assets/images/icons/icCheckList.svg">
                                    <span>Ferramentas Importantes <small>Indicações do Iuri</small></span>
                                </div>
                            </div>
                        </div>

                        <div class="filter" data-filter-class>
                            &nbsp;
                        </div>
                        <div class="filter" data-filter-class>
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

                    <div class="mid filter" data-filter-class>
                        <?php include_once '../components/tarefas.php'; ?>

                        <?php include_once '../components/pomodoro.php'; ?>
                    </div>
                    
                    <!-- COMPONENTS -->
                    <span class="mt-4 filter" data-filter-class>Resumo do seu dia</span>
                    <div class="components filter" data-filter-class>
                        <?php include_once '../components/checklistSemanal.php'; ?>
                        <?php include_once '../components/naoEsquecer.php'; ?>
                        <?php include_once '../components/treinos.php'; ?>
                    </div>

                    <div class="components mb-5 filter" data-filter-class>
                        <?php include_once '../components/rotina.php'; ?>
                        <div class="item">
                            <?php include_once '../components/compromissos.php'; ?>
                            <?php include_once '../components/objetivoDia.php'; ?>
                        </div>
                        <?php include_once '../components/refeicoes.php'; ?>
                    </div>
                    <!-- END -->
                </div>
            </div>
        </div>
    </div>
     <!-- MODALS -->
     <div class="globalModals">
        <?php include_once '../modals/naoEsquecer.php'; ?>
        <?php include_once '../modals/treinos.php'; ?>
        <?php include_once '../modals/rotina.php'; ?>
        <?php include_once '../modals/compromissos.php'; ?>
        <?php include_once '../modals/refeicoes.php'; ?>
        <?php include_once '../modals/objetivo.php'; ?>
        <?php include_once '../modals/flow.php'; ?>
        <?php include_once '../modals/configPomodoro.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="../assets/js/functions.js"></script>
    <script src="../assets/js/countdown.js"></script>
    <script>
        $(document).ready(function() {
            $('#switch-flat').change(function() {
                if ($(this).is(':checked')) {
                    $('.filter').removeClass('filter').addClass('hidden');
                } else {
                    $('.hidden').removeClass('hidden').addClass('filter');
                }
            });
        });
    </script>

    <script>
        function uploadImage(element) {
            // Create file input element
            var input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';

            // Trigger click on file input
            input.click();

            // When file is selected
            input.onchange = function(event) {
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var uploadedImage = document.createElement('img');
                    uploadedImage.src = e.target.result;
                    uploadedImage.classList.add('uploadedImage', 'imagemCusto');

                    // Assign unique ID for the uploaded image
                    var imageId = 'uploadedImage_' + Date.now(); // Using timestamp as unique ID
                    uploadedImage.id = imageId;

                    // Remove the default image
                    element.innerHTML = '';
                    
                    // Insert uploaded image
                    element.appendChild(uploadedImage);

                    // Save image to localStorage
                    localStorage.setItem(imageId, e.target.result);
                };

                reader.readAsDataURL(file);
            };
        }

        // Load previously uploaded images from localStorage
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