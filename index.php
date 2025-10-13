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
  <body >

    <!-- Conteúdo Principal -->
    <main class="container text-center my-5" >
      <h1 class="display-4 ">Bem-vindo!</h1>
      <p class="lead">Nosso objetivo é trazer mais alegria, diversão e segurança para o seu pet, por meio de especialistas 24h </p>
      
      <a href="login.php" class="boton btn-lg">Entrar</a>
      <a href="form-cadastra-usuario.html" class="boton btn-lg">Cadastre-se</a>
    </main>

      <!-- Foooter -->
    <?php
      include 'reutilizado\footer.php';
    ?>
  </body>
</html>