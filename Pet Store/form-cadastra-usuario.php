<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Inicial</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
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
    <main class="container text-center text-white ">
      <h2 class="display-4">Bem-vindo!</h2>
      <p class="lead">Cadastre-se em nosso site.</p>
      <form action="cadastra-usuario.php" method="post" enctype="multipart/form-data" class="w-50 mx-auto text-start row">
        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" name="nome" placeholder="Nome" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Senha</label>
          <input type="password" class="form-control" name="senha" placeholder="Senha" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Imagem</label>
          <input type="file" class="form-control" name="imagem">
        </div>

        <button type="submit" class="boton btn-lg my-4">Cadastrar</button>
      </form>
    </main>

      <!-- Footer -->
      <?php
        include 'reutilizado\footer.php';
      ?>
  </body>
</html>
