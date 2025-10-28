<?php
    require_once "ConexaoBD.php";

    class SeguidoDAO
    {
        public static function seguir($idUsuario, $idSeguido)
        {
            $conexao = ConexaoBD::conectar();

            $sql = "insert into seguidos (idUsuario, idSeguido) values (?,?)";
            $stmt = $conexao->prepare($sql);

            $stmt -> bindParam(1, $idUsuario);
            $stmt -> bindParam(2, $idSeguido);

            $stmt -> execute();
        }
    }
?>