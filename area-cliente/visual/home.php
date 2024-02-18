
<!doctype html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<title>São Paulo FC</title>
<link rel="icon" type="image/x-icon" href="../visual/imgs/logo.png">
<style>
.container-fluid {
    position: relative;
    height: 90vh;
    width: 100vw;
    background-color: black;
    z-index: 1;
}


.navbar {
    z-index: 3;
}

body {
    margin: auto;
    padding: auto;
    overflow-x: hidden;
    background-color: black;
}

.word {
    color: white;
    font-size: 4rem;
    text-transform: uppercase;
}

.spfc {
    width: 500px;

}

@media (max-width: 995px) {
    .img-fluid {
        display: none;
    }
}
</style>
</head>

<body>

    <div class="home vw-100 vh-80">

        <div class="conteudo h-100 w-100 row">

        <?php
     session_start();
       if(isset($_SESSION["authClient"])){
         $authClient = $_SESSION["authClient"];
         include(__DIR__.'../../componentes/navbarblacklogado.php');
       }else{
         include(__DIR__.'../../componentes/navbarblack.php');
       }
   ?>
            
            <div class="col a d-flex align-items-center justify-content-center flex-column"
                style="filter: drop-shadow(0 0 3rem black);">
                
                <div class="row w-75">
                    <p class="h4 text-light fw-light">VOCÊ ESTÁ NO </p>
                </div>
                <div class="row w-75">
                    <p class="title fw-bold text-start"><span style="color:#A20F0F">SÃO</span> <span
                            class="text-light">PAULO</span> <span style="color:black">FC</span></p>
                </div>
                <div class="row w-75">
                    <p class="h2 text-start" style="color:black">Official WebSite</p>
                </div>
            </div>
            <div class="col d-flex align-items-end justify-content-end ha">

            </div>
        </div>
        <div class="av row pe-5 pb-5 justify-content-center flex-wrap">
            <div class="col mb-3 d-flex justify-content-center align-items-center">
                <img src="./imgs/sports.png" alt="" srcset="" height="50px" class="img-a">
            </div>
            <div class="col mb-3 d-flex justify-content-center align-items-center">
                <img src="./imgs/abibas.png" alt="" srcset="" height="40px" class="img-a">
            </div>
            <div class="col mb-3 d-flex justify-content-center align-items-center">
                <img src="./imgs/bitso.png" alt="" srcset="" height="30px" class="img-a">
            </div>
        </div>


        <div class="triangle"></div>
        <div class="trianglea"></div>
    </div>
    <?php include('..\componentes\pp.php')?>
    <?php include('..\componentes\pagea2-cli.php')?>
    <?php include('..\componentes\pagea1-cli.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



    * {
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: black;
    }

    .h3 {
        color: white;
    }

    .img-fluid {
        max-width: 50%;
    }

    .home {
        background-image: url("./imgs/home.jpg");
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .triangle {
        position: absolute;
        bottom: 0;
        right: -420px;
        width: 0;
        height: 0;
        border-left: 500px solid transparent;
        border-top: 500px solid transparent;
        border-right: 500px solid transparent;
        border-bottom: 500px solid red;
        filter: opacity(0.30);
        z-index: 1;
    }

    .trianglea {
        position: absolute;
        top: 0;
        right: -500px;
        width: 0;
        height: 0;
        border-left: 500px solid transparent;
        border-top: 500px solid red;
        border-right: 500px solid transparent;
        border-bottom: 500px solid transparent;
        filter: opacity(0.15);
    }

    .a {
        height: 90%;
    }

    .ha {
        z-index: 100;
    }

    .vh-80 {
        height: 90vh;
    }

    .title {
        font-size: 65px;
    }

    .av {
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 5;
    }

    @media (max-width: 576px) {

        .triangle,
        .trianglea {
            display: none;
        }

        .ha {
            display: none !important;
        }

        .av {
            width: 100%;
        }
    }
    body::-webkit-scrollbar {
  display: none;
}
    </style>
</body>

</html>'