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
            include("reutilizado/navbar.php");
        ?>

        <div class="container my-5">
            <div class="card shadow p-4">
                <h3 class="mb-4">Nova Postagem</h3>
                <form action="processa-postagem.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Texto</label>
                        <textarea name="texto" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto (opcional)</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Visibilidade</label>
                        <select name="publico" class="form-select">
                            <option value="público">Público</option>
                            <option value="privado">Privado</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Postar</button>
                </form>
            </div>
        </div>
    <?php
        include("reutilizado/footer.php");
    ?>