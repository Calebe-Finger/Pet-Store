<?php
require_once "ConexaoBD.php";
require_once "Util.php";

class UsuarioDAO{

    public static function cadastrarUsuario($dados){
        $conexao = ConexaoBD::conectar();
        
        $sql = "insert into usuarios (nome, email, senha, foto) values (?,?,?,?)";
        $stmt = $conexao->prepare($sql);
        
        $stmt->bindParam(1, $dados['nome']);
        $stmt->bindParam(2, $dados['email']);
        $senhaCriptografada = md5($dados['senha']);
        $stmt->bindParam(3, $senhaCriptografada);
        $foto = Util::SalvarFoto();
        $stmt->bindParam(4, $foto);

        $stmt->execute();
    }

    public static function validarUsuario($dados){        
        
        $senhaCriptografada = md5($dados['senha']);
        $sql = "select * from usuarios where email=? AND senha=?";

        $conexao = ConexaoBD::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $dados['email']);
        $stmt->bindParam(2, $senhaCriptografada);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0)
        {
            return $usuario;
        }
        else
        {
            return false;
        }
    }

    public static function listarUsuarios($idUsuario)
    {                
        $sql = "select * from usuarios where idUsuario!=?";

        $conexao = ConexaoBD::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt -> bindParam(1, $idUsuario);
        $stmt->execute();
                
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarUsuarioNome($nome, $idUsuario)
    {                
        $sql = "select * from usuarios where nome like ? and idUsuario!=?";

        $conexao = ConexaoBD::conectar();
        $stmt = $conexao->prepare($sql);
        $nome = "%".$nome."%";
        $stmt -> bindParam(1, $nome);
        $stmt -> bindParam(2, $idUsuario);
        $stmt->execute();
                
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        public static function buscarUsuarioId($idUsuario)
    {                
        $sql = "select * from usuarios where idUsuario=?";

        $conexao = ConexaoBD::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt -> bindParam(1, $idUsuario);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>