<?php
session_start();

require_once __DIR__ . '../../../dao/JogadorDao.php';
require_once __DIR__ . '../../../dao/FavoritoDao.php';

if (isset($_SESSION["authClient"])) {
    $authClient = $_SESSION["authClient"];
}

$posicoes = [
    'Atacantes' => JogadorDao::posicao('atacante'),
    'Meio Campos' => JogadorDao::posicao('meioCampo'),
    'Defensores' => JogadorDao::posicao('defensor'),
    'Goleiros' => JogadorDao::posicao('goleiro')
];

$favoritos = FavoritoDao::selectAll();
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
    <meta name="author" content="web-themes">
    <title>Equipe</title>
    <link rel="icon" type="image/x-icon" href="../visual/imgs/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="../visual/equipe/css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../visual/equipe/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="../visual/equipe/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    if (isset($_SESSION["authClient"])) {
        $authClient = $_SESSION["authClient"];
        include(__DIR__ . '../../componentes/navbarblacklogado.php');
    } else {
        include(__DIR__ . '../../componentes/navbarblack.php');
    }
    ?>
<!-- sasas -->
    <div class="card_wrapper">
        <div class="container">
            <?php foreach ($posicoes as $titulo => $jogadores) { ?>
            <div class="row py-5 mt-5">
                <div class="col-12">
                    <h2 class="d-flex justify-content-center text-uppercase"><?= $titulo ?></h2>
                    <div class="owl-carousel slider_carousel">
                        <?php foreach ($jogadores as $jogador) { ?>
                        <div class="card-player mei d-flex my-5">
                            <div class="img-player pt-3">
                                <img class="img-fluid"
                                    src="../../img/Jogador/<?= $jogador[6] != "" ? $jogador[6] : 'padrao.png'; ?>"
                                    alt="">
                            </div>
                            <div class="dados d-flex flex-column">
                                <div class="number">
                                    <h1 class="d-flex justify-content-center num"><?= $jogador[5] ?></h1>
                                </div>
                                <div class="posicao">
                                    <h1 class="pos"><?= $jogador[7] ?></h1>
                                </div>
                                <div class="logo1">
                                    <img src="../visual/imgs/logo.png">
                                </div>
                            </div>
                            <div class="nome w-100">
                                <h2 class="nom"><?= $jogador[1] ?></h2>
                            </div>
                            <form action="../../area-admin/favorito/process.php" method="post" class="la">
                                <div>
                                    <input type="hidden" name="idJoga" id="idJoga" placeholder="id"
                                        value="<?= $jogador['idJoga'] ?>">
                                    <?php if (isset($_SESSION["authClient"])) {
                                                $authClient = $_SESSION["authClient"];
                                            ?>
                                    <input type="hidden" name="idClient" id="idClient" placeholder="id"
                                        value="<?= $authClient['id'] ?>">

                                    <?php
                                                $idFavorito = null;
                                                foreach ($favoritos as $favorito) {
                                                    if ($jogador['idJoga'] == $favorito['idJoga'] &&  $authClient['id'] == $favorito['idClient']) {
                                                        $idFavorito = $favorito['idFavorito'];
                                                        break;
                                                    }
                                                }
                                                ?>
                                    <input type="hidden" name="idFavorito"
                                        value="<?= $idFavorito ? $idFavorito : '' ?>">


                                    <input type="hidden" name="acao" class="acao"
                                        value="<?= $idFavorito ? 'DELETE' : 'SALVAR' ?>">
                                    <button type="submit" class="abn btn-star mx-1<?= $idFavorito ? ' active' : '' ?>"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="<?= $idFavorito ? 'Excluir favorito' : 'Favoritar jogador' ?>">
                                        &#9734;
                                    </button>



                                    <?php } else {
                                                // Adicione aqui o comportamento para usuários não autenticados
                                            } ?>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <style>
    .btn-star {
        font-size: 40px;
        color: black;
        cursor: pointer;
        border: none;
        background: none;
    }

    .btn-star:hover {
        color: #FFB900;
        /* Cor da estrela preenchida no hover */
    }

    .btn-star.active {
        color: #FFB900;

    }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../visual/equipe/js/owl.carousel.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    });
</script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var btnStars = document.querySelectorAll('.btn-star');
        if (btnStars) {
            btnStars.forEach(function(btnStar) {
                btnStar.addEventListener('click', function() {
                    btnStar.classList.toggle('active');
                    var acao = btnStar.classList.contains('active') ? 'DELETE' : 'SALVAR';
                    btnStar.nextElementSibling.value = acao;
                });
            });
        }
    });
    </script>

    <script>
    function slider_carouselInit() {
        $('.owl-carousel.slider_carousel').each(function() {
            $(this).owlCarousel({
                dots: false,
                loop: true,
                stagePadding: 2,
                autoplay: false,
                nav: true,
                navText: [
                    "<i class='far fa-arrow-alt-circle-left'></i>",
                    "<i class='far fa-arrow-alt-circle-right'></i>"
                ],
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1,
                        center: true,
                        margin: 0
                    },
                    700: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 3,
                        nav: true
                    },
                    1200: {
                        items: 4,
                        nav: true
                    },
                    1400: {
                        items: 5,
                        nav: true
                    }
                }
            });
        });
    }
    slider_carouselInit();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>