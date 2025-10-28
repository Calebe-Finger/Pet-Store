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
      <title>Postagens</title>
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
      <h2 class="display-4">Veja, faça, experimente, crie!</h2>
      <p class="lead">Visualize postagens de pessoas do mundo todo, ou crie suas próprias e compartilhe com seus melhores amigos.</p>
      <div class="w-50 mx-auto text-start">
        <div class="row">
          <a href="nova-postagem.php" class="botao-cadastrar btn my-4">+ Cadastrar Nova Postagem</a>
        </div>
        <label class="form-label mt-2">Pesquise o nome do perfil que fez a postagem</label>
        <div class="row">
          <div class="col-10 mt-2">
            <input type="text" class="form-control" name="nome" placeholder="Nome do Perfil">
          </div> 
          <div class="col-2 mt-2 mb-4"> 
            <button type="submit" class="botao-adicionar btn">Pesquisar</button>
          </div>
        </div>
        
            <?php
            require_once "src/PostagemDAO.php";

            $postagens = PostagemDAO::listarTimeline($_SESSION["idUsuario"]);

            foreach ($postagens as $postagem)
            {
          ?>  
              <div class="row w-100 container my-3 py-2 border rounded p-1 d-flex align-items-center" style="background-color: rgba(255, 255, 255, 0.12)">
                <div class="col-9">
                  <a><?=$postagem['nome']?></a>
                  <a><?=$postagem['texto']?></a>
                  <a><?=$postagem['foto']?></a>
                </div>
                <div class="col-3">
                  <a class="botao-curtir btn">Curtir</a><br>
                </div>
              </div>  
          <?php
            }            
          ?>
      </div> 
    </main>

    <!-- Footer -->
    <?php
      include 'reutilizado\footer.php';
    ?>

  </body>
</html>