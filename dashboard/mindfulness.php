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
                        <img src="../assets/images/logo.svg">
                    </div>
                    <div class="menu">
                    <?php include_once '../includes/menu.php'; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="defaultPage">
                    <div class="infoPage">
                        <h1>Faça isso para conseguir focar no momento presente</h1>
                        <p>Reference site about Lorem Ipsum, giving information</p>
                        <div class="video-container" data-video-id="8EeBDuQCV0A">
                            <img src="https://iurimeira.com/notion/mindfulness/img/breathe.jpg" alt="Técnica de Respiração" class="video-thumbnail">
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
        function playVideo(container, videoId) {
            const iframeContainer = document.createElement('div');
            iframeContainer.classList.add('iframe-container');

            const iframe = document.createElement('iframe');
            iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1&controls=1&modestbranding=1&rel=0`);
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'autoplay; encrypted-media');
            iframe.setAttribute('allowfullscreen', '');

            iframeContainer.appendChild(iframe);

            // Clear the thumbnail and replace with iframe container
            container.innerHTML = '';
            container.appendChild(iframeContainer);
        }

        // Add click event listener to the video container
        document.addEventListener('DOMContentLoaded', function() {
            const videoContainer = document.querySelector('.video-container');
            videoContainer.addEventListener('click', function() {
                playVideo(this, this.getAttribute('data-video-id'));
            });
        });
    </script>
</body>
</html>