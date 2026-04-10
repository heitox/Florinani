<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhe do Material - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

 <main class="site-main">
  <p><a href="materiais.php">Voltar aos Materiais</a></p>

  <?php if ($materiais): ?>
    <article class="detalhe-materiais__body">

      <img src="<?php $materiais['imagem'] ?>" alt="">

      <div class="detalhe-materiais__info">
        <h1 class="secao-titulo" style="margin-top:0">
          <?php $materiais['nome'] ?>
        </h1>

          <p>
          <strong>Id:</strong> 
         <?php echo '$materiais['id']' ?>
        </p>

        <p>
          <strong>Preço:</strong> 
          R$ <?php number_format($materiais['preco'], 2, ',', '.') ?>
        </p>

        <p>
          <strong>Categoria:</strong> 
          <?php $categorias[$materiais['categoria']] ?>
        </p>

        <p><?php $materiais['descricao'] ?></p>
      </div>

    </article>
  <?php  else :?>
    <p>Material não encontrado.</p>
  <?php endif;  ?>
</main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
