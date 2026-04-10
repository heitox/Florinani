<?php
include 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
  <title>Detalhe do produto - <?php print $nomeLoja; ?></title>
=======
  <title>Detalhe do Material - <?php print $nomeLoja; ?></title>
>>>>>>> 16ef7156b478c3b84d349357c0a64a09e66a82ac
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

<<<<<<< HEAD
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
=======
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
>>>>>>> 16ef7156b478c3b84d349357c0a64a09e66a82ac

  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
