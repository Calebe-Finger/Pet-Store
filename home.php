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
      <link   href="css/estilo.css" rel="stylesheet">
      <title>Home Page</title>
      <!-- Navbar -->
      <?php
        include 'reutilizado\navbar.php'
      ?>
  </head>
  <body>

    <h1 class="display-4">Seja bem-vindo(a), <?=$_SESSION["nome"]?>!</h1>


<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cachorro.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/gato.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/fundo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
    

    
      <form action="perfil.php" method="post" enctype="multipart/form-data" class="w-50 mx-auto text-start row">
        <button type="submit" class="btn btn-primary btn-lg my-4">Visualizar Perfil</button>
    </form>
    <form action="usuarios.php"  enctype="multipart/form-data" class="w-50 mx-auto text-start row">
        <button type="submit" class="btn btn-primary btn-lg my-4">Visualizar Usuários</button>
    </form>

    <?php
      include 'reutilizado\footer.php';
    ?>

  </body>
</html>