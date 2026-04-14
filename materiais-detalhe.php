<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhe do produto - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

  <main class="site-main">
    <p><a href="produtos.php">Voltar aos produtos</a></p>
    <article class="detalhe-produto">
      <img src="IMG/Cimento.png" alt="">
      <div class="detalhe-produto__body">
        <h1 class="secao-titulo" style="margin-top:0">Nome do produto (exemplo)</h1>
        <p><strong>Preço:</strong> R$ 0,00</p>
        <p><strong>Categoria:</strong> Informática</p>
        <p>Esta é uma página de detalhe única usada como modelo. No projeto PHP, o mesmo arquivo receberá o id pela URL e mostrará os dados do array.</p>
      </div>
    </article>
  </main>

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
