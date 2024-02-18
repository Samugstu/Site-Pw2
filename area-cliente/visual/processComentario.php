<?php
session_start();
require_once __DIR__.'/../../dao/ComentarioDao.php';
require_once __DIR__.'/../../model/Comentarios.php';

$comentario = new Comentario();

switch ($_POST["acao"]) {
    case 'DELETE':
        try {
            ComentarioDao::delete($_POST["idClient"],$_POST["idComentario"]);
            header("Location: review.php");
           break;
        } catch (Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
        break;

    case 'SALVAR':
        
        $comentario->setComentario($_POST["comentario"]);
        $comentario->setDia($_POST['dia']);
        $comentario->setHorario($_POST['hora']);
        $comentario->setIdClient($_POST["idClient"]);
        try {
            ComentarioDao::insert($comentario);
            header("Location: review.php");
           break;
        } catch (Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
        break;
}
?>