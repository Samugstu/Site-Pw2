<?php 
session_start();
  require_once("../../componentes/modal.php");
  require_once '../../dao/JogadorDao.php';
  
  if(!empty($_POST)){
    $id_Jogador = $userJDao['idJoga'];
    $nome_Jogador =  $userJDao['nomeJoga'];
    $nasc_Jogador= $userJDao['nascJoga'];
    $posicao_Jogador = $userJDao['posicaoJoga'];
    $nacionalidade_Jogador = $userJDao['nacionalidadeJoga'];
    $numero_Jogador = $userJDao['numeroJoga'];
    $imagem_Jogador = $userJDao['imagemJoga'];
    $posicaoD_Jogador = $userJDao['posicaoD'];
    }else{
     
      $nome_Jogador  = '';  
      $nasc_Jogador = '';
      $posicao_Jogador  = '';
      $nacionalidade_Jogador = '';
      $numero_Jogador = '';
      $imagem_Jogador = '';
      $id_Jogador = '';
      $posicaoD_Jogador = '';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DOS JOGADORES</strong>
              <input type="hidden" name="idJogador" id="idJogador" placeholder="id" value="<?=$id_Jogador?>">
              <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_Jogador?>">
              <input type="hidden" value="<?=$id_Jogador?'ATUALIZAR':'SALVAR'?>" name="acao" >

            </div>
            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center" >
                <div class="bg-white rounded border" >
                  <img id="preview" src="../../img/Jogador/<?=$imagem_Jogador!="" ? $imagem_Jogador : 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome" class="col-form-label">Nome Completo:</label>
                    <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?=$nome_Jogador?>"
                      required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="sobrenome" class="col-form-label">Nacionalidade:</label>
                    <input type="text" class="form-control" name="nacionalidade" maxlength="50" id="sobrenome" value="<?=$nacionalidade_Jogador?>" required>
                    <div class="invalid-feedback">
                      Nacionalidade Inválida
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cpf" class="col-form-label">Nº Camisa:</label>
                    <input type="number" class="form-control" name="nCamisa" maxlength="50" id="cpf" value="<?=$numero_Jogador?>" required>
                    <div class="invalid-feedback">
                      Nº da Camisa Inválida
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="nasc" class="col-form-label">Data de Nascimento:</label>
                    <input type="date" class="form-control" name="nasc" id="nasc" value="<?=$nasc_Jogador?>" required>
                    <div class="invalid-feedback">
                      Data Inválida
                    </div>
                  </div>
                  <div class="col-md-3 ">
                      <label for="posicao" class="col-form-label">Posição:</label>
                      <select id="posicao" onchange="atualizarPosicoesDetalhadas()" class="form-control" name="posicaoJoga" value="<?=$posicao_Jogador?>" required>
                          <option value="atacante">Atacante</option>
                          <option value="meioCampo">Meio Campo</option>
                          <option value="defensor">Defensor</option>
                          <option value="goleiro">Goleiro</option>
                      </select>
                    <div class="invalid-feedback">
                      Posição Inválida
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="posicaoDetalhada" class="col-form-label">Posição Detalhada:</label>
                    <select id="posicaoDetalhada" name="posicaoDJoga" class="form-control" value="<?=$posicaoD_Jogador?>" required>

                    </select>
                  </div>
                
                </div>
                <div class="row mt-5 ">
                  <div class="col-md-2">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script type="text/javascript" src="./../../js/modal.js"></script>
  <script>
    const posicoesDetalhadas = {
        atacante: ["CA", "PTD", "PTE", "SA"],
        meioCampo: ["VOL", "MLG", "MLD", "MLE","MAT"],
        defensor: ["ZAG", "LD", "LE"],
        goleiro: ["GOL"]
    };

    function atualizarPosicoesDetalhadas() {
        const posicaoSelecionada = $("#posicao").val();
        const opcoesDetalhadas = posicoesDetalhadas[posicaoSelecionada];


        $("#posicaoDetalhada").empty();

        opcoesDetalhadas.forEach(opcao => {
            $("#posicaoDetalhada").append(`<option value="${opcao}">${opcao}</option>`);
        });
    }

    $(document).ready(atualizarPosicoesDetalhadas);
</script>


</body>

</html>