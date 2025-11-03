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
  <body  class="d-flex flex-column min-vh-100" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('img/Fundo Postagens.jpg');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;">

    <!-- Conteúdo Principal -->
    <main class="container text-center my-5 text-white">
      <h2 class="display-5">Veja, faça, experimente, crie!</h2>
      <p class="lead">Visualize postagens de pessoas do mundo todo, ou crie suas próprias e compartilhe com seus melhores amigos.</p>
      <a href="nova-postagem.php" class="botao-cadastrar btn my-4 w-50">+ Nova Postagem</a>
      <div class="w-100 mx-auto text-start">
        <div class="row d-flex justify-content-center">
          <label class="form-label mt-2">Pesquise o nome do perfil que fez a postagem</label>
          <div class="col-8 mt-2"a>
            <input type="text" class="form-control" name="nome" placeholder="Nome do Perfil">
          </div> 
          <div class="col-2 mt-2 mb-3"> 
            <button type="submit" class="botao-adicionar btn">Pesquisar</button>
          </div>
        </div>
        
            <?php
            require_once "src/PostagemDAO.php";

            $postagens = PostagemDAO::listarTimeline($_SESSION["idUsuario"]);

            foreach ($postagens as $postagem)
            {
          ?>  
              <div class="row w-100 container my-3 py-2 border rounded p-1 d-flex" style="background-color: rgba(138, 138, 138, 0.9)">
                <div class="row mb-3">
                  <img class="foto-perfil col-2" src="uploads/<?=$postagem['foto']?>"></img>
                  <h1 class="col-10"><?=$postagem['nome']?></h1>
                  <a class="publico"><?=$postagem['publico']?></a>
                </div>
                <div class="col-6">
                  <a><?=$postagem['texto']?></a>
                </div>
                <div class="col-6">
                  <img class="imagem-postagem" src="uploads/<?=$postagem['foto']?>"></img><br>
                </div>
                <div class="col-2">
                  <a class="nav-link active text-white mx-1"><i class="bi bi-suit-heart"></i></a></i><br>
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