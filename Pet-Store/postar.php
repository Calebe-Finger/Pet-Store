<?php
    include("incs/valida-sessao.php");
    require_once "src/PostagemDAO.php";
    if (isset($_GET["idPostagem"]))
    {
        PostagemDAO::cadastrar($_SESSION["dados"], $_GET["idUsuario"]);
    }
    header("location:postagens.php");
?>