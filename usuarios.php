<?php
    include "incs/valida-sessao.php";   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilo.css">
      <title>Usuários</title>
      <!-- Navbar -->
      <?php
        include 'reutilizado\navbar.php'
      ?>
  </head>
  <body  class="d-flex flex-column min-vh-100" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/fundo.jpg');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;">

    <!-- Conteúdo Principal -->
    <main class="container text-center my-5 text-white">
      <h2 class="display-4">Adicione seus amigos!</h2>
      <p class="lead">Busque por outros usuários cadastrados.</p>
      <form action="" enctype="multipart/form-data" class="w-50 mx-auto text-start row">
        <div class="mb-3 col-10">
          <label class="form-label">Nome do usuário</label>
          <input type="text" class="form-control " name="nome" placeholder="Nome">
        </div>
        <div class="mb-3 col-2">
          <button type="submit" class="botao-efeito">Pesquisar</button>
        <div>
        <div class="row">
          <?php
            require_once "src/UsuarioDAO.php";

            if (!isset($_GET["nome"]))
            {
              $_GET["nome"] = "";
              $usuarios = [];
            }
            else
            {
              $usuarios = UsuarioDAO::buscarUsuarioNome($_GET["nome"], $_SESSION["idUsuario"]);
            }


            foreach ($usuarios as $usuario)
            {
          ?>
            <p class="my-2"><?=$usuario['nome']?>
            <div class="col-4">
              <a href="seguir.php?idSeguido=<?=$usuario['idUsuario']?>" class="botao-adicionar">Adicionar</a></p>      
            </div>
          <?php
            }            
          ?>
        </div>
      </form> 
    </main>

    <!-- Footer -->
    <?php
      include 'reutilizado\footer.php';
    ?>

  </body>
</html>