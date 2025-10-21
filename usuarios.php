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
      <form action="" enctype="multipart/form-data" class="w-50 mx-auto text-start">
        <label class="form-label">Nome do usuário</label>
        <div class="row">
          <div class="col-10 mt-2">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
          </div> 
          <div class="col-2 mt-2 mb-4"> 
            <button type="submit" class="botao-adicionar btn">Pesquisar</button>
          </div>
        </div>
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
              <div class="row w-100 container my-3 py-2 border rounded p-1 d-flex align-items-center" style="background-color: rgba(255, 255, 255, 0.12)">
                <div class="col-10">
                  <a><?=$usuario['nome']?></a>
                </div>
                <div class="col-2">
                  <a class="botao-adicionar btn" href="seguir.php?idSeguido=<?=$usuario['idUsuario']?>">Adicionar</a><br>
                </div>
              </div>  
          <?php
            }            
          ?>
      </form> 
    </main>

    <!-- Footer -->
    <?php
      include 'reutilizado\footer.php';
    ?>

  </body>
</html>