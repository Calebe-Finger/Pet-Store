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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

      <link   href="css/estilo.css" rel="stylesheet">
      <title>Página Inicial</title>
      <!-- Navbar -->
        <?php
            include 'reutilizado\navbar.php'
        ?>
  </head>
  <body class="fundo-home d-flex flex-column min-vh-100" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/Fundo Home.jpg');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;">>
    <div></div>

    <h1 class="display-5">Seja bem-vindo(a), <?=$_SESSION["nome"]?>!</h1>


    <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <section class="banner-section">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img src="img\puggie.jpg" class="d-block w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\gato.jpg" class="d-block w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img\kiwi.jpg" class="d-block w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <a class="botao-vizu btn mt-4" href="perfil.php">Vizualizar Pefil</a><br>

    <a class="botao-vizu btn mb-4" href="usuarios.php">Vizualizar Usuários</a>

    <?php
      include 'reutilizado\footer.php';
    ?>

  </body>
</html>