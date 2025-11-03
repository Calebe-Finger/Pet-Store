<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
          
      <link rel="stylesheet" href="css/estilo.css">
      <title>Login</title>
      <!-- Navbar -->
      <?php
        include 'reutilizado\navbar.php'
      ?>
  </head>

  <body class="d-flex flex-column min-vh-100" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/Fundo Login.jpg');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;">
  
    <h1 class="display-5">Login</h1>   
      <form action="efetua-login.php" method="post" class="w-50 container mt-3 border rounded p-3 " style="background-color: rgba(255, 255, 255, 0.12)">
        
        <?php
          session_start();
          if (isset($_SESSION['msg'])) {
              echo '<div class="alert alert-danger" role="alert">';
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
              echo '</div>';
          }else{
              echo '<div class="alert alert-info" role="alert">';
              echo 'Informe seu email e senha para entrar.';
              echo '</div>';
          }
        ?>   
            
        <div class="mb-3">
            <label class="form-label text-white ">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label text-white">Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <button type="submit" class="botaologin">Entrar</button>

        <div class="text-end mt-2 ">
            <a class="link" href="form-cadastra-usuario.php">Ainda não sou usuário</a>
        </div>
      </form>

      <!-- Footer -->
      <?php
        include 'reutilizado\footer.php';
      ?>
  </body>
</html>