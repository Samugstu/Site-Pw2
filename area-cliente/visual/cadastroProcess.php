<?php
 require_once (__DIR__.'/../../dao/ClientDao.php');
 require_once (__DIR__.'/../../model/Cliente.php');
 //require_once '../model/Mensagem.php';

 $client = new Client();
 //$msg = new Mensagem();
// var_dump($_POST);

switch ($_POST["acao"]) {


    case 'ATUALIZAR':
      $client->setNome($_POST['nome']);
      $client->setSobrenome($_POST['sobrenome']);
      $client->setEmail($_POST['email']);
      $client->setPassword($_POST['senha']);
      $client->setToken($client->generateToken());
      $client->setImagem($client->salvarImagem($_POST['nomeFoto'])); 
    
      try {
        $clientDao = ClientDao::update($_POST["idClient"], $client);
        //$msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
       
        header("Location: perfil.php");
      } catch (Exception $e) {
       echo 'Exceção capturada: ',  $e->getMessage(), "\n";

      } 
  break;

   
    case 'SALVAR':
            //pode validar as informações
            $client->setNome($_POST['nome']);
            $client->setSobrenome($_POST['sobrenome']);
            $client->setEmail($_POST['email']);
            $client->setPassword($_POST['senha']);
            $client->setToken($client->generateToken());
          
    try {
      $clientDao = ClientDao::insert($client);
      //$msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: login.php");
      var_dump($_POST);
    } catch (Exception $e) {
     //echo 'Exceção capturadae: ',  $e->getMessage(), "\n";
     //$msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
  header("Location: inscrever.php");
  
    var_dump($_POST);
    } 
    break;
    }

?>