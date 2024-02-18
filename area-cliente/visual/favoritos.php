<?php
session_start();

require_once __DIR__.'../../../dao/JogadorDao.php'; 
    require_once __DIR__.'../../../dao/FavoritoDao.php'; 
    
        $authClient = $_SESSION["authClient"];
        
    
    
    
    
    if(!isset($authClient['id'])) {
        header("location: login.php");
    }

$posicaoA = JogadorDao::posicao('atacante');
$posicaoM = JogadorDao::posicao('meioCampo');
$posicaoD = JogadorDao::posicao('defensor');
$posicaoG = JogadorDao::posicao('goleiro');

$favoritos = FavoritoDao::selectAllByUserId($authClient['id']);
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
       
       if(isset($_SESSION["authClient"])){
           $authClient = $_SESSION["authClient"];
           include(__DIR__.'../../componentes/navbarblacklogado.php');
       }else{
           include(__DIR__.'../../componentes/navbarblack.php');
       }
   ?>

    <div class="card_wrapper">
        <div class="container">
            <div class="row py-5 mt-5">
                <div class="col-12">
                    <h2 class="d-flex justify-content-center">FAVORITOS</h2>
                    <div class="owl-carousel slider_carousel">
                        <?php foreach ($favoritos as $favorito) : ?>
                        <?php $jogador = JogadorDao::selectById($favorito['idJoga']); ?>
                        <?php if ($jogador) : ?>
                        <div class="card-player atac d-flex my-5">
                            <div class="img-player pt-3">
                                <img class="img-fluid"
                                    src="../../img/Jogador/<?= $jogador['imagemJoga'] ?: 'padrao.png'; ?>"
                                    alt="<?= $jogador['nomeJoga'] ?>">
                            </div>
                            <div class="dados d-flex flex-column">
                                <div class="number">
                                    <h1 class="d-flex justify-content-center num"><?= $jogador['numeroJoga'] ?></h1>
                                </div>
                                <div class="posicao">
                                    <h1 class="pos"><?= $jogador['posicaoD'] ?></h1>
                                </div>
                                <div class="logo1">
                                    <img src="../visual/imgs/logo.png">
                                </div>
                            </div>
                            <div class="nome w-100">
                                <h2 class="nom"><?= $jogador['nomeJoga'] ?></h2>
                            </div>

                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../visual/equipe/js/owl.carousel.min.js"></script>

    <script>
    function slider_carouselInit() {
        $('.owl-carousel.slider_carousel').each(function() {
            $(this).owlCarousel({
                dots: false,
                loop: true,
                stagePadding: 2,
                autoplay: false,
                nav: true,
                navText: ["<i class='far fa-arrow-alt-circle-left'></i>",
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