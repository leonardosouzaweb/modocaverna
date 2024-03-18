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
                            <span>Flow Caverna</span>
                            <p>Faça o Ritual de ativação do Flow Caverna para a  liberação das funcionalidades</p>
                            <button id="ativarModoCaverna">Ativar Flow Caverna</button>

                            <div class="links" style="filter: blur(1.5rem); user-select: none;">
                                <div class="title">
                                    <img src="../assets/images/icons/icCheckList.svg">
                                    <span>Ferramentas Importantes <small>Indicações do Yuri</small></span>
                                </div>
                            </div>
                        </div>

                        <div style="filter: blur(1.5rem); user-select: none;">
                            &nbsp;
                        </div>
                        <div style="filter: blur(1.5rem); user-select: none;">
                            &nbsp;
                        </div>
                    </div>

                    <div class="mid" style="filter: blur(1.5rem); user-select: none;">
                        <?php include_once '../components/tarefas.php'; ?>

                        <?php include_once '../components/pomodoro.php'; ?>
                    </div>
                    
                    <!-- COMPONENTS -->
                    <span class="mt-4">Resumo do seu dia</span>
                    <div class="components" style="filter: blur(1.5rem); user-select: none;">
                        <?php include_once '../components/checklistSemanal.php'; ?>
                        <?php include_once '../components/naoEsquecer.php'; ?>
                        <?php include_once '../components/treinos.php'; ?>
                    </div>

                    <div class="components mb-5" style="filter: blur(1.5rem); user-select: none;">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/functions.js"></script>
    <script src="../assets/js/countdown.js"></script>
    <script>
        $(document).ready(function(){
            // Quando o botão "Ativar Modo Caverna" for clicado
            $("#ativarModoCaverna").click(function(){
                // Remova o estilo de todas as divs com as classes específicas
                $(".top > div").removeAttr("style");
                $(".top .links").removeAttr("style");
                $(".mid").removeAttr("style");
                $(".components").removeAttr("style");
                $(".components.mb-5").removeAttr("style");
            });
        });
    </script>
</body>
</html>