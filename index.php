<?php
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início - <?php print $nomeLoja; ?></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  require_once 'partials/header.php';
  ?>

  <main class="site-main">
    <section class="hero" aria-labelledby="titulo-hero">
      <div class="imagem">
        <img src="IMG/Florinani2.png" alt="">
      </div>
      <h1 id="titulo-hero">Bem-vindo à ConstruTech</h1>
      <p><i>Mais que materiais, entregamos confiança para sua obra.</i></p>
    </section>

    <section aria-labelledby="titulo-mais-vendidos">
      <h2 id="titulo-mais-vendidos" class="secao-titulo">Materiais mais Vendidos</h2>
      <div class="cards-grid">
        <article class="card">
          <img class="card__img" src="IMG/Cimento-florinani.png" alt="">
          <div class="card__body">
            <?php
            foreach ($materiais_base as $materiais) {
              if ($materiais['nome'] == "Cimento") {
              print "<h3>{$materiais['nome']}</h3>";
              print "<p>{$materiais['descricao_curta']}";
              print "<p class='card__preco'>R$ " . $materiais['preco'] . "</p>";
                }
              }
              ?>
          </div>
        </article>
        <article class="card">

          <img class="card__img" src="IMG/Martelo-florinani.png" alt="">
          <div class="card__body">
             <?php
            foreach ($materiais_base as $materiais) {
              if ($materiais['nome'] == "Martelo") {
              print "<h3>{$materiais['nome']}</h3>";
              print "<p>{$materiais['descricao_curta']}";
              print "<p class='card__preco'>R$ " . $materiais['preco'] . "</p>";
                }
              }
              ?>
        </article>
        <article class="card">
          <img class="card__img" src="IMG/Piso-florinani.png" alt="">
          <div class="card__body">
             <?php
            foreach ($materiais_base as $materiais) {
              if ($materiais['nome'] == "Piso") {
              print "<h3>{$materiais['nome']}</h3>";
              print "<p>{$materiais['descricao_curta']}";
              print "<p class='card__preco'>R$ " . $materiais['preco'] . "</p>";
                }
              }
              ?>
    

  </main>


  <?php 
  require_once 'partials/footer.php';
  ?>
</body>
</html>
