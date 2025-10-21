<?php
    include "incs/valida-sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Visualização de Perfil</title>
    <!-- Navbar -->
      <?php
        include 'reutilizado\navbar.php'
      ?>
</head>
<body>

    <main class="container text-center my-5">
        <h2 class="display-4 my-5">Perfil de Usuário.</h2>

        <?php
            require_once "src/UsuarioDAO.php";
            if(isset($_GET["idUsuario"]))
            {
                $usuario = UsuarioDAO::buscarUsuarioId($_GET[$idUsuario]);
        ?>

        <p class="fs-3">Nome: <?=$usuario["nome"]?></p>
        <p class="fs-3">Email: <?=$usuario["email"]?></p>
        <p class="fs-3">Foto: <?=$usuario["foto"]?></p>

    <form action="cadastra-usuario.php" method="post" enctype="multipart/form-data" class="w-50 mx-auto text-start row"></form>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
    </form>

    <!-- Footer -->
    <?php
            }
            else
            ?>
                <h1>Perfil não Selecionado</h1>
        <?php
        include 'reutilizado\footer.php';
    ?>
</body>
</html>