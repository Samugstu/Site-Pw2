<?php     
require_once (__DIR__.'/../../dao/ClientDao.php');

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
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; " class="bg-dark">
  <div class="container-fluid  container00">
    <div class="container bg-dark">
      <?php 
        //  include(__DIR__.'../../componentes/navbarblacklogado.php'); 
               ?>
    <div class="bg-dark p-4 border rounded  mt-5">
      <div class="text-center">
        <h2 class="text-white mb-3">Informações do Usuario</h2>
      </div>      
      <form method="post" action="cadastroProcess.php" enctype="multipart/form-data" class="needs-validation" novalidate>
              <input type="hidden" name="idClient" id="idClient" placeholder="id" value="<?=$authClient['id']?>">
              <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$authClient['img']?>">
              <input type="hidden" value="<?=$authClient['id']?'ATUALIZAR':'SALVAR'?>" name="acao" >
          <div class="row">
            <div class="col-md-3">
              <div class="bg-white rounded text-center " >
                  <img id="preview" src="../../img/client/<?=$authClient['img']!="" ? $authClient['img']: 'padrao.png';?>" alt="..."
                    class="rounded  w-100 mb-3 "  style="height:250px; object-fit: cover; ">
                    <label for="foto" class="btn btn-light mb-2"> Carregar Imagem</label>
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" style="display: none">
              </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6 ">
                    <label for="nome" class="col-form-label text-white">Nome:</label>
                    <input type="text" class="form-control bg-dark text-white " name="nome" maxlength="50" id="nome" required value="<?=$authClient['nome']?>">
                </div>
                <div class="col-md-6">
                    <label for="nome" class="col-form-label text-white">Sobrenome:</label>
                  <input type="text" class="form-control bg-dark text-white " name="sobrenome" maxlength="50" id="nome" value="<?=$authClient['sobrenome']?>" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 ">
                    <label for="email" class="col-form-label text-white">Email :</label>
                    <input type="text" class="form-control bg-dark text-white" name="email" maxlength="50" id="email" value="<?=$authClient['email']?>" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ">
                    <label for="password" class="col-form-label text-white">Senha :</label>
                    <input type="text" class="form-control bg-dark text-white" name="senha" maxlength="50" id="password" value="<?=$authClient['senha']?>" required>
                </div>
                <div class="col-md-6 ">
                <label for="passwordconf" class="col-form-label text-white">Confirmar Senha:</label>
                    <input type="text" class="form-control bg-dark text-white" name="senhaconf" maxlength="50" id="passwordconf"value="<?=$authClient['senha']?>"  required>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12 ">
          <div class="row mt-1">
                <div class="col-md-2">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="home.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>
            </div>
          </div>
        </form>
      </div>


    <div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="/js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="/js/personalizar.js"></script>

</body>

</html>