<?php
    include("incs/valida-sessao.php");
    require_once "src/SeguidoDAO.php";
    if (isset($_GET["idSeguido"]))
    {
        SeguidoDAO::seguir($_SESSION["idUsuario"], $_GET["idSeguido"]);
    }
    header("location:usuarios.php");
?>