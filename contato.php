<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php 
  require_once 'partials/header.php';
  ?>

  <main class="site-main">
    <h1 class="secao-titulo">Contato</h1>
    <p>O mesmo formulário pode existir na página inicial. Aqui é uma página dedicada (estática).</p>

    <form class="formulario" action="#" method="get">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required>

      <label for="telefone">Telefone</label>
      <input type="text" id="telefone" name="telefone">

      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" required></textarea>

      <button type="submit" class="btn">Enviar</button>
    </form>
  </main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
