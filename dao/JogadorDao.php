<?php
require_once (__DIR__ . '/../model/Conexao.php');    
    class JogadorDao{
        public static function insert($userJ){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO jogador (nomeJoga, nascJoga, posicaoJoga, nacionalidadeJoga, numeroJoga, imagemJoga,posicaoD) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $userJ->getNomeJoga());
            $stmt->bindValue(2, $userJ->getNascJoga());
            $stmt->bindValue(3, $userJ->getPosicaoJoga());
            $stmt->bindValue(4, $userJ->getNacionalidadeJoga());
            $stmt->bindValue(5, $userJ->getNumeroJoga());
            $stmt->bindValue(6, $userJ->getImagem());
            $stmt->bindValue(7, $userJ->getPosicaoDJoga());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM jogador";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM jogador WHERE idJoga = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM jogador WHERE idJoga = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $userJ){
            $conexao = Conexao::conectar();
            $query = "UPDATE jogador SET 
            nomeJoga = ?, 
            nascJoga = ?,
            posicaoJoga  = ?,
            nacionalidadeJoga  = ?,
            numeroJoga  = ?,
            imagemJoga = ?,
            posicaoD = ?
            WHERE idJoga = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $userJ->getNomeJoga());
            $stmt->bindValue(2, $userJ->getNascJoga());
            $stmt->bindValue(3, $userJ->getPosicaoJoga());
            $stmt->bindValue(4, $userJ->getNacionalidadeJoga());
            $stmt->bindValue(5, $userJ->getNumeroJoga());
            $stmt->bindValue(6, $userJ->getImagem());
            $stmt->bindValue(7, $userJ->getPosicaoDJoga());
            $stmt->bindValue(8, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM user WHERE emailUser = ? and passwordUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function posicao($posicao) {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM jogador WHERE posicaoJoga = ? ORDER BY 
                      CASE 
                        WHEN posicaoD = 'CA' THEN 1
                        WHEN posicaoD = 'SA' THEN 2
                        WHEN posicaoD = 'PTE' THEN 3
                        WHEN posicaoD = 'PTD' THEN 4
                        WHEN posicaoD = 'MAT' THEN 5
                        WHEN posicaoD = 'MLE' THEN 6
                        WHEN posicaoD = 'MLD' THEN 7
                        WHEN posicaoD = 'MLG' THEN 8
                        WHEN posicaoD = 'VOL' THEN 9
                        WHEN posicaoD = 'ZAG' THEN 10
                        WHEN posicaoD = 'LD' THEN 11
                        WHEN posicaoD = 'LE' THEN 12
                        WHEN posicaoD = 'GOL' THEN 13
                        ELSE 99
                      END,
                      numeroJoga"; 
                      
            
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $posicao);
            $stmt->execute();
            
            return $stmt->fetchAll();
        }
        
        
        }
    
?>