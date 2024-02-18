<?php
    date_default_timezone_set('America/Sao_Paulo');
    if(!isset($_SESSION)) {
        session_start();
        $authClient = $_SESSION["authClient"];
        
     }
     
     
     
     if(!isset($authClient['id'])) {
        header("location:../../area-cliente/visual/login.php");
     }
 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Comentário</title>
</head>

<body>
    <form method="post" action="processComentario.php">
        

        <label for="comentario">Comentário:</label>
        <textarea name="comentario" id="comentario" rows="4" cols="50" required></textarea>

       
        <input type="text" name="idClient" id="idClient" placeholder="id" value="<?=$authClient['id']?>">
              <input type="text" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$authClient['img']?>">
              <input type="text" value="<?=$authClient['id']?'SALVAR':'ATUALIZAR'?>" name="acao" >
        <input type="hidden" name="dia" id="dia" value="<?= date('Y-m-d') ?>">
        <input type="hidden" name="hora" id="hora" value="<?= date('H:i') ?>">
        

        <button type="submit">Enviar Comentário</button>
    </form>
</body>

</html>