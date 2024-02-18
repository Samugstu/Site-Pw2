<?php
 require_once '../../dao/JogadorDao.php';
 require_once '../../model/Jogador.php';
 //require_once '../../model/Mensagem.php';

 $userJ = new Jogador();
 //$msg = new Mensagem();

  //var_dump($_POST); 


 switch($_POST["acao"]) {
  case 'DELETE':
   try {
        $userJDao = JogadorDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
    $userJ->setNomeJoga($_POST['nome']);
    $userJ->setNascJoga($_POST['nasc']);
    $userJ->setPosicaoJoga($_POST['posicaoJoga']);
    $userJ->setNacionalidadeJoga($_POST['nacionalidade']);
    $userJ->setNumeroJoga($_POST['nCamisa']);
    $userJ->setImagem($userJ->salvarImagem($_POST['nomeFoto'])); 
    $userJ->setPosicaoDJoga($_POST['posicaoDJoga']);
    try {
        $userJDao = JogadorDao::insert($userJ);
      //$msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     echo 'Exceção capturada: ',  $e->getMessage(), "\n";
     var_dump($_POST); 
     //$msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      //header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $userJ->setNomeJoga($_POST['nome']);
        $userJ->setNascJoga($_POST['nasc']);
        $userJ->setPosicaoJoga($_POST['posicaoJoga']);
        $userJ->setNacionalidadeJoga($_POST['nacionalidade']);
        $userJ->setNumeroJoga($_POST['nCamisa']);
        $userJ->setImagem($userJ->salvarImagem($_POST['nomeFoto'])); 
        $userJ->setPosicaoDJoga($_POST['posicaoDJoga']);
      
        try {
          $userJDao = JogadorDao::update($_POST["idJogador"], $userJ);
          //$msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
         
        header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $userJDao = JogadorDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>