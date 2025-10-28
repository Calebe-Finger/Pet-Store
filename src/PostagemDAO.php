<?php
    require_once "ConexaoBD.php";
    require_once "Util.php";
    class PostagemDAO {    

        // Cadastrar nova postagem
        public static function cadastrar($dados, $idUsuario) {
            $texto = $dados['texto'];
            $foto = Util::salvarFoto();
            $publico = $dados['publico'];
            $criado_em = date('Y-m-d H:i:s');

            $conexao = ConexaoBD::conectar();
            $sql = "INSERT INTO postagens (idUsuario, texto, foto, publico, criado_em) 
                    VALUES (?,?,?,?,?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(1, $idUsuario);
            $stmt->bindParam(2, $texto);
            $stmt->bindParam(3, $foto);
            $stmt->bindParam(4, $publico);
            $stmt->bindParam(5, $criado_em);
            $stmt->execute();
            return $conexao->lastInsertId();
        }

        public static function listarTimeline($idUsuario) {
            $conexao = ConexaoBD::conectar();
            $sql = "SELECT p.*, u.nome, u.foto AS foto_usuario
                    FROM postagens p
                    JOIN usuarios u ON p.idUsuario = u.idUsuario
                    WHERE p.idUsuario = ?
                    OR (p.idUsuario IN (
                            SELECT s.idSeguido FROM seguidos s WHERE s.idUsuario = ?
                    ))
                    ORDER BY p.criado_em DESC";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(1, $idUsuario);
            $stmt->bindParam(2, $idUsuario);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // Buscar postagens de um usuário
        // public static function listarPorUsuario($idUsuario) {
        //     $conexao = ConexaoBD::conectar();
        //     $sql = "SELECT * FROM postagens WHERE idUsuario = :idUsuario ORDER BY criado_em DESC";
        //     $stmt = $conexao->prepare($sql);
        //     $stmt->execute([':idUsuario' => $idUsuario]);
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // }

        // // Buscar todas postagens públicas
        // public static function listarPublicas() {
        //     $conexao = ConexaoBD::conectar();
        //     $sql = "SELECT p.*, u.nome, u.foto as foto_usuario 
        //             FROM postagens p 
        //             JOIN usuarios u ON p.idUsuario = u.idUsuario
        //             WHERE p.publico = 1 
        //             ORDER BY p.criado_em DESC";
        //     $stmt = $conexao->query($sql);
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // }
    }
?>