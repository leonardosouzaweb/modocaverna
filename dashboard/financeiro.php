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
                        <h1>Financeiro</h1>
                        
                        <div class="financeiro mb-5">
                            <div class="finanHead">
                                <div>
                                    <h6>Caixa Atual</h6>
                                    <ul>
                                        <li>Itaú <span>R$ 1.250,00</span></li>
                                        <li>Nubank <span>R$ 1.250,00</span></li>
                                        <li>Caixa <span>R$ 1.250,00</span></li>
                                        <li>Total <span>R$ 1.250,00</span></li>
                                    </ul>
                                    <div class="add">
                                        <div class="info">
                                            <img src="../assets/images/icons/icAdd.svg">
                                            <span>Adicionar Banco</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3">Resumo do mês atual</h6>
                                    <div class="block">
                                        <small>Previsão <br>de Custo</small>
                                        <p class="negative">R$ 11.540,00</p>
                                    </div>

                                    <div class="block">
                                        <small>Previsão <br>de Receita</small>
                                        <p class="positive">R$ 11.540,00</p>
                                    </div>

                                    <div class="block">
                                        <small>Previsão <br>de Saldo do mês</small>
                                        <p>R$ 2.540,00</p>
                                    </div>
                                </div>

                                <div>
                                    <h6 class="mb-3">Previsão do próximo mês</h6>
                                    <div class="block">
                                        <small>Previsão <br>de Custo</small>
                                        <p class="negative">R$ 11.540,00</p>
                                    </div>

                                    <div class="block">
                                        <small>Previsão <br>de Receita</small>
                                        <p class="positive">R$ 11.540,00</p>
                                    </div>

                                    <div class="block">
                                        <small>Previsão <br>de Saldo do mês</small>
                                        <p>R$ 2.540,00</p>
                                    </div>
                                </div>
                            </div>
                            <!-- // -->
                            <span>Controle Geral de Custos</span>
                            <div class="controlCustos">
                                <div>
                                    <h6>Custo Fixo Definido <span>Adicionar</span></h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Dia Pag.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Aluguel</td>
                                                <td>R$ 100,00</td>
                                                <td>9</td>
                                            </tr>

                                            <tr>
                                                <td>Internet</td>
                                                <td>R$ 100,00</td>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <td>Plano de Saúde</td>
                                                <td>R$ 100,00</td>
                                                <td>15</td>
                                            </tr>

                                            <tr>
                                                <td>Secretária</td>
                                                <td>R$ 100,00</td>
                                                <td>15</td>
                                            </tr>

                                            <tr>
                                            <td class="total">Total</td>
                                                <td colspan="2" class="total">R$ 500,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div>
                                    <h6>Custo Fixo Variável  <span>Adicionar</span></h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Dia Pag.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Energia</td>
                                                <td>R$ 100,00</td>
                                                <td>9</td>
                                            </tr>

                                            <tr>
                                                <td>Água</td>
                                                <td>R$ 100,00</td>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <td>Mercado</td>
                                                <td>R$ 100,00</td>
                                                <td>15</td>
                                            </tr>

                                            <tr>
                                                <td>Combustível</td>
                                                <td>R$ 100,00</td>
                                                <td>15</td>
                                            </tr>

                                            <tr>
                                                <td class="total">Total</td>
                                                <td colspan="2" class="total">R$ 500,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div>
                                    <h6>Cartão de Crédito  <span>Adicionar</span></h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Dia Pag.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Itáu</td>
                                                <td>R$ 100,00</td>
                                                <td>9</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Nubank</td>
                                                <td>R$ 100,00</td>
                                                <td>9</td>
                                            </tr>

                                            <tr>
                                                <td class="total">Total</td>
                                                <td colspan="2" class="total">R$ 500,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- // -->
                            <div class="totalCustos">
                                <h6>Previsão de custo mensal</h6>
                                <p class="negative">R$ 11.540,00</p>
                            </div>
                            <!-- // -->
                            <span>Previsão de Entradas</span>
                            <div class="previsaoEntrada">
                                <div>
                                    <h6>Esse mês <span>Adicionar</span></h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Dia Rec.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Aluguel</td>
                                                <td>R$ 100,00</td>
                                                <td>9</td>
                                            </tr>

                                            <tr>
                                                <td>Salário</td>
                                                <td>R$ 100,00</td>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <td>Dividendos</td>
                                                <td>R$ 100,00</td>
                                                <td>15</td>
                                            </tr>

                                            <tr>
                                            <td class="total">Total</td>
                                                <td colspan="2" class="total">R$ 500,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div>
                                    <h6>Próximo mês<span>Adicionar</span></h6>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Dia Pag.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pro Labore</td>
                                                <td>R$ 100,00</td>
                                                <td>9</td>
                                            </tr>

                                            <tr>
                                                <td>Sálario</td>
                                                <td>R$ 100,00</td>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <td>Projetos</td>
                                                <td>R$ 100,00</td>
                                                <td>15</td>
                                            </tr>

                                            <tr>
                                                <td class="total">Total</td>
                                                <td colspan="2" class="total">R$ 500,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                             <!-- // -->
                             <div class="totalCustos">
                                <h6>Previsão de entradas</h6>
                                <p class="positive">R$ 11.540,00</p>
                            </div>
                            <!-- // -->
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