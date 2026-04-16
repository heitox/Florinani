<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Detalhe do produto - <?php print $nomeLoja; ?></title>

  <title>Detalhe do produto - <?php print $nomeLoja; ?></title>

  <title>Detalhe do Material - <?php print $nomeLoja; ?></title>

  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>


  <main class="site-main">
    <?php foreach ($_SESSION['materiais'] as $material) : ?>
    <p><a href="produtos.php">Voltar aos produtos</a></p>
    <article class="detalhe-produto">
      <img src="IMG/Cimento-florinani.png" alt="">
      <div class="detalhe-produto__body">
        <h1 class="secao-titulo" style="margin-top:0"><?php echo $material['nome']; ?></h1>
        <p><strong>Preço:</strong> R$ <?php echo $material['preco']; ?></p>
        <p><strong>Categoria:</strong> <?php echo $material['categoria']; ?></p>
        <p><?php echo $material['descricao']; ?></p>
      </div>
    </article>
    <?php endforeach; ?>

  </main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
