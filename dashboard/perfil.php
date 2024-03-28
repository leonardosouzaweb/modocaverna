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
    <link href="../assets/css/customCalendar.css" rel="stylesheet">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'multiMonthYear',
                events: [
                    {
                        title: 'Evento Teste',
                        duration: '20:00',
                        start: '2024-03-25',
                        end: '2024-03-28'
                    },                
                ]
            });
            calendar.render();
        });
    </script>
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
                        <h1>Perfil Caverna</h1>
                        
                        <div class="perfil">
                            <div class="perfilHead">
                                <div>
                                    <img src="../assets/images/avatar.png" class="avatar">
                                    <h5>Olá Iuri! <span>Membro desde Novembro de 2022</span></h5>
                                </div>


                                <div>
                                    <span>100 <small>Seguidores</small></span>
                                    <span>30 <small>Seguindo</small> </span>
                                </div>


                                <div>
                                    <div class="desafio1">
                                        <img src="../assets/images/icons/icDesafioExpress.svg">
                                        <h6>Express</h6>
                                        <small>10 concluidos</small>
                                    </div>
                                    
                                    <div class="desafio2">
                                        <img src="../assets/images/icons/icDesafioCavernoso.svg">
                                        <h6>Cavernoso</h6>
                                        <small>6 concluidos</small>
                                    </div>
                                </div>
                            </div>

                            <span>Resumo Desafio Caverna</span>
                            <div class="resume">
                                <div id="calendar" class="mb-5 mt-4"></div>
                            </div>

                            <span>Resumo Flow Caverna</span>

                            <div class="resumeFlow mb-5">
                                <div class="period">
                                    <button class="active">Anual</button>
                                    <button>Mensal</button>
                                    <button>Semanal</button>
                                </div>
                                <div class="graphs">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once '../includes/footer.php'; ?>
    <!-- MODALS -->
    <div class="globalModals">
        <?php include_once '../modals/desafio.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>