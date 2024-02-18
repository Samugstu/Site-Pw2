<?php
    require_once (__DIR__ . '/../model/Conexao.php');
    
    class ClientDao{
        public static function insert($client){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbclient (nomeClient,sobrenomeClient, emailClient, passwordClient,tokenClient) VALUES (?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $client->getNome());
            $stmt->bindValue(2, $client->getSobrenome());
            $stmt->bindValue(3, $client->getEmail());
            $stmt->bindValue(4, $client->getPassword());
            $stmt->bindValue(5, $client->getToken());
            $stmt->execute();
        }

    
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbclient WHERE emailclient = ? and passwordClient = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }


         public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbClient";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbClient WHERE idClient = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbClient WHERE idClient = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $Client){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbClient SET 
            nomeClient = ?, 
            sobrenomeClient = ?, 
            emailClient = ?, 
            passwordClient = ?,
            imagemClient = ?, 
            tokenClient = ? 
            WHERE idClient = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $Client->getNome());
            $stmt->bindValue(2, $Client->getSobrenome());
            $stmt->bindValue(3, $Client->getEmail());
            $stmt->bindValue(4, $Client->getPassword());
            $stmt->bindValue(5, $Client->getImagem());
            $stmt->bindValue(6, $Client->getToken());
            $stmt->bindValue(7, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }


    }
?>