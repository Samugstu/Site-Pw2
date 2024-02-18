<?php
  session_start();


  //require_once (DIR.'/../componentes/modal.php');
  if(!empty($_POST)){
    $id_Client= $userDao['idUser'];

    }else{
      $id_Client= '';

    }



?>

<!doctype html>
<html lang="PT-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../visual/login/css/style.css">
    <title>Inscrever-se</title>
    <link rel="icon" type="image/x-icon" href="../visual/imgs/logo.png">
</head>

<body>


  <div class="container-fluid vw-100 vh-100 d-flex justify-content-center align-items-center ">
  
    <div class="background-image3"></div>
    <form method="post" action="cadastroProcess.php" enctype="multipart/form-data" novalidate class="login d-flex flex-column align-items-center mt-5 ">
              <input type="hidden" name="idClient" id="idClient" placeholder="id" value="<?=$id_Client?>">

              <input type="hidden" value="<?=$id_Client?'ATUALIZAR':'SALVAR'?>" name="acao" >
        <div class="d-flex justify-content-center align-items-center mt-3" style="width:100%; height:15%">
            <img src="../visual/imgs/logo5.png" width="100px">
        </div>
        <section class="fs-1 fw-bold m-3 mt-5" style="color: white">INSCREVA-SE</section>
        <div class="d-flex m-3" style="width:95%">
            <div class="input-bx d-flex justify-content-center align-items-center me-2" style="width: 100%">
                <input type="text" name="nome"  required="required"/>
                <span>Nome</span>
            </div>
            <div class="input-bx d-flex justify-content-center align-items-center ms-2" style="width: 100%">
                <input type="text" name="sobrenome"  required="required"/>
                <span>Sobrenome</span>
            </div>
        </div>
        <div class="input-bx d-flex justify-content-center align-items-center m-3" style="width: 95%">
                <input type="email" name="email"  required="required"/>
                <span>email</span>
        </div>
        <div class="d-flex m-3" style="width:95%">
          <div class="input-bx d-flex justify-content-center align-items-center me-2" style="width: 100%">
                  <input type="password" name="senha"  required="required"/>
                  <span>Senha</span>
          </div>
          <div class="input-bx d-flex justify-content-center align-items-center ms-2" style="width: 100%">
                  <input type="password" name="cSenha"  required="required"/>
                  <span>Confirmar senha</span>
          </div>
        </div>
        <section class="p-3 mb-3" style="color:#757575">Já tem uma conta? Efetue <a href="login.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a></section>     
          <button class="btn btn-lg fw-bold" type="submit" style="background-color: white; width: 95%" >CRIAR CONTA</button>
                <section class="p-3 mb-3"><a href="home.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Voltar</a></section>     
        <section class="mb-3 row align-items-end px-5 " style="width:100%; height: 100%">
        <a href="#" class="col d-flex justify-content-center link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover border-end border-light">Legal Terms</a>
        <a href="#" class="col d-flex justify-content-center link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Privacy Policy</a>
        <a href="#" class="col d-flex justify-content-center link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover border-start border-light">Cookies</a>
        </section>           
      </form>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="voltar.js"></script>
  <style>
    .background-image3 {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%; /* Ajuste esse valor para definir a largura da imagem de fundo */
    background-image: url('../visual/imgs/torcida.jpg'); /* Substitua pelo caminho da sua imagem */
    background-size: cover;
    background-position: center;
    filter: brightness(0.3);
    z-index: -1;
}

  </style>
</body>

</html>