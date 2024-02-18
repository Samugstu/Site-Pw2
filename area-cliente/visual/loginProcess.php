<?php
require_once (__DIR__.'/../../dao/ClientDao.php');

$client = ClientDao::checkCredentials($_POST['email'], $_POST['senha']);
var_dump($client); // Adicione esta linha


if($client){
    $authClient = [
        'id' => $client['idClient'],
        'nome' => $client['nomeClient'],
        'sobrenome' => $client['sobrenomeClient'],
        'email' => $client['emailClient'],
        'senha' => $client['passwordClient'],
        'img' => $client['imagemClient'],

    ];
        session_start();
        $_SESSION["authClient"] = $authClient;
        header("Location: home.php");

}else{
        header("Location: login.php");  
}



?>