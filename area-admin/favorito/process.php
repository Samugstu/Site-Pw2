<?php
require_once '../../dao/FavoritoDao.php';
require_once '../../model/Favorito.php';

$favoritos = new Favorito();

var_dump($_POST); // Adiciona esta linha para verificar as informações recebidas via POST

switch ($_POST["acao"]) {
    case 'DELETE':
        try {
            $idFavorito = $_POST['idFavorito'];
            FavoritoDao::delete($idFavorito);
            header("Location: ../../area-cliente/visual/equipe.php");
            exit();
        } catch (Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
        break;

    case 'SALVAR':
        // pode validar as informações
        $favoritos->setIdJoga($_POST['idJoga']);
        $favoritos->setIdClient($_POST['idClient']);

        try {
            FavoritoDao::insert($favoritos);
            header("Location: ../../area-cliente/visual/equipe.php");
            exit();
        } catch (Exception $e) {
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
        break;
}
?>
