 <?php
    require_once (__DIR__ . '../../model/Conexao.php');
    
    class ComentarioDao{
        public static function insert($comentario){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO comentarios (comentarios,dia,horario,idClient) VALUES (?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $comentario->getComentario());
            $stmt->bindValue(2, $comentario->getDia());
            $stmt->bindValue(3, $comentario->getHorario());
            $stmt->bindValue(4, $comentario->getIdClient());
            $stmt->execute();
        }
       public static function selectComentario(){
        $conexao = Conexao::conectar();
        $query = "
        SELECT c.*, cl.nomeClient as nome, cl.imagemClient as imagem
        FROM comentarios c
        INNER JOIN tbclient cl ON c.idClient = cl.idClient
        ORDER BY c.dia, c.horario DESC
    ";
         $stmt = $conexao->prepare($query);
         $stmt -> execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    public static function delete($idClient,$idComentario) {
        $conexao = Conexao::conectar();
            $query = "DELETE FROM comentarios WHERE idClient = ? AND idComentario = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idClient);
            $stmt->bindValue(2, $idComentario);
            $stmt->execute();
            
    }
    }
   




    
?>




    
?>