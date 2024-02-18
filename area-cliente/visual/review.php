<?php
session_start();
    require_once __DIR__.'/../../dao/ComentarioDao.php';
    $comentarios = ComentarioDao::selectComentario();
    date_default_timezone_set('America/Sao_Paulo');
  
 
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Depoimentos</title>

    <!-- favicon -->

    <link rel="icon" type="image/x-icon" href="../visual/imgs/logo.png">

</head>

<body>


    <div class="container w-100">
        <div class="overlay"></div>
        <?php
     
       if(isset($_SESSION["authClient"])){
         $authClient = $_SESSION["authClient"];
         include(__DIR__.'../../componentes/navbarblacklogado.php');
       }else{
         include(__DIR__.'../../componentes/navbarblack.php');
       }
   ?>
        <form method="post" action="processComentario.php" class=" p-5">
            
            
            <div class="row"> <label for="comentario" class="form-label h1 text-light">Comente:</label></div>
            <textarea name="comentario" id="comentario" rows="4" cols="50" required
            class="form-control" placeholder="Envie seu comentário!"></textarea>
            
            
            <input type="hidden" name="idClient" id="idClient" placeholder="id" value="<?=$authClient['id']?>">
            <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$authClient['img']?>">
            <input type="hidden" value="<?=$authClient['id']?'SALVAR':'ATUALIZAR'?>" name="acao">
            <input type="hidden" name="dia" id="dia" value="<?= date('Y-m-d') ?>">
            <input type="hidden" name="hora" id="hora" value="<?= date('H:i') ?>">
            
            
            <?php if(isset($_SESSION["authClient"])){?>
            <button type="submit" class="btn btn-danger mt-3">Enviar Comentário</button><?php 
        }?>
        </form>
        <p class="h1 text-light ps-5">Comentarios</p> 
        <div class="content px-5 mt-4">
            <?php foreach ($comentarios as $comentario): ?>
            <div class="card my-3">
                <div class="row g-0">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <img id="preview"
                            src="../../img/client/<?=$comentario['imagem']!="" ? $comentario['imagem']: 'padrao.png';?>"
                            alt="..." height="100px" style="object-fit: cover; border-radius: 50%;">
                    </div>
                    <div class="col-md">
                        <div class="card-body">
                            <h3 class="card-title"><?= $comentario['nome'] ?></h3>

                            <p class="card-text read-more-text h6"><?= $comentario['comentarios'] ?></p>

                            <button class="btn btn-danger read-more-button">Ler mais</button>
                            <p class="card-text"><small class="text-body-secondary"><?= $comentario['dia'] ?></small>
                            </p>
                            <?php if(isset($_SESSION["authClient"]) ){
                        if($authClient['id'] == $comentario['idClient']){?>
                              <div>
                              <form method='post' action='processComentario.php'>
                                  <input type='hidden' name='acao' value='DELETE'>
                                  <input type='hidden' name='idClient' value='<?= $comentario['idClient']; ?>'>
                                  <input type='hidden' name='idComentario' value='<?= $comentario['idComentario']; ?>'>
                                  <button type='submit'  class="btn btn-danger mt-3 d-flex align-items-center justify-content-center">Excluir Comentário</button>
                              </form>
                               </div>
                               
                               <?php }}?>
                               </div>
                               </div>
                              </div>  
                </div>
                <?php endforeach; ?>
        </div>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-image: url('../visual/imgs/torcida.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    z-index: -2;
}

.overlay {
    background-color: rgba(0, 0, 0, 0.8);
    /* Define a cor de sobreposição (preto com 50% de transparência). */
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    /* Garante que a camada de sobreposição esteja acima da imagem de fundo. */
}


.card {
    width: 100%;
    /* Largura predefinida para os cards */
    background-color: white;
    border-radius: 25px;
}

.content {
    width: 100%;
    max-height: 40%;
    overflow-y: auto;
}


.content::-webkit-scrollbar {
    display: none;
}


.img {
    object-fit: cover;
    border-radius: 50%;
}


.read-more-button {
    display: none;
}

@media (max-width: 1100px) {
    .img {
        display: none;
    }
}

body::-webkit-scrollbar {
    display: none;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Seleciona todos os elementos com a classe "read-more-text" e "read-more-button"
    const readMoreTextList = document.querySelectorAll(".read-more-text");
    const readMoreButtonList = document.querySelectorAll(".read-more-button");
    const wordLimit = 20;

    // Verifica se a quantidade de elementos é a mesma para ambos os seletores
    if (readMoreTextList.length !== readMoreButtonList.length) {
        console.error("A quantidade de elementos 'read-more-text' e 'read-more-button' não coincide.");
        return;
    }

    // Itera sobre os elementos
    readMoreTextList.forEach(function(readMoreText, index) {
        const readMoreButton = readMoreButtonList[index];

        const content = readMoreText.innerHTML.split(" ");
        const visibleContent = content.slice(0, wordLimit).join(" ");
        const hiddenContent = content.slice(wordLimit).join(" ");

        readMoreText.innerHTML = visibleContent;

        if (hiddenContent.trim() !== "") {
            readMoreButton.style.display = "block";
        }

        readMoreButton.addEventListener("click", function() {
            if (readMoreText.innerHTML === visibleContent) {
                readMoreText.innerHTML = visibleContent + " " + hiddenContent;
                readMoreButton.innerText = "Ler menos";
            } else {
                readMoreText.innerHTML = visibleContent;
                readMoreButton.innerText = "Ler mais";
            }
        });
    });
});
</script>

</html>