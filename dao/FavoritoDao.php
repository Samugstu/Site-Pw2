<?php
require_once (__DIR__ . '/../model/Conexao.php');

class FavoritoDao
{
    public static function insert($favoritos)
    {
        $conexao = Conexao::conectar();
        $query = "INSERT INTO tbFavorito (idJoga, idClient) VALUES (?,?)";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $favoritos->getIdJoga());
        $stmt->bindValue(2, $favoritos->getIdClient());
        $stmt->execute();
    }

    public static function selectAll()
    {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfavorito";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function selectById($id)
    {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfavorito WHERE idFavorito = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id)
    {
        $conexao = Conexao::conectar();
        $query = "DELETE FROM tbfavorito WHERE idFavorito = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
    }

    public static function update($id, $favoritos)
    {
        $conexao = Conexao::conectar();
        $query = "UPDATE tbfavorito SET 
              idJoga = ?, 
              idClient = ?
              WHERE idFavorito = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $favoritos->getIdJoga());
        $stmt->bindValue(2, $favoritos->getIdClient());
        $stmt->bindValue(3, $id);
        return $stmt->execute();
    }

    public static function selectAllByUserId($userId)
    {
        $conexao = Conexao::conectar();
        $query = "SELECT * FROM tbfavorito WHERE idClient = ?";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
